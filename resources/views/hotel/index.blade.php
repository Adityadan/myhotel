@extends('layouts.main')

@section('content')
    <h3 class="page-title">
        Hotel
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="/">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Hotel</a>
            </li>
        </ul>
        <div class="page-toolbar">
            <div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height btn-primary" data-container="body"
                data-placement="bottom" data-original-title="Change dashboard date range">
                <i class="icon-calendar"></i>&nbsp; <span class="thin uppercase visible-lg-inline-block"></span>&nbsp;
                <i class="fa fa-angle-down"></i>
            </div>
        </div>

        <!-- END PAGE HEADER-->
    </div>

    <div class="container">

        <a class="btn btn-primary" data-toggle="modal" href="#disclaimer">Disclaimer</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Foto</th>
                    <td>Room</td>
                    <td>Detail</td>
                </tr>
            </thead>
            <tbody>

                @foreach ($rs as $r)
                    <tr>
                        <td>
                            <a href="/hotels/{{ $r->id }}">
                                {{ $r->name }}
                            </a>
                        </td>
                        <td>{{ $r->address }}</td>
                        <td>{{ $r->city }}</td>
                        <td>
                            <a href="#detail_{{ $r->id }}" data-toggle="modal">
                                <img height="50px" src="{{ asset('images/' . $r->image) }}" />
                            </a>
                            <div class="modal fade" id="detail_{{ $r->id }}" tabindex="-1" role="basic"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">{{ $r->name }}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/' . $r->image) }}" />
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </td>
                        <td>
                            @foreach ($r->products as $p)
                                - {{ $p->name }} ({{ $p->price }})<br>
                            @endforeach
                        </td>
                        <td>
                            <a class='btn btn-xs btn-info' data-toggle='modal'
                                data-target='#myModal'onclick='showProducts({{ $r->id }})'>Detail</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        <br>

        <div class="row">
            @foreach ($rs as $r)
                <div class="col-sm-3"
                    style="border:1px solid #999;padding:10px;margin:10px;text-align:center;
            border-radius:10px">
                    <img height="100px" src="{{ asset('images/' . $r->image) }}" />
                    <br>{{ $r->name }}
                    <br>{{ $r->address }}, {{ $r->city }}
                </div>
            @endforeach
        </div>

    </div>




    <div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">DISCLAIMER</h4>
                </div>
                <div class="modal-body">
                    Pictures shown are for illustration purpose only. Actual product may vary due to product
                    enhancement.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog modal-wide">
            <div class="modal-content" id="showproducts">
                <!--loading animated gif can put here-->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function showProducts(hotel_id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('hotel.showProducts') }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'hotel_id': hotel_id
                },
                success: function(data) {
                    $('#showproducts').html(data.msg);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    </script>
@endsection

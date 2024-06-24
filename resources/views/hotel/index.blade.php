@extends('layouts.main')

@section('content')
    <h3 class="page-title">Hotel</h3>

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
                <i class="icon-calendar"></i>
                <span class="thin uppercase visible-lg-inline-block"></span>
                <i class="fa fa-angle-down"></i>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <a class="btn btn-primary mb-3" data-toggle="modal" href="#disclaimer">Disclaimer</a>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Upload Images</th>
                    <th>Foto</th>
                    <th>Room</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rs as $r)
                    <tr>
                        <td>
                            <a href="/hotels/{{ $r->id }}">{{ $r->name }}</a>
                        </td>
                        <td>{{ $r->address }}</td>
                        <td>{{ $r->city }}</td>
                        <td>
                            <img height="100px" src="{{ asset('/logo/' . $r->id . '.jpg') }}" class="img-thumbnail" />
                            <br>
                            <a href="{{ url('hotel/uploadLogo/' . $r->id) }}" class="btn btn-xs btn-default mt-2">Upload</a>
                        </td>
                        <td>
                            <a href="#detail_{{ $r->id }}" data-toggle="modal">
                                <img height="50px" src="{{ asset('images/' . $r->image) }}" class="img-thumbnail" />
                            </a>
                            <div class="modal fade" id="detail_{{ $r->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">{{ $r->name }}</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/' . $r->image) }}" class="img-fluid" />
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('hotel/uploadPhoto/' . $r->id) }}"
                                class="btn btn-xs btn-default mt-2">Upload</a>
                        </td>
                        <td>
                            @foreach ($r->products as $p)
                                <div>- {{ $p->name }} ({{ $p->price }})</div>
                            @endforeach
                        </td>
                        <td>
                            <a href="#" class="btn btn-xs btn-info" data-toggle="modal" data-target="#myModal"
                                onclick="showProducts({{ $r->id }})">Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row mt-4">
            @foreach ($rs as $r)
                <div class="col-sm-3 mb-3 text-center" style="border: 1px solid #999; padding: 10px; border-radius: 10px;">
                    <img height="100px" src="{{ asset('images/' . $r->image) }}" class="img-thumbnail" />
                    <br>{{ $r->name }}
                    <br>{{ $r->address }}, {{ $r->city }}
                </div>
            @endforeach
        </div>
    </div>

    <div class="modal fade" id="disclaimer" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">DISCLAIMER</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="showproducts">
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

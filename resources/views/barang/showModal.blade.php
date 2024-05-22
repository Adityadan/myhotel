<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Transaction ID #{{ $data->id }} - {{ $data->transaction_date }}</h4>
</div>
<div class="modal-body">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @foreach ($data as $p)
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" alt="Thumbnail [100%x225]“ style="height: 225px; width: 100%; display:
                            block;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->name }}</h5>
                            <p class="card-text">Name : {{ $p->hotel->name }}</p>
                            <p class="card-text">Price : {{ $p->price }}</p>
                            <p class="card-text">Available Room : {{ $p->available_room }}</p>
                            <p class="card-text">Id Hotel : {{ $p->hotel_id }}</p>
                            <p class="card-text">Image : {{ $p->image }}</p>
                        </div>
                    </div>

                    <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

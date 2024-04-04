@extends('layouts.main')
@section('content')
<div class="container">
  <h2>Available Room</h2>
   <table class="table">
    <thead>
      <tr>
        <th>Hotel ID</th>
        <th>Hotel Name</th>
        <th>Total Available Room(s)</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($rs as $r )
          <tr>
            <td>{{$r->id}}</td>
            <td>{{$r->name}}</td>
            <td>{{$r->room}}</td>
          </tr>

        @endforeach


    </tbody>
  </table>
</div>
@endsection

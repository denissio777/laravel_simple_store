@extends('layouts.app')
@section('content')
<div class="container">
    @foreach($data as $d)
    <div class="card text-center card border-info mb-3" style="width: 18rem; float: left; margin-right: 7%;">
        <div class="card-header"><h6 class="card-title">{{$d["Manufacturer"]}}</h6></div>
        <img class="card-img-top" src="{{$d["Image URL"]}}" alt="Card image cap">
        <div class="card-body text-info">
            <h5 class="card-title">{{$d["Description"]}}</h5>
            <p class="card-text">{{$d["Retail Price"]}}</p>
            <a href="#" class="btn btn-primary">Details</a>
        </div>
    </div>
        @endforeach
</div>
@endsection

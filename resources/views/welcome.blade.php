@extends('layouts.main')

@section('title', 'Alertas')

@section('content')
@if(auth()->user()->typeuser===1)
<p>você é um admin</p>
@endif

<div class="col-md-12" id="alert-container">
@foreach($alerts as $alert)

    <div id="card-alert" class="card col-md-8" >
    <div class="card-body">
        <h5 class="card-title">{{$alert->title}}</h5>
        <p class="card-text">{{$alert->description}}</p>
       
    </div>
    </div>
</div>


@endforeach
@endsection
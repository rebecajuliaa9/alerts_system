@extends('layouts.main')

@section('title', 'Alertas')

@section('content')

<div class="col-md-10 offset-md-1 alert-title-container">
    <h1>Meus Alertas</h1>
</div>

<div class="col-md-12" id="alert-container">
@if(is_countable($alerts) && count($alerts)>0)
    @foreach($alerts as $alert)

    <div id="card-alert" class="card col-md-8" >
        <div class="card-body">
            <h5 class="card-title">{{$alert->title}}</h5>
            <p class="card-text">{{$alert->description}}</p>
            @if(auth()->user()->typeuser===1)
            <div class="col-md-12" id="button-delete-edit">
                <a href="/alerts/edit/{{$alert->id}}" class="btn btn-warning edit-btn ">Editar</a>
                <form action="/alerts/{{$alert->id}}" method="POST">
                    @csrf
                    @method('DELETE')   
                    <button type="submit" class="btn btn-danger delete-btn ">Apagar</button>
                </form>
            </div>
            @endif
        </div>
    </div>
    @endforeach
    @else
    <p class="col-md-10 offset-md-1">Você ainda não tem alertas, <a href="/alerts/create">Criar Alerta</a></p>
    @endif
</div>



@endsection
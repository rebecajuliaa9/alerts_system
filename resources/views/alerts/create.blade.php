
@extends('layouts.main')
@section('title', 'Criar Alerta')
@section('content')

<div id="alert-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu alerta</h1>
    <div id="linha-horizontal"></div>
    <form action="/alerts" method="POST">
        @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Título">
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea class="form-control" id="description" name="description" placeholder="Descrição do alerta"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

@endsection
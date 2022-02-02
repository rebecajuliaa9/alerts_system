
@extends('layouts.main')
@section('title', 'Editar Alerta' . $alert->title)
@section('content')
<div id="alert-create-container" class="col-md-6 offset-md-3">
    <h1>Editando alerta: {{$alert->title}}</h1>
    <div id="linha-horizontal"></div>
    <form action="/alerts/update/{{$alert->id}}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Título" value="{{$alert->title}}" required>
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea class="form-control" id="description" name="description" placeholder="Descrição do alerta" required >{{$alert->description}}</textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Editar Alerta">
    </form>
</div>
@endsection
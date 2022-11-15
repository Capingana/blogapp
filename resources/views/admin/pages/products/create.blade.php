@extends("admin.layouts.app")
@section('title', 'Novo Producto')
@section("content")

<div class="container">
    @include("admin.includes.erros")
    <h3>Novo Producto</h3>
    <hr>
    <form action="{{ route("store") }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name" class="form-control" value="{{ old("name") }}">
        <label for="description">Descrição</label>
        <input type="text" name="description" class="form-control" value="{{ old("description") }}">
        <label for="photo">Foto</label>
        <input type="file" name="photo"class="form-control">
        <button type="submit" class="btn btn-success mt-3">Criar Producto</button>
    </form>
</div>
@endsection

@extends("admin.layouts.app")
@section("title","Gestão de Productos")

@section("content")
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4"><strong>Open</strong>Business</h1>
    <p class="lead">O meu producto teve um lucro de 45% nos últimos 3 dias..</p>
    <a href="{{ route("create") }}"><button class="btn btn-primary">Novo producto</button></a>
  </div>
@endsection

@if ($errors->any())
@foreach ($errors->all() as $erros)
 <div class="alert alert-danger">{{ $erros }}</div>
@endforeach
@endif

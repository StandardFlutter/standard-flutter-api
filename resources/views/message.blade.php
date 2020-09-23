@extends('layouts.app')

@section('content')
<form action="" method="POST" class="container">
    {{ csrf_field() }}

    <input type="text" name="title" class="form-control" placeholder="Título">
    <textarea name="body" class="form-control" placeholder="Mensagem"></textarea>

</form>

@endsection

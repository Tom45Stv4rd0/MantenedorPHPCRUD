@extends('layouts.app')

@section('content')
<div class="container">

<form action=" {{ url('/usuario/'.$empleado->id ) }} " method="post">
    @csrf
    {{ method_field('PATCH')}}
    @include('usuario.form',['modo'=>'Editar'])
</form>
</div>
@endsection
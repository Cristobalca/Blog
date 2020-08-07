@extends('layouts.app')

@section('content')
<div class="container">

<h2 class="text-center" >Seccion para crear memes</h2>

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach

    </ul>
</div>
@endif

<form action="{{url('/blogMemes')}}" class="form-horizontal" method="post" enctype="multipart/form-data">

{{@csrf_field()}}

@include('blogMemes.form',['modo'=>'crear'])



</div>
</form>

@endsection

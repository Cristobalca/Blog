@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{url('/blogMemes/'.$meme->id)}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{method_field('PATCH')}}

@include('blogMemes.form',['modo'=>'editar'])

</form>

</div>
@endsection

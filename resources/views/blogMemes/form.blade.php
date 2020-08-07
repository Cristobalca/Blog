{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">

{{-- Formulario --}}
{{-- if ternario --}}
{{-- {{$modo =='crear' ? 'Agregar meme': 'Editar Meme'}} --}}
<div class="d-flex justify-content-center">

<div class="conteiner col-md-6 " >

<div class="form-group">
<label for="title" class="control-label">{{'Titulo'}}</label>
<input type="text" class="form-control" name="title" id="title" value="{{isset($meme->title)?$meme->title:''}}">
</div>
<div class="form-group">
<label for="caption">{{'Comentario'}}</label>
<input type="text" class="form-control" name="caption" id="caption"  value="{{isset($meme->caption)?$meme->caption:''}}">
</div>
<div class="form-group">
<label for="Image">{{'Imagen'}}</label>
@if(isset($meme->image))

<img src="{{ asset('storage').'/'.$meme->image}}" alt="" width="200px" height="200px">
<br>

@endif

<input class="form-control" type="file" name="image" id="image"><br>
</div>

<input type="submit" class="btn btn-primary" value="{{$modo =='crear' ? 'Agregar' : 'Editar'}}"  onclick=" return conf('hollaa')" >
<a href="{{url('blogMemes')}}" class="btn btn-secondary">Volver</a>
</div>
</div>
</div>
{{-- @endsection --}}

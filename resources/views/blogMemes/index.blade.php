@extends('layouts.app')

@section('content')

<div class="container">


    @if(Session::has('Mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{
            Session::get('Mensaje')

          }}

        </div>

@endif






<a href="{{url('blogMemes/create')}}" class="btn btn-success">Agregar Meme</a>
<br>
<br>
<div class="row row-cols-3 row-cols-md-3">
@foreach ($memes as $meme)

    <div class="col mb-3">
<div class="card">
    <h4 class="card-header">{{$meme->title}}</h4>
<div class="card-body " >

    <img src="{{ asset('storage').'/'.$meme->image}}" alt="" width="230px" height="230px" class="rounded mx-auto d-block" >
</div>
<hr>
<p class="text-center text-bold" style="font-size: 1rem">{{$meme->caption}}</p>

<div class="card-footer  d-flex justify-content-left" >
<a href="{{ url('/blogMemes/'.$meme->id.'/edit')}}"class="btn btn-warning  mr-3" >
Editar
</a>
{{-- borra meme --}}

<form action="{{ url('/blogMemes/'.$meme->id)}}" method="post">
{{ csrf_field() }}
{{method_field('DELETE')}}

<button type="submit" onclick="return confirm('esta seguro de borrar?');" class="btn btn-danger">Borrar</button>
        </div>

</form>
</div>
{{-- accition --}}
</div>

@endforeach
</div>
{{$memes->links()}}



</div>

@endsection

<?php

namespace App\Http\Controllers;

use App\blogMemes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogMemesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['memes']=blogMemes::paginate(6);

        return view('blogMemes.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('blogMemes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $datosMemes=request()->all();


       $campos=[
           'title'=>'required|string|max:20',
           'caption'=>'required|string|max:30',
           'image'=>'required|max:10000|mimes:jpeg,png,jpg'
       ];

       $Mensaje=["required"=>'El :attribute es requerido'];

       $this->validate($request,$campos,$Mensaje);

       $datosMemes=request()->except('_token');

        if($request->hasFile('image')){

            $datosMemes['image']=$request->file('image')->store('uploads','public');
        }


       blogMemes::insert($datosMemes);


       // return response()->json($datosMemes);

       return redirect('blogMemes')->with('Mensaje', 'Meme agregado con Exito!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\blogMemes  $blogMemes
     * @return \Illuminate\Http\Response
     */
    public function show(blogMemes $blogMemes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blogMemes  $blogMemes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meme=blogMemes::findOrFail($id);

        return view('blogMemes.edit',compact('meme'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blogMemes  $blogMemes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosMemes=request()->except(['_token','_method']);

//verifica si tiene una foto cargada
        if($request->hasFile('image')){
            $meme=blogMemes::findOrFail($id);
            //borra la vieja image
                Storage::delete('public/'.$meme->image);

            $datosMemes['image']=$request->file('image')->store('uploads','public');
        }

//guarda los datos en la basee datos
        blogMemes::where('id','=',$id)->update($datosMemes);

        // $meme=blogMemes::findOrFail($id);
        // return view('blogMemes.edit',compact('meme'));

        return redirect('blogMemes')->with('Mensaje', 'Meme Editado con Exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blogMemes  $blogMemes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $meme=blogMemes::findOrFail($id);

        if(Storage::delete('public/'.$meme->image)){


            blogMemes::destroy($id);


        }

        blogMemes::destroy($id);

        return redirect('blogMemes')->with('Mensaje', 'Meme Borrado con Exito! |');
    }
}

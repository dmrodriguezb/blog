<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use App\Models\Comentario;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $comentarios = Comentario::all();
        return view('comentario.index', compact('comentarios'));


        
        $blogPosts = BlogPost::all();
        return view('comentario.index', compact('blogPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $blogPosts = BlogPost::all();
        return view('comentario.create', compact('blogPosts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ////
        $comentario = new Comentario();
        $comentario->comenTitle = $request->input('comenTitle');
        $comentario->comentario = $request->input('comentario');
        $comentario->post_id = $request->input('postTile');
        $comentario->user_id = 0;
        if($comentario->save()){            
            return redirect()->back()->with('success','Blog post information saved successfully!');
        }
        return redirect()->back()->with('failed','Blog post information could not save!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
          //
        
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Comentario::destroy($id)){
            return redirect()->back()->with('destroy','Comentary deleted successfully!');
        }
        return redirect()->back()->with('destroy-failed','Comentary delete not update!');
 
    }
}

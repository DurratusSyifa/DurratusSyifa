<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;


class BeritaController extends Controller
{
    public function index(){
    	//Eloquent => ORM (Object Relational Mapping)
    	$listBerita=Berita::all(); //select * from berita

    	//blade
    	return view('berita.index',compact('listBerita'));
    	//return view( view: 'berita.index')->with('data',$listBerita);
    }

    public function show($id){
    	//Eloquent
    	//$Berita=Berita::where('id',$id)->first(); // select * from berita where id=$id limit I
    	$Berita=Berita::find($id);

    	return view('berita.show',compact('Berita'));
    }

    public function create(){
        return view('berita.create');
    }

    public function store(Request $request){
        $input= $request->all();

        Artikel::create($input);

        return redirect(route('berita.index'));
    }
}

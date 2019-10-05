<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;


class GaleriController extends Controller
{
     public function index(){
    	//Eloquent => ORM (Object Relational Mapping)
    	$listGaleri=Galeri::all(); //select * from galeri

    	//blade
    	return view('galeri.index',compact('listGaleri'));
    	//return view( view: 'galeri.index')->with('data',$listgaleri);
    }

    public function show($id){
    	//Eloquent
    	//$Galeri=KategoriGaleri::where('id',$id)->first(); // select * from galeri where id=$id limit I
    	$Galeri=Galeri::find($id);

    	return view('kategori_galeri.show',compact('Galeri'));
    }

    public function create(){
        return view('galeri.create');
    }

    public function store(Request $request){
        $input= $request->all();

        Galeri::create($input);

        return redirect(route('galeri.index'));
    }
}

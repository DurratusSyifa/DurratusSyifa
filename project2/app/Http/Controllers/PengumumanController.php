<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;


class PengumumanController extends Controller
{
     public function index(){
    	//Eloquent => ORM (Object Relational Mapping)
    	$listPengumuman=Pengumuman::all(); //select * from prngumuman

    	//blade
    	return view('pengumuman.index',compact('listPengumuman'));
    	//return view( view: 'pengumuman.index')->with('data',$listPengumuman);
    }

    public function show($id){
    	//Eloquent
    	//$pengumuman=KategoriPengumuman::where('id',$id)->first(); // select * from pengumuman where id=$id limit I
    	$Pengumuman=Pengumuman::find($id);

    	return view('pengumuman.show',compact('Pengumuman'));
    }

    public function create(){
        return view('pengumuman.create');
    }

    public function store(Request $request){
        $input= $request->all();

        Pengumuman::create($input);

        return redirect(route('pengumuman.index'));
    }
}

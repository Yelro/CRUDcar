<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
     public function saveType(Request $request){
    	$types= new Type();
    	$types->type=$request->type;
    	$types->save();
		return redirect()->action('TypeController@index');
    }

        public function index(){
    	$data=Type::all();
    	return view('adminlte::pagesType', compact('data'));
    }

    public function deleteType($id){
		$types=Type::find($id);
		$types->delete();
		return redirect()->action('TypeController@index');
	}

	public function editType($id){
		$types=Type::find($id);
		return view('adminlte::pagesTypeEdit', compact('types'));
	}

    public function updateType(Request $request, $id){
		$types=Type::find($id);
		$types->type=$request->type;
		$types->save();
		return redirect()->action('TypeController@index');
	}
}

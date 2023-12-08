<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Type;

class CarController extends Controller
{
    public function saveCar(Request $request){
    	$car= new Car();
    	$car->owner=$request->owner;
    	$car->plate=$request->plate;
    	$car->chassis=$request->chassis;
    	$car->date=$request->date;
    	$car->type_id=$request->type_id;
    	$car->save();
	    return redirect()->action('CarController@index');
    }

   public function index(){
        $data=Type::all();
        $cardinality=Car::with('typeCardinality')->get();
        return view('adminlte::pagesCar', compact('cardinality','data'));
    }

    public function deleteCar($id){
        $car=Car::find($id);
        $car->delete();
        return redirect()->action('CarController@index');
    }

    public function editCar($id){
        $car=Car::find($id);
        $types=Type::all();
        return view('adminlte::pagesCarEdit', compact('car','types'));
    }

    public function updateCar(Request $request, $id){
        $car=Car::find($id);
        $car->owner=$request->owner;
    	$car->plate=$request->plate;
    	$car->chassis=$request->chassis;
    	$car->date=$request->date;
    	$car->type_id=$request->type_id;
        $car->save();
        return redirect()->action('CarController@index');
    }
}

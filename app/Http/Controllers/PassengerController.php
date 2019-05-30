<?php

namespace App\Http\Controllers;
use App\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{

     public function home()
     {
         return response()->json('Welcome to the Titanic Passenger API.');
     }

     public function index()
     {
        $passengers = Passenger::all();
        return response()->json($passengers);
     }

     public function create(Request $request)
     {
        $passenger = new Passenger();
        $passenger->survived = $request->survived;
        $passenger->pclass = $request->pclass;
        $passenger->name = $request->name;
        $passenger->age = $request->age;
        $passenger->sex = $request->sex;
        $passenger->siblings_spouses_aboard = $request->siblings_spouses_aboard;
        $passenger->parents_children_aboard = $request->parents_children_aboard;
        $passenger->fare = $request->fare;

        $passenger->save();
        return response()->json($passenger);
     }

     public function show($id)
     {
        $passenger = Passenger::find($id);
        return response()->json($passenger);
     }

     public function update(Request $request, $id)
     {
        $passenger = Passenger::find($id);
        $passenger->survived = $request->input('survived');
        $passenger->pclass = $request->input('pclass');
        $passenger->name = $request->input('name');
        $passenger->age = $request->input('age');
        $passenger->sex = $request->input('sex');
        $passenger->siblings_spouses_aboard = $request->input('siblings_spouses_aboard');
        $passenger->parents_children_aboard = $request->input('parents_children_aboard');
        $passenger->fare = $request->input('fare');

        $passenger->save();
        return response()->json($passenger);
     }

     public function destroy($id)
     {
        $passenger = Passenger::find($id);
        $passenger->delete();
        return response()->json('passanger removed successfully');
     }
    }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\telenor_model;

class telenorController extends Controller
{
    public function create(Request $req){
        $s = new telenor_model();

        $s-> ssn = $req->input('ssn');
        $s-> name = $req->input('name');

        $s->save();
        return response()->json($s);

    }

    public function show(){
        $s = telenor_model::all();
        return response()->json($s);

    }
    
    public function showbyid($id){
        $s = telenor_model::find($id);
        return response()->json($s);

    }

    public function updatebyid(Request $req){

        $id = $req->input('id');
        $s =  telenor_model::find($id);
        $s-> ssn = $req->input('ssn');
        $s-> name = $req->input('name');

        $s->save();
        return response()->json($s);

    }
}

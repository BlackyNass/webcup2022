<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapsuleController extends Controller
{
    //

    public function index($id){
        return view('edit-capsule', ['id' => $id]);
    }
}

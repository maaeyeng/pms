<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function data(){
        $data =  Article::all();
        return respone()->json('data');

    }
}

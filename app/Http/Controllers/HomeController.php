<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('testing');
    }

    public function about(){
        echo "1941720055 <br>";
        echo "Maulana Malik Ibrahim <br>";
        echo "TI-4A";
    }
    
    public function article($id){
        echo "Halaman Artikel dengan ID".$id;
    }
}

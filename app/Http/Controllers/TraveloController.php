<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TraveloController extends Controller
{
    function index(){
        return view("Travelo.index");
    }
    function hotelresto(){
        return view("Travelo.hotel-resto");
    }
}
?>


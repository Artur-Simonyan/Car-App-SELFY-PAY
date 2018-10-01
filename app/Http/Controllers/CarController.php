<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function carsList ()
    {
        $carList = App\car::index ();
        return view ( 'cars' , compact ( 'carList' ) );
    }

    public function getCar ( $id )
    {
        $getCar = App\car::getCar ( $id );
        return view ( '/carInfo' , compact ( 'getCar' ) );

    }

    public function createCar ( Request $req )
    {
        App\car::createCar ( $req );
        return redirect ( '/cars' );
    }

}

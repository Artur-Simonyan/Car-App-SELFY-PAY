<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\justDoIt;

class car extends Model
{
    public static function index ()
    {
        return DB::table ( 'cars' )->get ();
    }

    public static function getCar ( $id )
    {
        $getId = DB::table ( 'cars' )->where ( 'id' , $id )->first ();
        if ( is_numeric ( $id ) && $getId ) {
            return DB::table ( 'cars' )->where ( 'id' , $id )->first ();
        } else {
            return abort ( 404 );
        }
    }

    public static function createCar ( $req )
    {
        $name = $req->input ( 'name' );
        $mark = $req->input ( 'mark' );
        $regNum = $req->input ( 'regNum' );

        $data = array ( "name" => $name , "mark" => $mark , "regNum" => $regNum );
        return DB::table ( 'cars' )->insert ( $data );
    }
}

<?php

namespace App\Http\Controllers;

use App\Multiples;
use Illuminate\Http\Request;

class MultiplesController extends Controller
{
    public function __construct()
    {
        //$this->middleware("auth");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $arFinal = [];

        for($i=1;$i<=100;$i++)
        {
             if(Multiples::isMultiple($i,3) && Multiples::isMultiple($i,5)){
               $arFinal[] = $i . " CDmon";
             }elseif(Multiples::isMultiple($i,3)){
               $arFinal[] = $i . " CD";
             }elseif(Multiples::isMultiple($i,5)){
               $arFinal[] = $i . " mon";                     
             }else{
               $arFinal[] = $i;  
             }
        }
        return view('multiples.index', ['arFinal' => $arFinal]);
    }    
}

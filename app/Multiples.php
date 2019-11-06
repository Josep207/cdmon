<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multiples extends Model
{
   
    /**
     * Get if number is multiple
     *
     * @return bool
     */
    public static function isMultiple($number, $multiple)
    {
       if($number%$multiple == 0){
            return true;
       }else{
            return false;
       }
    }
}

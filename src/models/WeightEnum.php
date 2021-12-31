<?php

namespace App\models;

enum WeightEnum:string {
    case Kilogram_To_gram = "1000";
    case Gram_To_Kilogram = "0.001";

    public static function getConvert($value,WeightEnum $convert){
        return $value*$convert->value;
    }
}


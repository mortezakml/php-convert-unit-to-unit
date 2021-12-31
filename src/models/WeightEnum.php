<?php

namespace App\models;

enum WeightEnum:string {
    case MeterPerSecond_To_KilometerPerHour = "100";
    case SamantiMeter_To_Meter = "0.01";

    public static function getConvert($value,WeightEnum $convert){
        return $value*$convert->value;
    }
}


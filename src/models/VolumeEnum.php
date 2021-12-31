<?php

namespace App\models;

enum VolumeEnum:string {
    use VolumeTrait;

    case CubicCentimeter_To_CubicMeter = "0.000001";
    case CubicMeter_To_CubicCentimeter = "1000000";

}


<?php

require_once "./vendor/autoload.php";

use App\contracts\SizeEnum;
use App\contracts\SpeedEnum;
use App\models\SizeClass;
use App\models\SpeedClass;
use App\models\WeightEnum;
use App\models\VolumeEnum;


// enum and Interface
var_dump(SizeClass::getConvert(1,SizeEnum::Meter_To_SamantiMeter));
var_dump(SpeedClass::getConvert(10,SpeedEnum::MeterPerSecond_To_KilometerPerHour));

// Just enum Function
var_dump(WeightEnum::getConvert(10,WeightEnum::Kilogram_To_gram));

// use trait
var_dump(VolumeEnum::getConvert(10,VolumeEnum::CubicMeter_To_CubicCentimeter));

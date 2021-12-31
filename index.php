<?php

require_once "./vendor/autoload.php";

use App\contracts\SizeEnum;
use App\contracts\SpeedEnum;
use App\models\SizeClass;
use App\models\SpeedClass;
use App\models\WeightEnum;



var_dump(SizeClass::getConvert(1,SizeEnum::Meter_To_SamantiMeter));
var_dump(SpeedClass::getConvert(10,SpeedEnum::MeterPerSecond_To_KilometerPerHour));
var_dump(WeightEnum::getConvert(10,SpeedEnum::MeterPerSecond_To_KilometerPerHour));

<?php

namespace App\contracts;

enum SizeEnum: string
{
    case Meter_To_SamantiMeter = "100";
    case SamantiMeter_To_Meter = "0.01";
    case Meter_To_Inch = "39.37";
    case SamantiMeter_To_Inch = "25.55";
    case Inch_To_SamantiMeter = "2.54";
    case Inch_To_Meter = "0.0254";
}
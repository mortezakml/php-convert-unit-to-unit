<?php

namespace App\contracts;

enum SpeedEnum: string
{
    case MeterPerSecond_To_MeterPerMinute = "60";
    case MeterPerMinute_To_MeterPerSecond = "0.0166";
    case MeterPerSecond_To_KilometerPerHour = "3.6";
    case MeterPerMinute_To_KilometerPerHour = "0.06";
    case KilometerPerHour_To_MeterPerMinute = "16.666";
    case KilometerPerHour_To_MeterPerSecond = "0.277";
}
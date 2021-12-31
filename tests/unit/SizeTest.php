<?php

namespace tests\unit;

use App\Exceptions\ExceptionParameterInvalid;
use App\Exceptions\ExceptionParameterNegative;

use PHPUnit\Framework\TestCase;

use App\models\SizeClass;
use App\contracts\SizeInterface;
use App\contracts\SizeEnum;

class SizeTest extends TestCase{


    /** 
    *   assertInstanceOf
    */
    public function  testSizeclassInstanceOfSizeInterface(){
        $sizeClass= new SizeClass();
        $this->assertInstanceOf(SizeInterface::class,$sizeClass);
    }

    /** 
    *  @dataProvider  sizeDataProvider
    */
    public function  testCheckInstanceOfSizeEnum($value,$convert){
        $this->assertInstanceOf(SizeEnum::class,$convert);
    }

    /** 
    *  @dataProvider  sizeDataProvider
    */
    public function  testCheckResultValue($value,$convert){
        $this->assertGreaterThanOrEqual(0,SizeClass::getConvert($value,$convert));
    }


    public function sizeDataProvider()
    {
        return [
            [20,SizeEnum::Meter_To_SamantiMeter],
            [30,SizeEnum::Meter_To_SamantiMeter],
            [50,SizeEnum::Meter_To_SamantiMeter],
            [60,SizeEnum::Meter_To_SamantiMeter],
        ];
    }


}


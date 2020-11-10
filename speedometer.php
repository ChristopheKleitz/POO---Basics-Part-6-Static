<?php


class Speedometer
{
    CONST CONVERSION_RATE = 1.60934;

    public static function convertKmToMiles (int $km)
    {
        $result = round(($km / self::CONVERSION_RATE), 2);
        return $km .' Km is egal to '. $result . ' Miles';
    }

    public static function convertMilesToKm (int $miles)
    {
        $result = round(($miles * self::CONVERSION_RATE), 2);
        return $miles .' Miles is egal to '. $result . ' Km';
    }
}

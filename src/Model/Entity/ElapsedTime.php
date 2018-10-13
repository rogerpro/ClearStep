<?php

namespace App\Model\Entity;

use Cake\I18n\Number;
use Cake\ORM\Entity;

class ElapsedTime extends Entity
{
    //TODO: convert to Helper
    /**
     * Return the amount of time in seconds formatted as hours:minutes:seconds or empty string on zero
     *
     * @link https://stackoverflow.com/questions/3172332/convert-seconds-to-hourminutesecond
     *
     * @param int|null $time in seconds
     * @param string $separator
     * @return string
     */
    public static function format(int $time = null, string $separator = ':')
    {
        return $time
            ?
            sprintf("%2d%s%02d%s%02d",
                floor($time / 3600),
                $separator,
                ($time / 60) % 60,
                $separator,
                $time % 60)
            :
            '';
    }

    /**
     * Return the percentage in localizated format or empty string on null
     *
     * @param float|null $part
     * @return string
     */
    public static function toPercentage(float $part = null)
    {
        return is_null($part) ? '' : Number::toPercentage($part);
    }
}

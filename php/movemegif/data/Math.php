<?php

namespace movemegif\data;

/**
 * @author Patrick van Bergen
 */
class Math
{
    /**
     * Returns the first power of 2 equal to or higher than $number.
     *
     * @param $number
     * @return int
     */
    public static function firstPowerOfTwo($number)
    {
        return pow(2, self::minimumBits($number));
    }

    /**
     * Returns the least number of bits that can hold $number.
     *
     * @param $colorCount
     * @return mixed
     */
    public static function minimumBits($colorCount)
    {
        $size = 0;
        $bits = $colorCount - 1;

        while ($bits > 0) {
            $size++;
            $bits >>= 1;
        }

        return $size;
    }
}
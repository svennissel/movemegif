<?php

use movemegif\domain\Frame;
use movemegif\domain\StringCanvas;
use movemegif\exception\DurationTooSmallException;
use movemegif\exception\MovemegifException;
use movemegif\exception\TooManyColorsException;
use movemegif\GifBuilder;

require_once __DIR__ . '/../../php/autoloader.php';

/**
 * Tests all exceptions
 *
 * @author Patrick van Bergen
 */
class ExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testTooManyColorsExceptionTest()
    {
        $count = 0;

        $pixelIndexes = "";

        $index2color = array();

        for ($i = 0; $i < 256; $i++) {
            $pixelIndexes .= ' ' . (string)$i;
            $index2color[$i] = $i;
        }

        $builder = new GifBuilder(10, 10);
        $builder->addFrame()->setCanvas(new StringCanvas(10, 10, $pixelIndexes, $index2color));

        try {
            $builder->getContents();
        } catch (MovemegifException $e) {
            $count++;
        }

        $pixelIndexes .= ' ' . (string)256;
        $index2color[256] = 256;

        $builder = new GifBuilder(10, 10);
        $builder->addFrame()->setCanvas(new StringCanvas(10, 10, $pixelIndexes, $index2color));

        try {
            $builder->getContents();
        } catch (TooManyColorsException $e) {
            $count++;
        }

        $this->assertSame(1, $count);
    }

    public function durationTooSmallExceptionTest()
    {
        $count = 0;

        $frame = new Frame();
        $frame->setDuration(1);

        try {

        } catch (DurationTooSmallException $e) {
            $count++;
        }

        $this->assertSame(1, $count);
    }

    public function emptyFrameExceptionTest()
    {
        $count = 0;

        $frame = new Frame();
        $frame->setDuration(1);

        try {

        } catch (DurationTooSmallException $e) {
            $count++;
        }

        $this->assertSame(1, $count);
    }
}
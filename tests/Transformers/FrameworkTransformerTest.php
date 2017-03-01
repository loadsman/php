<?php

use Loadsman\PHP\DTO\Framework;
use Loadsman\PHP\Transformers\FrameworkTransformer;

class FrameworkTransformerTest extends \PHPUnit\Framework\TestCase
{
    public function test_transform_framework()
    {
        $transformer = new FrameworkTransformer();
        $framework = new Framework('Name', '1.0');
        $transformer->transform($framework);

        $this->assertTrue(true);
    }
}
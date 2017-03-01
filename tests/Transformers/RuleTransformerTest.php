<?php

use Loadsman\PHP\DTO\Rule;
use Loadsman\PHP\Transformers\RuleTransformer;

class RuleTransformerTest extends \PHPUnit\Framework\TestCase
{
    public function test_transform_rule()
    {
        $transformer = new RuleTransformer();
        $rule = new Rule();
        $transformer->transform($rule);

        $this->assertTrue(true);
    }
}
<?php

namespace Loadsman\PHP\Transformers;

use Loadsman\PHP\DTO\Rule;

class RuleTransformer
{
    /**
     * @param Rule $rule
     * @return array
     */
    public function transform(Rule $rule)
    {
        return [
            'uri' => $rule->getUri(),
            'name' => $rule->getName(),
            'router' => $rule->getRouter(),
            'methods' => $rule->getMethods(),
        ];
    }
}
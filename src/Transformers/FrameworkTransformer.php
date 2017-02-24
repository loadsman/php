<?php

namespace Loadsman\PHP\Transformers;

use Loadsman\PHP\DTO\Framework;

class FrameworkTransformer
{
    /**
     * @param Framework $framework
     * @return array
     */
    public function transform(Framework $framework)
    {
        return [
            'name' => $framework->getName(),
            'version' => $framework->getVersion(),
            'features' => $framework->getFeatures(),
        ];
    }
}
<?php

namespace Loadsman\PHP\DTO;

class Framework
{
    const FEATURE_RULE_LIST = 'rule-list';

    /**
     * Framework name.
     * @var string
     */
    private $name = '';

    /**
     * Framework version.
     * @var string
     */
    private $version = '';

    /**
     * Framework features list.
     * @var array
     */
    private $features = [self::FEATURE_RULE_LIST];

    public function __construct($name, $version)
    {
        $this->name = $name;
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param array $features
     */
    public function setFeatures($features)
    {
        $this->features = $features;
    }

    /**
     * @return array
     */
    public function getFeatures()
    {
        return $this->features;
    }
}
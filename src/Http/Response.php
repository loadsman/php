<?php

namespace Loadsman\PHP\Http;

/**
 * Is meant for standardisation of responses.
 */
class Response
{
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function toArray()
    {
        return ['data' => $this->data];
    }
}
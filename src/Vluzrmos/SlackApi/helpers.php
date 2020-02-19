<?php

use Vluzrmos\SlackApi\Contracts;
use Vluzrmos\SlackApi\Methods\SlackMethod;

if (! function_exists('slack')) {

    /**
     * Helper to easy load an slack method or the api.
     * @param  string $method slack method name
     * @return Contracts|SlackApi|SlackMethod
     */
    function slack($method = null)
    {
        $slack = app('Vluzrmos\SlackApi\Contracts\SlackApi');

        return $method ? $slack->load($method) : $slack;
    }
}

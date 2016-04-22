<?php

namespace Themosis\Foundation;

use Illuminate\Container\Container;

class Application extends Container
{
    /**
     * Application constructor.
     *
     * @param string $basePath Base path of framework.
     */
    public function __construct($basePath = '')
    {
        $this->registerBaseBindings();
    }

    /**
     * Register base dependencies into the container.
     */
    protected function registerBaseBindings()
    {
        static::setInstance($this);

        // Add application into the container.
        $this->instance('app', $this);

        // Add an extended illuminate container into itself.
        $this->instance('Themosis\Foundation\Application', $this);
    }
}
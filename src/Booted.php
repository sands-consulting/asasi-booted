<?php

namespace Asasi\Booted;

class Booted
{
    /**
     * @var bool     
     * @var array   $callbacks
     */
    private $called     = false;
    private $callbacks  = [];

    public function then($callback)
    {
        if ($this->called) {
            return $callback();
        }

        $this->callbacks[] = $callback;
    }

    public function __construct()
    {
        app('events')->listen('booted', function () {
            foreach ($this->callbacks as $callback) {
                $callback();
            }
            $this->called = true;
        });
    }
}

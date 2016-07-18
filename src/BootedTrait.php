<?php

namespace Sands\Asasi\Booted;

trait BootedTrait
{
    public function bootBootedTrait()
    {
        app('booted')->then(function () {
            $this->booted();
        });
    }
}

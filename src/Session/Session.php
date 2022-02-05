<?php

namespace App\Session;

class Session
{
    private $isStarted = false;

    /**
     * @return bool
     */
    public function isStarted(): bool
    {
        return $this->isStarted;
    }
}
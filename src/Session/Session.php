<?php

namespace App\Session;

class Session
{
    private bool $isStarted = false;

    /**
     * @return bool
     */
    public function isStarted(): bool
    {
        return $this->isStarted;
    }

    public function start(): bool
    {
        if ($this->isStarted)
        {
            return true;
        }

        if (session_status() === PHP_SESSION_ACTIVE)
        {
            $this->isStarted = true;
            return true;
        }

        session_start();
        $this->isStarted = true;
        return true;
    }
}

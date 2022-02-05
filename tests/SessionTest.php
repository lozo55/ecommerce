<?php

use PHPUnit\Framework\TestCase;

class SessionTest extends TestCase
{
    protected function setUp(): void
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
        }
    }

    /** @test */
    public function can_check_if_a_session_started()
    {
        $session = new App\Session\Session();

        $this->assertFalse($session->isStarted());
    }
}
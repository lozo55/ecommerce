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

    /** @test
     * run with --stderr, because is a "Cannot modify header information" problem
     */
    public function a_session_can_be_started()
    {
        $session = new App\Session\Session();

        $sessionStatus = $session->start();

        $this->assertTrue($session->isStarted());
        $this->assertTrue($sessionStatus);
    }

}


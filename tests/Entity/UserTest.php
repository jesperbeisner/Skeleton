<?php

declare(strict_types=1);

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\Entity\User
 */
class UserTest extends TestCase
{
    private User $user;

    protected function setUp(): void
    {
        $this->user = new User();
    }

    /**
     * @covers \App\Entity\User::setUsername
     */
    public function test_set_username(): void
    {
        $this->user->setUsername('Test');

        $this->assertSame('Test', $this->user->getUsername());
    }
}

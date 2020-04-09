<?php


namespace App\Tests;


use App\User;
use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    public function testIsValid()
    {
        $user = new User('omar@email.com', 'omar', 'rgd', 18);
        $this->assertTrue($user->isValid());

        $user = new User('omar@email.com', '', 'rgd', 18);
        $this->assertFalse($user->isValid());

        $user = new User('omar@email.com', 'omar', '', 18);
        $this->assertFalse($user->isValid());

        $user = new User('omar@email.com', 'omar', 'rgd', 12);
        $this->assertFalse($user->isValid());

        $user = new User('omar', 'omar', 'rgd', 18);
        $this->assertFalse($user->isValid());
    }
}
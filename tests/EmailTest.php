<?php

require_once __DIR__ . '/../src/Email.php';

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmail()
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString("user@example.com")
        );
    }

    public function testCannotBeCreatedFromInvalidEmail()
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString("invalid");
    }
}

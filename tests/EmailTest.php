<?php declare(strict_types=1);
require_once realpath("vendor/autoload.php");
use PHPTestException\Email;
use PHPUnit\Framework\TestCase;
final class EmailTest extends TestCase
{
   public function testCanBeCreatedFromValidEmailAddress(): void
   {
      $this->assertInstanceOf(Email::class, Email::fromString('user@example.com'));
   }
   public function testCannotBeCreatedFromInvalidEmailAddress(): void
   {
      $this->expectException(InvalidArgumentException::class);
      Email::fromString('john');
   }
   public function testCanBeUsedAsString(): void
   {
      $this->assertEquals('john@hotmail.com',    Email::fromString('john@hotmail.com'));
   }
}
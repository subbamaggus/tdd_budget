<?php declare(strict_types=1);
require_once realpath("vendor/autoload.php");
use PHPTestException\Entry;
use PHPUnit\Framework\TestCase;
final class EntryTest extends TestCase
{
   public function testCreateBogusIdAndReturnThis(): void
   {
       $myEntry = new Entry(12, "mydesc", 1234);
       $this->assertEquals(12, $myEntry->getValue());
       $this->assertEquals("mydesc", $myEntry->getDescription());
   }
   public function testNotInitiatedObjectFails(): void
   {
       $this->expectException(Error::class);
       Entry::getValue();
   }
}
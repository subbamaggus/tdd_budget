<?php declare(strict_types=1);
namespace PHPTestException;
use InvalidArgumentException;
final class Entry
{
   private $_id;
   private $_value;
   private $_description;
   private $_timestamp;
   
   public function __construct(int $value, string $description, int $timestamp)
   {
       $this->id = -1;
       $this->value = $value;
       $this->description = $description;
       $this->timestamp = $timestamp;
   }
   public function getId(): int
   {
       return $this->id;
   }
   public function getValue(): int
   {
       return $this->value;
   }
   public function getDescription(): string
   {
       return $this->description;
   }
   public function getTimestamp(): int
   {
       return $this->timestamp;
   }
}
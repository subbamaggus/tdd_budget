<?php declare(strict_types=1);
namespace PHPTestException;
use InvalidArgumentException;
final class Entry
{
   private $_id;
   public function __construct(int $id)
   {
      $this->id = $id;
   }
   public function getId(): int
   {
       return $this->id;
   }

}
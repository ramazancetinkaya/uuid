<?php

/**
 * UUID Generator Class
 *
 * @author Ramazan Çetinkaya
 * @date 2023-02-12
 */
namespace UUID;

class UUID {
  
  private string $uuid;

  public function __construct(string $uuid = null) {
    if ($uuid === null) {
      $this->uuid = self::generateV4();
    } else {
      $this->uuid = $uuid;
      self::validate($this->uuid);
    }
  }

  public function __toString(): string {
    return $this->uuid;
  }

  public static function generateV4(): string {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
      random_int(0, 0xffff), random_int(0, 0xffff),
      random_int(0, 0xffff),
      random_int(0, 0x0fff) | 0x4000,
      random_int(0, 0x3fff) | 0x8000,
      random_int(0, 0xffff), random_int(0, 0xffff), random_int(0, 0xffff)
    );
  }

  public static function validate(string $uuid): void {
    if (!preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/', $uuid)) {
      throw new InvalidArgumentException("Invalid UUID string: {$uuid}");
    }
  }
  
}

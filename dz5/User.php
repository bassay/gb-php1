<?php

class User {
  private string $username;
  private string $email;
  private ?string $sex;
  private ?int $age;
  private bool $isActive = true;
  private DateTime $dateCreated;

  function __construct(string $username, string $email)
  {
    $this->username = $username;
    $this->email = $email;
    $this->dateCreated = new DateTime(); // Текущие дата и время
  }

  function getUsername(): string
  {
    return $this->username ?? 'unknown';
  }
}
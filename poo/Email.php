<?php

class Email
{
  private string $email;

  public function __construct(
    string $email
  ) {
    $this->email = $email;
  }

  public function getDomain(): string
  {
    $emailParts = explode('@', $this->email);
    return $emailParts[1];
  }

  public function getEmail(): string
  {
    return $this->email;
  }
}

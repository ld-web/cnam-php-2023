<?php

class SpamChecker
{
  public const SPAM_DOMAINS = [
    'mailinator.com',
    'cnam.fr',
    'impots.gouv.fr'
  ];

  public function isSpam(Email $email): bool
  {
    return array_search($email->getDomain(), self::SPAM_DOMAINS) !== false;
  }
}

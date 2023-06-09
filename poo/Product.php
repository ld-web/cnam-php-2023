<?php
require_once 'InvalidRateException.php';

class Product
{
  private string $name;
  private float $price;

  /**
   * Get full tax price
   *
   * @param float $rate Value (> 1)
   * @return float
   * @throws InvalidArgumentException if given rate is under 1
   */
  public function getTtcPrice(float $rate): float
  {
    if ($rate <= 1) {
      throw new InvalidRateException();
    }
    return $this->price * $rate;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  public function getPrice(): float
  {
    return $this->price;
  }

  /**
   * Sets the product's price
   *
   * @param float $price
   * @return Product
   * @throws InvalidArgumentException if price is negative
   */
  public function setPrice(float $price): self
  {
    if ($price <= 0) {
      throw new InvalidArgumentException("Price cannot be negative");
    }
    $this->price = $price;

    return $this;
  }
}

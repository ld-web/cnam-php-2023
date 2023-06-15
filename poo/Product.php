<?php
require_once 'InvalidRateException.php';

abstract class Product
{
  protected string $name;
  protected float $price;

  /**
   * Constructs a new Product instance
   *
   * @param string $name
   * @param float $price
   * @throws InvalidArgumentException If price is negative
   */
  public function __construct(
    string $name,
    float $price
  ) {
    $this->name = $name;
    if ($price <= 0) {
      throw new InvalidArgumentException("Price cannot be negative");
    }
    $this->price = $price;
  }

  abstract public function displayInfos(): void;

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

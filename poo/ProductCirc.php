<?php

class ProductCirc extends Product implements IFormattable
{
  private int $diameter;

  public function __construct(
    string $name,
    float $price,
    int $diameter
  ) {
    parent::__construct($name, $price);
    $this->diameter = $diameter;
  }

  public function format(): string
  {
    return $this->getName();
  }

  public function displayInfos(): void
  {
    echo "Produit circulaire : " . $this->getName() . "<br />";
    echo "Dimensions : " . $this->getDiameter() . "cm<br />";
  }

  public function getDiameter(): int
  {
    return $this->diameter;
  }
}

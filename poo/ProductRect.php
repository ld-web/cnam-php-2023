<?php

class ProductRect extends Product
{
  private int $width;
  private int $height;

  public function __construct(
    string $name,
    float $price,
    int $width,
    int $height
  ) {
    parent::__construct($name, $price);
    $this->width = $width;
    $this->height = $height;
  }

  public function displayInfos(): void
  {
    echo "Produit rectangulaire : " . $this->getName() . "<br />";
    echo "Dimensions : " . $this->getWidth() . "x" . $this->getHeight() . "<br />";
  }

  public function getWidth(): int
  {
    return $this->width;
  }

  public function getHeight(): int
  {
    return $this->height;
  }
}

<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch {
    
    /**
     * @ int|null
     * @Assert\Range(min=10, max=400)
     */
    private $minSurface; 

/**
 * Getter for MinSurface
 *
 * @return int|null
 */
public function getMinSurface(): ?int
{
    return $this->minSurface;
}

/**
 * Setter for MinSurface
 * @var int|null minSurface
 *
 * @return PropertySearch
 */
public function setMinSurface(?int $minSurface) : PropertySearch
{
    $this->minSurface = $minSurface;
    return $this;
}


    /**
     * @ int|null
     */
    private $maxPrice;

/**
 * Getter for MaxPrice
 *
 * @return int|null
 */
public function getMaxPrice()
{
    return $this->maxPrice;
}

/**
 * Setter for MaxPrice
 * @var int|null maxPrice
 *
 * @return PropertySearch
 */
public function setMaxPrice($maxPrice) : PropertySearch
{
    $this->maxPrice = $maxPrice;
    return $this;
}
 



}
<?php
namespace App\Entity;

class PropertySearch {

    /**
     * @var int | null
     */
    private $maxPrice;

    /**
     * @var int | null;
     */
    private  $minSurface;

    /**
     * @return int | null
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * @return int | null
     */
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }


    /**
     * @return PropertySearch
     * @param int $maxPrice
     */
    public function setMaxPrice(int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @return PropertySearch
     * @param int $minSurface
     */
    public function setMinSurface(int $minSurface): PropertySearch
    {
        $this->minSurface = $minSurface;
        return $this;
    }

}
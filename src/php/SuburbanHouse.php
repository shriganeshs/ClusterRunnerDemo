<?php


class SuburbanHouse
{
    public function __construct($numBedrooms=2, $hasFinishedBasement=false) {
        $this->numBedrooms = $numBedrooms;
        $this->hasFinishedBasement = $hasFinishedBasement;
    }

    public function numBedrooms() {
        return $this->numBedrooms;
    }

    public function hasFinishedBasement() {
        return $this->hasFinishedBasement;
    }

    public function numBathrooms() {
        return $this->numBedrooms + 0.5;
    }

    public function squareFootage() {
        $basementSize = $this->hasFinishedBasement ? 1000 : 0;
        return 1000 + 250 * $this->numBedrooms + $basementSize;
    }
}

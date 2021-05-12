<?php
namespace src\circle;

class ComparableCircle extends Circle implements Comparable
{
    public function compareTo($objTwo): string
    {
        $circleTwoRadius = $objTwo->getRadius();

        if ($this->getRadius() > $circleTwoRadius) {
            return 1;
        } elseif ($this->getRadius() < $circleTwoRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}
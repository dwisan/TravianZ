<?php

namespace TravianZ\Data\Buildings;

use TravianZ\Entity\TrainingField;

final class Barracks extends TrainingField
{
    public function __construct(
        int $id,
        int $position,
        int $level,
        string $name,
        string $desc,
        array $baseResourcesRequired,
        int $baseCulturePoints,
        array $baseTime,
        float $baseCostGrowth,
        int $baseUpkeep,
        array $bonus,
        int $maxLevel,
        array $buildingRequirements,
        int $unitToTrainClass,
        bool $unitToTrainGreat
    ) {
        parent::__construct(
            $id,
            $position,
            $level,
            $name,
            $desc,
            $baseResourcesRequired,
            $baseCulturePoints,
            $baseTime,
            $baseCostGrowth,
            $baseUpkeep,
            $bonus,
            $maxLevel,
            $buildingRequirements,
            $unitToTrainClass,
            $unitToTrainGreat
        );
    }
    
    /**
     * {@inheritDoc}
     * @see \TravianZ\Entity\Building::getBonus()
     */
    public function getBonus()
    {
        return 0.9 ** ($this->level - 1);
    }
}
<?php

namespace App\Entity\RSTReports;

use App\Entity\RSTReports\Interfaces\ModulationInterface;
use App\Entity\RSTReports\Interfaces\ReadablilityInterface;
use App\Entity\RSTReports\Interfaces\StrengthInterface;
use App\Entity\RSTReports\Interfaces\ToneInterface;

class RSTReport
{
    public ReadablilityInterface $readability;
    public StrengthInterface $strength;
    public ToneInterface $tone;
    public ModulationInterface $modulation;

}
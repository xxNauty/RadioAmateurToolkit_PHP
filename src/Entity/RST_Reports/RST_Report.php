<?php

namespace App\Entity\RST_Reports;

use App\Entity\RST_Reports\Interfaces\ModulationInterface;
use App\Entity\RST_Reports\Interfaces\ReadablilityInterface;
use App\Entity\RST_Reports\Interfaces\StrengthInterface;
use App\Entity\RST_Reports\Interfaces\ToneInterface;

class RST_Report
{
    public ReadablilityInterface $readability;
    public StrengthInterface $strength;
    public ToneInterface $tone;
    public ModulationInterface $modulation;

}
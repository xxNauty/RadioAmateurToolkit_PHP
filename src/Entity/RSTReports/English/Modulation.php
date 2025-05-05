<?php

namespace App\Entity\RSTReports\English;

use App\Entity\RSTReports\Interfaces\ModulationInterface;

enum Modulation: string implements ModulationInterface
{
    case M1 = "unintelligible modulation";
    case M2 = "poor modulation";
    case M3 = "slight quality of modulation";
    case M4 = "moderate quality modulation";
    case M5 = "good modulation";
}
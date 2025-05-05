<?php

namespace App\Entity\RST_Reports\English;

use App\Entity\RST_Reports\Interfaces\StrengthInterface;

enum Strength: string implements StrengthInterface
{
    case S1 = "very weak";
    case S2 = "very weak but readable";
    case S3 = "weak";
    case S4 = "adequately good";
    case S5 = "fairly good";
    case S6 = "good";
    case S7 = "moderately strong";
    case S8 = "strong";
    case S9 = "very strong";
}

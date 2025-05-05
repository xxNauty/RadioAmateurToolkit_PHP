<?php

namespace App\Entity\RST_Reports\Polish;

use App\Entity\RST_Reports\Interfaces\StrengthInterface;

enum Strength: string implements StrengthInterface
{
    case S1 = "bardzo słaby";
    case S2 = "bardzo słaby, ale czytelny";
    case S3 = "słaby";
    case S4 = "dostatecznie dobry";
    case S5 = "dość dobry";
    case S6 = "dobry";
    case S7 = "umiarkowanie silny";
    case S8 = "silny";
    case S9 = "bardzo silny";
}

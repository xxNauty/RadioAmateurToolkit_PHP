<?php

namespace App\Entity\RST_Reports\Polish;

use App\Entity\RST_Reports\Interfaces\ReadablilityInterface;

enum Readability: string implements ReadablilityInterface
{
    case R1 = "nieczytelny";
    case R2 = "ledwie czytelny";
    case R3 = "czytelny z dużymi trudnościami";
    case R4 = "czytelny z niewielkimi trudnościami";
    case R5 = "czytelny";
}
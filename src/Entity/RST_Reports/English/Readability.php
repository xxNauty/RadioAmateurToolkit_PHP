<?php

namespace App\Entity\RST_Reports\English;

use App\Entity\RST_Reports\Interfaces\ReadablilityInterface;

enum Readability: string implements ReadablilityInterface
{
    case R1 = "unreadable";
    case R2 = "barely readable";
    case R3 = "readable with great difficulty";
    case R4 = "readable with slight difficulty";
    case R5 = "readable";
}
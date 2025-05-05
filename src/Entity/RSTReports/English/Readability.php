<?php

namespace App\Entity\RSTReports\English;

use App\Entity\RSTReports\Interfaces\ReadablilityInterface;

enum Readability: string implements ReadablilityInterface
{
    case R1 = "unreadable";
    case R2 = "barely readable";
    case R3 = "readable with great difficulty";
    case R4 = "readable with slight difficulty";
    case R5 = "readable";
}
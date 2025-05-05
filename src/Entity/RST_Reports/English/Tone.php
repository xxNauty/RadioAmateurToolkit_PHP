<?php

namespace App\Entity\RST_Reports\English;

use App\Entity\RST_Reports\Interfaces\ToneInterface;

enum Tone: string implements ToneInterface
{
    case T1 = "very raspy alternating current tone";
    case T2 = "raspy alternating current tone, without traces of musicality";
    case T3 = "raspy, low alternating current tone, slightly musical";
    case T4 = "somewhat raspy alternating current tone";
    case T5 = "resonant tone, modulated with a variable component";
    case T6 = "modulated tone, slightly whistling";
    case T7 = "almost pure tone, slightly whistling";
    case T8 = "pure tone";
    case T9 = "very pure, resonant tone";
}
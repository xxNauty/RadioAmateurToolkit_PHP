<?php

namespace App\Entity\RST_Reports\Polish;

use App\Entity\RST_Reports\Interfaces\ToneInterface;

enum Tone: string implements ToneInterface
{
    case T1 = "bardzo chrapliwy ton prądu zmiennego";
    case T2 = "chrapliwy ton prądu zmiennego, bez śladów muzykalności";
    case T3 = "chrapliwy, niski ton prądu zmiennego, lekko muzykalny";
    case T4 = "nieco chrapliwy ton prądu zmiennego";
    case T5 = "ton dźwięczny, modulowany składową zmienną";
    case T6 = "ton modulowany, lekko świszczący";
    case T7 = "ton prawie czysty, lekko świszczący";
    case T8 = "ton czysty";
    case T9 = "bardzo czysty, dźwięczny ton";
}
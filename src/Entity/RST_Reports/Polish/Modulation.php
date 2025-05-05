<?php

namespace App\Entity\RST_Reports\Polish;

use App\Entity\RST_Reports\Interfaces\ModulationInterface;

enum Modulation: string implements ModulationInterface
{
    case M1 = "modulacja niezrozumiała";
    case M2 = "zła modulacja";
    case M3 = "niewielka jakość modulacji";
    case M4 = "modulacja miernej jakości";
    case M5 = "dobra modulacja";
}

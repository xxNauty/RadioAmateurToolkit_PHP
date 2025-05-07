<?php

namespace App\Entity\ExamQuestion;

enum Category: string
{
    case C1 = "Wiadomości techniczne z zakresu radioelektroniki";
    case C2 = "Bezpieczeństwo pracy przy urządzeniach elektronicznych i radiowych";
    case C3 = "Przepisy i procedury operatorskie";
    case C4 = "Przepisy dotyczące radiokomunikacyjnej służby amatorskiej";
}
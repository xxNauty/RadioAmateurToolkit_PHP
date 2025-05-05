<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250502120416 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'List of polish q-codes.';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            INSERT INTO qcode (id, code, description) VALUES
            (1, "QAZ", "Burza, wyłączam stację"),
            (2, "QHL", "Przeszukiwanie pasma od największej częstotliwości"),
            (3, "QHM", "Przeszukiwanie pasma od największej do środkowej częstotliwości"),
            (4, "QLH", "Przeszukiwanie pasma od najmniejszej częstotliwości"),
            (5, "QLM", "Przeszukiwanie pasma od najmniejszej do środkowej częstotliwości"),
            (6, "QMH", "Przeszukiwanie pasma od środkowej do największej częstotliwości"),
            (7, "QML", "Przeszukiwanie pasma od środkowej do najmniejszej częstotliwości"),
            (8, "QQQ", "Muszę przerwać łączność, wyjaśnienia później"),
            (9, "QRA", "Moja stacja nazywa się..."),
            (10, "QRAR", "Mój adres w callbooku jest dokładny i prawidłowy"),
            (11, "QRB", "Odległość między naszymi stacjami wynosi ... km"),
            (12, "QRD", "Zdążamy do... z..."),
            (13, "QRE", "Przypuszczalnie przybędziemy do ... o ... godzinie"),
            (14, "QRF", "Wracamy (wracajcie) do ... (miejsce)"),
            (15, "QRG", "Twoja częstotliwość wynosi..."),
            (16, "QRH", "Twoja częstotliwość zmienia się, waha"),
            (17, "QRI", "Twój ton jest: 1. dobry, 2. zmienny, 3. zły"),
            (18, "QRJ", "Wasze sygnały są bardzo słabe, nieodbieralne"),
            (19, "QRK", "Czytelność waszych sygnałów wynosi (1...5)"),
            (20, "QRL", "Jestem zajęty, proszę nie przeszkadzać"),
            (21, "QRM", "Mam przeszkody w odbiorze, zakłócenia od innych stacji"),
            (22, "QRN", "Mam zakłócenia atmosferyczne"),
            (23, "QRO", "Zwiększ moc, duża moc"),
            (24, "QRP", "Zmniejsz moc, mała moc"),
            (25, "QRQ", "Nadawaj szybciej"),
            (26, "QRR", "Jestem gotowy do pracy automatycznej"),
            (27, "QRRR", "Znak niebezpieczeństwa na lądzie (tylko w ruchu amatorskim)"),
            (28, "QRS", "Nadawaj wolniej"),
            (29, "QRT", "Kończę nadawanie, wyłączam stację, przerwij nadawanie!"),
            (30, "QRU", "Nie mam nic dla ciebie"),
            (31, "QRV", "Jestem gotów do pracy"),
            (32, "QRW", "Przekażcie ..., że go wołam na częstotliwości ..."),
            (33, "QRX", "Proszę poczekać, zawołam was o godzinie ..."),
            (34, "QRY", "Wasza kolejność jest..."),
            (35, "QRZ", "Was woła..., kto mnie woła?"),
            (36, "QSA", "Siła waszych sygnałów wynosi (1...9)"),
            (37, "QSB", "Siła waszego sygnału waha się"),
            (38, "QSD", "Błędnie nadajecie CW"),
            (39, "QSI", "Nie mogłem przerwać waszego nadawania"),
            (40, "QSK", "Mogę słuchać w przerwach nadawania (BK)"),
            (41, "QSL", "Potwierdzam, przyślę kartę QSL"),
            (42, "QSLL", "Wymieńmy wzajemnie nasze karty QSL"),
            (43, "QSLN", "Nie trzeba wysyłać karty QSL"),
            (44, "QSM", "Proszę powtórzyć (RPT)"),
            (45, "QSN", "Słuszałem was na ... kHz"),
            (46, "QSO", "Łączność, mam połączenie"),
            (47, "QSP", "Przekażcie komunikat do..."),
            (48, "QSQ", "Nadawajcie każde słowo jeden raz"),
            (49, "QSR", "Powtórzcie wasze wywołanie na częstotliwości wywoławczej"),
            (50, "QSS", "Chcemy używać częstotliwości roboczej ..."),
            (51, "QST", "Komunikat dla wszystkich"),
            (52, "QSU", "Nadawajcie na częstotliwości ... kHz"),
            (53, "QSUF", "Proszę o łączność telefoniczną przewodową"),
            (54, "QSV", "Nadawajcie V dla strojenia"),
            (55, "QSW", "Przechodzę na częstotliwość..."),
            (56, "QSX", "Słucham na częstotliwości..."),
            (57, "QSY", "Przejdźcie na częstotliwość..."),
            (58, "QSZ", "Nadawajcie każde słowo dwa razy (lub ... razy)"),
            (59, "QTA", "Anulujcie radiogram nr... , jak gdyby nie był nadany"),
            (60, "QTB", "Nie zgadzam się z waszym obliczeniem ilości słów"),
            (61, "QTC", "Mam dla was wiadomość"),
            (62, "QTG", "Będziemy nadawali po naszym znaku dwie \'kreski\', każda po 10 sek."),
            (63, "QTH", "Moje położenie geograficzne to..."),
            (64, "QTN", "Opuściliśmy to miejsce o ... godzinie"),
            (65, "QTR", "Dokładny czas jest..."),
            (66, "QTS", "Będziemy nadawali do pomiarów nasz sygnał wywoławczy przez ... minut"),
            (67, "QTT", "Sygnał rozpoznawczy który nastąpi jest nałożony na inną transmisję"),
            (68, "QTU", "Pracuję od ... do ..."),
            (69, "QTV", "Nasłuchujcie za nas na częstotliwości ... ( od ... do ... godziny)"),
            (70, "QTX", "Będziemy w pogotowiu do dalszej łączności z wami"),
            (71, "QUA", "Przekazuję wiadomość od ..."),
            (72, "QUB", "Oto żądane wiadomości ..."),
            (73, "QUH", "Ciśnienie barometryczne wynosi ..."),
            (74, "QUM", "Mogę już podjąć normalną pracę"),
            (75, "QWX", "Stan pogody")
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DELETE FROM english_qcode WHERE id BETWEEN 1 AND 75
        SQL);
    }
}

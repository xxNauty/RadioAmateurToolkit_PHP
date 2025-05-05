<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250502133854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Data for Polish phonetic alphabet.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            INSERT INTO polish_phonetic_letter (id, letter, code_word) VALUES 
            (1, "A", "Adam"),
            (2, "B", "Barbara"),
            (3, "C", "Celina"),
            (4, "Ć", "Ćma"),
            (5, "D", "Dorota"),
            (6, "E", "Edward"),
            (7, "F", "Filip"),
            (8, "G", "Gustaw"),
            (9, "H", "Henryk"),
            (10, "I", "Ignacy"),
            (11, "J", "Józef"),
            (12, "K", "Karol"),
            (13, "L", "Ludwik"),
            (14, "Ł", "Łukasz"),
            (15, "M", "Marian"),
            (16, "N", "Nikodem"),
            (17, "Ń", "Koń"),
            (18, "O", "Olga"),
            (19, "Ó", "Ósemka"),
            (20, "P", "Paweł"),
            (21, "R", "Roman"),
            (22, "S", "Stefan"),
            (23, "Ś", "Światowid"),
            (24, "T", "Tadeusz"),
            (25, "U", "Urszula"),
            (26, "W", "Walenty"),
            (27, "X", "Xawery"),
            (28, "Y", "Ypsylon"),
            (29, "Z", "Zygmunt"),
            (30, "Ź", "Źrebak"),
            (31, "Ż", "Żaba")
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}

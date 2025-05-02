<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250502124032 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            INSERT INTO nato_phonetic_letter (id, letter, code_word) VALUES 
            (1, "A", "Alfa"), 
            (2, "B", "Bravo"), 
            (3, "C", "Charlie"), 
            (4, "D", "Delta"), 
            (5, "E", "Echo"), 
            (6, "F", "Foxtrot"), 
            (7, "G", "Golf"), 
            (8, "H", "Hotel"), 
            (9, "I", "India"), 
            (10, "J", "Juliett"), 
            (11, "K", "Kilo"), 
            (12, "L", "Lima"), 
            (13, "M", "Mike"), 
            (14, "N", "November"), 
            (15, "O", "Oscar"), 
            (16, "P", "Papa"), 
            (17, "Q", "Quebec"), 
            (18, "R", "Romeo"), 
            (19, "S", "Sierra"), 
            (20, "T", "Tango"), 
            (21, "U", "Uniform"), 
            (22, "V", "Victor"), 
            (23, "W", "Whiskey"), 
            (24, "X", "X-ray"), 
            (25, "Y", "Yankee"),
            (26, 'Z', 'Zulu')
        SQL);
    }

    public function down(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            DELETE FROM nato_phonetic_letter WHERE id BETWEEN 1 AND 26
        SQL);    }
}

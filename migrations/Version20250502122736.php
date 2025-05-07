<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250502122736 extends AbstractMigration
{
    public function getDescription(): string
    {
        return
            '
                1. Table NATO phonetic alphabet.
            ';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            CREATE TABLE nato_phonetic_letter 
            (
                id INT AUTO_INCREMENT NOT NULL, 
                letter VARCHAR(1) NOT NULL, 
                code_word VARCHAR(10) NOT NULL, 
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            DROP TABLE nato_phonetic_letter
        SQL);
    }
}

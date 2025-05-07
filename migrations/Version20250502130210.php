<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250502130210 extends AbstractMigration
{
    public function getDescription(): string
    {
        return
            '
                1. Table for Polish phonetic alphabet.
            ';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            CREATE TABLE polish_phonetic_letter 
            (
                id INT AUTO_INCREMENT NOT NULL, 
                letter VARCHAR(1) NOT NULL, 
                code_word VARCHAR(14) NOT NULL, 
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            DROP TABLE polish_phonetic_letter
        SQL);
    }
}

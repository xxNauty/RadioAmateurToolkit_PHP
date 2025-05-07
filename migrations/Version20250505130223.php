<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250505130223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return
            '
                1. Table for English version of q-code
            ';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            CREATE TABLE english_qcode 
            (
                id INT AUTO_INCREMENT NOT NULL, 
                code VARCHAR(4) NOT NULL, 
                description VARCHAR(255) NOT NULL, 
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            DROP TABLE english_qcode
        SQL);
    }
}

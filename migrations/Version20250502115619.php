<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250502115619 extends AbstractMigration
{
    public function getDescription(): string
    {
        return
            '
                1. Table for q-codes
                2. Table for messenger messages
            ';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            CREATE TABLE qcode 
            (
                id INT AUTO_INCREMENT NOT NULL, 
                code VARCHAR(4) NOT NULL, 
                description VARCHAR(255) NOT NULL, 
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages 
            (
                id BIGINT AUTO_INCREMENT NOT NULL, 
                body LONGTEXT NOT NULL, 
                headers LONGTEXT NOT NULL, 
                queue_name VARCHAR(190) NOT NULL, 
                created_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', 
                available_at DATETIME NOT NULL COMMENT '(DC2Type:datetime_immutable)', 
                delivered_at DATETIME DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)', 
                INDEX IDX_75EA56E0FB7336F0 (queue_name), 
                INDEX IDX_75EA56E0E3BD61CE (available_at), 
                INDEX IDX_75EA56E016BA31DB (delivered_at), 
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);

    }

    public function down(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            DROP TABLE qcode
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}

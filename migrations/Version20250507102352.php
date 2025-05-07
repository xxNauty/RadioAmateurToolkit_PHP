<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250507102352 extends AbstractMigration
{
    public function getDescription(): string
    {
        return
            '
                1. Table for exam questions
                2. Field correct_answer allows only values A, B or C
                3. Field category allows only values C1, C2, C3 or C4
            ';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            CREATE TABLE exam_question 
            (
                id INT AUTO_INCREMENT NOT NULL, 
                question VARCHAR(255) NOT NULL,
                answer_a VARCHAR(255) NOT NULL, 
                answer_b VARCHAR(255) NOT NULL,
                answer_c VARCHAR(255) NOT NULL, 
                correct_answer VARCHAR(255) NOT NULL CHECK ( correct_answer in ('A', 'B', 'C') ),
                category VARCHAR(255) NOT NULL CHECK ( category in ('C1', 'C2', 'C3', 'C4') ), 
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            DROP TABLE exam_question
        SQL);
    }
}

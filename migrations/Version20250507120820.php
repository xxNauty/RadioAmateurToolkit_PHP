<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250507120820 extends AbstractMigration
{
    public function getDescription(): string
    {
        return
            '
                1. Renames the table "exam_question" to "polish_exam_question".
            ';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            ALTER TABLE exam_question RENAME TO polish_exam_question
        SQL);
    }

    public function down(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            ALTER TABLE polish_exam_question RENAME TO exam_question
        SQL);
    }
}

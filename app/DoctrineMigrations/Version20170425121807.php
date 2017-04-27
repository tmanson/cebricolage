<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170425121807 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Device CHANGE modele modele VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE History CHANGE date date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE Permanence CHANGE startDate startDate DATETIME NOT NULL, CHANGE endDate endDate DATETIME NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Device CHANGE modele modele VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE History CHANGE date date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE Permanence CHANGE startDate startDate DATETIME NOT NULL, CHANGE endDate endDate DATETIME NOT NULL');
    }
}

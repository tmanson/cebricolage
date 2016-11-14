<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160428094522 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
/*
        $this->addSql('CREATE TABLE user_group (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', UNIQUE INDEX UNIQ_8F02BF9D5E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE User (id INT AUTO_INCREMENT NOT NULL, user_user_group INT DEFAULT NULL, username VARCHAR(255) NOT NULL, username_canonical VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, email_canonical VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', credentials_expired TINYINT(1) NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, identifiant VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, phoneNumber VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_2DA1797792FC23A8 (username_canonical), UNIQUE INDEX UNIQ_2DA17977A0D96FBF (email_canonical), INDEX IDX_2DA1797728657971 (user_user_group), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Device (id INT AUTO_INCREMENT NOT NULL, marque_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, modele VARCHAR(255) NOT NULL, disponible TINYINT(1) NOT NULL, disponibleLib VARCHAR(255) NOT NULL, commentaire VARCHAR(1024) NOT NULL, date_achat DATE NOT NULL, INDEX IDX_E83B3B84827B9B2 (marque_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE History (id INT AUTO_INCREMENT NOT NULL, device_id INT NOT NULL, date DATETIME NOT NULL, trace LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Marque (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Reservation (id INT AUTO_INCREMENT NOT NULL, device_id INT DEFAULT NULL, user_id INT DEFAULT NULL, status_id INT DEFAULT NULL, startDate DATETIME NOT NULL, endDate DATETIME NOT NULL, INDEX IDX_C454C68294A4C7D4 (device_id), INDEX IDX_C454C682A76ED395 (user_id), INDEX IDX_C454C6826BF700BD (status_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ReservationStatus (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE User ADD CONSTRAINT FK_2DA1797728657971 FOREIGN KEY (user_user_group) REFERENCES user_group (id)');
        $this->addSql('ALTER TABLE Device ADD CONSTRAINT FK_E83B3B84827B9B2 FOREIGN KEY (marque_id) REFERENCES Marque (id)');
        $this->addSql('ALTER TABLE Reservation ADD CONSTRAINT FK_C454C68294A4C7D4 FOREIGN KEY (device_id) REFERENCES Device (id)');
        $this->addSql('ALTER TABLE Reservation ADD CONSTRAINT FK_C454C682A76ED395 FOREIGN KEY (user_id) REFERENCES User (id)');
        $this->addSql('ALTER TABLE Reservation ADD CONSTRAINT FK_C454C6826BF700BD FOREIGN KEY (status_id) REFERENCES ReservationStatus (id)');*/
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
/*
        $this->addSql('ALTER TABLE User DROP FOREIGN KEY FK_2DA1797728657971');
        $this->addSql('ALTER TABLE Reservation DROP FOREIGN KEY FK_C454C682A76ED395');
        $this->addSql('ALTER TABLE Reservation DROP FOREIGN KEY FK_C454C68294A4C7D4');
        $this->addSql('ALTER TABLE Device DROP FOREIGN KEY FK_E83B3B84827B9B2');
        $this->addSql('ALTER TABLE Reservation DROP FOREIGN KEY FK_C454C6826BF700BD');
        $this->addSql('DROP TABLE user_group');
        $this->addSql('DROP TABLE User');
        $this->addSql('DROP TABLE Device');
        $this->addSql('DROP TABLE History');
        $this->addSql('DROP TABLE Marque');
        $this->addSql('DROP TABLE Reservation');
        $this->addSql('DROP TABLE ReservationStatus');*/
    }
}

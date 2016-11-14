<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160428095114 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
/*
        // Ajout creation des groupes (admin, Membre de la section bricolage, Salaries)
        $this->addSql('INSERT INTO user_group (id, name, roles)
                        VALUES  (1, \'Administrateurs\', \'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}\'),
                                (2, \'Membres de la section bricolage\', \'a:1:{i:0;s:10:"ROLE_ADMIN";}\'),
                                (3, \'Salariés\', \'a:1:{i:0;s:16:"ROLE_READ_DEVICE";}\');');
        // Ajout d'un administrateur (login/mdp : admin/admin)
        $this->addSql('INSERT INTO user (id, user_user_group, username, username_canonical, email, email_canonical, enabled, salt, password, last_login, locked, expired, expires_at, confirmation_token, password_requested_at, roles, credentials_expired, credentials_expire_at, identifiant, firstname, phoneNumber)
                        VALUES (1, 1, \'admin\', \'admin\', \'ce.tsv.bricolage@gmail.com\', \'ce.tsv.bricolage@gmail.com\', 1, \'afidqs5vmyo0sgc04844w0kkccw44cw\', \'TkSEfBvA/7GRBuXYqEd9Z75piRTgJ4reomQTLY5UpjzCS5MQqMpE91iucY9mbWfxjNQSB2CSapS5EptNXvIDpQ==\', \'2016-04-28 10:38:49\', 0, 0, NULL, NULL, NULL, \'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}\', 0, NULL, \'Administrateur\', \'Administrateur\', \'0557298014\');');

        // Status reservation (emprunté, resrvé)
        $this->addSql("INSERT INTO reservationstatus (id, libelle)
                        VALUES  (1, 'Réservé'),
                                (2, 'Emprunté'),
                                (3, 'Restitué');");*/
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');
/*
        $this->addSql('DELETE FROM user_group WHERE id = 1');
        $this->addSql('DELETE FROM user_group WHERE id = 2');
        $this->addSql('DELETE FROM user_group WHERE id = 3');
        $this->addSql('DELETE FROM user WHERE id = 1');
        $this->addSql('DELETE FROM reservationstatus WHERE id = 1');
        $this->addSql('DELETE FROM reservationstatus WHERE id = 2');
        $this->addSql('DELETE FROM reservationstatus WHERE id = 3');*/
    }
}

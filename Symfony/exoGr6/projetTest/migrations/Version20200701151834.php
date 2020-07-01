<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200701151834 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE marque DROP FOREIGN KEY FK_5A6F91CE4A4A3511');
        $this->addSql('DROP INDEX IDX_5A6F91CE4A4A3511 ON marque');
        $this->addSql('ALTER TABLE marque DROP vehicule_id');
        $this->addSql('ALTER TABLE vehicule ADD marque_id INT DEFAULT NULL, DROP marque');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D4827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D4827B9B2 ON vehicule (marque_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE marque ADD vehicule_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE marque ADD CONSTRAINT FK_5A6F91CE4A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehicule (id)');
        $this->addSql('CREATE INDEX IDX_5A6F91CE4A4A3511 ON marque (vehicule_id)');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D4827B9B2');
        $this->addSql('DROP INDEX IDX_292FFF1D4827B9B2 ON vehicule');
        $this->addSql('ALTER TABLE vehicule ADD marque VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP marque_id');
    }
}

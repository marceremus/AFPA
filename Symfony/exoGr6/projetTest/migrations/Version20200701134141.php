<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200701134141 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE energy (id INT AUTO_INCREMENT NOT NULL, nom_energy VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vehicule ADD energy_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DEDDF52D FOREIGN KEY (energy_id) REFERENCES energy (id)');
        $this->addSql('CREATE INDEX IDX_292FFF1DEDDF52D ON vehicule (energy_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DEDDF52D');
        $this->addSql('DROP TABLE energy');
        $this->addSql('DROP INDEX IDX_292FFF1DEDDF52D ON vehicule');
        $this->addSql('ALTER TABLE vehicule DROP energy_id');
    }
}

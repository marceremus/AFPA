<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200701153531 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE options (id INT AUTO_INCREMENT NOT NULL, nom_option VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vehicule ADD options_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D3ADB05F1 FOREIGN KEY (options_id) REFERENCES options (id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D3ADB05F1 ON vehicule (options_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D3ADB05F1');
        $this->addSql('DROP TABLE options');
        $this->addSql('DROP INDEX IDX_292FFF1D3ADB05F1 ON vehicule');
        $this->addSql('ALTER TABLE vehicule DROP options_id');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200701150006 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DC468DD59');
        $this->addSql('CREATE TABLE marque (id INT AUTO_INCREMENT NOT NULL, nom_marque VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE `option`');
        $this->addSql('ALTER TABLE mark DROP FOREIGN KEY FK_6674F2714A4A3511');
        $this->addSql('DROP INDEX IDX_6674F2714A4A3511 ON mark');
        $this->addSql('ALTER TABLE mark DROP vehicule_id');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D7ADA1FB5');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DC54C8C93');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DEDDF52D');
        $this->addSql('DROP INDEX IDX_292FFF1D7ADA1FB5 ON vehicule');
        $this->addSql('DROP INDEX IDX_292FFF1DEDDF52D ON vehicule');
        $this->addSql('DROP INDEX IDX_292FFF1DC54C8C93 ON vehicule');
        $this->addSql('DROP INDEX IDX_292FFF1DC468DD59 ON vehicule');
        $this->addSql('ALTER TABLE vehicule DROP type_id, DROP color_id, DROP optionvehicule_id, DROP energy_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `option` (id INT AUTO_INCREMENT NOT NULL, nom_option VARCHAR(150) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE marque');
        $this->addSql('ALTER TABLE mark ADD vehicule_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mark ADD CONSTRAINT FK_6674F2714A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehicule (id)');
        $this->addSql('CREATE INDEX IDX_6674F2714A4A3511 ON mark (vehicule_id)');
        $this->addSql('ALTER TABLE vehicule ADD type_id INT DEFAULT NULL, ADD color_id INT DEFAULT NULL, ADD optionvehicule_id INT DEFAULT NULL, ADD energy_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D7ADA1FB5 FOREIGN KEY (color_id) REFERENCES color (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DC468DD59 FOREIGN KEY (optionvehicule_id) REFERENCES `option` (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DC54C8C93 FOREIGN KEY (type_id) REFERENCES type_vehicule (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DEDDF52D FOREIGN KEY (energy_id) REFERENCES energy (id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D7ADA1FB5 ON vehicule (color_id)');
        $this->addSql('CREATE INDEX IDX_292FFF1DEDDF52D ON vehicule (energy_id)');
        $this->addSql('CREATE INDEX IDX_292FFF1DC54C8C93 ON vehicule (type_id)');
        $this->addSql('CREATE INDEX IDX_292FFF1DC468DD59 ON vehicule (optionvehicule_id)');
    }
}

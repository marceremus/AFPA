<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200701132930 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule ADD mark_id INT DEFAULT NULL, ADD type_id INT DEFAULT NULL, ADD color_id INT DEFAULT NULL, ADD optionvehicule_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D4290F12B FOREIGN KEY (mark_id) REFERENCES mark (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DC54C8C93 FOREIGN KEY (type_id) REFERENCES type_vehicule (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D7ADA1FB5 FOREIGN KEY (color_id) REFERENCES color (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DC468DD59 FOREIGN KEY (optionvehicule_id) REFERENCES `option` (id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D4290F12B ON vehicule (mark_id)');
        $this->addSql('CREATE INDEX IDX_292FFF1DC54C8C93 ON vehicule (type_id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D7ADA1FB5 ON vehicule (color_id)');
        $this->addSql('CREATE INDEX IDX_292FFF1DC468DD59 ON vehicule (optionvehicule_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D4290F12B');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DC54C8C93');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D7ADA1FB5');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DC468DD59');
        $this->addSql('DROP INDEX IDX_292FFF1D4290F12B ON vehicule');
        $this->addSql('DROP INDEX IDX_292FFF1DC54C8C93 ON vehicule');
        $this->addSql('DROP INDEX IDX_292FFF1D7ADA1FB5 ON vehicule');
        $this->addSql('DROP INDEX IDX_292FFF1DC468DD59 ON vehicule');
        $this->addSql('ALTER TABLE vehicule DROP mark_id, DROP type_id, DROP color_id, DROP optionvehicule_id');
    }
}

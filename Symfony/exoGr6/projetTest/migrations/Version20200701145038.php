<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200701145038 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mark ADD vehicule_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mark ADD CONSTRAINT FK_6674F2714A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehicule (id)');
        $this->addSql('CREATE INDEX IDX_6674F2714A4A3511 ON mark (vehicule_id)');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D4290F12B');
        $this->addSql('DROP INDEX IDX_292FFF1D4290F12B ON vehicule');
        $this->addSql('ALTER TABLE vehicule DROP mark_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mark DROP FOREIGN KEY FK_6674F2714A4A3511');
        $this->addSql('DROP INDEX IDX_6674F2714A4A3511 ON mark');
        $this->addSql('ALTER TABLE mark DROP vehicule_id');
        $this->addSql('ALTER TABLE vehicule ADD mark_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D4290F12B FOREIGN KEY (mark_id) REFERENCES mark (id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D4290F12B ON vehicule (mark_id)');
    }
}

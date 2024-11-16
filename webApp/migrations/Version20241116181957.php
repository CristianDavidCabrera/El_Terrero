<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241116181957 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE team DROP FOREIGN KEY FK_C4E0A61FBF84A342');
        $this->addSql('DROP INDEX IDX_C4E0A61FBF84A342 ON team');
        $this->addSql('ALTER TABLE team CHANGE id_club_id id_club_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F7AA03432 FOREIGN KEY (id_club_id_id) REFERENCES club (id)');
        $this->addSql('CREATE INDEX IDX_C4E0A61F7AA03432 ON team (id_club_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE team DROP FOREIGN KEY FK_C4E0A61F7AA03432');
        $this->addSql('DROP INDEX IDX_C4E0A61F7AA03432 ON team');
        $this->addSql('ALTER TABLE team CHANGE id_club_id_id id_club_id INT NOT NULL');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61FBF84A342 FOREIGN KEY (id_club_id) REFERENCES club (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_C4E0A61FBF84A342 ON team (id_club_id)');
    }
}

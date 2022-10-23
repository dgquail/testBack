<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221021025345 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE noticia ADD region_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE noticia ADD CONSTRAINT FK_31205F9698260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('CREATE INDEX IDX_31205F9698260155 ON noticia (region_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE noticia DROP FOREIGN KEY FK_31205F9698260155');
        $this->addSql('DROP INDEX IDX_31205F9698260155 ON noticia');
        $this->addSql('ALTER TABLE noticia DROP region_id');
    }
}

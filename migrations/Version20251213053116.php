<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251213053116 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE axiom (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(8) NOT NULL, title VARCHAR(255) NOT NULL, normative_level VARCHAR(255) NOT NULL, summary LONGTEXT DEFAULT NULL, is_featured TINYINT(1) NOT NULL, INDEX idx_axiom_normative_level (normative_level), UNIQUE INDEX uniq_axiom_code (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE axiom_evidence (id INT AUTO_INCREMENT NOT NULL, spec_version_id INT NOT NULL, axiom_id INT NOT NULL, conformance_run_id INT DEFAULT NULL, status VARCHAR(255) NOT NULL, note LONGTEXT DEFAULT NULL, url VARCHAR(1024) DEFAULT NULL, ctk_test_ref VARCHAR(120) DEFAULT NULL, INDEX idx_ev_status (status), INDEX idx_ev_spec_version (spec_version_id), INDEX idx_ev_axiom (axiom_id), INDEX idx_ev_conformance_run (conformance_run_id), UNIQUE INDEX uniq_ev_spec_axiom (spec_version_id, axiom_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE conformance_run (id INT AUTO_INCREMENT NOT NULL, spec_version_id INT NOT NULL, passed INT NOT NULL, total INT NOT NULL, status VARCHAR(255) NOT NULL, profile VARCHAR(255) NOT NULL, report_url VARCHAR(1024) DEFAULT NULL, notes LONGTEXT DEFAULT NULL, run_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX idx_conf_status (status), INDEX idx_conf_profile (profile), INDEX idx_conf_spec_version (spec_version_id), INDEX idx_conf_run_at (run_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contract_artifact (id INT AUTO_INCREMENT NOT NULL, spec_version_id INT NOT NULL, url VARCHAR(1024) NOT NULL, format VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, checksum VARCHAR(128) DEFAULT NULL, description LONGTEXT DEFAULT NULL, INDEX idx_contract_spec_version (spec_version_id), INDEX idx_contract_format (format), INDEX idx_contract_type (type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE domain (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, INDEX idx_domain_name (name), UNIQUE INDEX uniq_domain_slug (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE download (id INT AUTO_INCREMENT NOT NULL, spec_version_id INT NOT NULL, label VARCHAR(255) NOT NULL, url VARCHAR(1024) DEFAULT NULL, size VARCHAR(32) DEFAULT NULL, INDEX idx_download_spec_version (spec_version_id), INDEX idx_download_label (label), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE glossary_term (id INT AUTO_INCREMENT NOT NULL, term VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, definition LONGTEXT DEFAULT NULL, INDEX idx_glossary_term (term), UNIQUE INDEX uniq_glossary_slug (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE glossary_term_glossary_term (glossary_term_source INT NOT NULL, glossary_term_target INT NOT NULL, INDEX IDX_D9463B72CEF5147C (glossary_term_source), INDEX IDX_D9463B72D71044F3 (glossary_term_target), PRIMARY KEY(glossary_term_source, glossary_term_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, url VARCHAR(1024) DEFAULT NULL, description LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_2FB3D0EE989D9B62 (slug), INDEX idx_project_name (name), INDEX idx_project_slug (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE registry_entry (id INT AUTO_INCREMENT NOT NULL, `key` VARCHAR(128) NOT NULL, name VARCHAR(255) DEFAULT NULL, type VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, unit VARCHAR(32) DEFAULT NULL, labels_json JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX idx_registry_type (type), INDEX idx_registry_status (status), INDEX idx_registry_name (name), INDEX idx_registry_created_at (created_at), UNIQUE INDEX uniq_registry_key (`key`), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE resource (id INT AUTO_INCREMENT NOT NULL, spec_version_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, url VARCHAR(1024) DEFAULT NULL, description LONGTEXT DEFAULT NULL, feature_order SMALLINT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX idx_resource_type (type), INDEX idx_resource_spec_version (spec_version_id), INDEX idx_resource_created_at (created_at), INDEX idx_resource_feature_order (feature_order), INDEX idx_resource_title (title), UNIQUE INDEX uniq_resource_slug (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE spec_version (id INT AUTO_INCREMENT NOT NULL, specification_id INT NOT NULL, version VARCHAR(50) NOT NULL, release_date DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', status VARCHAR(255) NOT NULL, observability LONGTEXT DEFAULT NULL, changelog LONGTEXT DEFAULT NULL, INDEX idx_sv_specification (specification_id), INDEX idx_sv_status (status), INDEX idx_sv_release_date (release_date), INDEX idx_sv_version (version), UNIQUE INDEX uniq_specification_version (specification_id, version), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specification (id INT AUTO_INCREMENT NOT NULL, default_version_id INT DEFAULT NULL, title VARCHAR(200) NOT NULL, slug VARCHAR(255) NOT NULL, abstract LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_E3F1A9A989D9B62 (slug), UNIQUE INDEX UNIQ_E3F1A9A39F7366 (default_version_id), INDEX idx_spec_title (title), INDEX idx_spec_created_at (created_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) DEFAULT NULL, INDEX idx_tag_name (name), UNIQUE INDEX uniq_tag_slug (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE axiom_evidence ADD CONSTRAINT FK_B6F8050825FDB153 FOREIGN KEY (spec_version_id) REFERENCES spec_version (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE axiom_evidence ADD CONSTRAINT FK_B6F80508C2316CF2 FOREIGN KEY (axiom_id) REFERENCES axiom (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE axiom_evidence ADD CONSTRAINT FK_B6F80508530763D3 FOREIGN KEY (conformance_run_id) REFERENCES conformance_run (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE conformance_run ADD CONSTRAINT FK_D53C297E25FDB153 FOREIGN KEY (spec_version_id) REFERENCES spec_version (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contract_artifact ADD CONSTRAINT FK_DD527BD325FDB153 FOREIGN KEY (spec_version_id) REFERENCES spec_version (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE download ADD CONSTRAINT FK_781A827025FDB153 FOREIGN KEY (spec_version_id) REFERENCES spec_version (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE glossary_term_glossary_term ADD CONSTRAINT FK_D9463B72CEF5147C FOREIGN KEY (glossary_term_source) REFERENCES glossary_term (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE glossary_term_glossary_term ADD CONSTRAINT FK_D9463B72D71044F3 FOREIGN KEY (glossary_term_target) REFERENCES glossary_term (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE resource ADD CONSTRAINT FK_BC91F41625FDB153 FOREIGN KEY (spec_version_id) REFERENCES spec_version (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE spec_version ADD CONSTRAINT FK_2A75581A908E2FFE FOREIGN KEY (specification_id) REFERENCES specification (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE specification ADD CONSTRAINT FK_E3F1A9A39F7366 FOREIGN KEY (default_version_id) REFERENCES spec_version (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE axiom_evidence DROP FOREIGN KEY FK_B6F8050825FDB153');
        $this->addSql('ALTER TABLE axiom_evidence DROP FOREIGN KEY FK_B6F80508C2316CF2');
        $this->addSql('ALTER TABLE axiom_evidence DROP FOREIGN KEY FK_B6F80508530763D3');
        $this->addSql('ALTER TABLE conformance_run DROP FOREIGN KEY FK_D53C297E25FDB153');
        $this->addSql('ALTER TABLE contract_artifact DROP FOREIGN KEY FK_DD527BD325FDB153');
        $this->addSql('ALTER TABLE download DROP FOREIGN KEY FK_781A827025FDB153');
        $this->addSql('ALTER TABLE glossary_term_glossary_term DROP FOREIGN KEY FK_D9463B72CEF5147C');
        $this->addSql('ALTER TABLE glossary_term_glossary_term DROP FOREIGN KEY FK_D9463B72D71044F3');
        $this->addSql('ALTER TABLE resource DROP FOREIGN KEY FK_BC91F41625FDB153');
        $this->addSql('ALTER TABLE spec_version DROP FOREIGN KEY FK_2A75581A908E2FFE');
        $this->addSql('ALTER TABLE specification DROP FOREIGN KEY FK_E3F1A9A39F7366');
        $this->addSql('DROP TABLE axiom');
        $this->addSql('DROP TABLE axiom_evidence');
        $this->addSql('DROP TABLE conformance_run');
        $this->addSql('DROP TABLE contract_artifact');
        $this->addSql('DROP TABLE domain');
        $this->addSql('DROP TABLE download');
        $this->addSql('DROP TABLE glossary_term');
        $this->addSql('DROP TABLE glossary_term_glossary_term');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE registry_entry');
        $this->addSql('DROP TABLE resource');
        $this->addSql('DROP TABLE spec_version');
        $this->addSql('DROP TABLE specification');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

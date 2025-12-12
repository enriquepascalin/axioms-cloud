<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251109075822 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE axiom (id SERIAL NOT NULL, code VARCHAR(8) NOT NULL, title VARCHAR(255) NOT NULL, normative_level VARCHAR(255) NOT NULL, summary TEXT DEFAULT NULL, is_featured BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_axiom_normative_level ON axiom (normative_level)');
        $this->addSql('CREATE UNIQUE INDEX uniq_axiom_code ON axiom (code)');
        $this->addSql('CREATE TABLE axiom_evidence (id SERIAL NOT NULL, spec_version_id INT NOT NULL, axiom_id INT NOT NULL, conformance_run_id INT DEFAULT NULL, status VARCHAR(255) NOT NULL, note TEXT DEFAULT NULL, url VARCHAR(1024) DEFAULT NULL, ctk_test_ref VARCHAR(120) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_ev_status ON axiom_evidence (status)');
        $this->addSql('CREATE INDEX idx_ev_spec_version ON axiom_evidence (spec_version_id)');
        $this->addSql('CREATE INDEX idx_ev_axiom ON axiom_evidence (axiom_id)');
        $this->addSql('CREATE INDEX idx_ev_conformance_run ON axiom_evidence (conformance_run_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_ev_spec_axiom ON axiom_evidence (spec_version_id, axiom_id)');
        $this->addSql('CREATE TABLE conformance_run (id SERIAL NOT NULL, spec_version_id INT NOT NULL, passed INT NOT NULL, total INT NOT NULL, status VARCHAR(255) NOT NULL, profile VARCHAR(255) NOT NULL, report_url VARCHAR(1024) DEFAULT NULL, notes TEXT DEFAULT NULL, run_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_conf_status ON conformance_run (status)');
        $this->addSql('CREATE INDEX idx_conf_profile ON conformance_run (profile)');
        $this->addSql('CREATE INDEX idx_conf_spec_version ON conformance_run (spec_version_id)');
        $this->addSql('CREATE INDEX idx_conf_run_at ON conformance_run (run_at)');
        $this->addSql('COMMENT ON COLUMN conformance_run.run_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE contract_artifact (id SERIAL NOT NULL, spec_version_id INT NOT NULL, url VARCHAR(1024) NOT NULL, format VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, checksum VARCHAR(128) DEFAULT NULL, description TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_contract_spec_version ON contract_artifact (spec_version_id)');
        $this->addSql('CREATE INDEX idx_contract_format ON contract_artifact (format)');
        $this->addSql('CREATE INDEX idx_contract_type ON contract_artifact (type)');
        $this->addSql('CREATE TABLE domain (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_domain_name ON domain (name)');
        $this->addSql('CREATE UNIQUE INDEX uniq_domain_slug ON domain (slug)');
        $this->addSql('CREATE TABLE download (id SERIAL NOT NULL, spec_version_id INT NOT NULL, label VARCHAR(255) NOT NULL, url VARCHAR(1024) DEFAULT NULL, size VARCHAR(32) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_download_spec_version ON download (spec_version_id)');
        $this->addSql('CREATE INDEX idx_download_label ON download (label)');
        $this->addSql('CREATE TABLE glossary_term (id SERIAL NOT NULL, term VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, definition TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_glossary_term ON glossary_term (term)');
        $this->addSql('CREATE UNIQUE INDEX uniq_glossary_slug ON glossary_term (slug)');
        $this->addSql('CREATE TABLE glossary_term_glossary_term (glossary_term_source INT NOT NULL, glossary_term_target INT NOT NULL, PRIMARY KEY(glossary_term_source, glossary_term_target))');
        $this->addSql('CREATE INDEX IDX_D9463B72CEF5147C ON glossary_term_glossary_term (glossary_term_source)');
        $this->addSql('CREATE INDEX IDX_D9463B72D71044F3 ON glossary_term_glossary_term (glossary_term_target)');
        $this->addSql('CREATE TABLE project (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, url VARCHAR(1024) DEFAULT NULL, description TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2FB3D0EE989D9B62 ON project (slug)');
        $this->addSql('CREATE INDEX idx_project_name ON project (name)');
        $this->addSql('CREATE INDEX idx_project_slug ON project (slug)');
        $this->addSql('CREATE TABLE registry_entry (id SERIAL NOT NULL, key VARCHAR(128) NOT NULL, name VARCHAR(255) DEFAULT NULL, type VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, description TEXT DEFAULT NULL, unit VARCHAR(32) DEFAULT NULL, labels_json JSON DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_registry_type ON registry_entry (type)');
        $this->addSql('CREATE INDEX idx_registry_status ON registry_entry (status)');
        $this->addSql('CREATE INDEX idx_registry_name ON registry_entry (name)');
        $this->addSql('CREATE INDEX idx_registry_created_at ON registry_entry (created_at)');
        $this->addSql('CREATE UNIQUE INDEX uniq_registry_key ON registry_entry (key)');
        $this->addSql('COMMENT ON COLUMN registry_entry.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN registry_entry.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE resource (id SERIAL NOT NULL, spec_version_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, url VARCHAR(1024) DEFAULT NULL, description TEXT DEFAULT NULL, feature_order SMALLINT DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_resource_type ON resource (type)');
        $this->addSql('CREATE INDEX idx_resource_spec_version ON resource (spec_version_id)');
        $this->addSql('CREATE INDEX idx_resource_created_at ON resource (created_at)');
        $this->addSql('CREATE INDEX idx_resource_feature_order ON resource (feature_order)');
        $this->addSql('CREATE INDEX idx_resource_title ON resource (title)');
        $this->addSql('CREATE UNIQUE INDEX uniq_resource_slug ON resource (slug)');
        $this->addSql('COMMENT ON COLUMN resource.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN resource.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE spec_version (id SERIAL NOT NULL, specification_id INT NOT NULL, version VARCHAR(50) NOT NULL, release_date TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, status VARCHAR(255) NOT NULL, observability TEXT DEFAULT NULL, changelog TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_sv_specification ON spec_version (specification_id)');
        $this->addSql('CREATE INDEX idx_sv_status ON spec_version (status)');
        $this->addSql('CREATE INDEX idx_sv_release_date ON spec_version (release_date)');
        $this->addSql('CREATE INDEX idx_sv_version ON spec_version (version)');
        $this->addSql('CREATE UNIQUE INDEX uniq_specification_version ON spec_version (specification_id, version)');
        $this->addSql('COMMENT ON COLUMN spec_version.release_date IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE specification (id SERIAL NOT NULL, default_version_id INT DEFAULT NULL, title VARCHAR(200) NOT NULL, slug VARCHAR(255) NOT NULL, abstract TEXT DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E3F1A9A989D9B62 ON specification (slug)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E3F1A9A39F7366 ON specification (default_version_id)');
        $this->addSql('CREATE INDEX idx_spec_title ON specification (title)');
        $this->addSql('CREATE INDEX idx_spec_created_at ON specification (created_at)');
        $this->addSql('COMMENT ON COLUMN specification.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN specification.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE tag (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, slug VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_tag_name ON tag (name)');
        $this->addSql('CREATE UNIQUE INDEX uniq_tag_slug ON tag (slug)');
        $this->addSql('CREATE TABLE "user" (id SERIAL NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON "user" (email)');
        $this->addSql('CREATE TABLE messenger_messages (id BIGSERIAL NOT NULL, body TEXT NOT NULL, headers TEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, available_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, delivered_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
        $this->addSql('COMMENT ON COLUMN messenger_messages.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN messenger_messages.available_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN messenger_messages.delivered_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE OR REPLACE FUNCTION notify_messenger_messages() RETURNS TRIGGER AS $$
            BEGIN
                PERFORM pg_notify(\'messenger_messages\', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$ LANGUAGE plpgsql;');
        $this->addSql('DROP TRIGGER IF EXISTS notify_trigger ON messenger_messages;');
        $this->addSql('CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON messenger_messages FOR EACH ROW EXECUTE PROCEDURE notify_messenger_messages();');
        $this->addSql('ALTER TABLE axiom_evidence ADD CONSTRAINT FK_B6F8050825FDB153 FOREIGN KEY (spec_version_id) REFERENCES spec_version (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE axiom_evidence ADD CONSTRAINT FK_B6F80508C2316CF2 FOREIGN KEY (axiom_id) REFERENCES axiom (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE axiom_evidence ADD CONSTRAINT FK_B6F80508530763D3 FOREIGN KEY (conformance_run_id) REFERENCES conformance_run (id) ON DELETE SET NULL NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE conformance_run ADD CONSTRAINT FK_D53C297E25FDB153 FOREIGN KEY (spec_version_id) REFERENCES spec_version (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE contract_artifact ADD CONSTRAINT FK_DD527BD325FDB153 FOREIGN KEY (spec_version_id) REFERENCES spec_version (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE download ADD CONSTRAINT FK_781A827025FDB153 FOREIGN KEY (spec_version_id) REFERENCES spec_version (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE glossary_term_glossary_term ADD CONSTRAINT FK_D9463B72CEF5147C FOREIGN KEY (glossary_term_source) REFERENCES glossary_term (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE glossary_term_glossary_term ADD CONSTRAINT FK_D9463B72D71044F3 FOREIGN KEY (glossary_term_target) REFERENCES glossary_term (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE resource ADD CONSTRAINT FK_BC91F41625FDB153 FOREIGN KEY (spec_version_id) REFERENCES spec_version (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE spec_version ADD CONSTRAINT FK_2A75581A908E2FFE FOREIGN KEY (specification_id) REFERENCES specification (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE specification ADD CONSTRAINT FK_E3F1A9A39F7366 FOREIGN KEY (default_version_id) REFERENCES spec_version (id) ON DELETE SET NULL NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE axiom_evidence DROP CONSTRAINT FK_B6F8050825FDB153');
        $this->addSql('ALTER TABLE axiom_evidence DROP CONSTRAINT FK_B6F80508C2316CF2');
        $this->addSql('ALTER TABLE axiom_evidence DROP CONSTRAINT FK_B6F80508530763D3');
        $this->addSql('ALTER TABLE conformance_run DROP CONSTRAINT FK_D53C297E25FDB153');
        $this->addSql('ALTER TABLE contract_artifact DROP CONSTRAINT FK_DD527BD325FDB153');
        $this->addSql('ALTER TABLE download DROP CONSTRAINT FK_781A827025FDB153');
        $this->addSql('ALTER TABLE glossary_term_glossary_term DROP CONSTRAINT FK_D9463B72CEF5147C');
        $this->addSql('ALTER TABLE glossary_term_glossary_term DROP CONSTRAINT FK_D9463B72D71044F3');
        $this->addSql('ALTER TABLE resource DROP CONSTRAINT FK_BC91F41625FDB153');
        $this->addSql('ALTER TABLE spec_version DROP CONSTRAINT FK_2A75581A908E2FFE');
        $this->addSql('ALTER TABLE specification DROP CONSTRAINT FK_E3F1A9A39F7366');
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
        $this->addSql('DROP TABLE "user"');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

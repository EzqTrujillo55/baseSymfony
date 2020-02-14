<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191226133548 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD12469DE2');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE product');
        $this->addSql('ALTER TABLE gc_at_exportacion_codigo_regimen CHANGE at_cr_codigo at_cr_codigo VARCHAR(5) DEFAULT \'\'\'0\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE gc_at_exportacion_tipo_ingreso CHANGE at_et_codigo at_et_codigo VARCHAR(5) DEFAULT \'\'\'\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE gc_at_forma_pago CHANGE at_fp_codigo at_fp_codigo VARCHAR(5) DEFAULT \'\'\'0\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE gc_at_pais CHANGE at_pa_codigo at_pa_codigo VARCHAR(5) DEFAULT \'\'\'0\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE gc_at_pais_paraiso CHANGE at_pa_pa_codigo at_pa_pa_codigo VARCHAR(5) DEFAULT \'\'\'0\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE gc_at_sustento_comprobante CHANGE at_sc_id at_sc_id VARCHAR(10) DEFAULT \'\'\'0\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE gc_at_tipo_comprobante CHANGE at_tc_id at_tc_id VARCHAR(10) DEFAULT \'\'\'0\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE gc_factura_detalle CHANGE fa_de_precio_costo fa_de_precio_costo DOUBLE PRECISION DEFAULT NULL, CHANGE fa_id_devolucion fa_id_devolucion BIGINT DEFAULT NULL, CHANGE fa_de_orden fa_de_orden INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gc_perfil CHANGE empresa empresa BIGINT DEFAULT NULL');
        $this->addSql('ALTER TABLE gc_persona CHANGE ba_id ba_id BIGINT DEFAULT NULL, CHANGE pe_pendiente_liquidacion pe_pendiente_liquidacion TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE gc_persona_estado_civil CHANGE ec_id ec_id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE gc_persona_origen_ingreso CHANGE oi_codigo oi_codigo VARCHAR(5) DEFAULT \'\'\'\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE gc_persona_sexo CHANGE sx_id sx_id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE gc_sri_ciudad CHANGE sc_codigo_sri sc_codigo_sri VARCHAR(5) DEFAULT \'\'\'0\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE gc_sri_gastos_personales CHANGE sg_codigo sg_codigo VARCHAR(5) DEFAULT \'\'\'0\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE gc_sri_provincia CHANGE sp_codigo_sri sp_codigo_sri VARCHAR(5) DEFAULT \'\'\'0\'\'\' NOT NULL');
        $this->addSql('ALTER TABLE gc_sri_tipo_ambiente CHANGE ta_id ta_id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE gc_sri_tipo_emision CHANGE te_id te_id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE gc_tarjeta_diferido_comision CHANGE tdc_plazo tdc_plazo DOUBLE PRECISION DEFAULT NULL, CHANGE tdc_comision tdc_comision DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE gc_tarjeta_diferido_interes CHANGE tdi_plazo tdi_plazo DOUBLE PRECISION DEFAULT NULL, CHANGE tdi_comision tdi_comision DOUBLE PRECISION DEFAULT NULL, CHANGE tdi_interes tdi_interes DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE gc_tipo_documento CHANGE td_id td_id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE materia CHANGE registro_id registro_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE matricula CHANGE estudiante_id estudiante_id INT DEFAULT NULL, CHANGE materia_id materia_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649D48A2F7C');
        $this->addSql('DROP INDEX IDX_8D93D649D48A2F7C ON user');
        $this->addSql('ALTER TABLE user ADD perfil BIGINT UNSIGNED DEFAULT NULL, DROP config, DROP empleado, CHANGE empresa empresa BIGINT DEFAULT NULL, CHANGE salt salt VARCHAR(255) DEFAULT NULL, CHANGE last_login last_login DATETIME DEFAULT NULL, CHANGE confirmation_token confirmation_token VARCHAR(180) DEFAULT NULL, CHANGE password_requested_at password_requested_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64996657647 FOREIGN KEY (perfil) REFERENCES gc_perfil (pr_id)');
        $this->addSql('CREATE INDEX IDX_8D93D64996657647 ON user (perfil)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(80) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, category_id INT NOT NULL, name VARCHAR(150) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, price DOUBLE PRECISION NOT NULL, INDEX IDX_D34A04AD12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE gc_at_exportacion_codigo_regimen CHANGE at_cr_codigo at_cr_codigo VARCHAR(5) CHARACTER SET latin1 DEFAULT \'\'\'\'\'\'\'0\'\'\'\'\'\'\' NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE gc_at_exportacion_tipo_ingreso CHANGE at_et_codigo at_et_codigo VARCHAR(5) CHARACTER SET latin1 DEFAULT \'\'\'\'\'\'\'\'\'\'\'\'\'\' NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE gc_at_forma_pago CHANGE at_fp_codigo at_fp_codigo VARCHAR(5) CHARACTER SET latin1 DEFAULT \'\'\'\'\'\'\'0\'\'\'\'\'\'\' NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE gc_at_pais CHANGE at_pa_codigo at_pa_codigo VARCHAR(5) CHARACTER SET latin1 DEFAULT \'\'\'\'\'\'\'0\'\'\'\'\'\'\' NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE gc_at_pais_paraiso CHANGE at_pa_pa_codigo at_pa_pa_codigo VARCHAR(5) CHARACTER SET latin1 DEFAULT \'\'\'\'\'\'\'0\'\'\'\'\'\'\' NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE gc_at_sustento_comprobante CHANGE at_sc_id at_sc_id VARCHAR(10) CHARACTER SET latin1 DEFAULT \'\'\'\'\'\'\'0\'\'\'\'\'\'\' NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE gc_at_tipo_comprobante CHANGE at_tc_id at_tc_id VARCHAR(10) CHARACTER SET latin1 DEFAULT \'\'\'\'\'\'\'0\'\'\'\'\'\'\' NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE gc_factura_detalle CHANGE fa_de_precio_costo fa_de_precio_costo DOUBLE PRECISION DEFAULT \'NULL\', CHANGE fa_id_devolucion fa_id_devolucion BIGINT DEFAULT NULL, CHANGE fa_de_orden fa_de_orden INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gc_perfil CHANGE empresa empresa BIGINT DEFAULT NULL');
        $this->addSql('ALTER TABLE gc_persona CHANGE ba_id ba_id BIGINT DEFAULT NULL, CHANGE pe_pendiente_liquidacion pe_pendiente_liquidacion TINYINT(1) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE gc_persona_estado_civil CHANGE ec_id ec_id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE gc_persona_origen_ingreso CHANGE oi_codigo oi_codigo VARCHAR(5) CHARACTER SET latin1 DEFAULT \'\'\'\'\'\'\'\'\'\'\'\'\'\' NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE gc_persona_sexo CHANGE sx_id sx_id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE gc_sri_ciudad CHANGE sc_codigo_sri sc_codigo_sri VARCHAR(5) CHARACTER SET latin1 DEFAULT \'\'\'\'\'\'\'0\'\'\'\'\'\'\' NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE gc_sri_gastos_personales CHANGE sg_codigo sg_codigo VARCHAR(5) CHARACTER SET latin1 DEFAULT \'\'\'\'\'\'\'0\'\'\'\'\'\'\' NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE gc_sri_provincia CHANGE sp_codigo_sri sp_codigo_sri VARCHAR(5) CHARACTER SET latin1 DEFAULT \'\'\'\'\'\'\'0\'\'\'\'\'\'\' NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE gc_sri_tipo_ambiente CHANGE ta_id ta_id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE gc_sri_tipo_emision CHANGE te_id te_id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE gc_tarjeta_diferido_comision CHANGE tdc_plazo tdc_plazo DOUBLE PRECISION DEFAULT \'NULL\', CHANGE tdc_comision tdc_comision DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE gc_tarjeta_diferido_interes CHANGE tdi_plazo tdi_plazo DOUBLE PRECISION DEFAULT \'NULL\', CHANGE tdi_comision tdi_comision DOUBLE PRECISION DEFAULT \'NULL\', CHANGE tdi_interes tdi_interes DOUBLE PRECISION DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE gc_tipo_documento CHANGE td_id td_id TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE materia CHANGE registro_id registro_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE matricula CHANGE estudiante_id estudiante_id INT DEFAULT NULL, CHANGE materia_id materia_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64996657647');
        $this->addSql('DROP INDEX IDX_8D93D64996657647 ON user');
        $this->addSql('ALTER TABLE user ADD config BIGINT UNSIGNED DEFAULT NULL, ADD empleado BIGINT DEFAULT NULL, DROP perfil, CHANGE empresa empresa BIGINT DEFAULT NULL, CHANGE salt salt VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE last_login last_login DATETIME DEFAULT \'NULL\', CHANGE confirmation_token confirmation_token VARCHAR(180) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE password_requested_at password_requested_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649D48A2F7C FOREIGN KEY (config) REFERENCES gc_usuario (us_id)');
        $this->addSql('CREATE INDEX IDX_8D93D649D48A2F7C ON user (config)');
    }
}

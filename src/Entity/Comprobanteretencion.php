<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comprobanteretencion
 *
 * @ORM\Table(name="_comprobanteretencion")
 * @ORM\Entity
 */
class Comprobanteretencion
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="em_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $emId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="impuestos_impuesto_codDocSustento_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $impuestosImpuestoCoddocsustento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="impuestos_impuesto_numDocSustento_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $impuestosImpuestoNumdocsustento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_direccion_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalDireccion = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_email_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalEmail = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_telefono_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalTelefono = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoCompRetencion_contribuyenteEspecial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infocompretencionContribuyenteespecial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoCompRetencion_dirEstablecimiento_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infocompretencionDirestablecimiento = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="infoCompRetencion_fechaEmision_", type="date", nullable=true, options={"default"="NULL"})
     */
    private $infocompretencionFechaemision = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoCompRetencion_identificacionSujetoRetenido_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infocompretencionIdentificacionsujetoretenido = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoCompRetencion_obligadoContabilidad_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infocompretencionObligadocontabilidad = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoCompRetencion_periodoFiscal_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infocompretencionPeriodofiscal = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoCompRetencion_razonSocialSujetoRetenido_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infocompretencionRazonsocialsujetoretenido = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_ambiente_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaAmbiente = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_claveAcceso_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaClaveacceso = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_dirMatriz_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaDirmatriz = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_estab_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaEstab = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_nombreComercial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaNombrecomercial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_ptoEmi_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaPtoemi = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_razonSocial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaRazonsocial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_ruc_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaRuc = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_secuencial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaSecuencial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_tipoEmision_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaTipoemision = 'NULL';

    /**
     * @var int
     *
     * @ORM\Column(name="idCr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcr;

    public function getEmId(): ?int
    {
        return $this->emId;
    }

    public function setEmId(?int $emId): self
    {
        $this->emId = $emId;

        return $this;
    }

    public function getImpuestosImpuestoCoddocsustento(): ?string
    {
        return $this->impuestosImpuestoCoddocsustento;
    }

    public function setImpuestosImpuestoCoddocsustento(?string $impuestosImpuestoCoddocsustento): self
    {
        $this->impuestosImpuestoCoddocsustento = $impuestosImpuestoCoddocsustento;

        return $this;
    }

    public function getImpuestosImpuestoNumdocsustento(): ?string
    {
        return $this->impuestosImpuestoNumdocsustento;
    }

    public function setImpuestosImpuestoNumdocsustento(?string $impuestosImpuestoNumdocsustento): self
    {
        $this->impuestosImpuestoNumdocsustento = $impuestosImpuestoNumdocsustento;

        return $this;
    }

    public function getInfoadicionalCampoadicionalDireccion(): ?string
    {
        return $this->infoadicionalCampoadicionalDireccion;
    }

    public function setInfoadicionalCampoadicionalDireccion(?string $infoadicionalCampoadicionalDireccion): self
    {
        $this->infoadicionalCampoadicionalDireccion = $infoadicionalCampoadicionalDireccion;

        return $this;
    }

    public function getInfoadicionalCampoadicionalEmail(): ?string
    {
        return $this->infoadicionalCampoadicionalEmail;
    }

    public function setInfoadicionalCampoadicionalEmail(?string $infoadicionalCampoadicionalEmail): self
    {
        $this->infoadicionalCampoadicionalEmail = $infoadicionalCampoadicionalEmail;

        return $this;
    }

    public function getInfoadicionalCampoadicionalTelefono(): ?string
    {
        return $this->infoadicionalCampoadicionalTelefono;
    }

    public function setInfoadicionalCampoadicionalTelefono(?string $infoadicionalCampoadicionalTelefono): self
    {
        $this->infoadicionalCampoadicionalTelefono = $infoadicionalCampoadicionalTelefono;

        return $this;
    }

    public function getInfocompretencionContribuyenteespecial(): ?string
    {
        return $this->infocompretencionContribuyenteespecial;
    }

    public function setInfocompretencionContribuyenteespecial(?string $infocompretencionContribuyenteespecial): self
    {
        $this->infocompretencionContribuyenteespecial = $infocompretencionContribuyenteespecial;

        return $this;
    }

    public function getInfocompretencionDirestablecimiento(): ?string
    {
        return $this->infocompretencionDirestablecimiento;
    }

    public function setInfocompretencionDirestablecimiento(?string $infocompretencionDirestablecimiento): self
    {
        $this->infocompretencionDirestablecimiento = $infocompretencionDirestablecimiento;

        return $this;
    }

    public function getInfocompretencionFechaemision(): ?\DateTimeInterface
    {
        return $this->infocompretencionFechaemision;
    }

    public function setInfocompretencionFechaemision(?\DateTimeInterface $infocompretencionFechaemision): self
    {
        $this->infocompretencionFechaemision = $infocompretencionFechaemision;

        return $this;
    }

    public function getInfocompretencionIdentificacionsujetoretenido(): ?string
    {
        return $this->infocompretencionIdentificacionsujetoretenido;
    }

    public function setInfocompretencionIdentificacionsujetoretenido(?string $infocompretencionIdentificacionsujetoretenido): self
    {
        $this->infocompretencionIdentificacionsujetoretenido = $infocompretencionIdentificacionsujetoretenido;

        return $this;
    }

    public function getInfocompretencionObligadocontabilidad(): ?string
    {
        return $this->infocompretencionObligadocontabilidad;
    }

    public function setInfocompretencionObligadocontabilidad(?string $infocompretencionObligadocontabilidad): self
    {
        $this->infocompretencionObligadocontabilidad = $infocompretencionObligadocontabilidad;

        return $this;
    }

    public function getInfocompretencionPeriodofiscal(): ?string
    {
        return $this->infocompretencionPeriodofiscal;
    }

    public function setInfocompretencionPeriodofiscal(?string $infocompretencionPeriodofiscal): self
    {
        $this->infocompretencionPeriodofiscal = $infocompretencionPeriodofiscal;

        return $this;
    }

    public function getInfocompretencionRazonsocialsujetoretenido(): ?string
    {
        return $this->infocompretencionRazonsocialsujetoretenido;
    }

    public function setInfocompretencionRazonsocialsujetoretenido(?string $infocompretencionRazonsocialsujetoretenido): self
    {
        $this->infocompretencionRazonsocialsujetoretenido = $infocompretencionRazonsocialsujetoretenido;

        return $this;
    }

    public function getInfotributariaAmbiente(): ?string
    {
        return $this->infotributariaAmbiente;
    }

    public function setInfotributariaAmbiente(?string $infotributariaAmbiente): self
    {
        $this->infotributariaAmbiente = $infotributariaAmbiente;

        return $this;
    }

    public function getInfotributariaClaveacceso(): ?string
    {
        return $this->infotributariaClaveacceso;
    }

    public function setInfotributariaClaveacceso(?string $infotributariaClaveacceso): self
    {
        $this->infotributariaClaveacceso = $infotributariaClaveacceso;

        return $this;
    }

    public function getInfotributariaDirmatriz(): ?string
    {
        return $this->infotributariaDirmatriz;
    }

    public function setInfotributariaDirmatriz(?string $infotributariaDirmatriz): self
    {
        $this->infotributariaDirmatriz = $infotributariaDirmatriz;

        return $this;
    }

    public function getInfotributariaEstab(): ?string
    {
        return $this->infotributariaEstab;
    }

    public function setInfotributariaEstab(?string $infotributariaEstab): self
    {
        $this->infotributariaEstab = $infotributariaEstab;

        return $this;
    }

    public function getInfotributariaNombrecomercial(): ?string
    {
        return $this->infotributariaNombrecomercial;
    }

    public function setInfotributariaNombrecomercial(?string $infotributariaNombrecomercial): self
    {
        $this->infotributariaNombrecomercial = $infotributariaNombrecomercial;

        return $this;
    }

    public function getInfotributariaPtoemi(): ?string
    {
        return $this->infotributariaPtoemi;
    }

    public function setInfotributariaPtoemi(?string $infotributariaPtoemi): self
    {
        $this->infotributariaPtoemi = $infotributariaPtoemi;

        return $this;
    }

    public function getInfotributariaRazonsocial(): ?string
    {
        return $this->infotributariaRazonsocial;
    }

    public function setInfotributariaRazonsocial(?string $infotributariaRazonsocial): self
    {
        $this->infotributariaRazonsocial = $infotributariaRazonsocial;

        return $this;
    }

    public function getInfotributariaRuc(): ?string
    {
        return $this->infotributariaRuc;
    }

    public function setInfotributariaRuc(?string $infotributariaRuc): self
    {
        $this->infotributariaRuc = $infotributariaRuc;

        return $this;
    }

    public function getInfotributariaSecuencial(): ?string
    {
        return $this->infotributariaSecuencial;
    }

    public function setInfotributariaSecuencial(?string $infotributariaSecuencial): self
    {
        $this->infotributariaSecuencial = $infotributariaSecuencial;

        return $this;
    }

    public function getInfotributariaTipoemision(): ?string
    {
        return $this->infotributariaTipoemision;
    }

    public function setInfotributariaTipoemision(?string $infotributariaTipoemision): self
    {
        $this->infotributariaTipoemision = $infotributariaTipoemision;

        return $this;
    }

    public function getIdcr(): ?int
    {
        return $this->idcr;
    }


}

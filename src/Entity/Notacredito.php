<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notacredito
 *
 * @ORM\Table(name="_notacredito")
 * @ORM\Entity
 */
class Notacredito
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_notacredito", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotacredito;

    /**
     * @var int|null
     *
     * @ORM\Column(name="em_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $emId = 'NULL';

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
     * @ORM\Column(name="infoNotaCredito_codDocModificado_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoCoddocmodificado = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaCredito_contribuyenteEspecial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoContribuyenteespecial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaCredito_dirEstablecimiento_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoDirestablecimiento = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="infoNotaCredito_fechaEmision_", type="date", nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoFechaemision = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="infoNotaCredito_fechaEmisionDocSustento_", type="date", nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoFechaemisiondocsustento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaCredito_identificacionComprador_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoIdentificacioncomprador = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaCredito_moneda_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoMoneda = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaCredito_motivo_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoMotivo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaCredito_numDocModificado_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoNumdocmodificado = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaCredito_obligadoContabilidad_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoObligadocontabilidad = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaCredito_razonSocialComprador_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoRazonsocialcomprador = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaCredito_totalConImpuestos_totalImpuesto_valor_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoTotalconimpuestosTotalimpuestoValor = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaCredito_totalSinImpuestos_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoTotalsinimpuestos = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaCredito_valorModificacion_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infonotacreditoValormodificacion = 'NULL';

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

    public function getIdNotacredito(): ?int
    {
        return $this->idNotacredito;
    }

    public function getEmId(): ?int
    {
        return $this->emId;
    }

    public function setEmId(?int $emId): self
    {
        $this->emId = $emId;

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

    public function getInfonotacreditoCoddocmodificado(): ?string
    {
        return $this->infonotacreditoCoddocmodificado;
    }

    public function setInfonotacreditoCoddocmodificado(?string $infonotacreditoCoddocmodificado): self
    {
        $this->infonotacreditoCoddocmodificado = $infonotacreditoCoddocmodificado;

        return $this;
    }

    public function getInfonotacreditoContribuyenteespecial(): ?string
    {
        return $this->infonotacreditoContribuyenteespecial;
    }

    public function setInfonotacreditoContribuyenteespecial(?string $infonotacreditoContribuyenteespecial): self
    {
        $this->infonotacreditoContribuyenteespecial = $infonotacreditoContribuyenteespecial;

        return $this;
    }

    public function getInfonotacreditoDirestablecimiento(): ?string
    {
        return $this->infonotacreditoDirestablecimiento;
    }

    public function setInfonotacreditoDirestablecimiento(?string $infonotacreditoDirestablecimiento): self
    {
        $this->infonotacreditoDirestablecimiento = $infonotacreditoDirestablecimiento;

        return $this;
    }

    public function getInfonotacreditoFechaemision(): ?\DateTimeInterface
    {
        return $this->infonotacreditoFechaemision;
    }

    public function setInfonotacreditoFechaemision(?\DateTimeInterface $infonotacreditoFechaemision): self
    {
        $this->infonotacreditoFechaemision = $infonotacreditoFechaemision;

        return $this;
    }

    public function getInfonotacreditoFechaemisiondocsustento(): ?\DateTimeInterface
    {
        return $this->infonotacreditoFechaemisiondocsustento;
    }

    public function setInfonotacreditoFechaemisiondocsustento(?\DateTimeInterface $infonotacreditoFechaemisiondocsustento): self
    {
        $this->infonotacreditoFechaemisiondocsustento = $infonotacreditoFechaemisiondocsustento;

        return $this;
    }

    public function getInfonotacreditoIdentificacioncomprador(): ?string
    {
        return $this->infonotacreditoIdentificacioncomprador;
    }

    public function setInfonotacreditoIdentificacioncomprador(?string $infonotacreditoIdentificacioncomprador): self
    {
        $this->infonotacreditoIdentificacioncomprador = $infonotacreditoIdentificacioncomprador;

        return $this;
    }

    public function getInfonotacreditoMoneda(): ?string
    {
        return $this->infonotacreditoMoneda;
    }

    public function setInfonotacreditoMoneda(?string $infonotacreditoMoneda): self
    {
        $this->infonotacreditoMoneda = $infonotacreditoMoneda;

        return $this;
    }

    public function getInfonotacreditoMotivo(): ?string
    {
        return $this->infonotacreditoMotivo;
    }

    public function setInfonotacreditoMotivo(?string $infonotacreditoMotivo): self
    {
        $this->infonotacreditoMotivo = $infonotacreditoMotivo;

        return $this;
    }

    public function getInfonotacreditoNumdocmodificado(): ?string
    {
        return $this->infonotacreditoNumdocmodificado;
    }

    public function setInfonotacreditoNumdocmodificado(?string $infonotacreditoNumdocmodificado): self
    {
        $this->infonotacreditoNumdocmodificado = $infonotacreditoNumdocmodificado;

        return $this;
    }

    public function getInfonotacreditoObligadocontabilidad(): ?string
    {
        return $this->infonotacreditoObligadocontabilidad;
    }

    public function setInfonotacreditoObligadocontabilidad(?string $infonotacreditoObligadocontabilidad): self
    {
        $this->infonotacreditoObligadocontabilidad = $infonotacreditoObligadocontabilidad;

        return $this;
    }

    public function getInfonotacreditoRazonsocialcomprador(): ?string
    {
        return $this->infonotacreditoRazonsocialcomprador;
    }

    public function setInfonotacreditoRazonsocialcomprador(?string $infonotacreditoRazonsocialcomprador): self
    {
        $this->infonotacreditoRazonsocialcomprador = $infonotacreditoRazonsocialcomprador;

        return $this;
    }

    public function getInfonotacreditoTotalconimpuestosTotalimpuestoValor(): ?string
    {
        return $this->infonotacreditoTotalconimpuestosTotalimpuestoValor;
    }

    public function setInfonotacreditoTotalconimpuestosTotalimpuestoValor(?string $infonotacreditoTotalconimpuestosTotalimpuestoValor): self
    {
        $this->infonotacreditoTotalconimpuestosTotalimpuestoValor = $infonotacreditoTotalconimpuestosTotalimpuestoValor;

        return $this;
    }

    public function getInfonotacreditoTotalsinimpuestos(): ?string
    {
        return $this->infonotacreditoTotalsinimpuestos;
    }

    public function setInfonotacreditoTotalsinimpuestos(?string $infonotacreditoTotalsinimpuestos): self
    {
        $this->infonotacreditoTotalsinimpuestos = $infonotacreditoTotalsinimpuestos;

        return $this;
    }

    public function getInfonotacreditoValormodificacion(): ?string
    {
        return $this->infonotacreditoValormodificacion;
    }

    public function setInfonotacreditoValormodificacion(?string $infonotacreditoValormodificacion): self
    {
        $this->infonotacreditoValormodificacion = $infonotacreditoValormodificacion;

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


}

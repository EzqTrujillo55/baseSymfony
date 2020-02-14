<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAnticipoDetalle
 *
 * @ORM\Table(name="gc_anticipo_detalle", indexes={@ORM\Index(name="ForeingKeyAnticipo", columns={"em_id", "an_id"})})
 * @ORM\Entity
 */
class GcAnticipoDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="an_de_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $anDeId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="an_id", type="bigint", nullable=false)
     */
    private $anId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fc_id", type="bigint", nullable=false)
     */
    private $fcId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="an_de_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $anDeValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="an_de_institucion", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $anDeInstitucion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_de_cuenta", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $anDeCuenta = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_de_documento", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $anDeDocumento = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="an_de_fecha", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $anDeFecha = '\'0000-00-00 00:00:00\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="an_de_fecha_cobro", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $anDeFechaCobro = '\'0000-00-00 00:00:00\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_de_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $anDeObservacion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id", type="bigint", nullable=false)
     */
    private $cuId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_comision", type="bigint", nullable=false)
     */
    private $cuIdComision = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="an_de_porcentaje_comision", type="float", precision=10, scale=0, nullable=false)
     */
    private $anDePorcentajeComision = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="an_de_valor_comision", type="float", precision=10, scale=0, nullable=false)
     */
    private $anDeValorComision = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="an_de_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $anDeEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_de_papeleta", type="string", length=25, nullable=false, options={"default"="'0'"})
     */
    private $anDePapeleta = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="an_de_beneficiario", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $anDeBeneficiario = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="an_de_fecha_registro", type="date", nullable=false, options={"default"="'2010-01-01'"})
     */
    private $anDeFechaRegistro = '\'2010-01-01\'';

    public function getAnDeId(): ?string
    {
        return $this->anDeId;
    }

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function setEmId(string $emId): self
    {
        $this->emId = $emId;

        return $this;
    }

    public function getAnId(): ?string
    {
        return $this->anId;
    }

    public function setAnId(string $anId): self
    {
        $this->anId = $anId;

        return $this;
    }

    public function getFcId(): ?string
    {
        return $this->fcId;
    }

    public function setFcId(string $fcId): self
    {
        $this->fcId = $fcId;

        return $this;
    }

    public function getAnDeValor(): ?float
    {
        return $this->anDeValor;
    }

    public function setAnDeValor(float $anDeValor): self
    {
        $this->anDeValor = $anDeValor;

        return $this;
    }

    public function getAnDeInstitucion(): ?string
    {
        return $this->anDeInstitucion;
    }

    public function setAnDeInstitucion(string $anDeInstitucion): self
    {
        $this->anDeInstitucion = $anDeInstitucion;

        return $this;
    }

    public function getAnDeCuenta(): ?string
    {
        return $this->anDeCuenta;
    }

    public function setAnDeCuenta(string $anDeCuenta): self
    {
        $this->anDeCuenta = $anDeCuenta;

        return $this;
    }

    public function getAnDeDocumento(): ?string
    {
        return $this->anDeDocumento;
    }

    public function setAnDeDocumento(string $anDeDocumento): self
    {
        $this->anDeDocumento = $anDeDocumento;

        return $this;
    }

    public function getAnDeFecha(): ?\DateTimeInterface
    {
        return $this->anDeFecha;
    }

    public function setAnDeFecha(\DateTimeInterface $anDeFecha): self
    {
        $this->anDeFecha = $anDeFecha;

        return $this;
    }

    public function getAnDeFechaCobro(): ?\DateTimeInterface
    {
        return $this->anDeFechaCobro;
    }

    public function setAnDeFechaCobro(\DateTimeInterface $anDeFechaCobro): self
    {
        $this->anDeFechaCobro = $anDeFechaCobro;

        return $this;
    }

    public function getAnDeObservacion(): ?string
    {
        return $this->anDeObservacion;
    }

    public function setAnDeObservacion(string $anDeObservacion): self
    {
        $this->anDeObservacion = $anDeObservacion;

        return $this;
    }

    public function getCuId(): ?string
    {
        return $this->cuId;
    }

    public function setCuId(string $cuId): self
    {
        $this->cuId = $cuId;

        return $this;
    }

    public function getCuIdComision(): ?string
    {
        return $this->cuIdComision;
    }

    public function setCuIdComision(string $cuIdComision): self
    {
        $this->cuIdComision = $cuIdComision;

        return $this;
    }

    public function getAnDePorcentajeComision(): ?float
    {
        return $this->anDePorcentajeComision;
    }

    public function setAnDePorcentajeComision(float $anDePorcentajeComision): self
    {
        $this->anDePorcentajeComision = $anDePorcentajeComision;

        return $this;
    }

    public function getAnDeValorComision(): ?float
    {
        return $this->anDeValorComision;
    }

    public function setAnDeValorComision(float $anDeValorComision): self
    {
        $this->anDeValorComision = $anDeValorComision;

        return $this;
    }

    public function getAnDeEstado(): ?string
    {
        return $this->anDeEstado;
    }

    public function setAnDeEstado(string $anDeEstado): self
    {
        $this->anDeEstado = $anDeEstado;

        return $this;
    }

    public function getAnDePapeleta(): ?string
    {
        return $this->anDePapeleta;
    }

    public function setAnDePapeleta(string $anDePapeleta): self
    {
        $this->anDePapeleta = $anDePapeleta;

        return $this;
    }

    public function getAnDeBeneficiario(): ?string
    {
        return $this->anDeBeneficiario;
    }

    public function setAnDeBeneficiario(string $anDeBeneficiario): self
    {
        $this->anDeBeneficiario = $anDeBeneficiario;

        return $this;
    }

    public function getAnDeFechaRegistro(): ?\DateTimeInterface
    {
        return $this->anDeFechaRegistro;
    }

    public function setAnDeFechaRegistro(\DateTimeInterface $anDeFechaRegistro): self
    {
        $this->anDeFechaRegistro = $anDeFechaRegistro;

        return $this;
    }


}

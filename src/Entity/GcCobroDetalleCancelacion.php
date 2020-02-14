<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCobroDetalleCancelacion
 *
 * @ORM\Table(name="gc_cobro_detalle_cancelacion", indexes={@ORM\Index(name="IndiceCobroCancelacion", columns={"em_id", "cb_id", "an_id"}), @ORM\Index(name="ind_cobro_papeleta", columns={"em_id", "cb_de_ca_papeleta"}), @ORM\Index(name="IndiceCobro", columns={"em_id", "cb_id"})})
 * @ORM\Entity
 */
class GcCobroDetalleCancelacion
{
    /**
     * @var int
     *
     * @ORM\Column(name="cb_de_ca_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cbDeCaId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cb_id", type="bigint", nullable=false)
     */
    private $cbId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fc_id", type="bigint", nullable=false)
     */
    private $fcId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cb_de_ca_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbDeCaValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_ca_institucion", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $cbDeCaInstitucion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_ca_cuenta", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $cbDeCaCuenta = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_ca_documento", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $cbDeCaDocumento = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cb_de_ca_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $cbDeCaFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cb_de_ca_fecha_cobro", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $cbDeCaFechaCobro = '\'1800-01-01 00:00:01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_ca_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $cbDeCaObservacion = '\'*\'';

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
     * @ORM\Column(name="cb_de_ca_porcentaje_comision", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbDeCaPorcentajeComision = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cb_de_ca_valor_comision", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbDeCaValorComision = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="an_id", type="bigint", nullable=false)
     */
    private $anId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_ca_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $cbDeCaEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_ca_papeleta", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $cbDeCaPapeleta = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cb_de_ca_fecha_consignacion", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:00'"})
     */
    private $cbDeCaFechaConsignacion = '\'1800-01-01 00:00:00\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cb_de_ca_id_consignacion", type="bigint", nullable=false)
     */
    private $cbDeCaIdConsignacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_ca_beneficiario", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $cbDeCaBeneficiario = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_cheque_tipo", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $cbDeChequeTipo = '\'\'';

    public function getCbDeCaId(): ?string
    {
        return $this->cbDeCaId;
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

    public function getCbId(): ?string
    {
        return $this->cbId;
    }

    public function setCbId(string $cbId): self
    {
        $this->cbId = $cbId;

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

    public function getCbDeCaValor(): ?float
    {
        return $this->cbDeCaValor;
    }

    public function setCbDeCaValor(float $cbDeCaValor): self
    {
        $this->cbDeCaValor = $cbDeCaValor;

        return $this;
    }

    public function getCbDeCaInstitucion(): ?string
    {
        return $this->cbDeCaInstitucion;
    }

    public function setCbDeCaInstitucion(string $cbDeCaInstitucion): self
    {
        $this->cbDeCaInstitucion = $cbDeCaInstitucion;

        return $this;
    }

    public function getCbDeCaCuenta(): ?string
    {
        return $this->cbDeCaCuenta;
    }

    public function setCbDeCaCuenta(string $cbDeCaCuenta): self
    {
        $this->cbDeCaCuenta = $cbDeCaCuenta;

        return $this;
    }

    public function getCbDeCaDocumento(): ?string
    {
        return $this->cbDeCaDocumento;
    }

    public function setCbDeCaDocumento(string $cbDeCaDocumento): self
    {
        $this->cbDeCaDocumento = $cbDeCaDocumento;

        return $this;
    }

    public function getCbDeCaFecha(): ?\DateTimeInterface
    {
        return $this->cbDeCaFecha;
    }

    public function setCbDeCaFecha(\DateTimeInterface $cbDeCaFecha): self
    {
        $this->cbDeCaFecha = $cbDeCaFecha;

        return $this;
    }

    public function getCbDeCaFechaCobro(): ?\DateTimeInterface
    {
        return $this->cbDeCaFechaCobro;
    }

    public function setCbDeCaFechaCobro(\DateTimeInterface $cbDeCaFechaCobro): self
    {
        $this->cbDeCaFechaCobro = $cbDeCaFechaCobro;

        return $this;
    }

    public function getCbDeCaObservacion(): ?string
    {
        return $this->cbDeCaObservacion;
    }

    public function setCbDeCaObservacion(string $cbDeCaObservacion): self
    {
        $this->cbDeCaObservacion = $cbDeCaObservacion;

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

    public function getCbDeCaPorcentajeComision(): ?float
    {
        return $this->cbDeCaPorcentajeComision;
    }

    public function setCbDeCaPorcentajeComision(float $cbDeCaPorcentajeComision): self
    {
        $this->cbDeCaPorcentajeComision = $cbDeCaPorcentajeComision;

        return $this;
    }

    public function getCbDeCaValorComision(): ?float
    {
        return $this->cbDeCaValorComision;
    }

    public function setCbDeCaValorComision(float $cbDeCaValorComision): self
    {
        $this->cbDeCaValorComision = $cbDeCaValorComision;

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

    public function getCbDeCaEstado(): ?string
    {
        return $this->cbDeCaEstado;
    }

    public function setCbDeCaEstado(string $cbDeCaEstado): self
    {
        $this->cbDeCaEstado = $cbDeCaEstado;

        return $this;
    }

    public function getCbDeCaPapeleta(): ?string
    {
        return $this->cbDeCaPapeleta;
    }

    public function setCbDeCaPapeleta(string $cbDeCaPapeleta): self
    {
        $this->cbDeCaPapeleta = $cbDeCaPapeleta;

        return $this;
    }

    public function getCbDeCaFechaConsignacion(): ?\DateTimeInterface
    {
        return $this->cbDeCaFechaConsignacion;
    }

    public function setCbDeCaFechaConsignacion(\DateTimeInterface $cbDeCaFechaConsignacion): self
    {
        $this->cbDeCaFechaConsignacion = $cbDeCaFechaConsignacion;

        return $this;
    }

    public function getCbDeCaIdConsignacion(): ?string
    {
        return $this->cbDeCaIdConsignacion;
    }

    public function setCbDeCaIdConsignacion(string $cbDeCaIdConsignacion): self
    {
        $this->cbDeCaIdConsignacion = $cbDeCaIdConsignacion;

        return $this;
    }

    public function getCbDeCaBeneficiario(): ?string
    {
        return $this->cbDeCaBeneficiario;
    }

    public function setCbDeCaBeneficiario(string $cbDeCaBeneficiario): self
    {
        $this->cbDeCaBeneficiario = $cbDeCaBeneficiario;

        return $this;
    }

    public function getCbDeChequeTipo(): ?string
    {
        return $this->cbDeChequeTipo;
    }

    public function setCbDeChequeTipo(string $cbDeChequeTipo): self
    {
        $this->cbDeChequeTipo = $cbDeChequeTipo;

        return $this;
    }


}

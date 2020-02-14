<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcComprobanteDetalle
 *
 * @ORM\Table(name="gc_comprobante_detalle", indexes={@ORM\Index(name="IndiceTerceros", columns={"em_id", "co_de_codigo_tercero"}), @ORM\Index(name="IndiceCuenta", columns={"em_id", "cu_id"}), @ORM\Index(name="IndiceComprobDetalle", columns={"em_id", "co_id"}), @ORM\Index(name="IndiceIDTercerosTipo", columns={"em_id", "co_de_tipo_tercero", "co_de_id_tercero"}), @ORM\Index(name="IndiceComprobanteDetalleCheque", columns={"em_id", "cu_id", "co_de_cheque"})})
 * @ORM\Entity
 */
class GcComprobanteDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="co_de_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coDeId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_de_periodo", type="integer", nullable=false)
     */
    private $coDePeriodo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id", type="bigint", nullable=false)
     */
    private $cuId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_de_concepto", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $coDeConcepto = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_de_conciliado", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $coDeConciliado = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="co_de_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $coDeFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="co_de_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $coDeDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="co_de_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $coDeHaber = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_de_total_texto", type="string", length=150, nullable=false, options={"default"="'*'"})
     */
    private $coDeTotalTexto = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_de_referencia", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $coDeReferencia = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_de_cheque_tipo", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $coDeChequeTipo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_de_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $coDeEstado = '\'C\'';

    /**
     * @var float
     *
     * @ORM\Column(name="co_de_base", type="float", precision=10, scale=0, nullable=false)
     */
    private $coDeBase = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_tr_id", type="bigint", nullable=false)
     */
    private $coTrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cc_id", type="bigint", nullable=false)
     */
    private $ccId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="co_de_fecha_conciliacion", type="date", nullable=false, options={"default"="'1800-01-01'"})
     */
    private $coDeFechaConciliacion = '\'1800-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="co_de_id_tercero", type="bigint", nullable=false)
     */
    private $coDeIdTercero = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_de_tipo_tercero", type="string", length=20, nullable=false, options={"default"="''"})
     */
    private $coDeTipoTercero = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="co_de_codigo_tercero", type="string", length=100, nullable=true, options={"default"="'*'"})
     */
    private $coDeCodigoTercero = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_de_factura_tipo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $coDeFacturaTipo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_de_fa_numero", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $coDeFaNumero = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="co_de_an_id", type="bigint", nullable=false)
     */
    private $coDeAnId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_de_cheque", type="string", length=25, nullable=false, options={"default"="'0'"})
     */
    private $coDeCheque = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_de_beneficiario", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $coDeBeneficiario = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_de_cheque_texto", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $coDeChequeTexto = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="dp_id", type="bigint", nullable=false)
     */
    private $dpId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="co_de_fecha_registro", type="date", nullable=false, options={"default"="'2010-01-01'"})
     */
    private $coDeFechaRegistro = '\'2010-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pr_id", type="bigint", nullable=false)
     */
    private $prId = '0';

    public function getCoDeId(): ?string
    {
        return $this->coDeId;
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

    public function getCoId(): ?string
    {
        return $this->coId;
    }

    public function setCoId(string $coId): self
    {
        $this->coId = $coId;

        return $this;
    }

    public function getCoDePeriodo(): ?int
    {
        return $this->coDePeriodo;
    }

    public function setCoDePeriodo(int $coDePeriodo): self
    {
        $this->coDePeriodo = $coDePeriodo;

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

    public function getCoDeConcepto(): ?string
    {
        return $this->coDeConcepto;
    }

    public function setCoDeConcepto(string $coDeConcepto): self
    {
        $this->coDeConcepto = $coDeConcepto;

        return $this;
    }

    public function getCoDeConciliado(): ?string
    {
        return $this->coDeConciliado;
    }

    public function setCoDeConciliado(string $coDeConciliado): self
    {
        $this->coDeConciliado = $coDeConciliado;

        return $this;
    }

    public function getCoDeFecha(): ?\DateTimeInterface
    {
        return $this->coDeFecha;
    }

    public function setCoDeFecha(\DateTimeInterface $coDeFecha): self
    {
        $this->coDeFecha = $coDeFecha;

        return $this;
    }

    public function getCoDeDebe(): ?float
    {
        return $this->coDeDebe;
    }

    public function setCoDeDebe(float $coDeDebe): self
    {
        $this->coDeDebe = $coDeDebe;

        return $this;
    }

    public function getCoDeHaber(): ?float
    {
        return $this->coDeHaber;
    }

    public function setCoDeHaber(float $coDeHaber): self
    {
        $this->coDeHaber = $coDeHaber;

        return $this;
    }

    public function getCoDeTotalTexto(): ?string
    {
        return $this->coDeTotalTexto;
    }

    public function setCoDeTotalTexto(string $coDeTotalTexto): self
    {
        $this->coDeTotalTexto = $coDeTotalTexto;

        return $this;
    }

    public function getCoDeReferencia(): ?string
    {
        return $this->coDeReferencia;
    }

    public function setCoDeReferencia(string $coDeReferencia): self
    {
        $this->coDeReferencia = $coDeReferencia;

        return $this;
    }

    public function getCoDeChequeTipo(): ?string
    {
        return $this->coDeChequeTipo;
    }

    public function setCoDeChequeTipo(string $coDeChequeTipo): self
    {
        $this->coDeChequeTipo = $coDeChequeTipo;

        return $this;
    }

    public function getCoDeEstado(): ?string
    {
        return $this->coDeEstado;
    }

    public function setCoDeEstado(string $coDeEstado): self
    {
        $this->coDeEstado = $coDeEstado;

        return $this;
    }

    public function getCoDeBase(): ?float
    {
        return $this->coDeBase;
    }

    public function setCoDeBase(float $coDeBase): self
    {
        $this->coDeBase = $coDeBase;

        return $this;
    }

    public function getCoTrId(): ?string
    {
        return $this->coTrId;
    }

    public function setCoTrId(string $coTrId): self
    {
        $this->coTrId = $coTrId;

        return $this;
    }

    public function getCcId(): ?string
    {
        return $this->ccId;
    }

    public function setCcId(string $ccId): self
    {
        $this->ccId = $ccId;

        return $this;
    }

    public function getCoDeFechaConciliacion(): ?\DateTimeInterface
    {
        return $this->coDeFechaConciliacion;
    }

    public function setCoDeFechaConciliacion(\DateTimeInterface $coDeFechaConciliacion): self
    {
        $this->coDeFechaConciliacion = $coDeFechaConciliacion;

        return $this;
    }

    public function getCoDeIdTercero(): ?string
    {
        return $this->coDeIdTercero;
    }

    public function setCoDeIdTercero(string $coDeIdTercero): self
    {
        $this->coDeIdTercero = $coDeIdTercero;

        return $this;
    }

    public function getCoDeTipoTercero(): ?string
    {
        return $this->coDeTipoTercero;
    }

    public function setCoDeTipoTercero(string $coDeTipoTercero): self
    {
        $this->coDeTipoTercero = $coDeTipoTercero;

        return $this;
    }

    public function getCoDeCodigoTercero(): ?string
    {
        return $this->coDeCodigoTercero;
    }

    public function setCoDeCodigoTercero(?string $coDeCodigoTercero): self
    {
        $this->coDeCodigoTercero = $coDeCodigoTercero;

        return $this;
    }

    public function getCoDeFacturaTipo(): ?string
    {
        return $this->coDeFacturaTipo;
    }

    public function setCoDeFacturaTipo(string $coDeFacturaTipo): self
    {
        $this->coDeFacturaTipo = $coDeFacturaTipo;

        return $this;
    }

    public function getCoDeFaNumero(): ?string
    {
        return $this->coDeFaNumero;
    }

    public function setCoDeFaNumero(string $coDeFaNumero): self
    {
        $this->coDeFaNumero = $coDeFaNumero;

        return $this;
    }

    public function getCoDeAnId(): ?string
    {
        return $this->coDeAnId;
    }

    public function setCoDeAnId(string $coDeAnId): self
    {
        $this->coDeAnId = $coDeAnId;

        return $this;
    }

    public function getCoDeCheque(): ?string
    {
        return $this->coDeCheque;
    }

    public function setCoDeCheque(string $coDeCheque): self
    {
        $this->coDeCheque = $coDeCheque;

        return $this;
    }

    public function getCoDeBeneficiario(): ?string
    {
        return $this->coDeBeneficiario;
    }

    public function setCoDeBeneficiario(string $coDeBeneficiario): self
    {
        $this->coDeBeneficiario = $coDeBeneficiario;

        return $this;
    }

    public function getCoDeChequeTexto(): ?string
    {
        return $this->coDeChequeTexto;
    }

    public function setCoDeChequeTexto(string $coDeChequeTexto): self
    {
        $this->coDeChequeTexto = $coDeChequeTexto;

        return $this;
    }

    public function getDpId(): ?string
    {
        return $this->dpId;
    }

    public function setDpId(string $dpId): self
    {
        $this->dpId = $dpId;

        return $this;
    }

    public function getCoDeFechaRegistro(): ?\DateTimeInterface
    {
        return $this->coDeFechaRegistro;
    }

    public function setCoDeFechaRegistro(\DateTimeInterface $coDeFechaRegistro): self
    {
        $this->coDeFechaRegistro = $coDeFechaRegistro;

        return $this;
    }

    public function getPrId(): ?string
    {
        return $this->prId;
    }

    public function setPrId(string $prId): self
    {
        $this->prId = $prId;

        return $this;
    }


}

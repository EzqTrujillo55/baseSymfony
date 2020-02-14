<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoTransaccion
 *
 * @ORM\Table(name="gc_empleado_transaccion", indexes={@ORM\Index(name="mptr_tipotransaccion", columns={"em_id", "mp_pr_codigo"})})
 * @ORM\Entity
 */
class GcEmpleadoTransaccion
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_tr_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mpTrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_pr_id", type="bigint", nullable=false)
     */
    private $mpPrId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_codigo", type="string", length=10, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $mpPrCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_label_usuario", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $mpPrLabelUsuario = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_tr_secuencial", type="bigint", nullable=false)
     */
    private $mpTrSecuencial = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_tr_fecha", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpTrFecha = '\'2000-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_tr_fecha_sistema", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpTrFechaSistema = '\'2000-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_tr_forma_pago", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $mpTrFormaPago = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fc_id", type="bigint", nullable=false)
     */
    private $fcId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_forma_cancelacion", type="bigint", nullable=false)
     */
    private $cuIdFormaCancelacion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_tr_cheque", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $mpTrCheque = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrValor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_saldo", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrSaldo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id", type="bigint", nullable=false)
     */
    private $faId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fp_id", type="bigint", nullable=false)
     */
    private $fpId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_tr_numero_cuotas", type="integer", nullable=false)
     */
    private $mpTrNumeroCuotas = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_tr_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $mpTrObservacion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mp_tr_fecha_calculo", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $mpTrFechaCalculo = '\'2000-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="zo_id", type="bigint", nullable=false)
     */
    private $zoId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_sbu_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrSbuValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_tr_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $mpTrEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_otros", type="bigint", nullable=false)
     */
    private $cuIdValorOtros = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_valor_otros2", type="bigint", nullable=false)
     */
    private $cuIdValorOtros2 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_rl_id", type="bigint", nullable=false)
     */
    private $mpRlId = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getMpTrId(): ?string
    {
        return $this->mpTrId;
    }

    public function getMpPrId(): ?string
    {
        return $this->mpPrId;
    }

    public function setMpPrId(string $mpPrId): self
    {
        $this->mpPrId = $mpPrId;

        return $this;
    }

    public function getMpPrCodigo(): ?string
    {
        return $this->mpPrCodigo;
    }

    public function setMpPrCodigo(string $mpPrCodigo): self
    {
        $this->mpPrCodigo = $mpPrCodigo;

        return $this;
    }

    public function getMpPrLabelUsuario(): ?string
    {
        return $this->mpPrLabelUsuario;
    }

    public function setMpPrLabelUsuario(string $mpPrLabelUsuario): self
    {
        $this->mpPrLabelUsuario = $mpPrLabelUsuario;

        return $this;
    }

    public function getMpTrSecuencial(): ?string
    {
        return $this->mpTrSecuencial;
    }

    public function setMpTrSecuencial(string $mpTrSecuencial): self
    {
        $this->mpTrSecuencial = $mpTrSecuencial;

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

    public function getMpTrFecha(): ?\DateTimeInterface
    {
        return $this->mpTrFecha;
    }

    public function setMpTrFecha(\DateTimeInterface $mpTrFecha): self
    {
        $this->mpTrFecha = $mpTrFecha;

        return $this;
    }

    public function getMpTrFechaSistema(): ?\DateTimeInterface
    {
        return $this->mpTrFechaSistema;
    }

    public function setMpTrFechaSistema(\DateTimeInterface $mpTrFechaSistema): self
    {
        $this->mpTrFechaSistema = $mpTrFechaSistema;

        return $this;
    }

    public function getMpTrFormaPago(): ?string
    {
        return $this->mpTrFormaPago;
    }

    public function setMpTrFormaPago(string $mpTrFormaPago): self
    {
        $this->mpTrFormaPago = $mpTrFormaPago;

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

    public function getCuIdFormaCancelacion(): ?string
    {
        return $this->cuIdFormaCancelacion;
    }

    public function setCuIdFormaCancelacion(string $cuIdFormaCancelacion): self
    {
        $this->cuIdFormaCancelacion = $cuIdFormaCancelacion;

        return $this;
    }

    public function getMpTrCheque(): ?string
    {
        return $this->mpTrCheque;
    }

    public function setMpTrCheque(string $mpTrCheque): self
    {
        $this->mpTrCheque = $mpTrCheque;

        return $this;
    }

    public function getMpTrValor(): ?float
    {
        return $this->mpTrValor;
    }

    public function setMpTrValor(float $mpTrValor): self
    {
        $this->mpTrValor = $mpTrValor;

        return $this;
    }

    public function getMpTrSaldo(): ?float
    {
        return $this->mpTrSaldo;
    }

    public function setMpTrSaldo(float $mpTrSaldo): self
    {
        $this->mpTrSaldo = $mpTrSaldo;

        return $this;
    }

    public function getPeId(): ?string
    {
        return $this->peId;
    }

    public function setPeId(string $peId): self
    {
        $this->peId = $peId;

        return $this;
    }

    public function getFaId(): ?string
    {
        return $this->faId;
    }

    public function setFaId(string $faId): self
    {
        $this->faId = $faId;

        return $this;
    }

    public function getFpId(): ?string
    {
        return $this->fpId;
    }

    public function setFpId(string $fpId): self
    {
        $this->fpId = $fpId;

        return $this;
    }

    public function getMpTrNumeroCuotas(): ?int
    {
        return $this->mpTrNumeroCuotas;
    }

    public function setMpTrNumeroCuotas(int $mpTrNumeroCuotas): self
    {
        $this->mpTrNumeroCuotas = $mpTrNumeroCuotas;

        return $this;
    }

    public function getMpTrObservacion(): ?string
    {
        return $this->mpTrObservacion;
    }

    public function setMpTrObservacion(string $mpTrObservacion): self
    {
        $this->mpTrObservacion = $mpTrObservacion;

        return $this;
    }

    public function getUsId(): ?string
    {
        return $this->usId;
    }

    public function setUsId(string $usId): self
    {
        $this->usId = $usId;

        return $this;
    }

    public function getMpTrFechaCalculo(): ?\DateTimeInterface
    {
        return $this->mpTrFechaCalculo;
    }

    public function setMpTrFechaCalculo(\DateTimeInterface $mpTrFechaCalculo): self
    {
        $this->mpTrFechaCalculo = $mpTrFechaCalculo;

        return $this;
    }

    public function getZoId(): ?string
    {
        return $this->zoId;
    }

    public function setZoId(string $zoId): self
    {
        $this->zoId = $zoId;

        return $this;
    }

    public function getMpTrSbuValor(): ?float
    {
        return $this->mpTrSbuValor;
    }

    public function setMpTrSbuValor(float $mpTrSbuValor): self
    {
        $this->mpTrSbuValor = $mpTrSbuValor;

        return $this;
    }

    public function getMpTrEstado(): ?string
    {
        return $this->mpTrEstado;
    }

    public function setMpTrEstado(string $mpTrEstado): self
    {
        $this->mpTrEstado = $mpTrEstado;

        return $this;
    }

    public function getCuIdValorOtros(): ?string
    {
        return $this->cuIdValorOtros;
    }

    public function setCuIdValorOtros(string $cuIdValorOtros): self
    {
        $this->cuIdValorOtros = $cuIdValorOtros;

        return $this;
    }

    public function getCuIdValorOtros2(): ?string
    {
        return $this->cuIdValorOtros2;
    }

    public function setCuIdValorOtros2(string $cuIdValorOtros2): self
    {
        $this->cuIdValorOtros2 = $cuIdValorOtros2;

        return $this;
    }

    public function getMpRlId(): ?string
    {
        return $this->mpRlId;
    }

    public function setMpRlId(string $mpRlId): self
    {
        $this->mpRlId = $mpRlId;

        return $this;
    }


}

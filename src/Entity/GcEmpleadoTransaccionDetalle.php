<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoTransaccionDetalle
 *
 * @ORM\Table(name="gc_empleado_transaccion_detalle", indexes={@ORM\Index(name="mptrde_personatransaccion", columns={"em_id", "mp_tr_id"})})
 * @ORM\Entity
 */
class GcEmpleadoTransaccionDetalle
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
     * @ORM\Column(name="mp_tr_de_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mpTrDeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_tr_id", type="bigint", nullable=false)
     */
    private $mpTrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id", type="bigint", nullable=false)
     */
    private $cuId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_cs_id", type="bigint", nullable=false)
     */
    private $mpCsId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ar_id", type="bigint", nullable=false)
     */
    private $arId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cr_id", type="bigint", nullable=false)
     */
    private $crId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id", type="bigint", nullable=false)
     */
    private $faId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ct_id", type="bigint", nullable=false)
     */
    private $ctId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_sueldo", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValorSueldo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_01", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValor01 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_02", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValor02 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_03", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValor03 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_04", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValor04 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_05", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValor05 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_06", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValor06 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_07", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValor07 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_08", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValor08 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_09", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValor09 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_10", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValor10 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_11", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValor11 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_12", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValor12 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_otros", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValorOtros = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValorTotal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_saldo", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValorSaldo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_liquidar", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValorLiquidar = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_tr_de_cheque", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $mpTrDeCheque = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_tr_de_valor_pago_juicioalimentos", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpTrDeValorPagoJuicioalimentos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_tr_de_cheque_juicioalimentos", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $mpTrDeChequeJuicioalimentos = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_tr_de_beneficiario_juicioalimentos", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $mpTrDeBeneficiarioJuicioalimentos = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_tr_de_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $mpTrDeEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_tr_id_deducciones", type="bigint", nullable=false)
     */
    private $mpTrIdDeducciones = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_rl_id", type="bigint", nullable=false)
     */
    private $mpRlId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_tr_de_dias_laborados_total", type="integer", nullable=false)
     */
    private $mpTrDeDiasLaboradosTotal = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getMpTrDeId(): ?string
    {
        return $this->mpTrDeId;
    }

    public function getMpTrId(): ?string
    {
        return $this->mpTrId;
    }

    public function setMpTrId(string $mpTrId): self
    {
        $this->mpTrId = $mpTrId;

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

    public function getCuId(): ?string
    {
        return $this->cuId;
    }

    public function setCuId(string $cuId): self
    {
        $this->cuId = $cuId;

        return $this;
    }

    public function getMpCsId(): ?string
    {
        return $this->mpCsId;
    }

    public function setMpCsId(string $mpCsId): self
    {
        $this->mpCsId = $mpCsId;

        return $this;
    }

    public function getArId(): ?string
    {
        return $this->arId;
    }

    public function setArId(string $arId): self
    {
        $this->arId = $arId;

        return $this;
    }

    public function getCrId(): ?string
    {
        return $this->crId;
    }

    public function setCrId(string $crId): self
    {
        $this->crId = $crId;

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

    public function getCtId(): ?string
    {
        return $this->ctId;
    }

    public function setCtId(string $ctId): self
    {
        $this->ctId = $ctId;

        return $this;
    }

    public function getMpTrDeValorSueldo(): ?float
    {
        return $this->mpTrDeValorSueldo;
    }

    public function setMpTrDeValorSueldo(float $mpTrDeValorSueldo): self
    {
        $this->mpTrDeValorSueldo = $mpTrDeValorSueldo;

        return $this;
    }

    public function getMpTrDeValor01(): ?float
    {
        return $this->mpTrDeValor01;
    }

    public function setMpTrDeValor01(float $mpTrDeValor01): self
    {
        $this->mpTrDeValor01 = $mpTrDeValor01;

        return $this;
    }

    public function getMpTrDeValor02(): ?float
    {
        return $this->mpTrDeValor02;
    }

    public function setMpTrDeValor02(float $mpTrDeValor02): self
    {
        $this->mpTrDeValor02 = $mpTrDeValor02;

        return $this;
    }

    public function getMpTrDeValor03(): ?float
    {
        return $this->mpTrDeValor03;
    }

    public function setMpTrDeValor03(float $mpTrDeValor03): self
    {
        $this->mpTrDeValor03 = $mpTrDeValor03;

        return $this;
    }

    public function getMpTrDeValor04(): ?float
    {
        return $this->mpTrDeValor04;
    }

    public function setMpTrDeValor04(float $mpTrDeValor04): self
    {
        $this->mpTrDeValor04 = $mpTrDeValor04;

        return $this;
    }

    public function getMpTrDeValor05(): ?float
    {
        return $this->mpTrDeValor05;
    }

    public function setMpTrDeValor05(float $mpTrDeValor05): self
    {
        $this->mpTrDeValor05 = $mpTrDeValor05;

        return $this;
    }

    public function getMpTrDeValor06(): ?float
    {
        return $this->mpTrDeValor06;
    }

    public function setMpTrDeValor06(float $mpTrDeValor06): self
    {
        $this->mpTrDeValor06 = $mpTrDeValor06;

        return $this;
    }

    public function getMpTrDeValor07(): ?float
    {
        return $this->mpTrDeValor07;
    }

    public function setMpTrDeValor07(float $mpTrDeValor07): self
    {
        $this->mpTrDeValor07 = $mpTrDeValor07;

        return $this;
    }

    public function getMpTrDeValor08(): ?float
    {
        return $this->mpTrDeValor08;
    }

    public function setMpTrDeValor08(float $mpTrDeValor08): self
    {
        $this->mpTrDeValor08 = $mpTrDeValor08;

        return $this;
    }

    public function getMpTrDeValor09(): ?float
    {
        return $this->mpTrDeValor09;
    }

    public function setMpTrDeValor09(float $mpTrDeValor09): self
    {
        $this->mpTrDeValor09 = $mpTrDeValor09;

        return $this;
    }

    public function getMpTrDeValor10(): ?float
    {
        return $this->mpTrDeValor10;
    }

    public function setMpTrDeValor10(float $mpTrDeValor10): self
    {
        $this->mpTrDeValor10 = $mpTrDeValor10;

        return $this;
    }

    public function getMpTrDeValor11(): ?float
    {
        return $this->mpTrDeValor11;
    }

    public function setMpTrDeValor11(float $mpTrDeValor11): self
    {
        $this->mpTrDeValor11 = $mpTrDeValor11;

        return $this;
    }

    public function getMpTrDeValor12(): ?float
    {
        return $this->mpTrDeValor12;
    }

    public function setMpTrDeValor12(float $mpTrDeValor12): self
    {
        $this->mpTrDeValor12 = $mpTrDeValor12;

        return $this;
    }

    public function getMpTrDeValorOtros(): ?float
    {
        return $this->mpTrDeValorOtros;
    }

    public function setMpTrDeValorOtros(float $mpTrDeValorOtros): self
    {
        $this->mpTrDeValorOtros = $mpTrDeValorOtros;

        return $this;
    }

    public function getMpTrDeValorTotal(): ?float
    {
        return $this->mpTrDeValorTotal;
    }

    public function setMpTrDeValorTotal(float $mpTrDeValorTotal): self
    {
        $this->mpTrDeValorTotal = $mpTrDeValorTotal;

        return $this;
    }

    public function getMpTrDeValorSaldo(): ?float
    {
        return $this->mpTrDeValorSaldo;
    }

    public function setMpTrDeValorSaldo(float $mpTrDeValorSaldo): self
    {
        $this->mpTrDeValorSaldo = $mpTrDeValorSaldo;

        return $this;
    }

    public function getMpTrDeValorLiquidar(): ?float
    {
        return $this->mpTrDeValorLiquidar;
    }

    public function setMpTrDeValorLiquidar(float $mpTrDeValorLiquidar): self
    {
        $this->mpTrDeValorLiquidar = $mpTrDeValorLiquidar;

        return $this;
    }

    public function getMpTrDeCheque(): ?string
    {
        return $this->mpTrDeCheque;
    }

    public function setMpTrDeCheque(string $mpTrDeCheque): self
    {
        $this->mpTrDeCheque = $mpTrDeCheque;

        return $this;
    }

    public function getMpTrDeValorPagoJuicioalimentos(): ?float
    {
        return $this->mpTrDeValorPagoJuicioalimentos;
    }

    public function setMpTrDeValorPagoJuicioalimentos(float $mpTrDeValorPagoJuicioalimentos): self
    {
        $this->mpTrDeValorPagoJuicioalimentos = $mpTrDeValorPagoJuicioalimentos;

        return $this;
    }

    public function getMpTrDeChequeJuicioalimentos(): ?string
    {
        return $this->mpTrDeChequeJuicioalimentos;
    }

    public function setMpTrDeChequeJuicioalimentos(string $mpTrDeChequeJuicioalimentos): self
    {
        $this->mpTrDeChequeJuicioalimentos = $mpTrDeChequeJuicioalimentos;

        return $this;
    }

    public function getMpTrDeBeneficiarioJuicioalimentos(): ?string
    {
        return $this->mpTrDeBeneficiarioJuicioalimentos;
    }

    public function setMpTrDeBeneficiarioJuicioalimentos(string $mpTrDeBeneficiarioJuicioalimentos): self
    {
        $this->mpTrDeBeneficiarioJuicioalimentos = $mpTrDeBeneficiarioJuicioalimentos;

        return $this;
    }

    public function getMpTrDeEstado(): ?string
    {
        return $this->mpTrDeEstado;
    }

    public function setMpTrDeEstado(string $mpTrDeEstado): self
    {
        $this->mpTrDeEstado = $mpTrDeEstado;

        return $this;
    }

    public function getMpTrIdDeducciones(): ?string
    {
        return $this->mpTrIdDeducciones;
    }

    public function setMpTrIdDeducciones(string $mpTrIdDeducciones): self
    {
        $this->mpTrIdDeducciones = $mpTrIdDeducciones;

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

    public function getMpTrDeDiasLaboradosTotal(): ?int
    {
        return $this->mpTrDeDiasLaboradosTotal;
    }

    public function setMpTrDeDiasLaboradosTotal(int $mpTrDeDiasLaboradosTotal): self
    {
        $this->mpTrDeDiasLaboradosTotal = $mpTrDeDiasLaboradosTotal;

        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoRolDetalle
 *
 * @ORM\Table(name="gc_empleado_rol_detalle", indexes={@ORM\Index(name="mprlde_relacionrol", columns={"em_id", "mp_rl_id"})})
 * @ORM\Entity
 */
class GcEmpleadoRolDetalle
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
     * @ORM\Column(name="mp_rl_de_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mpRlDeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_rl_id", type="bigint", nullable=false)
     */
    private $mpRlId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

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
     * @ORM\Column(name="cc_id", type="bigint", nullable=false)
     */
    private $ccId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_rl_de_valor_centrocosto", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpRlDeValorCentrocosto = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_rl_de_valor_sueldo_normal", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpRlDeValorSueldoNormal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_rl_de_dias_trabajados", type="bigint", nullable=false)
     */
    private $mpRlDeDiasTrabajados = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_rl_de_valor_pago", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpRlDeValorPago = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_rl_de_cheque", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $mpRlDeCheque = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_rl_de_valor_pago_juicioalimentos", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpRlDeValorPagoJuicioalimentos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_rl_de_cheque_juicioalimentos", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $mpRlDeChequeJuicioalimentos = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_rl_de_beneficiario_juicioalimentos", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $mpRlDeBeneficiarioJuicioalimentos = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_rl_de_valor_saldo", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpRlDeValorSaldo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_rl_de_valor_saldo_juicioalimentos", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpRlDeValorSaldoJuicioalimentos = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getMpRlDeId(): ?string
    {
        return $this->mpRlDeId;
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

    public function getPeId(): ?string
    {
        return $this->peId;
    }

    public function setPeId(string $peId): self
    {
        $this->peId = $peId;

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

    public function getCcId(): ?string
    {
        return $this->ccId;
    }

    public function setCcId(string $ccId): self
    {
        $this->ccId = $ccId;

        return $this;
    }

    public function getMpRlDeValorCentrocosto(): ?float
    {
        return $this->mpRlDeValorCentrocosto;
    }

    public function setMpRlDeValorCentrocosto(float $mpRlDeValorCentrocosto): self
    {
        $this->mpRlDeValorCentrocosto = $mpRlDeValorCentrocosto;

        return $this;
    }

    public function getMpRlDeValorSueldoNormal(): ?float
    {
        return $this->mpRlDeValorSueldoNormal;
    }

    public function setMpRlDeValorSueldoNormal(float $mpRlDeValorSueldoNormal): self
    {
        $this->mpRlDeValorSueldoNormal = $mpRlDeValorSueldoNormal;

        return $this;
    }

    public function getMpRlDeDiasTrabajados(): ?string
    {
        return $this->mpRlDeDiasTrabajados;
    }

    public function setMpRlDeDiasTrabajados(string $mpRlDeDiasTrabajados): self
    {
        $this->mpRlDeDiasTrabajados = $mpRlDeDiasTrabajados;

        return $this;
    }

    public function getMpRlDeValorPago(): ?float
    {
        return $this->mpRlDeValorPago;
    }

    public function setMpRlDeValorPago(float $mpRlDeValorPago): self
    {
        $this->mpRlDeValorPago = $mpRlDeValorPago;

        return $this;
    }

    public function getMpRlDeCheque(): ?string
    {
        return $this->mpRlDeCheque;
    }

    public function setMpRlDeCheque(string $mpRlDeCheque): self
    {
        $this->mpRlDeCheque = $mpRlDeCheque;

        return $this;
    }

    public function getMpRlDeValorPagoJuicioalimentos(): ?float
    {
        return $this->mpRlDeValorPagoJuicioalimentos;
    }

    public function setMpRlDeValorPagoJuicioalimentos(float $mpRlDeValorPagoJuicioalimentos): self
    {
        $this->mpRlDeValorPagoJuicioalimentos = $mpRlDeValorPagoJuicioalimentos;

        return $this;
    }

    public function getMpRlDeChequeJuicioalimentos(): ?string
    {
        return $this->mpRlDeChequeJuicioalimentos;
    }

    public function setMpRlDeChequeJuicioalimentos(string $mpRlDeChequeJuicioalimentos): self
    {
        $this->mpRlDeChequeJuicioalimentos = $mpRlDeChequeJuicioalimentos;

        return $this;
    }

    public function getMpRlDeBeneficiarioJuicioalimentos(): ?string
    {
        return $this->mpRlDeBeneficiarioJuicioalimentos;
    }

    public function setMpRlDeBeneficiarioJuicioalimentos(string $mpRlDeBeneficiarioJuicioalimentos): self
    {
        $this->mpRlDeBeneficiarioJuicioalimentos = $mpRlDeBeneficiarioJuicioalimentos;

        return $this;
    }

    public function getMpRlDeValorSaldo(): ?float
    {
        return $this->mpRlDeValorSaldo;
    }

    public function setMpRlDeValorSaldo(float $mpRlDeValorSaldo): self
    {
        $this->mpRlDeValorSaldo = $mpRlDeValorSaldo;

        return $this;
    }

    public function getMpRlDeValorSaldoJuicioalimentos(): ?float
    {
        return $this->mpRlDeValorSaldoJuicioalimentos;
    }

    public function setMpRlDeValorSaldoJuicioalimentos(float $mpRlDeValorSaldoJuicioalimentos): self
    {
        $this->mpRlDeValorSaldoJuicioalimentos = $mpRlDeValorSaldoJuicioalimentos;

        return $this;
    }


}

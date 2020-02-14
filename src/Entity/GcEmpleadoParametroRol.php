<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoParametroRol
 *
 * @ORM\Table(name="gc_empleado_parametro_rol", uniqueConstraints={@ORM\UniqueConstraint(name="indice_parametrorol", columns={"em_id", "mp_pr_id"})})
 * @ORM\Entity
 */
class GcEmpleadoParametroRol
{
    /**
     * @var int
     *
     * @ORM\Column(name="mp_pr_idunico", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mpPrIdunico;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_pr_id", type="bigint", nullable=false)
     */
    private $mpPrId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_codigo", type="string", length=5, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $mpPrCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_tipo", type="string", length=1, nullable=false, options={"default"="'I'","fixed"=true})
     */
    private $mpPrTipo = '\'I\'';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_pr_secuencial", type="bigint", nullable=false)
     */
    private $mpPrSecuencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_label_normal", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $mpPrLabelNormal = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_label_usuario", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $mpPrLabelUsuario = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_orden", type="string", length=3, nullable=false, options={"default"="'00'"})
     */
    private $mpPrOrden = '\'00\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id", type="bigint", nullable=false)
     */
    private $cuId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_provision", type="bigint", nullable=false)
     */
    private $cuIdProvision = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_calcula", type="string", length=1, nullable=false, options={"default"="'S'","fixed"=true})
     */
    private $mpPrCalcula = '\'S\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_maneja_formula", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $mpPrManejaFormula = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_factor", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $mpPrFactor = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_pr_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpPrValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $mpPrEstado = '\'C\'';

    public function getMpPrIdunico(): ?string
    {
        return $this->mpPrIdunico;
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

    public function getMpPrTipo(): ?string
    {
        return $this->mpPrTipo;
    }

    public function setMpPrTipo(string $mpPrTipo): self
    {
        $this->mpPrTipo = $mpPrTipo;

        return $this;
    }

    public function getMpPrSecuencial(): ?string
    {
        return $this->mpPrSecuencial;
    }

    public function setMpPrSecuencial(string $mpPrSecuencial): self
    {
        $this->mpPrSecuencial = $mpPrSecuencial;

        return $this;
    }

    public function getMpPrLabelNormal(): ?string
    {
        return $this->mpPrLabelNormal;
    }

    public function setMpPrLabelNormal(string $mpPrLabelNormal): self
    {
        $this->mpPrLabelNormal = $mpPrLabelNormal;

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

    public function getMpPrOrden(): ?string
    {
        return $this->mpPrOrden;
    }

    public function setMpPrOrden(string $mpPrOrden): self
    {
        $this->mpPrOrden = $mpPrOrden;

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

    public function getCuIdProvision(): ?string
    {
        return $this->cuIdProvision;
    }

    public function setCuIdProvision(string $cuIdProvision): self
    {
        $this->cuIdProvision = $cuIdProvision;

        return $this;
    }

    public function getMpPrCalcula(): ?string
    {
        return $this->mpPrCalcula;
    }

    public function setMpPrCalcula(string $mpPrCalcula): self
    {
        $this->mpPrCalcula = $mpPrCalcula;

        return $this;
    }

    public function getMpPrManejaFormula(): ?string
    {
        return $this->mpPrManejaFormula;
    }

    public function setMpPrManejaFormula(string $mpPrManejaFormula): self
    {
        $this->mpPrManejaFormula = $mpPrManejaFormula;

        return $this;
    }

    public function getMpPrFactor(): ?string
    {
        return $this->mpPrFactor;
    }

    public function setMpPrFactor(string $mpPrFactor): self
    {
        $this->mpPrFactor = $mpPrFactor;

        return $this;
    }

    public function getMpPrValor(): ?float
    {
        return $this->mpPrValor;
    }

    public function setMpPrValor(float $mpPrValor): self
    {
        $this->mpPrValor = $mpPrValor;

        return $this;
    }

    public function getMpPrEstado(): ?string
    {
        return $this->mpPrEstado;
    }

    public function setMpPrEstado(string $mpPrEstado): self
    {
        $this->mpPrEstado = $mpPrEstado;

        return $this;
    }


}

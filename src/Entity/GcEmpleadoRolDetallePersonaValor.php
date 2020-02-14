<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpleadoRolDetallePersonaValor
 *
 * @ORM\Table(name="gc_empleado_rol_detalle_persona_valor", indexes={@ORM\Index(name="mprldepv_relacionrol", columns={"em_id", "mp_rl_id"})})
 * @ORM\Entity
 */
class GcEmpleadoRolDetallePersonaValor
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
     * @ORM\Column(name="mp_rl_de_pv_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mpRlDePvId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_rl_id", type="bigint", nullable=false)
     */
    private $mpRlId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_rl_de_id", type="bigint", nullable=false)
     */
    private $mpRlDeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="mp_pr_id", type="bigint", nullable=false)
     */
    private $mpPrId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_orden", type="string", length=3, nullable=false, options={"default"="'00'"})
     */
    private $mpPrOrden = '\'00\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_codigo", type="string", length=5, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $mpPrCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_label_usuario", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $mpPrLabelUsuario = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_pr_tipo", type="string", length=1, nullable=false, options={"default"="'I'","fixed"=true})
     */
    private $mpPrTipo = '\'I\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_debe", type="bigint", nullable=false)
     */
    private $cuIdDebe = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_haber", type="bigint", nullable=false)
     */
    private $cuIdHaber = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="mp_rl_de_pv_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $mpRlDePvValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mp_rl_de_pv_observacion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $mpRlDePvObservacion = '\'\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getMpRlDePvId(): ?string
    {
        return $this->mpRlDePvId;
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

    public function getMpRlDeId(): ?string
    {
        return $this->mpRlDeId;
    }

    public function setMpRlDeId(string $mpRlDeId): self
    {
        $this->mpRlDeId = $mpRlDeId;

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

    public function getMpPrOrden(): ?string
    {
        return $this->mpPrOrden;
    }

    public function setMpPrOrden(string $mpPrOrden): self
    {
        $this->mpPrOrden = $mpPrOrden;

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

    public function getMpPrTipo(): ?string
    {
        return $this->mpPrTipo;
    }

    public function setMpPrTipo(string $mpPrTipo): self
    {
        $this->mpPrTipo = $mpPrTipo;

        return $this;
    }

    public function getCuIdDebe(): ?string
    {
        return $this->cuIdDebe;
    }

    public function setCuIdDebe(string $cuIdDebe): self
    {
        $this->cuIdDebe = $cuIdDebe;

        return $this;
    }

    public function getCuIdHaber(): ?string
    {
        return $this->cuIdHaber;
    }

    public function setCuIdHaber(string $cuIdHaber): self
    {
        $this->cuIdHaber = $cuIdHaber;

        return $this;
    }

    public function getMpRlDePvValor(): ?float
    {
        return $this->mpRlDePvValor;
    }

    public function setMpRlDePvValor(float $mpRlDePvValor): self
    {
        $this->mpRlDePvValor = $mpRlDePvValor;

        return $this;
    }

    public function getMpRlDePvObservacion(): ?string
    {
        return $this->mpRlDePvObservacion;
    }

    public function setMpRlDePvObservacion(string $mpRlDePvObservacion): self
    {
        $this->mpRlDePvObservacion = $mpRlDePvObservacion;

        return $this;
    }


}

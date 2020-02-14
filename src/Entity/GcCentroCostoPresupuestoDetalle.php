<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCentroCostoPresupuestoDetalle
 *
 * @ORM\Table(name="gc_centro_costo_presupuesto_detalle", indexes={@ORM\Index(name="indice_gc_centrocostopresupuestodetalle", columns={"em_id", "cp_de_id"})})
 * @ORM\Entity
 */
class GcCentroCostoPresupuestoDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="cp_de_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cpDeId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cp_id", type="bigint", nullable=false)
     */
    private $cpId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cc_id", type="bigint", nullable=false)
     */
    private $ccId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_de_tipo", type="string", length=1, nullable=false, options={"default"="'I'","fixed"=true})
     */
    private $cpDeTipo = '\'I\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cp_de_ingresoegreso", type="bigint", nullable=false)
     */
    private $cpDeIngresoegreso = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_de_ingresoegreso_add", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $cpDeIngresoegresoAdd = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="cp_de_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $cpDeValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_de_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $cpDeEstado = '\'C\'';

    public function getCpDeId(): ?string
    {
        return $this->cpDeId;
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

    public function getCpId(): ?string
    {
        return $this->cpId;
    }

    public function setCpId(string $cpId): self
    {
        $this->cpId = $cpId;

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

    public function getCpDeTipo(): ?string
    {
        return $this->cpDeTipo;
    }

    public function setCpDeTipo(string $cpDeTipo): self
    {
        $this->cpDeTipo = $cpDeTipo;

        return $this;
    }

    public function getCpDeIngresoegreso(): ?string
    {
        return $this->cpDeIngresoegreso;
    }

    public function setCpDeIngresoegreso(string $cpDeIngresoegreso): self
    {
        $this->cpDeIngresoegreso = $cpDeIngresoegreso;

        return $this;
    }

    public function getCpDeIngresoegresoAdd(): ?string
    {
        return $this->cpDeIngresoegresoAdd;
    }

    public function setCpDeIngresoegresoAdd(string $cpDeIngresoegresoAdd): self
    {
        $this->cpDeIngresoegresoAdd = $cpDeIngresoegresoAdd;

        return $this;
    }

    public function getCpDeValor(): ?float
    {
        return $this->cpDeValor;
    }

    public function setCpDeValor(float $cpDeValor): self
    {
        $this->cpDeValor = $cpDeValor;

        return $this;
    }

    public function getCpDeEstado(): ?string
    {
        return $this->cpDeEstado;
    }

    public function setCpDeEstado(string $cpDeEstado): self
    {
        $this->cpDeEstado = $cpDeEstado;

        return $this;
    }


}

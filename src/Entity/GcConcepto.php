<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcConcepto
 *
 * @ORM\Table(name="gc_concepto", indexes={@ORM\Index(name="indice_concepto", columns={"em_id", "cn_id"})})
 * @ORM\Entity
 */
class GcConcepto
{
    /**
     * @var int
     *
     * @ORM\Column(name="cn_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cnId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cn_codigo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $cnCodigo = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id", type="bigint", nullable=false)
     */
    private $tcId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id", type="bigint", nullable=false)
     */
    private $cuId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cn_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $cnNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cn_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $cnObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cn_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $cnEstado = '\'C\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="cn_clase", type="boolean", nullable=false)
     */
    private $cnClase = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cn_tipo_movimiento", type="boolean", nullable=false, options={"default"="-1"})
     */
    private $cnTipoMovimiento = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id2", type="bigint", nullable=false)
     */
    private $cuId2 = '0';

    public function getCnId(): ?string
    {
        return $this->cnId;
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

    public function getCnCodigo(): ?string
    {
        return $this->cnCodigo;
    }

    public function setCnCodigo(string $cnCodigo): self
    {
        $this->cnCodigo = $cnCodigo;

        return $this;
    }

    public function getTcId(): ?string
    {
        return $this->tcId;
    }

    public function setTcId(string $tcId): self
    {
        $this->tcId = $tcId;

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

    public function getCnNombre(): ?string
    {
        return $this->cnNombre;
    }

    public function setCnNombre(string $cnNombre): self
    {
        $this->cnNombre = $cnNombre;

        return $this;
    }

    public function getCnObservacion(): ?string
    {
        return $this->cnObservacion;
    }

    public function setCnObservacion(string $cnObservacion): self
    {
        $this->cnObservacion = $cnObservacion;

        return $this;
    }

    public function getCnEstado(): ?string
    {
        return $this->cnEstado;
    }

    public function setCnEstado(string $cnEstado): self
    {
        $this->cnEstado = $cnEstado;

        return $this;
    }

    public function getCnClase(): ?bool
    {
        return $this->cnClase;
    }

    public function setCnClase(bool $cnClase): self
    {
        $this->cnClase = $cnClase;

        return $this;
    }

    public function getCnTipoMovimiento(): ?bool
    {
        return $this->cnTipoMovimiento;
    }

    public function setCnTipoMovimiento(bool $cnTipoMovimiento): self
    {
        $this->cnTipoMovimiento = $cnTipoMovimiento;

        return $this;
    }

    public function getCuId2(): ?string
    {
        return $this->cuId2;
    }

    public function setCuId2(string $cuId2): self
    {
        $this->cuId2 = $cuId2;

        return $this;
    }


}

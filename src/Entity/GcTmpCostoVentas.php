<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcTmpCostoVentas
 *
 * @ORM\Table(name="gc_tmp_costo_ventas")
 * @ORM\Entity
 */
class GcTmpCostoVentas
{
    /**
     * @var int
     *
     * @ORM\Column(name="cv_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cvId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="us_codigo", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $usCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cv_tipo", type="string", length=5, nullable=false, options={"default"="'*'"})
     */
    private $cvTipo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="it_id", type="bigint", nullable=false)
     */
    private $itId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bo_id", type="bigint", nullable=false)
     */
    private $boId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cv_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $cvCantidad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cv_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $cvValor = '0';

    public function getCvId(): ?string
    {
        return $this->cvId;
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

    public function getUsCodigo(): ?string
    {
        return $this->usCodigo;
    }

    public function setUsCodigo(string $usCodigo): self
    {
        $this->usCodigo = $usCodigo;

        return $this;
    }

    public function getCvTipo(): ?string
    {
        return $this->cvTipo;
    }

    public function setCvTipo(string $cvTipo): self
    {
        $this->cvTipo = $cvTipo;

        return $this;
    }

    public function getItId(): ?string
    {
        return $this->itId;
    }

    public function setItId(string $itId): self
    {
        $this->itId = $itId;

        return $this;
    }

    public function getBoId(): ?string
    {
        return $this->boId;
    }

    public function setBoId(string $boId): self
    {
        $this->boId = $boId;

        return $this;
    }

    public function getCvCantidad(): ?float
    {
        return $this->cvCantidad;
    }

    public function setCvCantidad(float $cvCantidad): self
    {
        $this->cvCantidad = $cvCantidad;

        return $this;
    }

    public function getCvValor(): ?float
    {
        return $this->cvValor;
    }

    public function setCvValor(float $cvValor): self
    {
        $this->cvValor = $cvValor;

        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcImpuesto
 *
 * @ORM\Table(name="gc_impuesto")
 * @ORM\Entity
 */
class GcImpuesto
{
    /**
     * @var int
     *
     * @ORM\Column(name="im_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $imId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="im_codigo", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $imCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="im_nombre", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $imNombre = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id", type="bigint", nullable=false)
     */
    private $cuId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_sri_id", type="bigint", nullable=false)
     */
    private $cuSriId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="im_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $imEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="im_codigo_sri", type="string", length=2, nullable=false, options={"default"="''"})
     */
    private $imCodigoSri = '\'\'';

    public function getImId(): ?string
    {
        return $this->imId;
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

    public function getImCodigo(): ?string
    {
        return $this->imCodigo;
    }

    public function setImCodigo(string $imCodigo): self
    {
        $this->imCodigo = $imCodigo;

        return $this;
    }

    public function getImNombre(): ?string
    {
        return $this->imNombre;
    }

    public function setImNombre(string $imNombre): self
    {
        $this->imNombre = $imNombre;

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

    public function getCuSriId(): ?string
    {
        return $this->cuSriId;
    }

    public function setCuSriId(string $cuSriId): self
    {
        $this->cuSriId = $cuSriId;

        return $this;
    }

    public function getImEstado(): ?string
    {
        return $this->imEstado;
    }

    public function setImEstado(string $imEstado): self
    {
        $this->imEstado = $imEstado;

        return $this;
    }

    public function getImCodigoSri(): ?string
    {
        return $this->imCodigoSri;
    }

    public function setImCodigoSri(string $imCodigoSri): self
    {
        $this->imCodigoSri = $imCodigoSri;

        return $this;
    }


}

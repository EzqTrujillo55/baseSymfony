<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSriProvincia
 *
 * @ORM\Table(name="gc_sri_provincia")
 * @ORM\Entity
 */
class GcSriProvincia
{
    /**
     * @var string
     *
     * @ORM\Column(name="sp_codigo_sri", type="string", length=5, nullable=false, options={"default"="'0'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $spCodigoSri = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sp_nombre", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $spNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sp_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $spEstado = '\'C\'';

    public function getSpCodigoSri(): ?string
    {
        return $this->spCodigoSri;
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

    public function getSpNombre(): ?string
    {
        return $this->spNombre;
    }

    public function setSpNombre(string $spNombre): self
    {
        $this->spNombre = $spNombre;

        return $this;
    }

    public function getSpEstado(): ?string
    {
        return $this->spEstado;
    }

    public function setSpEstado(string $spEstado): self
    {
        $this->spEstado = $spEstado;

        return $this;
    }


}

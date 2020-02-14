<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSriCiudad
 *
 * @ORM\Table(name="gc_sri_ciudad")
 * @ORM\Entity
 */
class GcSriCiudad
{
    /**
     * @var string
     *
     * @ORM\Column(name="sc_codigo_sri", type="string", length=5, nullable=false, options={"default"="'0'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $scCodigoSri = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_nombre", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $scNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sp_codigo_sri", type="string", length=5, nullable=false, options={"default"="'0'"})
     */
    private $spCodigoSri = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $scEstado = '\'C\'';

    public function getScCodigoSri(): ?string
    {
        return $this->scCodigoSri;
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

    public function getScNombre(): ?string
    {
        return $this->scNombre;
    }

    public function setScNombre(string $scNombre): self
    {
        $this->scNombre = $scNombre;

        return $this;
    }

    public function getSpCodigoSri(): ?string
    {
        return $this->spCodigoSri;
    }

    public function setSpCodigoSri(string $spCodigoSri): self
    {
        $this->spCodigoSri = $spCodigoSri;

        return $this;
    }

    public function getScEstado(): ?string
    {
        return $this->scEstado;
    }

    public function setScEstado(string $scEstado): self
    {
        $this->scEstado = $scEstado;

        return $this;
    }


}

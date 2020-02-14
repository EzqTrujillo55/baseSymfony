<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSector
 *
 * @ORM\Table(name="gc_sector")
 * @ORM\Entity
 */
class GcSector
{
    /**
     * @var int
     *
     * @ORM\Column(name="sc_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $scId;

    /**
     * @var int
     *
     * @ORM\Column(name="pa_id", type="bigint", nullable=false)
     */
    private $paId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ci_id", type="bigint", nullable=false)
     */
    private $ciId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $scNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_observacion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $scObservacion = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $scEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getScId(): ?string
    {
        return $this->scId;
    }

    public function getPaId(): ?string
    {
        return $this->paId;
    }

    public function setPaId(string $paId): self
    {
        $this->paId = $paId;

        return $this;
    }

    public function getCiId(): ?string
    {
        return $this->ciId;
    }

    public function setCiId(string $ciId): self
    {
        $this->ciId = $ciId;

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

    public function getScObservacion(): ?string
    {
        return $this->scObservacion;
    }

    public function setScObservacion(string $scObservacion): self
    {
        $this->scObservacion = $scObservacion;

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

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function setEmId(string $emId): self
    {
        $this->emId = $emId;

        return $this;
    }


}

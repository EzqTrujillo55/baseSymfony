<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtSustentoComprobante
 *
 * @ORM\Table(name="gc_at_sustento_comprobante")
 * @ORM\Entity
 */
class GcAtSustentoComprobante
{
    /**
     * @var string
     *
     * @ORM\Column(name="at_sc_id", type="string", length=10, nullable=false, options={"default"="'0'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $atScId = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_sc_descripcion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $atScDescripcion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_sc_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $atScEstado = '\'C\'';

    public function getAtScId(): ?string
    {
        return $this->atScId;
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

    public function getAtScDescripcion(): ?string
    {
        return $this->atScDescripcion;
    }

    public function setAtScDescripcion(string $atScDescripcion): self
    {
        $this->atScDescripcion = $atScDescripcion;

        return $this;
    }

    public function getAtScEstado(): ?string
    {
        return $this->atScEstado;
    }

    public function setAtScEstado(string $atScEstado): self
    {
        $this->atScEstado = $atScEstado;

        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSeguimientoAccion
 *
 * @ORM\Table(name="gc_seguimiento_accion")
 * @ORM\Entity
 */
class GcSeguimientoAccion
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
     * @ORM\Column(name="sa_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $saId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sa_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $saCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sa_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $saNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sa_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $saObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sa_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $saEstado = '\'C\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getSaId(): ?string
    {
        return $this->saId;
    }

    public function getSaCodigo(): ?string
    {
        return $this->saCodigo;
    }

    public function setSaCodigo(string $saCodigo): self
    {
        $this->saCodigo = $saCodigo;

        return $this;
    }

    public function getSaNombre(): ?string
    {
        return $this->saNombre;
    }

    public function setSaNombre(string $saNombre): self
    {
        $this->saNombre = $saNombre;

        return $this;
    }

    public function getSaObservacion(): ?string
    {
        return $this->saObservacion;
    }

    public function setSaObservacion(string $saObservacion): self
    {
        $this->saObservacion = $saObservacion;

        return $this;
    }

    public function getSaEstado(): ?string
    {
        return $this->saEstado;
    }

    public function setSaEstado(string $saEstado): self
    {
        $this->saEstado = $saEstado;

        return $this;
    }


}

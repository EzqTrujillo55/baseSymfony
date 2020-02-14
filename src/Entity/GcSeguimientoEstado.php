<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSeguimientoEstado
 *
 * @ORM\Table(name="gc_seguimiento_estado")
 * @ORM\Entity
 */
class GcSeguimientoEstado
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
     * @ORM\Column(name="se_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="se_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $seCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="se_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $seNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="se_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $seObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="se_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $seEstado = '\'C\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getSeId(): ?string
    {
        return $this->seId;
    }

    public function getSeCodigo(): ?string
    {
        return $this->seCodigo;
    }

    public function setSeCodigo(string $seCodigo): self
    {
        $this->seCodigo = $seCodigo;

        return $this;
    }

    public function getSeNombre(): ?string
    {
        return $this->seNombre;
    }

    public function setSeNombre(string $seNombre): self
    {
        $this->seNombre = $seNombre;

        return $this;
    }

    public function getSeObservacion(): ?string
    {
        return $this->seObservacion;
    }

    public function setSeObservacion(string $seObservacion): self
    {
        $this->seObservacion = $seObservacion;

        return $this;
    }

    public function getSeEstado(): ?string
    {
        return $this->seEstado;
    }

    public function setSeEstado(string $seEstado): self
    {
        $this->seEstado = $seEstado;

        return $this;
    }


}

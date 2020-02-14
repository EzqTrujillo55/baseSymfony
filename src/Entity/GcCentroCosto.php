<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCentroCosto
 *
 * @ORM\Table(name="gc_centro_costo", indexes={@ORM\Index(name="indice_centrocosto", columns={"em_id", "cc_id"})})
 * @ORM\Entity
 */
class GcCentroCosto
{
    /**
     * @var int
     *
     * @ORM\Column(name="cc_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ccId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cc_codigo", type="string", length=25, nullable=false, options={"default"="'0'"})
     */
    private $ccCodigo = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cc_nombre", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $ccNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cc_observacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $ccObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cc_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ccEstado = '\'C\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="cc_omision", type="boolean", nullable=false)
     */
    private $ccOmision = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cc_estado_uso", type="boolean", nullable=false)
     */
    private $ccEstadoUso = '0';

    public function getCcId(): ?string
    {
        return $this->ccId;
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

    public function getCcCodigo(): ?string
    {
        return $this->ccCodigo;
    }

    public function setCcCodigo(string $ccCodigo): self
    {
        $this->ccCodigo = $ccCodigo;

        return $this;
    }

    public function getCcNombre(): ?string
    {
        return $this->ccNombre;
    }

    public function setCcNombre(string $ccNombre): self
    {
        $this->ccNombre = $ccNombre;

        return $this;
    }

    public function getCcObservacion(): ?string
    {
        return $this->ccObservacion;
    }

    public function setCcObservacion(string $ccObservacion): self
    {
        $this->ccObservacion = $ccObservacion;

        return $this;
    }

    public function getCcEstado(): ?string
    {
        return $this->ccEstado;
    }

    public function setCcEstado(string $ccEstado): self
    {
        $this->ccEstado = $ccEstado;

        return $this;
    }

    public function getCcOmision(): ?bool
    {
        return $this->ccOmision;
    }

    public function setCcOmision(bool $ccOmision): self
    {
        $this->ccOmision = $ccOmision;

        return $this;
    }

    public function getCcEstadoUso(): ?bool
    {
        return $this->ccEstadoUso;
    }

    public function setCcEstadoUso(bool $ccEstadoUso): self
    {
        $this->ccEstadoUso = $ccEstadoUso;

        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcColor
 *
 * @ORM\Table(name="gc_color", indexes={@ORM\Index(name="indice_color", columns={"em_id", "co_id"})})
 * @ORM\Entity
 */
class GcColor
{
    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="co_codigo", type="string", length=50, nullable=true, options={"default"="'*'"})
     */
    private $coCodigo = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="co_nombre", type="string", length=255, nullable=true, options={"default"="'*'"})
     */
    private $coNombre = '\'*\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="co_observacion", type="string", length=255, nullable=true, options={"default"="'*'"})
     */
    private $coObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $coEstado = '\'C\'';

    public function getCoId(): ?string
    {
        return $this->coId;
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

    public function getCoCodigo(): ?string
    {
        return $this->coCodigo;
    }

    public function setCoCodigo(?string $coCodigo): self
    {
        $this->coCodigo = $coCodigo;

        return $this;
    }

    public function getCoNombre(): ?string
    {
        return $this->coNombre;
    }

    public function setCoNombre(?string $coNombre): self
    {
        $this->coNombre = $coNombre;

        return $this;
    }

    public function getCoObservacion(): ?string
    {
        return $this->coObservacion;
    }

    public function setCoObservacion(?string $coObservacion): self
    {
        $this->coObservacion = $coObservacion;

        return $this;
    }

    public function getCoEstado(): ?string
    {
        return $this->coEstado;
    }

    public function setCoEstado(string $coEstado): self
    {
        $this->coEstado = $coEstado;

        return $this;
    }


}

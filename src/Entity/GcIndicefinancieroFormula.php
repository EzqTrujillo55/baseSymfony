<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcIndicefinancieroFormula
 *
 * @ORM\Table(name="gc_indicefinanciero_formula")
 * @ORM\Entity
 */
class GcIndicefinancieroFormula
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
     * @ORM\Column(name="if_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ifId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="if_codigo", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $ifCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="if_nombre", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $ifNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="if_resultado", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $ifResultado = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="if_interpretacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $ifInterpretacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="if_observacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $ifObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="if_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ifEstado = '\'C\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getIfId(): ?string
    {
        return $this->ifId;
    }

    public function getIfCodigo(): ?string
    {
        return $this->ifCodigo;
    }

    public function setIfCodigo(string $ifCodigo): self
    {
        $this->ifCodigo = $ifCodigo;

        return $this;
    }

    public function getIfNombre(): ?string
    {
        return $this->ifNombre;
    }

    public function setIfNombre(string $ifNombre): self
    {
        $this->ifNombre = $ifNombre;

        return $this;
    }

    public function getIfResultado(): ?string
    {
        return $this->ifResultado;
    }

    public function setIfResultado(string $ifResultado): self
    {
        $this->ifResultado = $ifResultado;

        return $this;
    }

    public function getIfInterpretacion(): ?string
    {
        return $this->ifInterpretacion;
    }

    public function setIfInterpretacion(string $ifInterpretacion): self
    {
        $this->ifInterpretacion = $ifInterpretacion;

        return $this;
    }

    public function getIfObservacion(): ?string
    {
        return $this->ifObservacion;
    }

    public function setIfObservacion(string $ifObservacion): self
    {
        $this->ifObservacion = $ifObservacion;

        return $this;
    }

    public function getIfEstado(): ?string
    {
        return $this->ifEstado;
    }

    public function setIfEstado(string $ifEstado): self
    {
        $this->ifEstado = $ifEstado;

        return $this;
    }


}

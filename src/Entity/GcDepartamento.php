<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcDepartamento
 *
 * @ORM\Table(name="gc_departamento")
 * @ORM\Entity
 */
class GcDepartamento
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
     * @ORM\Column(name="dp_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dpId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dp_codigo", type="string", length=20, nullable=false, options={"default"="'*'"})
     */
    private $dpCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="dp_nombre", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $dpNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="dp_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $dpObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="dp_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $dpEstado = '\'C\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getDpId(): ?string
    {
        return $this->dpId;
    }

    public function getDpCodigo(): ?string
    {
        return $this->dpCodigo;
    }

    public function setDpCodigo(string $dpCodigo): self
    {
        $this->dpCodigo = $dpCodigo;

        return $this;
    }

    public function getDpNombre(): ?string
    {
        return $this->dpNombre;
    }

    public function setDpNombre(string $dpNombre): self
    {
        $this->dpNombre = $dpNombre;

        return $this;
    }

    public function getDpObservacion(): ?string
    {
        return $this->dpObservacion;
    }

    public function setDpObservacion(string $dpObservacion): self
    {
        $this->dpObservacion = $dpObservacion;

        return $this;
    }

    public function getDpEstado(): ?string
    {
        return $this->dpEstado;
    }

    public function setDpEstado(string $dpEstado): self
    {
        $this->dpEstado = $dpEstado;

        return $this;
    }


}

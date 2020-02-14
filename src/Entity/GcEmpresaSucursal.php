<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcEmpresaSucursal
 *
 * @ORM\Table(name="gc_empresa_sucursal")
 * @ORM\Entity
 */
class GcEmpresaSucursal
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
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_codigo", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $scCodigo = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_nombre", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $scNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_ubicacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $scUbicacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_responsable", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $scResponsable = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_observacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $scObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sc_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $scEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cc_id", type="bigint", nullable=false)
     */
    private $ccId = '0';

    public function getScId(): ?string
    {
        return $this->scId;
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

    public function getScCodigo(): ?string
    {
        return $this->scCodigo;
    }

    public function setScCodigo(string $scCodigo): self
    {
        $this->scCodigo = $scCodigo;

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

    public function getScUbicacion(): ?string
    {
        return $this->scUbicacion;
    }

    public function setScUbicacion(string $scUbicacion): self
    {
        $this->scUbicacion = $scUbicacion;

        return $this;
    }

    public function getScResponsable(): ?string
    {
        return $this->scResponsable;
    }

    public function setScResponsable(string $scResponsable): self
    {
        $this->scResponsable = $scResponsable;

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

    public function getCcId(): ?string
    {
        return $this->ccId;
    }

    public function setCcId(string $ccId): self
    {
        $this->ccId = $ccId;

        return $this;
    }


}

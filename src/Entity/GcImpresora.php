<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcImpresora
 *
 * @ORM\Table(name="gc_impresora")
 * @ORM\Entity
 */
class GcImpresora
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
     * @ORM\Column(name="im_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $imId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="im_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $imCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="im_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $imNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="im_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $imObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="im_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $imEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="im_activo", type="string", length=1, nullable=false, options={"default"="'2'","fixed"=true})
     */
    private $imActivo = '\'2\'';

    /**
     * @var string
     *
     * @ORM\Column(name="im_papel", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $imPapel = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="im_orientar", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $imOrientar = '\'*\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getImId(): ?string
    {
        return $this->imId;
    }

    public function getImCodigo(): ?string
    {
        return $this->imCodigo;
    }

    public function setImCodigo(string $imCodigo): self
    {
        $this->imCodigo = $imCodigo;

        return $this;
    }

    public function getImNombre(): ?string
    {
        return $this->imNombre;
    }

    public function setImNombre(string $imNombre): self
    {
        $this->imNombre = $imNombre;

        return $this;
    }

    public function getImObservacion(): ?string
    {
        return $this->imObservacion;
    }

    public function setImObservacion(string $imObservacion): self
    {
        $this->imObservacion = $imObservacion;

        return $this;
    }

    public function getImEstado(): ?string
    {
        return $this->imEstado;
    }

    public function setImEstado(string $imEstado): self
    {
        $this->imEstado = $imEstado;

        return $this;
    }

    public function getUsId(): ?string
    {
        return $this->usId;
    }

    public function setUsId(string $usId): self
    {
        $this->usId = $usId;

        return $this;
    }

    public function getImActivo(): ?string
    {
        return $this->imActivo;
    }

    public function setImActivo(string $imActivo): self
    {
        $this->imActivo = $imActivo;

        return $this;
    }

    public function getImPapel(): ?string
    {
        return $this->imPapel;
    }

    public function setImPapel(string $imPapel): self
    {
        $this->imPapel = $imPapel;

        return $this;
    }

    public function getImOrientar(): ?string
    {
        return $this->imOrientar;
    }

    public function setImOrientar(string $imOrientar): self
    {
        $this->imOrientar = $imOrientar;

        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * GcPais
 *
 * @ORM\Table(name="gc_pais")
 * @ORM\Entity
 */
class GcPais
{
    /**
     * @var int
     *
     * @ORM\Column(name="pa_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pa_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $paNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pa_nacionalidad", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $paNacionalidad = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pa_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $paObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pa_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $paEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pa_discado", type="string", length=5, nullable=false, options={"default"="'*'"})
     */
    private $paDiscado = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GcEmpresa", mappedBy="pais")
     */
    private $gcEmpresas;

    public function __construct()
    {
        $this->gcEmpresas = new ArrayCollection();
    }

    public function getPaId(): ?string
    {
        return $this->paId;
    }

    public function getPaNombre(): ?string
    {
        return $this->paNombre;
    }

    public function setPaNombre(string $paNombre): self
    {
        $this->paNombre = $paNombre;

        return $this;
    }

    public function getPaNacionalidad(): ?string
    {
        return $this->paNacionalidad;
    }

    public function setPaNacionalidad(string $paNacionalidad): self
    {
        $this->paNacionalidad = $paNacionalidad;

        return $this;
    }

    public function getPaObservacion(): ?string
    {
        return $this->paObservacion;
    }

    public function setPaObservacion(string $paObservacion): self
    {
        $this->paObservacion = $paObservacion;

        return $this;
    }

    public function getPaEstado(): ?string
    {
        return $this->paEstado;
    }

    public function setPaEstado(string $paEstado): self
    {
        $this->paEstado = $paEstado;

        return $this;
    }

    public function getPaDiscado(): ?string
    {
        return $this->paDiscado;
    }

    public function setPaDiscado(string $paDiscado): self
    {
        $this->paDiscado = $paDiscado;

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

    /**
     * @return Collection|GcEmpresa[]
     */
    public function getGcEmpresas(): Collection
    {
        return $this->gcEmpresas;
    }

    public function addGcEmpresa(GcEmpresa $gcEmpresa): self
    {
        if (!$this->gcEmpresas->contains($gcEmpresa)) {
            $this->gcEmpresas[] = $gcEmpresa;
            $gcEmpresa->setPais($this);
        }

        return $this;
    }

    public function removeGcEmpresa(GcEmpresa $gcEmpresa): self
    {
        if ($this->gcEmpresas->contains($gcEmpresa)) {
            $this->gcEmpresas->removeElement($gcEmpresa);
            // set the owning side to null (unless already changed)
            if ($gcEmpresa->getPais() === $this) {
                $gcEmpresa->setPais(null);
            }
        }

        return $this;
    }


}

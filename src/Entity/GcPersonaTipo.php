<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPersonaTipo
 *
 * @ORM\Table(name="gc_persona_tipo", indexes={@ORM\Index(name="indice_personatipo", columns={"em_id", "pt_id"})})
 * @ORM\Entity
 */
class GcPersonaTipo
{
    /**
     * @var int
     *
     * @ORM\Column(name="pt_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ptId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pt_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $ptNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pt_observacion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $ptObservacion = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pt_tipo", type="string", length=1, nullable=false, options={"default"="''","fixed"=true})
     */
    private $ptTipo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pt_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ptEstado = '\'C\'';

    public function getPtId(): ?string
    {
        return $this->ptId;
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

    public function getPtNombre(): ?string
    {
        return $this->ptNombre;
    }

    public function setPtNombre(string $ptNombre): self
    {
        $this->ptNombre = $ptNombre;

        return $this;
    }

    public function getPtObservacion(): ?string
    {
        return $this->ptObservacion;
    }

    public function setPtObservacion(string $ptObservacion): self
    {
        $this->ptObservacion = $ptObservacion;

        return $this;
    }

    public function getPtTipo(): ?string
    {
        return $this->ptTipo;
    }

    public function setPtTipo(string $ptTipo): self
    {
        $this->ptTipo = $ptTipo;

        return $this;
    }

    public function getPtEstado(): ?string
    {
        return $this->ptEstado;
    }

    public function setPtEstado(string $ptEstado): self
    {
        $this->ptEstado = $ptEstado;

        return $this;
    }


}

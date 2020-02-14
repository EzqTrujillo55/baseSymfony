<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPath
 *
 * @ORM\Table(name="gc_path")
 * @ORM\Entity
 */
class GcPath
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
     * @ORM\Column(name="pt_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ptId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="it_id", type="bigint", nullable=false)
     */
    private $itId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pt_ubicacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $ptUbicacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pt_tipo", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $ptTipo = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pt_fecha", type="date", nullable=false, options={"default"="'1800-01-01'"})
     */
    private $ptFecha = '\'1800-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="pt_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ptEstado = '\'C\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getPtId(): ?string
    {
        return $this->ptId;
    }

    public function getItId(): ?string
    {
        return $this->itId;
    }

    public function setItId(string $itId): self
    {
        $this->itId = $itId;

        return $this;
    }

    public function getPtUbicacion(): ?string
    {
        return $this->ptUbicacion;
    }

    public function setPtUbicacion(string $ptUbicacion): self
    {
        $this->ptUbicacion = $ptUbicacion;

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

    public function getPtFecha(): ?\DateTimeInterface
    {
        return $this->ptFecha;
    }

    public function setPtFecha(\DateTimeInterface $ptFecha): self
    {
        $this->ptFecha = $ptFecha;

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

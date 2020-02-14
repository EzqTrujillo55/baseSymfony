<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcFacturaGrupo
 *
 * @ORM\Table(name="gc_factura_grupo", indexes={@ORM\Index(name="IndiceTipoFacturaGrupo", columns={"em_id", "fg_tipo", "fg_secuencial"})})
 * @ORM\Entity
 */
class GcFacturaGrupo
{
    /**
     * @var int
     *
     * @ORM\Column(name="fg_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fgId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fg_tipo", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $fgTipo = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fg_secuencial", type="bigint", nullable=false)
     */
    private $fgSecuencial = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fg_fecha", type="date", nullable=false, options={"default"="'1800-01-01'"})
     */
    private $fgFecha = '\'1800-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fg_descripcion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $fgDescripcion = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fg_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $fgEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_id", type="bigint", nullable=false)
     */
    private $pvId = '0';

    public function getFgId(): ?string
    {
        return $this->fgId;
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

    public function getFgTipo(): ?string
    {
        return $this->fgTipo;
    }

    public function setFgTipo(string $fgTipo): self
    {
        $this->fgTipo = $fgTipo;

        return $this;
    }

    public function getFgSecuencial(): ?string
    {
        return $this->fgSecuencial;
    }

    public function setFgSecuencial(string $fgSecuencial): self
    {
        $this->fgSecuencial = $fgSecuencial;

        return $this;
    }

    public function getFgFecha(): ?\DateTimeInterface
    {
        return $this->fgFecha;
    }

    public function setFgFecha(\DateTimeInterface $fgFecha): self
    {
        $this->fgFecha = $fgFecha;

        return $this;
    }

    public function getFgDescripcion(): ?string
    {
        return $this->fgDescripcion;
    }

    public function setFgDescripcion(string $fgDescripcion): self
    {
        $this->fgDescripcion = $fgDescripcion;

        return $this;
    }

    public function getFgEstado(): ?string
    {
        return $this->fgEstado;
    }

    public function setFgEstado(string $fgEstado): self
    {
        $this->fgEstado = $fgEstado;

        return $this;
    }

    public function getPvId(): ?string
    {
        return $this->pvId;
    }

    public function setPvId(string $pvId): self
    {
        $this->pvId = $pvId;

        return $this;
    }


}

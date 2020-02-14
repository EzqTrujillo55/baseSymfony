<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSriCodigosError
 *
 * @ORM\Table(name="gc_sri_codigos_error", indexes={@ORM\Index(name="ind_sri_codigos_error", columns={"ce_codigo"})})
 * @ORM\Entity
 */
class GcSriCodigosError
{
    /**
     * @var int
     *
     * @ORM\Column(name="ce_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ceId;

    /**
     * @var string
     *
     * @ORM\Column(name="ce_codigo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $ceCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ce_descripcion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $ceDescripcion = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ce_solucion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $ceSolucion = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ce_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $ceEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getCeId(): ?string
    {
        return $this->ceId;
    }

    public function getCeCodigo(): ?string
    {
        return $this->ceCodigo;
    }

    public function setCeCodigo(string $ceCodigo): self
    {
        $this->ceCodigo = $ceCodigo;

        return $this;
    }

    public function getCeDescripcion(): ?string
    {
        return $this->ceDescripcion;
    }

    public function setCeDescripcion(string $ceDescripcion): self
    {
        $this->ceDescripcion = $ceDescripcion;

        return $this;
    }

    public function getCeSolucion(): ?string
    {
        return $this->ceSolucion;
    }

    public function setCeSolucion(string $ceSolucion): self
    {
        $this->ceSolucion = $ceSolucion;

        return $this;
    }

    public function getCeEstado(): ?string
    {
        return $this->ceEstado;
    }

    public function setCeEstado(string $ceEstado): self
    {
        $this->ceEstado = $ceEstado;

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


}

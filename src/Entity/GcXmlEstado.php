<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcXmlEstado
 *
 * @ORM\Table(name="gc_xml_estado")
 * @ORM\Entity
 */
class GcXmlEstado
{
    /**
     * @var string
     *
     * @ORM\Column(name="xe_tipo", type="string", length=1, nullable=false, options={"default"="''","fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $xeTipo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="xe_codigo", type="string", length=2, nullable=false, options={"default"="''","fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $xeCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="xe_descripcion", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $xeDescripcion = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="xe_puede_editar", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $xePuedeEditar = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getXeTipo(): ?string
    {
        return $this->xeTipo;
    }

    public function getXeCodigo(): ?string
    {
        return $this->xeCodigo;
    }

    public function getXeDescripcion(): ?string
    {
        return $this->xeDescripcion;
    }

    public function setXeDescripcion(string $xeDescripcion): self
    {
        $this->xeDescripcion = $xeDescripcion;

        return $this;
    }

    public function getXePuedeEditar(): ?string
    {
        return $this->xePuedeEditar;
    }

    public function setXePuedeEditar(string $xePuedeEditar): self
    {
        $this->xePuedeEditar = $xePuedeEditar;

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

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSriTipoEmision
 *
 * @ORM\Table(name="gc_sri_tipo_emision")
 * @ORM\Entity
 */
class GcSriTipoEmision
{
    /**
     * @var bool
     *
     * @ORM\Column(name="te_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $teId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="te_descripcion", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $teDescripcion = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="te_activo", type="string", length=1, nullable=true, options={"default"="'N'","fixed"=true})
     */
    private $teActivo = '\'N\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getTeId(): ?bool
    {
        return $this->teId;
    }

    public function getTeDescripcion(): ?string
    {
        return $this->teDescripcion;
    }

    public function setTeDescripcion(string $teDescripcion): self
    {
        $this->teDescripcion = $teDescripcion;

        return $this;
    }

    public function getTeActivo(): ?string
    {
        return $this->teActivo;
    }

    public function setTeActivo(?string $teActivo): self
    {
        $this->teActivo = $teActivo;

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

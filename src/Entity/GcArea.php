<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcArea
 *
 * @ORM\Table(name="gc_area", indexes={@ORM\Index(name="indice_area", columns={"em_id", "ar_id"})})
 * @ORM\Entity
 */
class GcArea
{
    /**
     * @var int
     *
     * @ORM\Column(name="ar_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $arId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ar_nombre", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $arNombre = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ar_observacion", type="string", length=100, nullable=false, options={"default"="''"})
     */
    private $arObservacion = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ar_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $arEstado = '\'C\'';

    public function getArId(): ?string
    {
        return $this->arId;
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

    public function getArNombre(): ?string
    {
        return $this->arNombre;
    }

    public function setArNombre(string $arNombre): self
    {
        $this->arNombre = $arNombre;

        return $this;
    }

    public function getArObservacion(): ?string
    {
        return $this->arObservacion;
    }

    public function setArObservacion(string $arObservacion): self
    {
        $this->arObservacion = $arObservacion;

        return $this;
    }

    public function getArEstado(): ?string
    {
        return $this->arEstado;
    }

    public function setArEstado(string $arEstado): self
    {
        $this->arEstado = $arEstado;

        return $this;
    }


}

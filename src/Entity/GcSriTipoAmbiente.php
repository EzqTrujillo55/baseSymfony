<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSriTipoAmbiente
 *
 * @ORM\Table(name="gc_sri_tipo_ambiente")
 * @ORM\Entity
 */
class GcSriTipoAmbiente
{
    /**
     * @var bool
     *
     * @ORM\Column(name="ta_id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ta_descripcion", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $taDescripcion = '\'\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ta_activo", type="string", length=1, nullable=true, options={"default"="'N'","fixed"=true})
     */
    private $taActivo = '\'N\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    public function getTaId(): ?bool
    {
        return $this->taId;
    }

    public function getTaDescripcion(): ?string
    {
        return $this->taDescripcion;
    }

    public function setTaDescripcion(string $taDescripcion): self
    {
        $this->taDescripcion = $taDescripcion;

        return $this;
    }

    public function getTaActivo(): ?string
    {
        return $this->taActivo;
    }

    public function setTaActivo(?string $taActivo): self
    {
        $this->taActivo = $taActivo;

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

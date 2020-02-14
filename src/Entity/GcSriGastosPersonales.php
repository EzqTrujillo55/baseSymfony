<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcSriGastosPersonales
 *
 * @ORM\Table(name="gc_sri_gastos_personales")
 * @ORM\Entity
 */
class GcSriGastosPersonales
{
    /**
     * @var string
     *
     * @ORM\Column(name="sg_codigo", type="string", length=5, nullable=false, options={"default"="'0'"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sgCodigo = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="sg_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $sgNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="sg_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $sgEstado = '\'C\'';

    public function getSgCodigo(): ?string
    {
        return $this->sgCodigo;
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

    public function getSgNombre(): ?string
    {
        return $this->sgNombre;
    }

    public function setSgNombre(string $sgNombre): self
    {
        $this->sgNombre = $sgNombre;

        return $this;
    }

    public function getSgEstado(): ?string
    {
        return $this->sgEstado;
    }

    public function setSgEstado(string $sgEstado): self
    {
        $this->sgEstado = $sgEstado;

        return $this;
    }


}

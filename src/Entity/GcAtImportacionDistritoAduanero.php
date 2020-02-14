<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtImportacionDistritoAduanero
 *
 * @ORM\Table(name="gc_at_importacion_distrito_aduanero")
 * @ORM\Entity
 */
class GcAtImportacionDistritoAduanero
{
    /**
     * @var int
     *
     * @ORM\Column(name="at_da_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $atDaId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_da_codigo", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $atDaCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_da_descripcion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $atDaDescripcion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_da_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $atDaEstado = '\'C\'';

    public function getAtDaId(): ?string
    {
        return $this->atDaId;
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

    public function getAtDaCodigo(): ?string
    {
        return $this->atDaCodigo;
    }

    public function setAtDaCodigo(string $atDaCodigo): self
    {
        $this->atDaCodigo = $atDaCodigo;

        return $this;
    }

    public function getAtDaDescripcion(): ?string
    {
        return $this->atDaDescripcion;
    }

    public function setAtDaDescripcion(string $atDaDescripcion): self
    {
        $this->atDaDescripcion = $atDaDescripcion;

        return $this;
    }

    public function getAtDaEstado(): ?string
    {
        return $this->atDaEstado;
    }

    public function setAtDaEstado(string $atDaEstado): self
    {
        $this->atDaEstado = $atDaEstado;

        return $this;
    }


}

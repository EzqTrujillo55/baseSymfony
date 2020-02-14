<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtImportacionTipoPersona
 *
 * @ORM\Table(name="gc_at_importacion_tipo_persona")
 * @ORM\Entity
 */
class GcAtImportacionTipoPersona
{
    /**
     * @var int
     *
     * @ORM\Column(name="at_tp_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $atTpId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_tp_codigo", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $atTpCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_tp_descripcion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $atTpDescripcion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_tp_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $atTpEstado = '\'C\'';

    public function getAtTpId(): ?string
    {
        return $this->atTpId;
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

    public function getAtTpCodigo(): ?string
    {
        return $this->atTpCodigo;
    }

    public function setAtTpCodigo(string $atTpCodigo): self
    {
        $this->atTpCodigo = $atTpCodigo;

        return $this;
    }

    public function getAtTpDescripcion(): ?string
    {
        return $this->atTpDescripcion;
    }

    public function setAtTpDescripcion(string $atTpDescripcion): self
    {
        $this->atTpDescripcion = $atTpDescripcion;

        return $this;
    }

    public function getAtTpEstado(): ?string
    {
        return $this->atTpEstado;
    }

    public function setAtTpEstado(string $atTpEstado): self
    {
        $this->atTpEstado = $atTpEstado;

        return $this;
    }


}

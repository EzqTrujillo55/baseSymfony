<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtImportacionTipoTransaccion
 *
 * @ORM\Table(name="gc_at_importacion_tipo_transaccion")
 * @ORM\Entity
 */
class GcAtImportacionTipoTransaccion
{
    /**
     * @var int
     *
     * @ORM\Column(name="at_tt_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $atTtId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_tt_codigo", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $atTtCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_tt_descripcion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $atTtDescripcion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_tt_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $atTtEstado = '\'C\'';

    public function getAtTtId(): ?string
    {
        return $this->atTtId;
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

    public function getAtTtCodigo(): ?string
    {
        return $this->atTtCodigo;
    }

    public function setAtTtCodigo(string $atTtCodigo): self
    {
        $this->atTtCodigo = $atTtCodigo;

        return $this;
    }

    public function getAtTtDescripcion(): ?string
    {
        return $this->atTtDescripcion;
    }

    public function setAtTtDescripcion(string $atTtDescripcion): self
    {
        $this->atTtDescripcion = $atTtDescripcion;

        return $this;
    }

    public function getAtTtEstado(): ?string
    {
        return $this->atTtEstado;
    }

    public function setAtTtEstado(string $atTtEstado): self
    {
        $this->atTtEstado = $atTtEstado;

        return $this;
    }


}

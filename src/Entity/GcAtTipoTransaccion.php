<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcAtTipoTransaccion
 *
 * @ORM\Table(name="gc_at_tipo_transaccion")
 * @ORM\Entity
 */
class GcAtTipoTransaccion
{
    /**
     * @var int
     *
     * @ORM\Column(name="at_tr_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $atTrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="at_tr_descripcion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $atTrDescripcion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="at_tr_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $atTrEstado = '\'C\'';

    public function getAtTrId(): ?string
    {
        return $this->atTrId;
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

    public function getAtTrDescripcion(): ?string
    {
        return $this->atTrDescripcion;
    }

    public function setAtTrDescripcion(string $atTrDescripcion): self
    {
        $this->atTrDescripcion = $atTrDescripcion;

        return $this;
    }

    public function getAtTrEstado(): ?string
    {
        return $this->atTrEstado;
    }

    public function setAtTrEstado(string $atTrEstado): self
    {
        $this->atTrEstado = $atTrEstado;

        return $this;
    }


}

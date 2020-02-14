<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPuntoVentaTransaccionDetalle
 *
 * @ORM\Table(name="gc_punto_venta_transaccion_detalle", indexes={@ORM\Index(name="ptoventatran", columns={"em_id", "pv_tr_id"})})
 * @ORM\Entity
 */
class GcPuntoVentaTransaccionDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_tr_de_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pvTrDeId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pv_tr_id", type="bigint", nullable=false)
     */
    private $pvTrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fc_id", type="bigint", nullable=false)
     */
    private $fcId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_tr_de_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $pvTrDeEstado = '\'C\'';

    /**
     * @var float
     *
     * @ORM\Column(name="pv_tr_de_valor_apertura", type="float", precision=10, scale=0, nullable=false)
     */
    private $pvTrDeValorApertura = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="pv_tr_de_valor_ingreso", type="float", precision=10, scale=0, nullable=false)
     */
    private $pvTrDeValorIngreso = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getPvTrDeId(): ?string
    {
        return $this->pvTrDeId;
    }

    public function getPvTrId(): ?string
    {
        return $this->pvTrId;
    }

    public function setPvTrId(string $pvTrId): self
    {
        $this->pvTrId = $pvTrId;

        return $this;
    }

    public function getFcId(): ?string
    {
        return $this->fcId;
    }

    public function setFcId(string $fcId): self
    {
        $this->fcId = $fcId;

        return $this;
    }

    public function getPvTrDeEstado(): ?string
    {
        return $this->pvTrDeEstado;
    }

    public function setPvTrDeEstado(string $pvTrDeEstado): self
    {
        $this->pvTrDeEstado = $pvTrDeEstado;

        return $this;
    }

    public function getPvTrDeValorApertura(): ?float
    {
        return $this->pvTrDeValorApertura;
    }

    public function setPvTrDeValorApertura(float $pvTrDeValorApertura): self
    {
        $this->pvTrDeValorApertura = $pvTrDeValorApertura;

        return $this;
    }

    public function getPvTrDeValorIngreso(): ?float
    {
        return $this->pvTrDeValorIngreso;
    }

    public function setPvTrDeValorIngreso(float $pvTrDeValorIngreso): self
    {
        $this->pvTrDeValorIngreso = $pvTrDeValorIngreso;

        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcPuntoVentaTransaccion
 *
 * @ORM\Table(name="gc_punto_venta_transaccion", indexes={@ORM\Index(name="ptoventausuario", columns={"em_id", "us_id"})})
 * @ORM\Entity
 */
class GcPuntoVentaTransaccion
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
     * @ORM\Column(name="pv_tr_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pvTrId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="us_id_apertura", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $usIdApertura = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_tr_fecha_apertura", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $pvTrFechaApertura = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="pv_tr_valor_apertura", type="float", precision=10, scale=0, nullable=false)
     */
    private $pvTrValorApertura = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id_cierra", type="bigint", nullable=false)
     */
    private $usIdCierra = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pv_tr_fecha_cierra", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $pvTrFechaCierra = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="pv_tr_valor_ingreso", type="float", precision=10, scale=0, nullable=false)
     */
    private $pvTrValorIngreso = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pv_tr_estado", type="string", length=1, nullable=false, options={"default"="'A'","fixed"=true})
     */
    private $pvTrEstado = '\'A\'';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getPvTrId(): ?string
    {
        return $this->pvTrId;
    }

    public function getUsId(): ?string
    {
        return $this->usId;
    }

    public function setUsId(string $usId): self
    {
        $this->usId = $usId;

        return $this;
    }

    public function getUsIdApertura(): ?string
    {
        return $this->usIdApertura;
    }

    public function setUsIdApertura(string $usIdApertura): self
    {
        $this->usIdApertura = $usIdApertura;

        return $this;
    }

    public function getPvTrFechaApertura(): ?\DateTimeInterface
    {
        return $this->pvTrFechaApertura;
    }

    public function setPvTrFechaApertura(\DateTimeInterface $pvTrFechaApertura): self
    {
        $this->pvTrFechaApertura = $pvTrFechaApertura;

        return $this;
    }

    public function getPvTrValorApertura(): ?float
    {
        return $this->pvTrValorApertura;
    }

    public function setPvTrValorApertura(float $pvTrValorApertura): self
    {
        $this->pvTrValorApertura = $pvTrValorApertura;

        return $this;
    }

    public function getUsIdCierra(): ?string
    {
        return $this->usIdCierra;
    }

    public function setUsIdCierra(string $usIdCierra): self
    {
        $this->usIdCierra = $usIdCierra;

        return $this;
    }

    public function getPvTrFechaCierra(): ?\DateTimeInterface
    {
        return $this->pvTrFechaCierra;
    }

    public function setPvTrFechaCierra(\DateTimeInterface $pvTrFechaCierra): self
    {
        $this->pvTrFechaCierra = $pvTrFechaCierra;

        return $this;
    }

    public function getPvTrValorIngreso(): ?float
    {
        return $this->pvTrValorIngreso;
    }

    public function setPvTrValorIngreso(float $pvTrValorIngreso): self
    {
        $this->pvTrValorIngreso = $pvTrValorIngreso;

        return $this;
    }

    public function getPvTrEstado(): ?string
    {
        return $this->pvTrEstado;
    }

    public function setPvTrEstado(string $pvTrEstado): self
    {
        $this->pvTrEstado = $pvTrEstado;

        return $this;
    }

    public function getCoId(): ?string
    {
        return $this->coId;
    }

    public function setCoId(string $coId): self
    {
        $this->coId = $coId;

        return $this;
    }


}

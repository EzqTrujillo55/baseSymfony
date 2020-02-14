<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCobroDetalleFacturaCuota
 *
 * @ORM\Table(name="gc_cobro_detalle_factura_cuota")
 * @ORM\Entity
 */
class GcCobroDetalleFacturaCuota
{
    /**
     * @var int
     *
     * @ORM\Column(name="cb_de_fa_cu_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cbDeFaCuId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cb_id", type="bigint", nullable=false)
     */
    private $cbId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id", type="bigint", nullable=false)
     */
    private $faId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ct_id", type="bigint", nullable=false)
     */
    private $ctId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cb_de_fa_cu_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $cbDeFaCuFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var float
     *
     * @ORM\Column(name="cb_de_fa_cu_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbDeFaCuValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_fa_cu_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $cbDeFaCuEstado = '\'C\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cb_de_fa_cu_tipo", type="string", length=3, nullable=true, options={"default"="'*'","fixed"=true})
     */
    private $cbDeFaCuTipo = '\'*\'';

    public function getCbDeFaCuId(): ?string
    {
        return $this->cbDeFaCuId;
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

    public function getCbId(): ?string
    {
        return $this->cbId;
    }

    public function setCbId(string $cbId): self
    {
        $this->cbId = $cbId;

        return $this;
    }

    public function getFaId(): ?string
    {
        return $this->faId;
    }

    public function setFaId(string $faId): self
    {
        $this->faId = $faId;

        return $this;
    }

    public function getCtId(): ?string
    {
        return $this->ctId;
    }

    public function setCtId(string $ctId): self
    {
        $this->ctId = $ctId;

        return $this;
    }

    public function getCbDeFaCuFecha(): ?\DateTimeInterface
    {
        return $this->cbDeFaCuFecha;
    }

    public function setCbDeFaCuFecha(\DateTimeInterface $cbDeFaCuFecha): self
    {
        $this->cbDeFaCuFecha = $cbDeFaCuFecha;

        return $this;
    }

    public function getCbDeFaCuValor(): ?float
    {
        return $this->cbDeFaCuValor;
    }

    public function setCbDeFaCuValor(float $cbDeFaCuValor): self
    {
        $this->cbDeFaCuValor = $cbDeFaCuValor;

        return $this;
    }

    public function getCbDeFaCuEstado(): ?string
    {
        return $this->cbDeFaCuEstado;
    }

    public function setCbDeFaCuEstado(string $cbDeFaCuEstado): self
    {
        $this->cbDeFaCuEstado = $cbDeFaCuEstado;

        return $this;
    }

    public function getCbDeFaCuTipo(): ?string
    {
        return $this->cbDeFaCuTipo;
    }

    public function setCbDeFaCuTipo(?string $cbDeFaCuTipo): self
    {
        $this->cbDeFaCuTipo = $cbDeFaCuTipo;

        return $this;
    }


}

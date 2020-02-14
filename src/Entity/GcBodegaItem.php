<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcBodegaItem
 *
 * @ORM\Table(name="gc_bodega_item", uniqueConstraints={@ORM\UniqueConstraint(name="IndiceBodegaItem", columns={"em_id", "bo_id", "it_id"})}, indexes={@ORM\Index(name="indice_bodegaitem", columns={"em_id", "bi_id"})})
 * @ORM\Entity
 */
class GcBodegaItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="bi_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $biId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bo_id", type="bigint", nullable=false)
     */
    private $boId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="it_id", type="bigint", nullable=false)
     */
    private $itId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="bi_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $biCantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bi_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $biEstado = '\'C\'';

    /**
     * @var string
     *
     * @ORM\Column(name="bi_ubicacion", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $biUbicacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="bi_otros", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $biOtros = '\'*\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bi_fecha_compra", type="date", nullable=false, options={"default"="'1800-01-01'"})
     */
    private $biFechaCompra = '\'1800-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bi_fecha_venta", type="date", nullable=false, options={"default"="'1800-01-01'"})
     */
    private $biFechaVenta = '\'1800-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_inventario", type="bigint", nullable=false)
     */
    private $cuIdInventario = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_costo", type="bigint", nullable=false)
     */
    private $cuIdCosto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_venta", type="bigint", nullable=false)
     */
    private $cuIdVenta = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="bi_saldo", type="float", precision=10, scale=0, nullable=false)
     */
    private $biSaldo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="bi_cantidad_cierre", type="float", precision=10, scale=0, nullable=false)
     */
    private $biCantidadCierre = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="bi_costo", type="float", precision=10, scale=0, nullable=false)
     */
    private $biCosto = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="bi_precio_compra", type="float", precision=10, scale=0, nullable=false)
     */
    private $biPrecioCompra = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="bi_saldo_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $biSaldoCantidad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="bi_costo_promedio_reporte", type="float", precision=10, scale=0, nullable=false)
     */
    private $biCostoPromedioReporte = '0';

    public function getBiId(): ?string
    {
        return $this->biId;
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

    public function getBoId(): ?string
    {
        return $this->boId;
    }

    public function setBoId(string $boId): self
    {
        $this->boId = $boId;

        return $this;
    }

    public function getItId(): ?string
    {
        return $this->itId;
    }

    public function setItId(string $itId): self
    {
        $this->itId = $itId;

        return $this;
    }

    public function getBiCantidad(): ?float
    {
        return $this->biCantidad;
    }

    public function setBiCantidad(float $biCantidad): self
    {
        $this->biCantidad = $biCantidad;

        return $this;
    }

    public function getBiEstado(): ?string
    {
        return $this->biEstado;
    }

    public function setBiEstado(string $biEstado): self
    {
        $this->biEstado = $biEstado;

        return $this;
    }

    public function getBiUbicacion(): ?string
    {
        return $this->biUbicacion;
    }

    public function setBiUbicacion(string $biUbicacion): self
    {
        $this->biUbicacion = $biUbicacion;

        return $this;
    }

    public function getBiOtros(): ?string
    {
        return $this->biOtros;
    }

    public function setBiOtros(string $biOtros): self
    {
        $this->biOtros = $biOtros;

        return $this;
    }

    public function getBiFechaCompra(): ?\DateTimeInterface
    {
        return $this->biFechaCompra;
    }

    public function setBiFechaCompra(\DateTimeInterface $biFechaCompra): self
    {
        $this->biFechaCompra = $biFechaCompra;

        return $this;
    }

    public function getBiFechaVenta(): ?\DateTimeInterface
    {
        return $this->biFechaVenta;
    }

    public function setBiFechaVenta(\DateTimeInterface $biFechaVenta): self
    {
        $this->biFechaVenta = $biFechaVenta;

        return $this;
    }

    public function getCuIdInventario(): ?string
    {
        return $this->cuIdInventario;
    }

    public function setCuIdInventario(string $cuIdInventario): self
    {
        $this->cuIdInventario = $cuIdInventario;

        return $this;
    }

    public function getCuIdCosto(): ?string
    {
        return $this->cuIdCosto;
    }

    public function setCuIdCosto(string $cuIdCosto): self
    {
        $this->cuIdCosto = $cuIdCosto;

        return $this;
    }

    public function getCuIdVenta(): ?string
    {
        return $this->cuIdVenta;
    }

    public function setCuIdVenta(string $cuIdVenta): self
    {
        $this->cuIdVenta = $cuIdVenta;

        return $this;
    }

    public function getBiSaldo(): ?float
    {
        return $this->biSaldo;
    }

    public function setBiSaldo(float $biSaldo): self
    {
        $this->biSaldo = $biSaldo;

        return $this;
    }

    public function getBiCantidadCierre(): ?float
    {
        return $this->biCantidadCierre;
    }

    public function setBiCantidadCierre(float $biCantidadCierre): self
    {
        $this->biCantidadCierre = $biCantidadCierre;

        return $this;
    }

    public function getBiCosto(): ?float
    {
        return $this->biCosto;
    }

    public function setBiCosto(float $biCosto): self
    {
        $this->biCosto = $biCosto;

        return $this;
    }

    public function getBiPrecioCompra(): ?float
    {
        return $this->biPrecioCompra;
    }

    public function setBiPrecioCompra(float $biPrecioCompra): self
    {
        $this->biPrecioCompra = $biPrecioCompra;

        return $this;
    }

    public function getBiSaldoCantidad(): ?float
    {
        return $this->biSaldoCantidad;
    }

    public function setBiSaldoCantidad(float $biSaldoCantidad): self
    {
        $this->biSaldoCantidad = $biSaldoCantidad;

        return $this;
    }

    public function getBiCostoPromedioReporte(): ?float
    {
        return $this->biCostoPromedioReporte;
    }

    public function setBiCostoPromedioReporte(float $biCostoPromedioReporte): self
    {
        $this->biCostoPromedioReporte = $biCostoPromedioReporte;

        return $this;
    }


}

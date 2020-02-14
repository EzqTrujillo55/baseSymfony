<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcBodega
 *
 * @ORM\Table(name="gc_bodega", indexes={@ORM\Index(name="indice_bodega", columns={"em_id", "bo_id"})})
 * @ORM\Entity
 */
class GcBodega
{
    /**
     * @var int
     *
     * @ORM\Column(name="bo_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $boId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bo_codigo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $boCodigo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="bo_nombre", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $boNombre = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="bo_observacion", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $boObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="bo_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $boEstado = '\'C\'';

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
     * @var int
     *
     * @ORM\Column(name="cu_id_cuenta_madre", type="bigint", nullable=false)
     */
    private $cuIdCuentaMadre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bo_direccion", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $boDireccion = '\'\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="bo_control_stock", type="boolean", nullable=false, options={"default"="1"})
     */
    private $boControlStock = '1';

    public function getBoId(): ?string
    {
        return $this->boId;
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

    public function getBoCodigo(): ?string
    {
        return $this->boCodigo;
    }

    public function setBoCodigo(string $boCodigo): self
    {
        $this->boCodigo = $boCodigo;

        return $this;
    }

    public function getBoNombre(): ?string
    {
        return $this->boNombre;
    }

    public function setBoNombre(string $boNombre): self
    {
        $this->boNombre = $boNombre;

        return $this;
    }

    public function getBoObservacion(): ?string
    {
        return $this->boObservacion;
    }

    public function setBoObservacion(string $boObservacion): self
    {
        $this->boObservacion = $boObservacion;

        return $this;
    }

    public function getBoEstado(): ?string
    {
        return $this->boEstado;
    }

    public function setBoEstado(string $boEstado): self
    {
        $this->boEstado = $boEstado;

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

    public function getCuIdCuentaMadre(): ?string
    {
        return $this->cuIdCuentaMadre;
    }

    public function setCuIdCuentaMadre(string $cuIdCuentaMadre): self
    {
        $this->cuIdCuentaMadre = $cuIdCuentaMadre;

        return $this;
    }

    public function getBoDireccion(): ?string
    {
        return $this->boDireccion;
    }

    public function setBoDireccion(string $boDireccion): self
    {
        $this->boDireccion = $boDireccion;

        return $this;
    }

    public function getBoControlStock(): ?bool
    {
        return $this->boControlStock;
    }

    public function setBoControlStock(bool $boControlStock): self
    {
        $this->boControlStock = $boControlStock;

        return $this;
    }


}

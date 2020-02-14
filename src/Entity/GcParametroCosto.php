<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcParametroCosto
 *
 * @ORM\Table(name="gc_parametro_costo")
 * @ORM\Entity
 */
class GcParametroCosto
{
    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_costo", type="bigint", nullable=false)
     */
    private $tcIdCosto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="em_periodo", type="bigint", nullable=false)
     */
    private $emPeriodo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pc_inventario", type="string", length=1, nullable=false, options={"default"="'1'","fixed"=true})
     */
    private $pcInventario = '\'1\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_inventario", type="bigint", nullable=false)
     */
    private $cuIdInventario = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_costo_venta", type="bigint", nullable=false)
     */
    private $cuIdCostoVenta = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_inventario_positivo", type="bigint", nullable=false)
     */
    private $cuIdInventarioPositivo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_costo_venta_otros_ingresos", type="bigint", nullable=false)
     */
    private $cuIdCostoVentaOtrosIngresos = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getTcIdCosto(): ?string
    {
        return $this->tcIdCosto;
    }

    public function setTcIdCosto(string $tcIdCosto): self
    {
        $this->tcIdCosto = $tcIdCosto;

        return $this;
    }

    public function getEmPeriodo(): ?string
    {
        return $this->emPeriodo;
    }

    public function setEmPeriodo(string $emPeriodo): self
    {
        $this->emPeriodo = $emPeriodo;

        return $this;
    }

    public function getPcInventario(): ?string
    {
        return $this->pcInventario;
    }

    public function setPcInventario(string $pcInventario): self
    {
        $this->pcInventario = $pcInventario;

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

    public function getCuIdCostoVenta(): ?string
    {
        return $this->cuIdCostoVenta;
    }

    public function setCuIdCostoVenta(string $cuIdCostoVenta): self
    {
        $this->cuIdCostoVenta = $cuIdCostoVenta;

        return $this;
    }

    public function getCuIdInventarioPositivo(): ?string
    {
        return $this->cuIdInventarioPositivo;
    }

    public function setCuIdInventarioPositivo(string $cuIdInventarioPositivo): self
    {
        $this->cuIdInventarioPositivo = $cuIdInventarioPositivo;

        return $this;
    }

    public function getCuIdCostoVentaOtrosIngresos(): ?string
    {
        return $this->cuIdCostoVentaOtrosIngresos;
    }

    public function setCuIdCostoVentaOtrosIngresos(string $cuIdCostoVentaOtrosIngresos): self
    {
        $this->cuIdCostoVentaOtrosIngresos = $cuIdCostoVentaOtrosIngresos;

        return $this;
    }


}

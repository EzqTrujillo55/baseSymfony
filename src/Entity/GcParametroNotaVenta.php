<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcParametroNotaVenta
 *
 * @ORM\Table(name="gc_parametro_nota_venta")
 * @ORM\Entity
 */
class GcParametroNotaVenta
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
     * @var string
     *
     * @ORM\Column(name="cu_periodo", type="string", length=10, nullable=false, options={"default"="'*'"})
     */
    private $cuPeriodo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id", type="bigint", nullable=false)
     */
    private $tcId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_iva", type="bigint", nullable=false)
     */
    private $cuIdIva = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_descuento", type="bigint", nullable=false)
     */
    private $cuIdDescuento = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_flete", type="bigint", nullable=false)
     */
    private $cuIdFlete = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_devolucion", type="bigint", nullable=false)
     */
    private $cuIdDevolucion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_devolucion", type="bigint", nullable=false)
     */
    private $tcIdDevolucion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_ice", type="bigint", nullable=false)
     */
    private $cuIdIce = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_cierre_ptoventa", type="bigint", nullable=false)
     */
    private $tcIdCierrePtoventa = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_cierre_ptoventa", type="bigint", nullable=false)
     */
    private $cuIdCierrePtoventa = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getCuPeriodo(): ?string
    {
        return $this->cuPeriodo;
    }

    public function setCuPeriodo(string $cuPeriodo): self
    {
        $this->cuPeriodo = $cuPeriodo;

        return $this;
    }

    public function getTcId(): ?string
    {
        return $this->tcId;
    }

    public function setTcId(string $tcId): self
    {
        $this->tcId = $tcId;

        return $this;
    }

    public function getCuIdIva(): ?string
    {
        return $this->cuIdIva;
    }

    public function setCuIdIva(string $cuIdIva): self
    {
        $this->cuIdIva = $cuIdIva;

        return $this;
    }

    public function getCuIdDescuento(): ?string
    {
        return $this->cuIdDescuento;
    }

    public function setCuIdDescuento(string $cuIdDescuento): self
    {
        $this->cuIdDescuento = $cuIdDescuento;

        return $this;
    }

    public function getCuIdFlete(): ?string
    {
        return $this->cuIdFlete;
    }

    public function setCuIdFlete(string $cuIdFlete): self
    {
        $this->cuIdFlete = $cuIdFlete;

        return $this;
    }

    public function getCuIdDevolucion(): ?string
    {
        return $this->cuIdDevolucion;
    }

    public function setCuIdDevolucion(string $cuIdDevolucion): self
    {
        $this->cuIdDevolucion = $cuIdDevolucion;

        return $this;
    }

    public function getTcIdDevolucion(): ?string
    {
        return $this->tcIdDevolucion;
    }

    public function setTcIdDevolucion(string $tcIdDevolucion): self
    {
        $this->tcIdDevolucion = $tcIdDevolucion;

        return $this;
    }

    public function getCuIdIce(): ?string
    {
        return $this->cuIdIce;
    }

    public function setCuIdIce(string $cuIdIce): self
    {
        $this->cuIdIce = $cuIdIce;

        return $this;
    }

    public function getTcIdCierrePtoventa(): ?string
    {
        return $this->tcIdCierrePtoventa;
    }

    public function setTcIdCierrePtoventa(string $tcIdCierrePtoventa): self
    {
        $this->tcIdCierrePtoventa = $tcIdCierrePtoventa;

        return $this;
    }

    public function getCuIdCierrePtoventa(): ?string
    {
        return $this->cuIdCierrePtoventa;
    }

    public function setCuIdCierrePtoventa(string $cuIdCierrePtoventa): self
    {
        $this->cuIdCierrePtoventa = $cuIdCierrePtoventa;

        return $this;
    }


}

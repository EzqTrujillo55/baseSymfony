<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcParametroActivoFijo
 *
 * @ORM\Table(name="gc_parametro_activo_fijo")
 * @ORM\Entity
 */
class GcParametroActivoFijo
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
     * @ORM\Column(name="tc_id_compra", type="bigint", nullable=false)
     */
    private $tcIdCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_iva_compra", type="bigint", nullable=false)
     */
    private $cuIdIvaCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_descuento_compra", type="bigint", nullable=false)
     */
    private $cuIdDescuentoCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_flete_compra", type="bigint", nullable=false)
     */
    private $cuIdFleteCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_seguro_compra", type="bigint", nullable=false)
     */
    private $cuIdSeguroCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_devolucion_compra", type="bigint", nullable=false)
     */
    private $cuIdDevolucionCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_compra", type="bigint", nullable=false)
     */
    private $cuIdCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_ice_compra", type="bigint", nullable=false)
     */
    private $cuIdIceCompra = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_nota_debito", type="bigint", nullable=false)
     */
    private $tcIdNotaDebito = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_bajaactivo_banco", type="bigint", nullable=false)
     */
    private $cuIdBajaactivoBanco = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_bajaactivo_utilidad", type="bigint", nullable=false)
     */
    private $cuIdBajaactivoUtilidad = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_bajaactivo_perdida", type="bigint", nullable=false)
     */
    private $cuIdBajaactivoPerdida = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_depreciacion", type="bigint", nullable=false)
     */
    private $tcIdDepreciacion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_iva_gasto", type="bigint", nullable=false)
     */
    private $cuIdIvaGasto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_iva_costo", type="bigint", nullable=false)
     */
    private $cuIdIvaCosto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id_revalorizacion", type="bigint", nullable=false)
     */
    private $tcIdRevalorizacion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_impuestos_diferidos", type="bigint", nullable=false)
     */
    private $cuIdImpuestosDiferidos = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_superavit_valuacion_activos", type="bigint", nullable=false)
     */
    private $cuIdSuperavitValuacionActivos = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_deficit_valuacion_activos", type="bigint", nullable=false)
     */
    private $cuIdDeficitValuacionActivos = '0';

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

    public function getTcIdCompra(): ?string
    {
        return $this->tcIdCompra;
    }

    public function setTcIdCompra(string $tcIdCompra): self
    {
        $this->tcIdCompra = $tcIdCompra;

        return $this;
    }

    public function getCuIdIvaCompra(): ?string
    {
        return $this->cuIdIvaCompra;
    }

    public function setCuIdIvaCompra(string $cuIdIvaCompra): self
    {
        $this->cuIdIvaCompra = $cuIdIvaCompra;

        return $this;
    }

    public function getCuIdDescuentoCompra(): ?string
    {
        return $this->cuIdDescuentoCompra;
    }

    public function setCuIdDescuentoCompra(string $cuIdDescuentoCompra): self
    {
        $this->cuIdDescuentoCompra = $cuIdDescuentoCompra;

        return $this;
    }

    public function getCuIdFleteCompra(): ?string
    {
        return $this->cuIdFleteCompra;
    }

    public function setCuIdFleteCompra(string $cuIdFleteCompra): self
    {
        $this->cuIdFleteCompra = $cuIdFleteCompra;

        return $this;
    }

    public function getCuIdSeguroCompra(): ?string
    {
        return $this->cuIdSeguroCompra;
    }

    public function setCuIdSeguroCompra(string $cuIdSeguroCompra): self
    {
        $this->cuIdSeguroCompra = $cuIdSeguroCompra;

        return $this;
    }

    public function getCuIdDevolucionCompra(): ?string
    {
        return $this->cuIdDevolucionCompra;
    }

    public function setCuIdDevolucionCompra(string $cuIdDevolucionCompra): self
    {
        $this->cuIdDevolucionCompra = $cuIdDevolucionCompra;

        return $this;
    }

    public function getCuIdCompra(): ?string
    {
        return $this->cuIdCompra;
    }

    public function setCuIdCompra(string $cuIdCompra): self
    {
        $this->cuIdCompra = $cuIdCompra;

        return $this;
    }

    public function getCuIdIceCompra(): ?string
    {
        return $this->cuIdIceCompra;
    }

    public function setCuIdIceCompra(string $cuIdIceCompra): self
    {
        $this->cuIdIceCompra = $cuIdIceCompra;

        return $this;
    }

    public function getTcIdNotaDebito(): ?string
    {
        return $this->tcIdNotaDebito;
    }

    public function setTcIdNotaDebito(string $tcIdNotaDebito): self
    {
        $this->tcIdNotaDebito = $tcIdNotaDebito;

        return $this;
    }

    public function getCuIdBajaactivoBanco(): ?string
    {
        return $this->cuIdBajaactivoBanco;
    }

    public function setCuIdBajaactivoBanco(string $cuIdBajaactivoBanco): self
    {
        $this->cuIdBajaactivoBanco = $cuIdBajaactivoBanco;

        return $this;
    }

    public function getCuIdBajaactivoUtilidad(): ?string
    {
        return $this->cuIdBajaactivoUtilidad;
    }

    public function setCuIdBajaactivoUtilidad(string $cuIdBajaactivoUtilidad): self
    {
        $this->cuIdBajaactivoUtilidad = $cuIdBajaactivoUtilidad;

        return $this;
    }

    public function getCuIdBajaactivoPerdida(): ?string
    {
        return $this->cuIdBajaactivoPerdida;
    }

    public function setCuIdBajaactivoPerdida(string $cuIdBajaactivoPerdida): self
    {
        $this->cuIdBajaactivoPerdida = $cuIdBajaactivoPerdida;

        return $this;
    }

    public function getTcIdDepreciacion(): ?string
    {
        return $this->tcIdDepreciacion;
    }

    public function setTcIdDepreciacion(string $tcIdDepreciacion): self
    {
        $this->tcIdDepreciacion = $tcIdDepreciacion;

        return $this;
    }

    public function getCuIdIvaGasto(): ?string
    {
        return $this->cuIdIvaGasto;
    }

    public function setCuIdIvaGasto(string $cuIdIvaGasto): self
    {
        $this->cuIdIvaGasto = $cuIdIvaGasto;

        return $this;
    }

    public function getCuIdIvaCosto(): ?string
    {
        return $this->cuIdIvaCosto;
    }

    public function setCuIdIvaCosto(string $cuIdIvaCosto): self
    {
        $this->cuIdIvaCosto = $cuIdIvaCosto;

        return $this;
    }

    public function getTcIdRevalorizacion(): ?string
    {
        return $this->tcIdRevalorizacion;
    }

    public function setTcIdRevalorizacion(string $tcIdRevalorizacion): self
    {
        $this->tcIdRevalorizacion = $tcIdRevalorizacion;

        return $this;
    }

    public function getCuIdImpuestosDiferidos(): ?string
    {
        return $this->cuIdImpuestosDiferidos;
    }

    public function setCuIdImpuestosDiferidos(string $cuIdImpuestosDiferidos): self
    {
        $this->cuIdImpuestosDiferidos = $cuIdImpuestosDiferidos;

        return $this;
    }

    public function getCuIdSuperavitValuacionActivos(): ?string
    {
        return $this->cuIdSuperavitValuacionActivos;
    }

    public function setCuIdSuperavitValuacionActivos(string $cuIdSuperavitValuacionActivos): self
    {
        $this->cuIdSuperavitValuacionActivos = $cuIdSuperavitValuacionActivos;

        return $this;
    }

    public function getCuIdDeficitValuacionActivos(): ?string
    {
        return $this->cuIdDeficitValuacionActivos;
    }

    public function setCuIdDeficitValuacionActivos(string $cuIdDeficitValuacionActivos): self
    {
        $this->cuIdDeficitValuacionActivos = $cuIdDeficitValuacionActivos;

        return $this;
    }


}

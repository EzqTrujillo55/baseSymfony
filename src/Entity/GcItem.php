<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcItem
 *
 * @ORM\Table(name="gc_item", indexes={@ORM\Index(name="indice_Item", columns={"em_id", "it_id"}), @ORM\Index(name="IndiceCodigoItemAlterno", columns={"em_id", "it_cod_alterno"}), @ORM\Index(name="IndiceCodigoItem", columns={"em_id", "it_codigo"})})
 * @ORM\Entity
 */
class GcItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="it_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="it_codigo", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $itCodigo = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="it_cod_alterno", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $itCodAlterno = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="it_nombre", type="string", length=255, nullable=false, options={"default"="''"})
     */
    private $itNombre = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ti_id", type="bigint", nullable=false)
     */
    private $tiId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="st_id", type="bigint", nullable=false)
     */
    private $stId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ma_id", type="bigint", nullable=false)
     */
    private $maId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="un_id", type="bigint", nullable=false)
     */
    private $unId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false)
     */
    private $coId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="it_iva", type="bigint", nullable=false)
     */
    private $itIva = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="it_estado", type="string", length=1, nullable=false, options={"default"="'1'","fixed"=true})
     */
    private $itEstado = '\'1\'';

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
     * @ORM\Column(name="it_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $itCantidad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_cantidad_minima", type="float", precision=10, scale=0, nullable=false)
     */
    private $itCantidadMinima = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_cantidad_maxima", type="float", precision=10, scale=0, nullable=false)
     */
    private $itCantidadMaxima = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_costo", type="float", precision=10, scale=0, nullable=false)
     */
    private $itCosto = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_precio_compra", type="float", precision=10, scale=0, nullable=false)
     */
    private $itPrecioCompra = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_precio_venta_1", type="float", precision=10, scale=0, nullable=false)
     */
    private $itPrecioVenta1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_precio_venta_2", type="float", precision=10, scale=0, nullable=false)
     */
    private $itPrecioVenta2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_precio_venta_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $itPrecioVenta3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_precio_venta_4", type="float", precision=10, scale=0, nullable=false)
     */
    private $itPrecioVenta4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_precio_venta_5", type="float", precision=10, scale=0, nullable=false)
     */
    private $itPrecioVenta5 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="it_observacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $itObservacion = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="it_ubicacion", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $itUbicacion = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="it_secuencial", type="bigint", nullable=false)
     */
    private $itSecuencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="it_alias", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $itAlias = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="it_tipo", type="string", length=1, nullable=false, options={"default"="'1'","fixed"=true})
     */
    private $itTipo = '\'1\'';

    /**
     * @var string
     *
     * @ORM\Column(name="it_clase", type="string", length=1, nullable=false, options={"default"="'0'","fixed"=true})
     */
    private $itClase = '\'0\'';

    /**
     * @var float
     *
     * @ORM\Column(name="it_saldo", type="float", precision=10, scale=0, nullable=false)
     */
    private $itSaldo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_descuento", type="float", precision=10, scale=0, nullable=false)
     */
    private $itDescuento = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_tiempo_minimo_reposicion", type="float", precision=10, scale=0, nullable=false)
     */
    private $itTiempoMinimoReposicion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sc_id", type="bigint", nullable=false)
     */
    private $scId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ss_id", type="bigint", nullable=false)
     */
    private $ssId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="it_ice", type="string", length=1, nullable=false, options={"default"="'2'","fixed"=true})
     */
    private $itIce = '\'2\'';

    /**
     * @var string
     *
     * @ORM\Column(name="it_ice_codigo", type="string", length=25, nullable=false, options={"default"="'0'"})
     */
    private $itIceCodigo = '\'0\'';

    /**
     * @var int
     *
     * @ORM\Column(name="un_id_relacion", type="bigint", nullable=false)
     */
    private $unIdRelacion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_relacion_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $itRelacionCantidad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="it_relacion_factor", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $itRelacionFactor = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="it_dato_usuario1", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $itDatoUsuario1 = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="it_dato_usuario2", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $itDatoUsuario2 = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="it_dato_usuario3", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $itDatoUsuario3 = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="it_dato_usuario4", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $itDatoUsuario4 = '\'\'';

    /**
     * @var float
     *
     * @ORM\Column(name="it_saldo_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $itSaldoCantidad = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="it_aplica_retencion", type="boolean", nullable=false, options={"default"="1"})
     */
    private $itAplicaRetencion = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="it_mueve_inventario", type="boolean", nullable=false, options={"default"="1"})
     */
    private $itMueveInventario = '1';

    /**
     * @var float
     *
     * @ORM\Column(name="it_comision_venta_1", type="float", precision=10, scale=0, nullable=false)
     */
    private $itComisionVenta1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_comision_venta_2", type="float", precision=10, scale=0, nullable=false)
     */
    private $itComisionVenta2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_comision_venta_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $itComisionVenta3 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_comision_venta_4", type="float", precision=10, scale=0, nullable=false)
     */
    private $itComisionVenta4 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_comision_venta_5", type="float", precision=10, scale=0, nullable=false)
     */
    private $itComisionVenta5 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_costo_promedio_reporte", type="float", precision=10, scale=0, nullable=false)
     */
    private $itCostoPromedioReporte = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ce_id", type="bigint", nullable=false)
     */
    private $ceId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_castigar_valor_niif", type="float", precision=10, scale=0, nullable=false)
     */
    private $itCastigarValorNiif = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_castigar_porcentaje_niif", type="float", precision=10, scale=0, nullable=false)
     */
    private $itCastigarPorcentajeNiif = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="it_precio_basecalculo_niif", type="boolean", nullable=false)
     */
    private $itPrecioBasecalculoNiif = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="it_fecha_compra", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $itFechaCompra = '\'2000-01-01\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="it_metodo_niif", type="boolean", nullable=false)
     */
    private $itMetodoNiif = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="it_relacionado_calculos_produccion", type="boolean", nullable=false)
     */
    private $itRelacionadoCalculosProduccion = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="it_fecha_usuario1", type="date", nullable=false, options={"default"="'2013-01-01'"})
     */
    private $itFechaUsuario1 = '\'2013-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="it_fecha_usuario2", type="date", nullable=false, options={"default"="'2013-01-01'"})
     */
    private $itFechaUsuario2 = '\'2013-01-01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_depreciacion_acum_niif", type="bigint", nullable=false)
     */
    private $cuIdDepreciacionAcumNiif = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_depreciacion_gasto_niif", type="bigint", nullable=false)
     */
    private $cuIdDepreciacionGastoNiif = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_precio_compra_1", type="float", precision=10, scale=0, nullable=false)
     */
    private $itPrecioCompra1 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_precio_compra_2", type="float", precision=10, scale=0, nullable=false)
     */
    private $itPrecioCompra2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="it_sg_codigo", type="string", length=5, nullable=false, options={"default"="'0'"})
     */
    private $itSgCodigo = '\'0\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="it_maneja_lote", type="boolean", nullable=false)
     */
    private $itManejaLote = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="it_precio_sin_subsidio", type="float", precision=10, scale=0, nullable=false)
     */
    private $itPrecioSinSubsidio = '0';

    public function getItId(): ?string
    {
        return $this->itId;
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

    public function getItCodigo(): ?string
    {
        return $this->itCodigo;
    }

    public function setItCodigo(string $itCodigo): self
    {
        $this->itCodigo = $itCodigo;

        return $this;
    }

    public function getItCodAlterno(): ?string
    {
        return $this->itCodAlterno;
    }

    public function setItCodAlterno(string $itCodAlterno): self
    {
        $this->itCodAlterno = $itCodAlterno;

        return $this;
    }

    public function getItNombre(): ?string
    {
        return $this->itNombre;
    }

    public function setItNombre(string $itNombre): self
    {
        $this->itNombre = $itNombre;

        return $this;
    }

    public function getPeId(): ?string
    {
        return $this->peId;
    }

    public function setPeId(string $peId): self
    {
        $this->peId = $peId;

        return $this;
    }

    public function getTiId(): ?string
    {
        return $this->tiId;
    }

    public function setTiId(string $tiId): self
    {
        $this->tiId = $tiId;

        return $this;
    }

    public function getStId(): ?string
    {
        return $this->stId;
    }

    public function setStId(string $stId): self
    {
        $this->stId = $stId;

        return $this;
    }

    public function getMaId(): ?string
    {
        return $this->maId;
    }

    public function setMaId(string $maId): self
    {
        $this->maId = $maId;

        return $this;
    }

    public function getUnId(): ?string
    {
        return $this->unId;
    }

    public function setUnId(string $unId): self
    {
        $this->unId = $unId;

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

    public function getItIva(): ?string
    {
        return $this->itIva;
    }

    public function setItIva(string $itIva): self
    {
        $this->itIva = $itIva;

        return $this;
    }

    public function getItEstado(): ?string
    {
        return $this->itEstado;
    }

    public function setItEstado(string $itEstado): self
    {
        $this->itEstado = $itEstado;

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

    public function getItCantidad(): ?float
    {
        return $this->itCantidad;
    }

    public function setItCantidad(float $itCantidad): self
    {
        $this->itCantidad = $itCantidad;

        return $this;
    }

    public function getItCantidadMinima(): ?float
    {
        return $this->itCantidadMinima;
    }

    public function setItCantidadMinima(float $itCantidadMinima): self
    {
        $this->itCantidadMinima = $itCantidadMinima;

        return $this;
    }

    public function getItCantidadMaxima(): ?float
    {
        return $this->itCantidadMaxima;
    }

    public function setItCantidadMaxima(float $itCantidadMaxima): self
    {
        $this->itCantidadMaxima = $itCantidadMaxima;

        return $this;
    }

    public function getItCosto(): ?float
    {
        return $this->itCosto;
    }

    public function setItCosto(float $itCosto): self
    {
        $this->itCosto = $itCosto;

        return $this;
    }

    public function getItPrecioCompra(): ?float
    {
        return $this->itPrecioCompra;
    }

    public function setItPrecioCompra(float $itPrecioCompra): self
    {
        $this->itPrecioCompra = $itPrecioCompra;

        return $this;
    }

    public function getItPrecioVenta1(): ?float
    {
        return $this->itPrecioVenta1;
    }

    public function setItPrecioVenta1(float $itPrecioVenta1): self
    {
        $this->itPrecioVenta1 = $itPrecioVenta1;

        return $this;
    }

    public function getItPrecioVenta2(): ?float
    {
        return $this->itPrecioVenta2;
    }

    public function setItPrecioVenta2(float $itPrecioVenta2): self
    {
        $this->itPrecioVenta2 = $itPrecioVenta2;

        return $this;
    }

    public function getItPrecioVenta3(): ?float
    {
        return $this->itPrecioVenta3;
    }

    public function setItPrecioVenta3(float $itPrecioVenta3): self
    {
        $this->itPrecioVenta3 = $itPrecioVenta3;

        return $this;
    }

    public function getItPrecioVenta4(): ?float
    {
        return $this->itPrecioVenta4;
    }

    public function setItPrecioVenta4(float $itPrecioVenta4): self
    {
        $this->itPrecioVenta4 = $itPrecioVenta4;

        return $this;
    }

    public function getItPrecioVenta5(): ?float
    {
        return $this->itPrecioVenta5;
    }

    public function setItPrecioVenta5(float $itPrecioVenta5): self
    {
        $this->itPrecioVenta5 = $itPrecioVenta5;

        return $this;
    }

    public function getItObservacion(): ?string
    {
        return $this->itObservacion;
    }

    public function setItObservacion(string $itObservacion): self
    {
        $this->itObservacion = $itObservacion;

        return $this;
    }

    public function getItUbicacion(): ?string
    {
        return $this->itUbicacion;
    }

    public function setItUbicacion(string $itUbicacion): self
    {
        $this->itUbicacion = $itUbicacion;

        return $this;
    }

    public function getItSecuencial(): ?string
    {
        return $this->itSecuencial;
    }

    public function setItSecuencial(string $itSecuencial): self
    {
        $this->itSecuencial = $itSecuencial;

        return $this;
    }

    public function getItAlias(): ?string
    {
        return $this->itAlias;
    }

    public function setItAlias(string $itAlias): self
    {
        $this->itAlias = $itAlias;

        return $this;
    }

    public function getItTipo(): ?string
    {
        return $this->itTipo;
    }

    public function setItTipo(string $itTipo): self
    {
        $this->itTipo = $itTipo;

        return $this;
    }

    public function getItClase(): ?string
    {
        return $this->itClase;
    }

    public function setItClase(string $itClase): self
    {
        $this->itClase = $itClase;

        return $this;
    }

    public function getItSaldo(): ?float
    {
        return $this->itSaldo;
    }

    public function setItSaldo(float $itSaldo): self
    {
        $this->itSaldo = $itSaldo;

        return $this;
    }

    public function getItDescuento(): ?float
    {
        return $this->itDescuento;
    }

    public function setItDescuento(float $itDescuento): self
    {
        $this->itDescuento = $itDescuento;

        return $this;
    }

    public function getItTiempoMinimoReposicion(): ?float
    {
        return $this->itTiempoMinimoReposicion;
    }

    public function setItTiempoMinimoReposicion(float $itTiempoMinimoReposicion): self
    {
        $this->itTiempoMinimoReposicion = $itTiempoMinimoReposicion;

        return $this;
    }

    public function getScId(): ?string
    {
        return $this->scId;
    }

    public function setScId(string $scId): self
    {
        $this->scId = $scId;

        return $this;
    }

    public function getSsId(): ?string
    {
        return $this->ssId;
    }

    public function setSsId(string $ssId): self
    {
        $this->ssId = $ssId;

        return $this;
    }

    public function getItIce(): ?string
    {
        return $this->itIce;
    }

    public function setItIce(string $itIce): self
    {
        $this->itIce = $itIce;

        return $this;
    }

    public function getItIceCodigo(): ?string
    {
        return $this->itIceCodigo;
    }

    public function setItIceCodigo(string $itIceCodigo): self
    {
        $this->itIceCodigo = $itIceCodigo;

        return $this;
    }

    public function getUnIdRelacion(): ?string
    {
        return $this->unIdRelacion;
    }

    public function setUnIdRelacion(string $unIdRelacion): self
    {
        $this->unIdRelacion = $unIdRelacion;

        return $this;
    }

    public function getItRelacionCantidad(): ?float
    {
        return $this->itRelacionCantidad;
    }

    public function setItRelacionCantidad(float $itRelacionCantidad): self
    {
        $this->itRelacionCantidad = $itRelacionCantidad;

        return $this;
    }

    public function getItRelacionFactor(): ?string
    {
        return $this->itRelacionFactor;
    }

    public function setItRelacionFactor(string $itRelacionFactor): self
    {
        $this->itRelacionFactor = $itRelacionFactor;

        return $this;
    }

    public function getItDatoUsuario1(): ?string
    {
        return $this->itDatoUsuario1;
    }

    public function setItDatoUsuario1(string $itDatoUsuario1): self
    {
        $this->itDatoUsuario1 = $itDatoUsuario1;

        return $this;
    }

    public function getItDatoUsuario2(): ?string
    {
        return $this->itDatoUsuario2;
    }

    public function setItDatoUsuario2(string $itDatoUsuario2): self
    {
        $this->itDatoUsuario2 = $itDatoUsuario2;

        return $this;
    }

    public function getItDatoUsuario3(): ?string
    {
        return $this->itDatoUsuario3;
    }

    public function setItDatoUsuario3(string $itDatoUsuario3): self
    {
        $this->itDatoUsuario3 = $itDatoUsuario3;

        return $this;
    }

    public function getItDatoUsuario4(): ?string
    {
        return $this->itDatoUsuario4;
    }

    public function setItDatoUsuario4(string $itDatoUsuario4): self
    {
        $this->itDatoUsuario4 = $itDatoUsuario4;

        return $this;
    }

    public function getItSaldoCantidad(): ?float
    {
        return $this->itSaldoCantidad;
    }

    public function setItSaldoCantidad(float $itSaldoCantidad): self
    {
        $this->itSaldoCantidad = $itSaldoCantidad;

        return $this;
    }

    public function getItAplicaRetencion(): ?bool
    {
        return $this->itAplicaRetencion;
    }

    public function setItAplicaRetencion(bool $itAplicaRetencion): self
    {
        $this->itAplicaRetencion = $itAplicaRetencion;

        return $this;
    }

    public function getItMueveInventario(): ?bool
    {
        return $this->itMueveInventario;
    }

    public function setItMueveInventario(bool $itMueveInventario): self
    {
        $this->itMueveInventario = $itMueveInventario;

        return $this;
    }

    public function getItComisionVenta1(): ?float
    {
        return $this->itComisionVenta1;
    }

    public function setItComisionVenta1(float $itComisionVenta1): self
    {
        $this->itComisionVenta1 = $itComisionVenta1;

        return $this;
    }

    public function getItComisionVenta2(): ?float
    {
        return $this->itComisionVenta2;
    }

    public function setItComisionVenta2(float $itComisionVenta2): self
    {
        $this->itComisionVenta2 = $itComisionVenta2;

        return $this;
    }

    public function getItComisionVenta3(): ?float
    {
        return $this->itComisionVenta3;
    }

    public function setItComisionVenta3(float $itComisionVenta3): self
    {
        $this->itComisionVenta3 = $itComisionVenta3;

        return $this;
    }

    public function getItComisionVenta4(): ?float
    {
        return $this->itComisionVenta4;
    }

    public function setItComisionVenta4(float $itComisionVenta4): self
    {
        $this->itComisionVenta4 = $itComisionVenta4;

        return $this;
    }

    public function getItComisionVenta5(): ?float
    {
        return $this->itComisionVenta5;
    }

    public function setItComisionVenta5(float $itComisionVenta5): self
    {
        $this->itComisionVenta5 = $itComisionVenta5;

        return $this;
    }

    public function getItCostoPromedioReporte(): ?float
    {
        return $this->itCostoPromedioReporte;
    }

    public function setItCostoPromedioReporte(float $itCostoPromedioReporte): self
    {
        $this->itCostoPromedioReporte = $itCostoPromedioReporte;

        return $this;
    }

    public function getCeId(): ?string
    {
        return $this->ceId;
    }

    public function setCeId(string $ceId): self
    {
        $this->ceId = $ceId;

        return $this;
    }

    public function getItCastigarValorNiif(): ?float
    {
        return $this->itCastigarValorNiif;
    }

    public function setItCastigarValorNiif(float $itCastigarValorNiif): self
    {
        $this->itCastigarValorNiif = $itCastigarValorNiif;

        return $this;
    }

    public function getItCastigarPorcentajeNiif(): ?float
    {
        return $this->itCastigarPorcentajeNiif;
    }

    public function setItCastigarPorcentajeNiif(float $itCastigarPorcentajeNiif): self
    {
        $this->itCastigarPorcentajeNiif = $itCastigarPorcentajeNiif;

        return $this;
    }

    public function getItPrecioBasecalculoNiif(): ?bool
    {
        return $this->itPrecioBasecalculoNiif;
    }

    public function setItPrecioBasecalculoNiif(bool $itPrecioBasecalculoNiif): self
    {
        $this->itPrecioBasecalculoNiif = $itPrecioBasecalculoNiif;

        return $this;
    }

    public function getItFechaCompra(): ?\DateTimeInterface
    {
        return $this->itFechaCompra;
    }

    public function setItFechaCompra(\DateTimeInterface $itFechaCompra): self
    {
        $this->itFechaCompra = $itFechaCompra;

        return $this;
    }

    public function getItMetodoNiif(): ?bool
    {
        return $this->itMetodoNiif;
    }

    public function setItMetodoNiif(bool $itMetodoNiif): self
    {
        $this->itMetodoNiif = $itMetodoNiif;

        return $this;
    }

    public function getItRelacionadoCalculosProduccion(): ?bool
    {
        return $this->itRelacionadoCalculosProduccion;
    }

    public function setItRelacionadoCalculosProduccion(bool $itRelacionadoCalculosProduccion): self
    {
        $this->itRelacionadoCalculosProduccion = $itRelacionadoCalculosProduccion;

        return $this;
    }

    public function getItFechaUsuario1(): ?\DateTimeInterface
    {
        return $this->itFechaUsuario1;
    }

    public function setItFechaUsuario1(\DateTimeInterface $itFechaUsuario1): self
    {
        $this->itFechaUsuario1 = $itFechaUsuario1;

        return $this;
    }

    public function getItFechaUsuario2(): ?\DateTimeInterface
    {
        return $this->itFechaUsuario2;
    }

    public function setItFechaUsuario2(\DateTimeInterface $itFechaUsuario2): self
    {
        $this->itFechaUsuario2 = $itFechaUsuario2;

        return $this;
    }

    public function getCuIdDepreciacionAcumNiif(): ?string
    {
        return $this->cuIdDepreciacionAcumNiif;
    }

    public function setCuIdDepreciacionAcumNiif(string $cuIdDepreciacionAcumNiif): self
    {
        $this->cuIdDepreciacionAcumNiif = $cuIdDepreciacionAcumNiif;

        return $this;
    }

    public function getCuIdDepreciacionGastoNiif(): ?string
    {
        return $this->cuIdDepreciacionGastoNiif;
    }

    public function setCuIdDepreciacionGastoNiif(string $cuIdDepreciacionGastoNiif): self
    {
        $this->cuIdDepreciacionGastoNiif = $cuIdDepreciacionGastoNiif;

        return $this;
    }

    public function getItPrecioCompra1(): ?float
    {
        return $this->itPrecioCompra1;
    }

    public function setItPrecioCompra1(float $itPrecioCompra1): self
    {
        $this->itPrecioCompra1 = $itPrecioCompra1;

        return $this;
    }

    public function getItPrecioCompra2(): ?float
    {
        return $this->itPrecioCompra2;
    }

    public function setItPrecioCompra2(float $itPrecioCompra2): self
    {
        $this->itPrecioCompra2 = $itPrecioCompra2;

        return $this;
    }

    public function getItSgCodigo(): ?string
    {
        return $this->itSgCodigo;
    }

    public function setItSgCodigo(string $itSgCodigo): self
    {
        $this->itSgCodigo = $itSgCodigo;

        return $this;
    }

    public function getItManejaLote(): ?bool
    {
        return $this->itManejaLote;
    }

    public function setItManejaLote(bool $itManejaLote): self
    {
        $this->itManejaLote = $itManejaLote;

        return $this;
    }

    public function getItPrecioSinSubsidio(): ?float
    {
        return $this->itPrecioSinSubsidio;
    }

    public function setItPrecioSinSubsidio(float $itPrecioSinSubsidio): self
    {
        $this->itPrecioSinSubsidio = $itPrecioSinSubsidio;

        return $this;
    }


}

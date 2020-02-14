<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcFacturaDetalle
 *
 * @ORM\Table(name="gc_factura_detalle", indexes={@ORM\Index(name="IndiceKardex", columns={"em_id", "it_id"}), @ORM\Index(name="IndiceFactura", columns={"em_id", "fa_id"})})
 * @ORM\Entity
 */
class GcFacturaDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="fa_de_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $faDeId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_de_id_devolucion", type="bigint", nullable=false)
     */
    private $faDeIdDevolucion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_id", type="bigint", nullable=false)
     */
    private $faId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="it_id", type="bigint", nullable=false)
     */
    private $itId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bo_id", type="bigint", nullable=false)
     */
    private $boId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ti_id", type="bigint", nullable=false)
     */
    private $tiId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_de_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $faDeFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_de_fecha_sistema", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $faDeFechaSistema = '\'1800-01-01 00:00:01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_de_tipo", type="integer", nullable=false)
     */
    private $faDeTipo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeCantidad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_costo", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeCosto = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_precio", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDePrecio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_parcial", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeParcial = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_iva_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeIvaValor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_iva_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeIvaPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_descuento_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeDescuentoValor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_descuento_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeDescuentoPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeTotal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_cantidad_remitida", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeCantidadRemitida = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_cantidad_devuelta", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeCantidadDevuelta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_de_concepto", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $faDeConcepto = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_de_alias", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $faDeAlias = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_flete", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeFlete = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_otros", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeOtros = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_porcentaje_comision", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDePorcentajeComision = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_cantidad_perdida", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeCantidadPerdida = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_contar", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeContar = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_de_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $faDeEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_fuente_item", type="bigint", nullable=false)
     */
    private $cuIdRetencionFuenteItem = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_retencion_fuente_item_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeRetencionFuenteItemPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_retencion_fuente_item_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeRetencionFuenteItemValor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tr_id_retencion_fuente_item", type="bigint", nullable=false)
     */
    private $trIdRetencionFuenteItem = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_iva_item", type="bigint", nullable=false)
     */
    private $cuIdRetencionIvaItem = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_retencion_iva_item_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeRetencionIvaItemPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_retencion_iva_item_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeRetencionIvaItemValor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tr_id_retencion_iva_item", type="bigint", nullable=false)
     */
    private $trIdRetencionIvaItem = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_fuente_servicio", type="bigint", nullable=false)
     */
    private $cuIdRetencionFuenteServicio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_retencion_fuente_servicio_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeRetencionFuenteServicioPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_retencion_fuente_servicio_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeRetencionFuenteServicioValor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tr_id_retencion_fuente_servicio", type="bigint", nullable=false)
     */
    private $trIdRetencionFuenteServicio = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_iva_servicio", type="bigint", nullable=false)
     */
    private $cuIdRetencionIvaServicio = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_retencion_iva_servicio_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeRetencionIvaServicioPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_retencion_iva_servicio_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeRetencionIvaServicioValor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tr_id_retencion_iva_servicio", type="bigint", nullable=false)
     */
    private $trIdRetencionIvaServicio = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cc_id", type="bigint", nullable=false)
     */
    private $ccId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pr_id", type="bigint", nullable=false)
     */
    private $prId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_costo_promedio", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeCostoPromedio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_de_clase", type="string", length=5, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $faDeClase = '\'*\'';

    /**
     * @var float|null
     *
     * @ORM\Column(name="fa_de_precio_costo", type="float", precision=10, scale=0, nullable=true)
     */
    private $faDePrecioCosto = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fa_id_devolucion", type="bigint", nullable=true)
     */
    private $faIdDevolucion = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fa_de_orden", type="integer", nullable=true)
     */
    private $faDeOrden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_de_clase_2", type="string", length=5, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $faDeClase2 = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_costo_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeCostoTotal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_saldo_cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeSaldoCantidad = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_saldo_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeSaldoTotal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_costo_historico", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeCostoHistorico = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_costo_diferencia", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeCostoDiferencia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_numero", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $coNumero = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_de_registro_bloqueado", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $faDeRegistroBloqueado = '\'N\'';

    /**
     * @var int
     *
     * @ORM\Column(name="it_id_grupo", type="bigint", nullable=false)
     */
    private $itIdGrupo = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_ice_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeIceValor = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_ice_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeIcePorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_ice_base", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeIceBase = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_costo_original", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeCostoOriginal = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_de_id_padrekit", type="bigint", nullable=false)
     */
    private $faDeIdPadrekit = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fa_de_tipo_gasto_importacion", type="bigint", nullable=false)
     */
    private $faDeTipoGastoImportacion = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_descuento_valor_adicional", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeDescuentoValorAdicional = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="dp_id", type="bigint", nullable=false)
     */
    private $dpId = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="fa_de_valoradicional", type="float", precision=10, scale=0, nullable=false)
     */
    private $faDeValoradicional = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_de_dato_usuario1", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $faDeDatoUsuario1 = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_de_dato_usuario2", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $faDeDatoUsuario2 = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_de_dato_usuario3", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $faDeDatoUsuario3 = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_de_dato_usuario4", type="string", length=250, nullable=false, options={"default"="''"})
     */
    private $faDeDatoUsuario4 = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="fa_de_iva_codigo", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $faDeIvaCodigo = '\'\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fa_de_fecha_registro", type="date", nullable=false, options={"default"="'2010-01-01'"})
     */
    private $faDeFechaRegistro = '\'2010-01-01\'';

    public function getFaDeId(): ?string
    {
        return $this->faDeId;
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

    public function getFaDeIdDevolucion(): ?string
    {
        return $this->faDeIdDevolucion;
    }

    public function setFaDeIdDevolucion(string $faDeIdDevolucion): self
    {
        $this->faDeIdDevolucion = $faDeIdDevolucion;

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

    public function getItId(): ?string
    {
        return $this->itId;
    }

    public function setItId(string $itId): self
    {
        $this->itId = $itId;

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

    public function getTiId(): ?string
    {
        return $this->tiId;
    }

    public function setTiId(string $tiId): self
    {
        $this->tiId = $tiId;

        return $this;
    }

    public function getFaDeFecha(): ?\DateTimeInterface
    {
        return $this->faDeFecha;
    }

    public function setFaDeFecha(\DateTimeInterface $faDeFecha): self
    {
        $this->faDeFecha = $faDeFecha;

        return $this;
    }

    public function getFaDeFechaSistema(): ?\DateTimeInterface
    {
        return $this->faDeFechaSistema;
    }

    public function setFaDeFechaSistema(\DateTimeInterface $faDeFechaSistema): self
    {
        $this->faDeFechaSistema = $faDeFechaSistema;

        return $this;
    }

    public function getFaDeTipo(): ?int
    {
        return $this->faDeTipo;
    }

    public function setFaDeTipo(int $faDeTipo): self
    {
        $this->faDeTipo = $faDeTipo;

        return $this;
    }

    public function getFaDeCantidad(): ?float
    {
        return $this->faDeCantidad;
    }

    public function setFaDeCantidad(float $faDeCantidad): self
    {
        $this->faDeCantidad = $faDeCantidad;

        return $this;
    }

    public function getFaDeCosto(): ?float
    {
        return $this->faDeCosto;
    }

    public function setFaDeCosto(float $faDeCosto): self
    {
        $this->faDeCosto = $faDeCosto;

        return $this;
    }

    public function getFaDePrecio(): ?float
    {
        return $this->faDePrecio;
    }

    public function setFaDePrecio(float $faDePrecio): self
    {
        $this->faDePrecio = $faDePrecio;

        return $this;
    }

    public function getFaDeParcial(): ?float
    {
        return $this->faDeParcial;
    }

    public function setFaDeParcial(float $faDeParcial): self
    {
        $this->faDeParcial = $faDeParcial;

        return $this;
    }

    public function getFaDeIvaValor(): ?float
    {
        return $this->faDeIvaValor;
    }

    public function setFaDeIvaValor(float $faDeIvaValor): self
    {
        $this->faDeIvaValor = $faDeIvaValor;

        return $this;
    }

    public function getFaDeIvaPorcentaje(): ?float
    {
        return $this->faDeIvaPorcentaje;
    }

    public function setFaDeIvaPorcentaje(float $faDeIvaPorcentaje): self
    {
        $this->faDeIvaPorcentaje = $faDeIvaPorcentaje;

        return $this;
    }

    public function getFaDeDescuentoValor(): ?float
    {
        return $this->faDeDescuentoValor;
    }

    public function setFaDeDescuentoValor(float $faDeDescuentoValor): self
    {
        $this->faDeDescuentoValor = $faDeDescuentoValor;

        return $this;
    }

    public function getFaDeDescuentoPorcentaje(): ?float
    {
        return $this->faDeDescuentoPorcentaje;
    }

    public function setFaDeDescuentoPorcentaje(float $faDeDescuentoPorcentaje): self
    {
        $this->faDeDescuentoPorcentaje = $faDeDescuentoPorcentaje;

        return $this;
    }

    public function getFaDeTotal(): ?float
    {
        return $this->faDeTotal;
    }

    public function setFaDeTotal(float $faDeTotal): self
    {
        $this->faDeTotal = $faDeTotal;

        return $this;
    }

    public function getFaDeCantidadRemitida(): ?float
    {
        return $this->faDeCantidadRemitida;
    }

    public function setFaDeCantidadRemitida(float $faDeCantidadRemitida): self
    {
        $this->faDeCantidadRemitida = $faDeCantidadRemitida;

        return $this;
    }

    public function getFaDeCantidadDevuelta(): ?float
    {
        return $this->faDeCantidadDevuelta;
    }

    public function setFaDeCantidadDevuelta(float $faDeCantidadDevuelta): self
    {
        $this->faDeCantidadDevuelta = $faDeCantidadDevuelta;

        return $this;
    }

    public function getFaDeConcepto(): ?string
    {
        return $this->faDeConcepto;
    }

    public function setFaDeConcepto(string $faDeConcepto): self
    {
        $this->faDeConcepto = $faDeConcepto;

        return $this;
    }

    public function getFaDeAlias(): ?string
    {
        return $this->faDeAlias;
    }

    public function setFaDeAlias(string $faDeAlias): self
    {
        $this->faDeAlias = $faDeAlias;

        return $this;
    }

    public function getFaDeFlete(): ?float
    {
        return $this->faDeFlete;
    }

    public function setFaDeFlete(float $faDeFlete): self
    {
        $this->faDeFlete = $faDeFlete;

        return $this;
    }

    public function getFaDeOtros(): ?float
    {
        return $this->faDeOtros;
    }

    public function setFaDeOtros(float $faDeOtros): self
    {
        $this->faDeOtros = $faDeOtros;

        return $this;
    }

    public function getFaDePorcentajeComision(): ?float
    {
        return $this->faDePorcentajeComision;
    }

    public function setFaDePorcentajeComision(float $faDePorcentajeComision): self
    {
        $this->faDePorcentajeComision = $faDePorcentajeComision;

        return $this;
    }

    public function getFaDeCantidadPerdida(): ?float
    {
        return $this->faDeCantidadPerdida;
    }

    public function setFaDeCantidadPerdida(float $faDeCantidadPerdida): self
    {
        $this->faDeCantidadPerdida = $faDeCantidadPerdida;

        return $this;
    }

    public function getFaDeContar(): ?float
    {
        return $this->faDeContar;
    }

    public function setFaDeContar(float $faDeContar): self
    {
        $this->faDeContar = $faDeContar;

        return $this;
    }

    public function getFaDeEstado(): ?string
    {
        return $this->faDeEstado;
    }

    public function setFaDeEstado(string $faDeEstado): self
    {
        $this->faDeEstado = $faDeEstado;

        return $this;
    }

    public function getCuIdRetencionFuenteItem(): ?string
    {
        return $this->cuIdRetencionFuenteItem;
    }

    public function setCuIdRetencionFuenteItem(string $cuIdRetencionFuenteItem): self
    {
        $this->cuIdRetencionFuenteItem = $cuIdRetencionFuenteItem;

        return $this;
    }

    public function getFaDeRetencionFuenteItemPorcentaje(): ?float
    {
        return $this->faDeRetencionFuenteItemPorcentaje;
    }

    public function setFaDeRetencionFuenteItemPorcentaje(float $faDeRetencionFuenteItemPorcentaje): self
    {
        $this->faDeRetencionFuenteItemPorcentaje = $faDeRetencionFuenteItemPorcentaje;

        return $this;
    }

    public function getFaDeRetencionFuenteItemValor(): ?float
    {
        return $this->faDeRetencionFuenteItemValor;
    }

    public function setFaDeRetencionFuenteItemValor(float $faDeRetencionFuenteItemValor): self
    {
        $this->faDeRetencionFuenteItemValor = $faDeRetencionFuenteItemValor;

        return $this;
    }

    public function getTrIdRetencionFuenteItem(): ?string
    {
        return $this->trIdRetencionFuenteItem;
    }

    public function setTrIdRetencionFuenteItem(string $trIdRetencionFuenteItem): self
    {
        $this->trIdRetencionFuenteItem = $trIdRetencionFuenteItem;

        return $this;
    }

    public function getCuIdRetencionIvaItem(): ?string
    {
        return $this->cuIdRetencionIvaItem;
    }

    public function setCuIdRetencionIvaItem(string $cuIdRetencionIvaItem): self
    {
        $this->cuIdRetencionIvaItem = $cuIdRetencionIvaItem;

        return $this;
    }

    public function getFaDeRetencionIvaItemPorcentaje(): ?float
    {
        return $this->faDeRetencionIvaItemPorcentaje;
    }

    public function setFaDeRetencionIvaItemPorcentaje(float $faDeRetencionIvaItemPorcentaje): self
    {
        $this->faDeRetencionIvaItemPorcentaje = $faDeRetencionIvaItemPorcentaje;

        return $this;
    }

    public function getFaDeRetencionIvaItemValor(): ?float
    {
        return $this->faDeRetencionIvaItemValor;
    }

    public function setFaDeRetencionIvaItemValor(float $faDeRetencionIvaItemValor): self
    {
        $this->faDeRetencionIvaItemValor = $faDeRetencionIvaItemValor;

        return $this;
    }

    public function getTrIdRetencionIvaItem(): ?string
    {
        return $this->trIdRetencionIvaItem;
    }

    public function setTrIdRetencionIvaItem(string $trIdRetencionIvaItem): self
    {
        $this->trIdRetencionIvaItem = $trIdRetencionIvaItem;

        return $this;
    }

    public function getCuIdRetencionFuenteServicio(): ?string
    {
        return $this->cuIdRetencionFuenteServicio;
    }

    public function setCuIdRetencionFuenteServicio(string $cuIdRetencionFuenteServicio): self
    {
        $this->cuIdRetencionFuenteServicio = $cuIdRetencionFuenteServicio;

        return $this;
    }

    public function getFaDeRetencionFuenteServicioPorcentaje(): ?float
    {
        return $this->faDeRetencionFuenteServicioPorcentaje;
    }

    public function setFaDeRetencionFuenteServicioPorcentaje(float $faDeRetencionFuenteServicioPorcentaje): self
    {
        $this->faDeRetencionFuenteServicioPorcentaje = $faDeRetencionFuenteServicioPorcentaje;

        return $this;
    }

    public function getFaDeRetencionFuenteServicioValor(): ?float
    {
        return $this->faDeRetencionFuenteServicioValor;
    }

    public function setFaDeRetencionFuenteServicioValor(float $faDeRetencionFuenteServicioValor): self
    {
        $this->faDeRetencionFuenteServicioValor = $faDeRetencionFuenteServicioValor;

        return $this;
    }

    public function getTrIdRetencionFuenteServicio(): ?string
    {
        return $this->trIdRetencionFuenteServicio;
    }

    public function setTrIdRetencionFuenteServicio(string $trIdRetencionFuenteServicio): self
    {
        $this->trIdRetencionFuenteServicio = $trIdRetencionFuenteServicio;

        return $this;
    }

    public function getCuIdRetencionIvaServicio(): ?string
    {
        return $this->cuIdRetencionIvaServicio;
    }

    public function setCuIdRetencionIvaServicio(string $cuIdRetencionIvaServicio): self
    {
        $this->cuIdRetencionIvaServicio = $cuIdRetencionIvaServicio;

        return $this;
    }

    public function getFaDeRetencionIvaServicioPorcentaje(): ?float
    {
        return $this->faDeRetencionIvaServicioPorcentaje;
    }

    public function setFaDeRetencionIvaServicioPorcentaje(float $faDeRetencionIvaServicioPorcentaje): self
    {
        $this->faDeRetencionIvaServicioPorcentaje = $faDeRetencionIvaServicioPorcentaje;

        return $this;
    }

    public function getFaDeRetencionIvaServicioValor(): ?float
    {
        return $this->faDeRetencionIvaServicioValor;
    }

    public function setFaDeRetencionIvaServicioValor(float $faDeRetencionIvaServicioValor): self
    {
        $this->faDeRetencionIvaServicioValor = $faDeRetencionIvaServicioValor;

        return $this;
    }

    public function getTrIdRetencionIvaServicio(): ?string
    {
        return $this->trIdRetencionIvaServicio;
    }

    public function setTrIdRetencionIvaServicio(string $trIdRetencionIvaServicio): self
    {
        $this->trIdRetencionIvaServicio = $trIdRetencionIvaServicio;

        return $this;
    }

    public function getCcId(): ?string
    {
        return $this->ccId;
    }

    public function setCcId(string $ccId): self
    {
        $this->ccId = $ccId;

        return $this;
    }

    public function getPrId(): ?string
    {
        return $this->prId;
    }

    public function setPrId(string $prId): self
    {
        $this->prId = $prId;

        return $this;
    }

    public function getFaDeCostoPromedio(): ?float
    {
        return $this->faDeCostoPromedio;
    }

    public function setFaDeCostoPromedio(float $faDeCostoPromedio): self
    {
        $this->faDeCostoPromedio = $faDeCostoPromedio;

        return $this;
    }

    public function getFaDeClase(): ?string
    {
        return $this->faDeClase;
    }

    public function setFaDeClase(string $faDeClase): self
    {
        $this->faDeClase = $faDeClase;

        return $this;
    }

    public function getFaDePrecioCosto(): ?float
    {
        return $this->faDePrecioCosto;
    }

    public function setFaDePrecioCosto(?float $faDePrecioCosto): self
    {
        $this->faDePrecioCosto = $faDePrecioCosto;

        return $this;
    }

    public function getFaIdDevolucion(): ?string
    {
        return $this->faIdDevolucion;
    }

    public function setFaIdDevolucion(?string $faIdDevolucion): self
    {
        $this->faIdDevolucion = $faIdDevolucion;

        return $this;
    }

    public function getFaDeOrden(): ?int
    {
        return $this->faDeOrden;
    }

    public function setFaDeOrden(?int $faDeOrden): self
    {
        $this->faDeOrden = $faDeOrden;

        return $this;
    }

    public function getFaDeClase2(): ?string
    {
        return $this->faDeClase2;
    }

    public function setFaDeClase2(string $faDeClase2): self
    {
        $this->faDeClase2 = $faDeClase2;

        return $this;
    }

    public function getFaDeCostoTotal(): ?float
    {
        return $this->faDeCostoTotal;
    }

    public function setFaDeCostoTotal(float $faDeCostoTotal): self
    {
        $this->faDeCostoTotal = $faDeCostoTotal;

        return $this;
    }

    public function getFaDeSaldoCantidad(): ?float
    {
        return $this->faDeSaldoCantidad;
    }

    public function setFaDeSaldoCantidad(float $faDeSaldoCantidad): self
    {
        $this->faDeSaldoCantidad = $faDeSaldoCantidad;

        return $this;
    }

    public function getFaDeSaldoTotal(): ?float
    {
        return $this->faDeSaldoTotal;
    }

    public function setFaDeSaldoTotal(float $faDeSaldoTotal): self
    {
        $this->faDeSaldoTotal = $faDeSaldoTotal;

        return $this;
    }

    public function getFaDeCostoHistorico(): ?float
    {
        return $this->faDeCostoHistorico;
    }

    public function setFaDeCostoHistorico(float $faDeCostoHistorico): self
    {
        $this->faDeCostoHistorico = $faDeCostoHistorico;

        return $this;
    }

    public function getFaDeCostoDiferencia(): ?float
    {
        return $this->faDeCostoDiferencia;
    }

    public function setFaDeCostoDiferencia(float $faDeCostoDiferencia): self
    {
        $this->faDeCostoDiferencia = $faDeCostoDiferencia;

        return $this;
    }

    public function getCoNumero(): ?string
    {
        return $this->coNumero;
    }

    public function setCoNumero(string $coNumero): self
    {
        $this->coNumero = $coNumero;

        return $this;
    }

    public function getFaDeRegistroBloqueado(): ?string
    {
        return $this->faDeRegistroBloqueado;
    }

    public function setFaDeRegistroBloqueado(string $faDeRegistroBloqueado): self
    {
        $this->faDeRegistroBloqueado = $faDeRegistroBloqueado;

        return $this;
    }

    public function getItIdGrupo(): ?string
    {
        return $this->itIdGrupo;
    }

    public function setItIdGrupo(string $itIdGrupo): self
    {
        $this->itIdGrupo = $itIdGrupo;

        return $this;
    }

    public function getFaDeIceValor(): ?float
    {
        return $this->faDeIceValor;
    }

    public function setFaDeIceValor(float $faDeIceValor): self
    {
        $this->faDeIceValor = $faDeIceValor;

        return $this;
    }

    public function getFaDeIcePorcentaje(): ?float
    {
        return $this->faDeIcePorcentaje;
    }

    public function setFaDeIcePorcentaje(float $faDeIcePorcentaje): self
    {
        $this->faDeIcePorcentaje = $faDeIcePorcentaje;

        return $this;
    }

    public function getFaDeIceBase(): ?float
    {
        return $this->faDeIceBase;
    }

    public function setFaDeIceBase(float $faDeIceBase): self
    {
        $this->faDeIceBase = $faDeIceBase;

        return $this;
    }

    public function getFaDeCostoOriginal(): ?float
    {
        return $this->faDeCostoOriginal;
    }

    public function setFaDeCostoOriginal(float $faDeCostoOriginal): self
    {
        $this->faDeCostoOriginal = $faDeCostoOriginal;

        return $this;
    }

    public function getFaDeIdPadrekit(): ?string
    {
        return $this->faDeIdPadrekit;
    }

    public function setFaDeIdPadrekit(string $faDeIdPadrekit): self
    {
        $this->faDeIdPadrekit = $faDeIdPadrekit;

        return $this;
    }

    public function getFaDeTipoGastoImportacion(): ?string
    {
        return $this->faDeTipoGastoImportacion;
    }

    public function setFaDeTipoGastoImportacion(string $faDeTipoGastoImportacion): self
    {
        $this->faDeTipoGastoImportacion = $faDeTipoGastoImportacion;

        return $this;
    }

    public function getFaDeDescuentoValorAdicional(): ?float
    {
        return $this->faDeDescuentoValorAdicional;
    }

    public function setFaDeDescuentoValorAdicional(float $faDeDescuentoValorAdicional): self
    {
        $this->faDeDescuentoValorAdicional = $faDeDescuentoValorAdicional;

        return $this;
    }

    public function getDpId(): ?string
    {
        return $this->dpId;
    }

    public function setDpId(string $dpId): self
    {
        $this->dpId = $dpId;

        return $this;
    }

    public function getFaDeValoradicional(): ?float
    {
        return $this->faDeValoradicional;
    }

    public function setFaDeValoradicional(float $faDeValoradicional): self
    {
        $this->faDeValoradicional = $faDeValoradicional;

        return $this;
    }

    public function getFaDeDatoUsuario1(): ?string
    {
        return $this->faDeDatoUsuario1;
    }

    public function setFaDeDatoUsuario1(string $faDeDatoUsuario1): self
    {
        $this->faDeDatoUsuario1 = $faDeDatoUsuario1;

        return $this;
    }

    public function getFaDeDatoUsuario2(): ?string
    {
        return $this->faDeDatoUsuario2;
    }

    public function setFaDeDatoUsuario2(string $faDeDatoUsuario2): self
    {
        $this->faDeDatoUsuario2 = $faDeDatoUsuario2;

        return $this;
    }

    public function getFaDeDatoUsuario3(): ?string
    {
        return $this->faDeDatoUsuario3;
    }

    public function setFaDeDatoUsuario3(string $faDeDatoUsuario3): self
    {
        $this->faDeDatoUsuario3 = $faDeDatoUsuario3;

        return $this;
    }

    public function getFaDeDatoUsuario4(): ?string
    {
        return $this->faDeDatoUsuario4;
    }

    public function setFaDeDatoUsuario4(string $faDeDatoUsuario4): self
    {
        $this->faDeDatoUsuario4 = $faDeDatoUsuario4;

        return $this;
    }

    public function getFaDeIvaCodigo(): ?string
    {
        return $this->faDeIvaCodigo;
    }

    public function setFaDeIvaCodigo(string $faDeIvaCodigo): self
    {
        $this->faDeIvaCodigo = $faDeIvaCodigo;

        return $this;
    }

    public function getFaDeFechaRegistro(): ?\DateTimeInterface
    {
        return $this->faDeFechaRegistro;
    }

    public function setFaDeFechaRegistro(\DateTimeInterface $faDeFechaRegistro): self
    {
        $this->faDeFechaRegistro = $faDeFechaRegistro;

        return $this;
    }


}

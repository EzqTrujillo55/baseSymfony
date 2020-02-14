<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcItemParametro
 *
 * @ORM\Table(name="gc_item_parametro")
 * @ORM\Entity
 */
class GcItemParametro
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
     * @ORM\Column(name="ip_item_subtipo", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ipItemSubtipo = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_item_subtipo_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ipItemSubtipoLabel = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_marca", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ipMarca = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_marca_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ipMarcaLabel = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_color", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ipColor = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_color_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ipColorLabel = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_ubicacion", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ipUbicacion = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_ubicacion_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ipUbicacionLabel = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_precio1", type="string", length=1, nullable=false, options={"default"="'S'","fixed"=true})
     */
    private $ipPrecio1 = '\'S\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_precio1_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ipPrecio1Label = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_precio2", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ipPrecio2 = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_precio2_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ipPrecio2Label = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_precio3", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ipPrecio3 = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_precio3_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ipPrecio3Label = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_precio4", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ipPrecio4 = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_precio4_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ipPrecio4Label = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_precio5", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ipPrecio5 = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_precio5_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ipPrecio5Label = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_stock_min", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ipStockMin = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_stock_min_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ipStockMinLabel = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_stock_max", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ipStockMax = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_stock_max_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ipStockMaxLabel = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_observacion", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ipObservacion = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_observacion_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ipObservacionLabel = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_contabilidad", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ipContabilidad = '\'N\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_cuenta_inventario", type="bigint", nullable=false)
     */
    private $cuIdCuentaInventario = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_cuenta_madre", type="bigint", nullable=false)
     */
    private $cuIdCuentaMadre = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_cuenta_costo", type="bigint", nullable=false)
     */
    private $cuIdCuentaCosto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_cuenta_venta", type="bigint", nullable=false)
     */
    private $cuIdCuentaVenta = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_item_tipo", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $ipItemTipo = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_item_tipo_label", type="string", length=50, nullable=false, options={"default"="'*'"})
     */
    private $ipItemTipoLabel = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_dato1_label", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $ipDato1Label = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_dato2_label", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $ipDato2Label = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_dato3_label", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $ipDato3Label = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_dato4_label", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $ipDato4Label = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_fecha1_label", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $ipFecha1Label = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_fecha2_label", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $ipFecha2Label = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_precio_compra1_label", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $ipPrecioCompra1Label = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_precio_compra2_label", type="string", length=50, nullable=false, options={"default"="''"})
     */
    private $ipPrecioCompra2Label = '\'\'';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getIpItemSubtipo(): ?string
    {
        return $this->ipItemSubtipo;
    }

    public function setIpItemSubtipo(string $ipItemSubtipo): self
    {
        $this->ipItemSubtipo = $ipItemSubtipo;

        return $this;
    }

    public function getIpItemSubtipoLabel(): ?string
    {
        return $this->ipItemSubtipoLabel;
    }

    public function setIpItemSubtipoLabel(string $ipItemSubtipoLabel): self
    {
        $this->ipItemSubtipoLabel = $ipItemSubtipoLabel;

        return $this;
    }

    public function getIpMarca(): ?string
    {
        return $this->ipMarca;
    }

    public function setIpMarca(string $ipMarca): self
    {
        $this->ipMarca = $ipMarca;

        return $this;
    }

    public function getIpMarcaLabel(): ?string
    {
        return $this->ipMarcaLabel;
    }

    public function setIpMarcaLabel(string $ipMarcaLabel): self
    {
        $this->ipMarcaLabel = $ipMarcaLabel;

        return $this;
    }

    public function getIpColor(): ?string
    {
        return $this->ipColor;
    }

    public function setIpColor(string $ipColor): self
    {
        $this->ipColor = $ipColor;

        return $this;
    }

    public function getIpColorLabel(): ?string
    {
        return $this->ipColorLabel;
    }

    public function setIpColorLabel(string $ipColorLabel): self
    {
        $this->ipColorLabel = $ipColorLabel;

        return $this;
    }

    public function getIpUbicacion(): ?string
    {
        return $this->ipUbicacion;
    }

    public function setIpUbicacion(string $ipUbicacion): self
    {
        $this->ipUbicacion = $ipUbicacion;

        return $this;
    }

    public function getIpUbicacionLabel(): ?string
    {
        return $this->ipUbicacionLabel;
    }

    public function setIpUbicacionLabel(string $ipUbicacionLabel): self
    {
        $this->ipUbicacionLabel = $ipUbicacionLabel;

        return $this;
    }

    public function getIpPrecio1(): ?string
    {
        return $this->ipPrecio1;
    }

    public function setIpPrecio1(string $ipPrecio1): self
    {
        $this->ipPrecio1 = $ipPrecio1;

        return $this;
    }

    public function getIpPrecio1Label(): ?string
    {
        return $this->ipPrecio1Label;
    }

    public function setIpPrecio1Label(string $ipPrecio1Label): self
    {
        $this->ipPrecio1Label = $ipPrecio1Label;

        return $this;
    }

    public function getIpPrecio2(): ?string
    {
        return $this->ipPrecio2;
    }

    public function setIpPrecio2(string $ipPrecio2): self
    {
        $this->ipPrecio2 = $ipPrecio2;

        return $this;
    }

    public function getIpPrecio2Label(): ?string
    {
        return $this->ipPrecio2Label;
    }

    public function setIpPrecio2Label(string $ipPrecio2Label): self
    {
        $this->ipPrecio2Label = $ipPrecio2Label;

        return $this;
    }

    public function getIpPrecio3(): ?string
    {
        return $this->ipPrecio3;
    }

    public function setIpPrecio3(string $ipPrecio3): self
    {
        $this->ipPrecio3 = $ipPrecio3;

        return $this;
    }

    public function getIpPrecio3Label(): ?string
    {
        return $this->ipPrecio3Label;
    }

    public function setIpPrecio3Label(string $ipPrecio3Label): self
    {
        $this->ipPrecio3Label = $ipPrecio3Label;

        return $this;
    }

    public function getIpPrecio4(): ?string
    {
        return $this->ipPrecio4;
    }

    public function setIpPrecio4(string $ipPrecio4): self
    {
        $this->ipPrecio4 = $ipPrecio4;

        return $this;
    }

    public function getIpPrecio4Label(): ?string
    {
        return $this->ipPrecio4Label;
    }

    public function setIpPrecio4Label(string $ipPrecio4Label): self
    {
        $this->ipPrecio4Label = $ipPrecio4Label;

        return $this;
    }

    public function getIpPrecio5(): ?string
    {
        return $this->ipPrecio5;
    }

    public function setIpPrecio5(string $ipPrecio5): self
    {
        $this->ipPrecio5 = $ipPrecio5;

        return $this;
    }

    public function getIpPrecio5Label(): ?string
    {
        return $this->ipPrecio5Label;
    }

    public function setIpPrecio5Label(string $ipPrecio5Label): self
    {
        $this->ipPrecio5Label = $ipPrecio5Label;

        return $this;
    }

    public function getIpStockMin(): ?string
    {
        return $this->ipStockMin;
    }

    public function setIpStockMin(string $ipStockMin): self
    {
        $this->ipStockMin = $ipStockMin;

        return $this;
    }

    public function getIpStockMinLabel(): ?string
    {
        return $this->ipStockMinLabel;
    }

    public function setIpStockMinLabel(string $ipStockMinLabel): self
    {
        $this->ipStockMinLabel = $ipStockMinLabel;

        return $this;
    }

    public function getIpStockMax(): ?string
    {
        return $this->ipStockMax;
    }

    public function setIpStockMax(string $ipStockMax): self
    {
        $this->ipStockMax = $ipStockMax;

        return $this;
    }

    public function getIpStockMaxLabel(): ?string
    {
        return $this->ipStockMaxLabel;
    }

    public function setIpStockMaxLabel(string $ipStockMaxLabel): self
    {
        $this->ipStockMaxLabel = $ipStockMaxLabel;

        return $this;
    }

    public function getIpObservacion(): ?string
    {
        return $this->ipObservacion;
    }

    public function setIpObservacion(string $ipObservacion): self
    {
        $this->ipObservacion = $ipObservacion;

        return $this;
    }

    public function getIpObservacionLabel(): ?string
    {
        return $this->ipObservacionLabel;
    }

    public function setIpObservacionLabel(string $ipObservacionLabel): self
    {
        $this->ipObservacionLabel = $ipObservacionLabel;

        return $this;
    }

    public function getIpContabilidad(): ?string
    {
        return $this->ipContabilidad;
    }

    public function setIpContabilidad(string $ipContabilidad): self
    {
        $this->ipContabilidad = $ipContabilidad;

        return $this;
    }

    public function getCuIdCuentaInventario(): ?string
    {
        return $this->cuIdCuentaInventario;
    }

    public function setCuIdCuentaInventario(string $cuIdCuentaInventario): self
    {
        $this->cuIdCuentaInventario = $cuIdCuentaInventario;

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

    public function getCuIdCuentaCosto(): ?string
    {
        return $this->cuIdCuentaCosto;
    }

    public function setCuIdCuentaCosto(string $cuIdCuentaCosto): self
    {
        $this->cuIdCuentaCosto = $cuIdCuentaCosto;

        return $this;
    }

    public function getCuIdCuentaVenta(): ?string
    {
        return $this->cuIdCuentaVenta;
    }

    public function setCuIdCuentaVenta(string $cuIdCuentaVenta): self
    {
        $this->cuIdCuentaVenta = $cuIdCuentaVenta;

        return $this;
    }

    public function getIpItemTipo(): ?string
    {
        return $this->ipItemTipo;
    }

    public function setIpItemTipo(string $ipItemTipo): self
    {
        $this->ipItemTipo = $ipItemTipo;

        return $this;
    }

    public function getIpItemTipoLabel(): ?string
    {
        return $this->ipItemTipoLabel;
    }

    public function setIpItemTipoLabel(string $ipItemTipoLabel): self
    {
        $this->ipItemTipoLabel = $ipItemTipoLabel;

        return $this;
    }

    public function getIpDato1Label(): ?string
    {
        return $this->ipDato1Label;
    }

    public function setIpDato1Label(string $ipDato1Label): self
    {
        $this->ipDato1Label = $ipDato1Label;

        return $this;
    }

    public function getIpDato2Label(): ?string
    {
        return $this->ipDato2Label;
    }

    public function setIpDato2Label(string $ipDato2Label): self
    {
        $this->ipDato2Label = $ipDato2Label;

        return $this;
    }

    public function getIpDato3Label(): ?string
    {
        return $this->ipDato3Label;
    }

    public function setIpDato3Label(string $ipDato3Label): self
    {
        $this->ipDato3Label = $ipDato3Label;

        return $this;
    }

    public function getIpDato4Label(): ?string
    {
        return $this->ipDato4Label;
    }

    public function setIpDato4Label(string $ipDato4Label): self
    {
        $this->ipDato4Label = $ipDato4Label;

        return $this;
    }

    public function getIpFecha1Label(): ?string
    {
        return $this->ipFecha1Label;
    }

    public function setIpFecha1Label(string $ipFecha1Label): self
    {
        $this->ipFecha1Label = $ipFecha1Label;

        return $this;
    }

    public function getIpFecha2Label(): ?string
    {
        return $this->ipFecha2Label;
    }

    public function setIpFecha2Label(string $ipFecha2Label): self
    {
        $this->ipFecha2Label = $ipFecha2Label;

        return $this;
    }

    public function getIpPrecioCompra1Label(): ?string
    {
        return $this->ipPrecioCompra1Label;
    }

    public function setIpPrecioCompra1Label(string $ipPrecioCompra1Label): self
    {
        $this->ipPrecioCompra1Label = $ipPrecioCompra1Label;

        return $this;
    }

    public function getIpPrecioCompra2Label(): ?string
    {
        return $this->ipPrecioCompra2Label;
    }

    public function setIpPrecioCompra2Label(string $ipPrecioCompra2Label): self
    {
        $this->ipPrecioCompra2Label = $ipPrecioCompra2Label;

        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCobroDetalleFactura
 *
 * @ORM\Table(name="gc_cobro_detalle_factura", indexes={@ORM\Index(name="IndiceCobroFactura", columns={"em_id", "cb_id", "fa_id"}), @ORM\Index(name="indice_cobro_detalle_fecha", columns={"em_id", "fa_id", "cb_de_fa_fecha"})})
 * @ORM\Entity
 */
class GcCobroDetalleFactura
{
    /**
     * @var int
     *
     * @ORM\Column(name="cb_de_fa_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cbDeFaId;

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
     * @var float
     *
     * @ORM\Column(name="cb_de_fa_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbDeFaValor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_fa_puede_retencion_fuente_item", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cbDeFaPuedeRetencionFuenteItem = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_fa_puede_retencion_iva_item", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cbDeFaPuedeRetencionIvaItem = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_fa_puede_retencion_fuente_servicio", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cbDeFaPuedeRetencionFuenteServicio = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_fa_puede_retencion_iva_servicio", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cbDeFaPuedeRetencionIvaServicio = '\'N\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cb_de_fa_fecha", type="datetime", nullable=false, options={"default"="'1800-01-01 00:00:01'"})
     */
    private $cbDeFaFecha = '\'1800-01-01 00:00:01\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_fuente_item", type="bigint", nullable=false)
     */
    private $cuIdRetencionFuenteItem = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cb_de_fa_retencion_fuente_item_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbDeFaRetencionFuenteItemPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cb_de_fa_retencion_fuente_item_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbDeFaRetencionFuenteItemValor = '0';

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
     * @ORM\Column(name="cb_de_fa_retencion_iva_item_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbDeFaRetencionIvaItemPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cb_de_fa_retencion_iva_item_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbDeFaRetencionIvaItemValor = '0';

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
     * @ORM\Column(name="cb_de_fa_retencion_fuente_servicio_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbDeFaRetencionFuenteServicioPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cb_de_fa_retencion_fuente_servicio_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbDeFaRetencionFuenteServicioValor = '0';

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
     * @ORM\Column(name="cb_de_fa_retencion_iva_servicio_porcentaje", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbDeFaRetencionIvaServicioPorcentaje = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cb_de_fa_retencion_iva_servicio_valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $cbDeFaRetencionIvaServicioValor = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tr_id_retencion_iva_servicio", type="bigint", nullable=false)
     */
    private $trIdRetencionIvaServicio = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cb_de_fa_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $cbDeFaEstado = '\'C\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cb_de_fa_retencion_numero", type="bigint", nullable=false)
     */
    private $cbDeFaRetencionNumero = '0';

    public function getCbDeFaId(): ?string
    {
        return $this->cbDeFaId;
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

    public function getCbDeFaValor(): ?float
    {
        return $this->cbDeFaValor;
    }

    public function setCbDeFaValor(float $cbDeFaValor): self
    {
        $this->cbDeFaValor = $cbDeFaValor;

        return $this;
    }

    public function getCbDeFaPuedeRetencionFuenteItem(): ?string
    {
        return $this->cbDeFaPuedeRetencionFuenteItem;
    }

    public function setCbDeFaPuedeRetencionFuenteItem(string $cbDeFaPuedeRetencionFuenteItem): self
    {
        $this->cbDeFaPuedeRetencionFuenteItem = $cbDeFaPuedeRetencionFuenteItem;

        return $this;
    }

    public function getCbDeFaPuedeRetencionIvaItem(): ?string
    {
        return $this->cbDeFaPuedeRetencionIvaItem;
    }

    public function setCbDeFaPuedeRetencionIvaItem(string $cbDeFaPuedeRetencionIvaItem): self
    {
        $this->cbDeFaPuedeRetencionIvaItem = $cbDeFaPuedeRetencionIvaItem;

        return $this;
    }

    public function getCbDeFaPuedeRetencionFuenteServicio(): ?string
    {
        return $this->cbDeFaPuedeRetencionFuenteServicio;
    }

    public function setCbDeFaPuedeRetencionFuenteServicio(string $cbDeFaPuedeRetencionFuenteServicio): self
    {
        $this->cbDeFaPuedeRetencionFuenteServicio = $cbDeFaPuedeRetencionFuenteServicio;

        return $this;
    }

    public function getCbDeFaPuedeRetencionIvaServicio(): ?string
    {
        return $this->cbDeFaPuedeRetencionIvaServicio;
    }

    public function setCbDeFaPuedeRetencionIvaServicio(string $cbDeFaPuedeRetencionIvaServicio): self
    {
        $this->cbDeFaPuedeRetencionIvaServicio = $cbDeFaPuedeRetencionIvaServicio;

        return $this;
    }

    public function getCbDeFaFecha(): ?\DateTimeInterface
    {
        return $this->cbDeFaFecha;
    }

    public function setCbDeFaFecha(\DateTimeInterface $cbDeFaFecha): self
    {
        $this->cbDeFaFecha = $cbDeFaFecha;

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

    public function getCbDeFaRetencionFuenteItemPorcentaje(): ?float
    {
        return $this->cbDeFaRetencionFuenteItemPorcentaje;
    }

    public function setCbDeFaRetencionFuenteItemPorcentaje(float $cbDeFaRetencionFuenteItemPorcentaje): self
    {
        $this->cbDeFaRetencionFuenteItemPorcentaje = $cbDeFaRetencionFuenteItemPorcentaje;

        return $this;
    }

    public function getCbDeFaRetencionFuenteItemValor(): ?float
    {
        return $this->cbDeFaRetencionFuenteItemValor;
    }

    public function setCbDeFaRetencionFuenteItemValor(float $cbDeFaRetencionFuenteItemValor): self
    {
        $this->cbDeFaRetencionFuenteItemValor = $cbDeFaRetencionFuenteItemValor;

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

    public function getCbDeFaRetencionIvaItemPorcentaje(): ?float
    {
        return $this->cbDeFaRetencionIvaItemPorcentaje;
    }

    public function setCbDeFaRetencionIvaItemPorcentaje(float $cbDeFaRetencionIvaItemPorcentaje): self
    {
        $this->cbDeFaRetencionIvaItemPorcentaje = $cbDeFaRetencionIvaItemPorcentaje;

        return $this;
    }

    public function getCbDeFaRetencionIvaItemValor(): ?float
    {
        return $this->cbDeFaRetencionIvaItemValor;
    }

    public function setCbDeFaRetencionIvaItemValor(float $cbDeFaRetencionIvaItemValor): self
    {
        $this->cbDeFaRetencionIvaItemValor = $cbDeFaRetencionIvaItemValor;

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

    public function getCbDeFaRetencionFuenteServicioPorcentaje(): ?float
    {
        return $this->cbDeFaRetencionFuenteServicioPorcentaje;
    }

    public function setCbDeFaRetencionFuenteServicioPorcentaje(float $cbDeFaRetencionFuenteServicioPorcentaje): self
    {
        $this->cbDeFaRetencionFuenteServicioPorcentaje = $cbDeFaRetencionFuenteServicioPorcentaje;

        return $this;
    }

    public function getCbDeFaRetencionFuenteServicioValor(): ?float
    {
        return $this->cbDeFaRetencionFuenteServicioValor;
    }

    public function setCbDeFaRetencionFuenteServicioValor(float $cbDeFaRetencionFuenteServicioValor): self
    {
        $this->cbDeFaRetencionFuenteServicioValor = $cbDeFaRetencionFuenteServicioValor;

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

    public function getCbDeFaRetencionIvaServicioPorcentaje(): ?float
    {
        return $this->cbDeFaRetencionIvaServicioPorcentaje;
    }

    public function setCbDeFaRetencionIvaServicioPorcentaje(float $cbDeFaRetencionIvaServicioPorcentaje): self
    {
        $this->cbDeFaRetencionIvaServicioPorcentaje = $cbDeFaRetencionIvaServicioPorcentaje;

        return $this;
    }

    public function getCbDeFaRetencionIvaServicioValor(): ?float
    {
        return $this->cbDeFaRetencionIvaServicioValor;
    }

    public function setCbDeFaRetencionIvaServicioValor(float $cbDeFaRetencionIvaServicioValor): self
    {
        $this->cbDeFaRetencionIvaServicioValor = $cbDeFaRetencionIvaServicioValor;

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

    public function getCbDeFaEstado(): ?string
    {
        return $this->cbDeFaEstado;
    }

    public function setCbDeFaEstado(string $cbDeFaEstado): self
    {
        $this->cbDeFaEstado = $cbDeFaEstado;

        return $this;
    }

    public function getCbDeFaRetencionNumero(): ?string
    {
        return $this->cbDeFaRetencionNumero;
    }

    public function setCbDeFaRetencionNumero(string $cbDeFaRetencionNumero): self
    {
        $this->cbDeFaRetencionNumero = $cbDeFaRetencionNumero;

        return $this;
    }


}

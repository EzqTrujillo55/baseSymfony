<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liquidacioncompra
 *
 * @ORM\Table(name="_liquidacioncompra")
 * @ORM\Entity
 */
class Liquidacioncompra
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_liquidacioncompra", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLiquidacioncompra;

    /**
     * @var int|null
     *
     * @ORM\Column(name="em_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $emId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_direccion_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalDireccion = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_email_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalEmail = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_formapago_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalFormapago = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_nombrecomercial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalNombrecomercial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_observacion_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalObservacion = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_telefono_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalTelefono = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_contribuyenteEspecial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraContribuyenteespecial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_direccionProveedor_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraDireccionproveedor = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_dirEstablecimiento_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraDirestablecimiento = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_fechaEmision_", type="date", nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraFechaemision = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_identificacionProveedor_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraIdentificacionproveedor = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_importeTotal_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraImportetotal = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_moneda_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraMoneda = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_obligadoContabilidad_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraObligadocontabilidad = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_pagos_pago_formaPago_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraPagosPagoFormapago = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_pagos_pago_plazo_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraPagosPagoPlazo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_pagos_pago_total_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraPagosPagoTotal = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_pagos_pago_unidadTiempo_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraPagosPagoUnidadtiempo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_razonSocialProveedor_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraRazonsocialproveedor = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_tipoIdentificacionProveedor_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraTipoidentificacionproveedor = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_totalDescuento_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraTotaldescuento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoLiquidacionCompra_totalSinImpuestos_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infoliquidacioncompraTotalsinimpuestos = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_ambiente_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaAmbiente = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_claveAcceso_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaClaveacceso = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_codDoc_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaCoddoc = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_dirMatriz_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaDirmatriz = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_estab_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaEstab = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_nombreComercial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaNombrecomercial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_ptoEmi_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaPtoemi = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_razonSocial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaRazonsocial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_ruc_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaRuc = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_secuencial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaSecuencial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_tipoEmision_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infotributariaTipoemision = 'NULL';

    public function getIdLiquidacioncompra(): ?int
    {
        return $this->idLiquidacioncompra;
    }

    public function getEmId(): ?int
    {
        return $this->emId;
    }

    public function setEmId(?int $emId): self
    {
        $this->emId = $emId;

        return $this;
    }

    public function getInfoadicionalCampoadicionalDireccion(): ?string
    {
        return $this->infoadicionalCampoadicionalDireccion;
    }

    public function setInfoadicionalCampoadicionalDireccion(?string $infoadicionalCampoadicionalDireccion): self
    {
        $this->infoadicionalCampoadicionalDireccion = $infoadicionalCampoadicionalDireccion;

        return $this;
    }

    public function getInfoadicionalCampoadicionalEmail(): ?string
    {
        return $this->infoadicionalCampoadicionalEmail;
    }

    public function setInfoadicionalCampoadicionalEmail(?string $infoadicionalCampoadicionalEmail): self
    {
        $this->infoadicionalCampoadicionalEmail = $infoadicionalCampoadicionalEmail;

        return $this;
    }

    public function getInfoadicionalCampoadicionalFormapago(): ?string
    {
        return $this->infoadicionalCampoadicionalFormapago;
    }

    public function setInfoadicionalCampoadicionalFormapago(?string $infoadicionalCampoadicionalFormapago): self
    {
        $this->infoadicionalCampoadicionalFormapago = $infoadicionalCampoadicionalFormapago;

        return $this;
    }

    public function getInfoadicionalCampoadicionalNombrecomercial(): ?string
    {
        return $this->infoadicionalCampoadicionalNombrecomercial;
    }

    public function setInfoadicionalCampoadicionalNombrecomercial(?string $infoadicionalCampoadicionalNombrecomercial): self
    {
        $this->infoadicionalCampoadicionalNombrecomercial = $infoadicionalCampoadicionalNombrecomercial;

        return $this;
    }

    public function getInfoadicionalCampoadicionalObservacion(): ?string
    {
        return $this->infoadicionalCampoadicionalObservacion;
    }

    public function setInfoadicionalCampoadicionalObservacion(?string $infoadicionalCampoadicionalObservacion): self
    {
        $this->infoadicionalCampoadicionalObservacion = $infoadicionalCampoadicionalObservacion;

        return $this;
    }

    public function getInfoadicionalCampoadicionalTelefono(): ?string
    {
        return $this->infoadicionalCampoadicionalTelefono;
    }

    public function setInfoadicionalCampoadicionalTelefono(?string $infoadicionalCampoadicionalTelefono): self
    {
        $this->infoadicionalCampoadicionalTelefono = $infoadicionalCampoadicionalTelefono;

        return $this;
    }

    public function getInfoliquidacioncompraContribuyenteespecial(): ?string
    {
        return $this->infoliquidacioncompraContribuyenteespecial;
    }

    public function setInfoliquidacioncompraContribuyenteespecial(?string $infoliquidacioncompraContribuyenteespecial): self
    {
        $this->infoliquidacioncompraContribuyenteespecial = $infoliquidacioncompraContribuyenteespecial;

        return $this;
    }

    public function getInfoliquidacioncompraDireccionproveedor(): ?string
    {
        return $this->infoliquidacioncompraDireccionproveedor;
    }

    public function setInfoliquidacioncompraDireccionproveedor(?string $infoliquidacioncompraDireccionproveedor): self
    {
        $this->infoliquidacioncompraDireccionproveedor = $infoliquidacioncompraDireccionproveedor;

        return $this;
    }

    public function getInfoliquidacioncompraDirestablecimiento(): ?string
    {
        return $this->infoliquidacioncompraDirestablecimiento;
    }

    public function setInfoliquidacioncompraDirestablecimiento(?string $infoliquidacioncompraDirestablecimiento): self
    {
        $this->infoliquidacioncompraDirestablecimiento = $infoliquidacioncompraDirestablecimiento;

        return $this;
    }

    public function getInfoliquidacioncompraFechaemision(): ?\DateTimeInterface
    {
        return $this->infoliquidacioncompraFechaemision;
    }

    public function setInfoliquidacioncompraFechaemision(?\DateTimeInterface $infoliquidacioncompraFechaemision): self
    {
        $this->infoliquidacioncompraFechaemision = $infoliquidacioncompraFechaemision;

        return $this;
    }

    public function getInfoliquidacioncompraIdentificacionproveedor(): ?string
    {
        return $this->infoliquidacioncompraIdentificacionproveedor;
    }

    public function setInfoliquidacioncompraIdentificacionproveedor(?string $infoliquidacioncompraIdentificacionproveedor): self
    {
        $this->infoliquidacioncompraIdentificacionproveedor = $infoliquidacioncompraIdentificacionproveedor;

        return $this;
    }

    public function getInfoliquidacioncompraImportetotal(): ?string
    {
        return $this->infoliquidacioncompraImportetotal;
    }

    public function setInfoliquidacioncompraImportetotal(?string $infoliquidacioncompraImportetotal): self
    {
        $this->infoliquidacioncompraImportetotal = $infoliquidacioncompraImportetotal;

        return $this;
    }

    public function getInfoliquidacioncompraMoneda(): ?string
    {
        return $this->infoliquidacioncompraMoneda;
    }

    public function setInfoliquidacioncompraMoneda(?string $infoliquidacioncompraMoneda): self
    {
        $this->infoliquidacioncompraMoneda = $infoliquidacioncompraMoneda;

        return $this;
    }

    public function getInfoliquidacioncompraObligadocontabilidad(): ?string
    {
        return $this->infoliquidacioncompraObligadocontabilidad;
    }

    public function setInfoliquidacioncompraObligadocontabilidad(?string $infoliquidacioncompraObligadocontabilidad): self
    {
        $this->infoliquidacioncompraObligadocontabilidad = $infoliquidacioncompraObligadocontabilidad;

        return $this;
    }

    public function getInfoliquidacioncompraPagosPagoFormapago(): ?string
    {
        return $this->infoliquidacioncompraPagosPagoFormapago;
    }

    public function setInfoliquidacioncompraPagosPagoFormapago(?string $infoliquidacioncompraPagosPagoFormapago): self
    {
        $this->infoliquidacioncompraPagosPagoFormapago = $infoliquidacioncompraPagosPagoFormapago;

        return $this;
    }

    public function getInfoliquidacioncompraPagosPagoPlazo(): ?string
    {
        return $this->infoliquidacioncompraPagosPagoPlazo;
    }

    public function setInfoliquidacioncompraPagosPagoPlazo(?string $infoliquidacioncompraPagosPagoPlazo): self
    {
        $this->infoliquidacioncompraPagosPagoPlazo = $infoliquidacioncompraPagosPagoPlazo;

        return $this;
    }

    public function getInfoliquidacioncompraPagosPagoTotal(): ?string
    {
        return $this->infoliquidacioncompraPagosPagoTotal;
    }

    public function setInfoliquidacioncompraPagosPagoTotal(?string $infoliquidacioncompraPagosPagoTotal): self
    {
        $this->infoliquidacioncompraPagosPagoTotal = $infoliquidacioncompraPagosPagoTotal;

        return $this;
    }

    public function getInfoliquidacioncompraPagosPagoUnidadtiempo(): ?string
    {
        return $this->infoliquidacioncompraPagosPagoUnidadtiempo;
    }

    public function setInfoliquidacioncompraPagosPagoUnidadtiempo(?string $infoliquidacioncompraPagosPagoUnidadtiempo): self
    {
        $this->infoliquidacioncompraPagosPagoUnidadtiempo = $infoliquidacioncompraPagosPagoUnidadtiempo;

        return $this;
    }

    public function getInfoliquidacioncompraRazonsocialproveedor(): ?string
    {
        return $this->infoliquidacioncompraRazonsocialproveedor;
    }

    public function setInfoliquidacioncompraRazonsocialproveedor(?string $infoliquidacioncompraRazonsocialproveedor): self
    {
        $this->infoliquidacioncompraRazonsocialproveedor = $infoliquidacioncompraRazonsocialproveedor;

        return $this;
    }

    public function getInfoliquidacioncompraTipoidentificacionproveedor(): ?string
    {
        return $this->infoliquidacioncompraTipoidentificacionproveedor;
    }

    public function setInfoliquidacioncompraTipoidentificacionproveedor(?string $infoliquidacioncompraTipoidentificacionproveedor): self
    {
        $this->infoliquidacioncompraTipoidentificacionproveedor = $infoliquidacioncompraTipoidentificacionproveedor;

        return $this;
    }

    public function getInfoliquidacioncompraTotaldescuento(): ?string
    {
        return $this->infoliquidacioncompraTotaldescuento;
    }

    public function setInfoliquidacioncompraTotaldescuento(?string $infoliquidacioncompraTotaldescuento): self
    {
        $this->infoliquidacioncompraTotaldescuento = $infoliquidacioncompraTotaldescuento;

        return $this;
    }

    public function getInfoliquidacioncompraTotalsinimpuestos(): ?string
    {
        return $this->infoliquidacioncompraTotalsinimpuestos;
    }

    public function setInfoliquidacioncompraTotalsinimpuestos(?string $infoliquidacioncompraTotalsinimpuestos): self
    {
        $this->infoliquidacioncompraTotalsinimpuestos = $infoliquidacioncompraTotalsinimpuestos;

        return $this;
    }

    public function getInfotributariaAmbiente(): ?string
    {
        return $this->infotributariaAmbiente;
    }

    public function setInfotributariaAmbiente(?string $infotributariaAmbiente): self
    {
        $this->infotributariaAmbiente = $infotributariaAmbiente;

        return $this;
    }

    public function getInfotributariaClaveacceso(): ?string
    {
        return $this->infotributariaClaveacceso;
    }

    public function setInfotributariaClaveacceso(?string $infotributariaClaveacceso): self
    {
        $this->infotributariaClaveacceso = $infotributariaClaveacceso;

        return $this;
    }

    public function getInfotributariaCoddoc(): ?string
    {
        return $this->infotributariaCoddoc;
    }

    public function setInfotributariaCoddoc(?string $infotributariaCoddoc): self
    {
        $this->infotributariaCoddoc = $infotributariaCoddoc;

        return $this;
    }

    public function getInfotributariaDirmatriz(): ?string
    {
        return $this->infotributariaDirmatriz;
    }

    public function setInfotributariaDirmatriz(?string $infotributariaDirmatriz): self
    {
        $this->infotributariaDirmatriz = $infotributariaDirmatriz;

        return $this;
    }

    public function getInfotributariaEstab(): ?string
    {
        return $this->infotributariaEstab;
    }

    public function setInfotributariaEstab(?string $infotributariaEstab): self
    {
        $this->infotributariaEstab = $infotributariaEstab;

        return $this;
    }

    public function getInfotributariaNombrecomercial(): ?string
    {
        return $this->infotributariaNombrecomercial;
    }

    public function setInfotributariaNombrecomercial(?string $infotributariaNombrecomercial): self
    {
        $this->infotributariaNombrecomercial = $infotributariaNombrecomercial;

        return $this;
    }

    public function getInfotributariaPtoemi(): ?string
    {
        return $this->infotributariaPtoemi;
    }

    public function setInfotributariaPtoemi(?string $infotributariaPtoemi): self
    {
        $this->infotributariaPtoemi = $infotributariaPtoemi;

        return $this;
    }

    public function getInfotributariaRazonsocial(): ?string
    {
        return $this->infotributariaRazonsocial;
    }

    public function setInfotributariaRazonsocial(?string $infotributariaRazonsocial): self
    {
        $this->infotributariaRazonsocial = $infotributariaRazonsocial;

        return $this;
    }

    public function getInfotributariaRuc(): ?string
    {
        return $this->infotributariaRuc;
    }

    public function setInfotributariaRuc(?string $infotributariaRuc): self
    {
        $this->infotributariaRuc = $infotributariaRuc;

        return $this;
    }

    public function getInfotributariaSecuencial(): ?string
    {
        return $this->infotributariaSecuencial;
    }

    public function setInfotributariaSecuencial(?string $infotributariaSecuencial): self
    {
        $this->infotributariaSecuencial = $infotributariaSecuencial;

        return $this;
    }

    public function getInfotributariaTipoemision(): ?string
    {
        return $this->infotributariaTipoemision;
    }

    public function setInfotributariaTipoemision(?string $infotributariaTipoemision): self
    {
        $this->infotributariaTipoemision = $infotributariaTipoemision;

        return $this;
    }


}

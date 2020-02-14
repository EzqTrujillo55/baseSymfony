<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table(name="_factura")
 * @ORM\Entity
 */
class Factura
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="em_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $emId = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_contacto_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalContacto = 'NULL';

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
     * @ORM\Column(name="infoAdicional_campoAdicional_observacion_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalObservacion = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_ordenCompra_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalOrdencompra = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoAdicional_campoAdicional_telefono_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalTelefono = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_contribuyenteEspecial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaContribuyenteespecial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_direccionComprador_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaDireccioncomprador = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_dirEstablecimiento_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaDirestablecimiento = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="infoFactura_fechaEmision_", type="date", nullable=true, options={"default"="NULL"})
     */
    private $infofacturaFechaemision = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_identificacionComprador_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaIdentificacioncomprador = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_importeTotal_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaImportetotal = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_moneda_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaMoneda = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_obligadoContabilidad_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaObligadocontabilidad = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_pagos_pago_formaPago_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaPagosPagoFormapago = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_pagos_pago_plazo_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaPagosPagoPlazo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_pagos_pago_total_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaPagosPagoTotal = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_pagos_pago_unidadTiempo_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaPagosPagoUnidadtiempo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_propina_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaPropina = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_razonSocialComprador_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaRazonsocialcomprador = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_totalDescuento_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaTotaldescuento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_totalSinImpuestos_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaTotalsinimpuestos = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoFactura_totalSubsidio_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infofacturaTotalsubsidio = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoTributaria_ambiente_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
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

    /**
     * @var int
     *
     * @ORM\Column(name="id_Factura", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFactura;

    public function getEmId(): ?int
    {
        return $this->emId;
    }

    public function setEmId(?int $emId): self
    {
        $this->emId = $emId;

        return $this;
    }

    public function getInfoadicionalCampoadicionalContacto(): ?string
    {
        return $this->infoadicionalCampoadicionalContacto;
    }

    public function setInfoadicionalCampoadicionalContacto(?string $infoadicionalCampoadicionalContacto): self
    {
        $this->infoadicionalCampoadicionalContacto = $infoadicionalCampoadicionalContacto;

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

    public function getInfoadicionalCampoadicionalObservacion(): ?string
    {
        return $this->infoadicionalCampoadicionalObservacion;
    }

    public function setInfoadicionalCampoadicionalObservacion(?string $infoadicionalCampoadicionalObservacion): self
    {
        $this->infoadicionalCampoadicionalObservacion = $infoadicionalCampoadicionalObservacion;

        return $this;
    }

    public function getInfoadicionalCampoadicionalOrdencompra(): ?string
    {
        return $this->infoadicionalCampoadicionalOrdencompra;
    }

    public function setInfoadicionalCampoadicionalOrdencompra(?string $infoadicionalCampoadicionalOrdencompra): self
    {
        $this->infoadicionalCampoadicionalOrdencompra = $infoadicionalCampoadicionalOrdencompra;

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

    public function getInfofacturaContribuyenteespecial(): ?string
    {
        return $this->infofacturaContribuyenteespecial;
    }

    public function setInfofacturaContribuyenteespecial(?string $infofacturaContribuyenteespecial): self
    {
        $this->infofacturaContribuyenteespecial = $infofacturaContribuyenteespecial;

        return $this;
    }

    public function getInfofacturaDireccioncomprador(): ?string
    {
        return $this->infofacturaDireccioncomprador;
    }

    public function setInfofacturaDireccioncomprador(?string $infofacturaDireccioncomprador): self
    {
        $this->infofacturaDireccioncomprador = $infofacturaDireccioncomprador;

        return $this;
    }

    public function getInfofacturaDirestablecimiento(): ?string
    {
        return $this->infofacturaDirestablecimiento;
    }

    public function setInfofacturaDirestablecimiento(?string $infofacturaDirestablecimiento): self
    {
        $this->infofacturaDirestablecimiento = $infofacturaDirestablecimiento;

        return $this;
    }

    public function getInfofacturaFechaemision(): ?\DateTimeInterface
    {
        return $this->infofacturaFechaemision;
    }

    public function setInfofacturaFechaemision(?\DateTimeInterface $infofacturaFechaemision): self
    {
        $this->infofacturaFechaemision = $infofacturaFechaemision;

        return $this;
    }

    public function getInfofacturaIdentificacioncomprador(): ?string
    {
        return $this->infofacturaIdentificacioncomprador;
    }

    public function setInfofacturaIdentificacioncomprador(?string $infofacturaIdentificacioncomprador): self
    {
        $this->infofacturaIdentificacioncomprador = $infofacturaIdentificacioncomprador;

        return $this;
    }

    public function getInfofacturaImportetotal(): ?string
    {
        return $this->infofacturaImportetotal;
    }

    public function setInfofacturaImportetotal(?string $infofacturaImportetotal): self
    {
        $this->infofacturaImportetotal = $infofacturaImportetotal;

        return $this;
    }

    public function getInfofacturaMoneda(): ?string
    {
        return $this->infofacturaMoneda;
    }

    public function setInfofacturaMoneda(?string $infofacturaMoneda): self
    {
        $this->infofacturaMoneda = $infofacturaMoneda;

        return $this;
    }

    public function getInfofacturaObligadocontabilidad(): ?string
    {
        return $this->infofacturaObligadocontabilidad;
    }

    public function setInfofacturaObligadocontabilidad(?string $infofacturaObligadocontabilidad): self
    {
        $this->infofacturaObligadocontabilidad = $infofacturaObligadocontabilidad;

        return $this;
    }

    public function getInfofacturaPagosPagoFormapago(): ?string
    {
        return $this->infofacturaPagosPagoFormapago;
    }

    public function setInfofacturaPagosPagoFormapago(?string $infofacturaPagosPagoFormapago): self
    {
        $this->infofacturaPagosPagoFormapago = $infofacturaPagosPagoFormapago;

        return $this;
    }

    public function getInfofacturaPagosPagoPlazo(): ?string
    {
        return $this->infofacturaPagosPagoPlazo;
    }

    public function setInfofacturaPagosPagoPlazo(?string $infofacturaPagosPagoPlazo): self
    {
        $this->infofacturaPagosPagoPlazo = $infofacturaPagosPagoPlazo;

        return $this;
    }

    public function getInfofacturaPagosPagoTotal(): ?string
    {
        return $this->infofacturaPagosPagoTotal;
    }

    public function setInfofacturaPagosPagoTotal(?string $infofacturaPagosPagoTotal): self
    {
        $this->infofacturaPagosPagoTotal = $infofacturaPagosPagoTotal;

        return $this;
    }

    public function getInfofacturaPagosPagoUnidadtiempo(): ?string
    {
        return $this->infofacturaPagosPagoUnidadtiempo;
    }

    public function setInfofacturaPagosPagoUnidadtiempo(?string $infofacturaPagosPagoUnidadtiempo): self
    {
        $this->infofacturaPagosPagoUnidadtiempo = $infofacturaPagosPagoUnidadtiempo;

        return $this;
    }

    public function getInfofacturaPropina(): ?string
    {
        return $this->infofacturaPropina;
    }

    public function setInfofacturaPropina(?string $infofacturaPropina): self
    {
        $this->infofacturaPropina = $infofacturaPropina;

        return $this;
    }

    public function getInfofacturaRazonsocialcomprador(): ?string
    {
        return $this->infofacturaRazonsocialcomprador;
    }

    public function setInfofacturaRazonsocialcomprador(?string $infofacturaRazonsocialcomprador): self
    {
        $this->infofacturaRazonsocialcomprador = $infofacturaRazonsocialcomprador;

        return $this;
    }

    public function getInfofacturaTotaldescuento(): ?string
    {
        return $this->infofacturaTotaldescuento;
    }

    public function setInfofacturaTotaldescuento(?string $infofacturaTotaldescuento): self
    {
        $this->infofacturaTotaldescuento = $infofacturaTotaldescuento;

        return $this;
    }

    public function getInfofacturaTotalsinimpuestos(): ?string
    {
        return $this->infofacturaTotalsinimpuestos;
    }

    public function setInfofacturaTotalsinimpuestos(?string $infofacturaTotalsinimpuestos): self
    {
        $this->infofacturaTotalsinimpuestos = $infofacturaTotalsinimpuestos;

        return $this;
    }

    public function getInfofacturaTotalsubsidio(): ?string
    {
        return $this->infofacturaTotalsubsidio;
    }

    public function setInfofacturaTotalsubsidio(?string $infofacturaTotalsubsidio): self
    {
        $this->infofacturaTotalsubsidio = $infofacturaTotalsubsidio;

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

    public function getIdFactura(): ?int
    {
        return $this->idFactura;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notadebito
 *
 * @ORM\Table(name="_notadebito")
 * @ORM\Entity
 */
class Notadebito
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_notadebito", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotadebito;

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
     * @ORM\Column(name="infoAdicional_campoAdicional_telefono_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infoadicionalCampoadicionalTelefono = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_codDocModificado_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoCoddocmodificado = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_contribuyenteEspecial_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoContribuyenteespecial = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_dirEstablecimiento_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoDirestablecimiento = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="infoNotaDebito_fechaEmision_", type="date", nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoFechaemision = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="infoNotaDebito_fechaEmisionDocSustento_", type="date", nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoFechaemisiondocsustento = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_identificacionComprador_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoIdentificacioncomprador = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_impuestos_impuesto_baseImponible_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoImpuestosImpuestoBaseimponible = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_impuestos_impuesto_codigoPorcentaje_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoImpuestosImpuestoCodigoporcentaje = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_impuestos_impuesto_valor_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoImpuestosImpuestoValor = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_numDocModificado_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoNumdocmodificado = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_obligadoContabilidad_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoObligadocontabilidad = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_pagos_pago_formaPago_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoPagosPagoFormapago = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_pagos_pago_plazo_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoPagosPagoPlazo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_pagos_pago_total_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoPagosPagoTotal = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_pagos_pago_unidadTiempo_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoPagosPagoUnidadtiempo = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_razonSocialComprador_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoRazonsocialcomprador = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_tipoIdentificacionComprador_", type="string", length=300, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoTipoidentificacioncomprador = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_totalSinImpuestos_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoTotalsinimpuestos = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="infoNotaDebito_valorTotal_", type="decimal", precision=12, scale=2, nullable=true, options={"default"="NULL"})
     */
    private $infonotadebitoValortotal = 'NULL';

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

    public function getIdNotadebito(): ?int
    {
        return $this->idNotadebito;
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

    public function getInfoadicionalCampoadicionalTelefono(): ?string
    {
        return $this->infoadicionalCampoadicionalTelefono;
    }

    public function setInfoadicionalCampoadicionalTelefono(?string $infoadicionalCampoadicionalTelefono): self
    {
        $this->infoadicionalCampoadicionalTelefono = $infoadicionalCampoadicionalTelefono;

        return $this;
    }

    public function getInfonotadebitoCoddocmodificado(): ?string
    {
        return $this->infonotadebitoCoddocmodificado;
    }

    public function setInfonotadebitoCoddocmodificado(?string $infonotadebitoCoddocmodificado): self
    {
        $this->infonotadebitoCoddocmodificado = $infonotadebitoCoddocmodificado;

        return $this;
    }

    public function getInfonotadebitoContribuyenteespecial(): ?string
    {
        return $this->infonotadebitoContribuyenteespecial;
    }

    public function setInfonotadebitoContribuyenteespecial(?string $infonotadebitoContribuyenteespecial): self
    {
        $this->infonotadebitoContribuyenteespecial = $infonotadebitoContribuyenteespecial;

        return $this;
    }

    public function getInfonotadebitoDirestablecimiento(): ?string
    {
        return $this->infonotadebitoDirestablecimiento;
    }

    public function setInfonotadebitoDirestablecimiento(?string $infonotadebitoDirestablecimiento): self
    {
        $this->infonotadebitoDirestablecimiento = $infonotadebitoDirestablecimiento;

        return $this;
    }

    public function getInfonotadebitoFechaemision(): ?\DateTimeInterface
    {
        return $this->infonotadebitoFechaemision;
    }

    public function setInfonotadebitoFechaemision(?\DateTimeInterface $infonotadebitoFechaemision): self
    {
        $this->infonotadebitoFechaemision = $infonotadebitoFechaemision;

        return $this;
    }

    public function getInfonotadebitoFechaemisiondocsustento(): ?\DateTimeInterface
    {
        return $this->infonotadebitoFechaemisiondocsustento;
    }

    public function setInfonotadebitoFechaemisiondocsustento(?\DateTimeInterface $infonotadebitoFechaemisiondocsustento): self
    {
        $this->infonotadebitoFechaemisiondocsustento = $infonotadebitoFechaemisiondocsustento;

        return $this;
    }

    public function getInfonotadebitoIdentificacioncomprador(): ?string
    {
        return $this->infonotadebitoIdentificacioncomprador;
    }

    public function setInfonotadebitoIdentificacioncomprador(?string $infonotadebitoIdentificacioncomprador): self
    {
        $this->infonotadebitoIdentificacioncomprador = $infonotadebitoIdentificacioncomprador;

        return $this;
    }

    public function getInfonotadebitoImpuestosImpuestoBaseimponible(): ?string
    {
        return $this->infonotadebitoImpuestosImpuestoBaseimponible;
    }

    public function setInfonotadebitoImpuestosImpuestoBaseimponible(?string $infonotadebitoImpuestosImpuestoBaseimponible): self
    {
        $this->infonotadebitoImpuestosImpuestoBaseimponible = $infonotadebitoImpuestosImpuestoBaseimponible;

        return $this;
    }

    public function getInfonotadebitoImpuestosImpuestoCodigoporcentaje(): ?string
    {
        return $this->infonotadebitoImpuestosImpuestoCodigoporcentaje;
    }

    public function setInfonotadebitoImpuestosImpuestoCodigoporcentaje(?string $infonotadebitoImpuestosImpuestoCodigoporcentaje): self
    {
        $this->infonotadebitoImpuestosImpuestoCodigoporcentaje = $infonotadebitoImpuestosImpuestoCodigoporcentaje;

        return $this;
    }

    public function getInfonotadebitoImpuestosImpuestoValor(): ?string
    {
        return $this->infonotadebitoImpuestosImpuestoValor;
    }

    public function setInfonotadebitoImpuestosImpuestoValor(?string $infonotadebitoImpuestosImpuestoValor): self
    {
        $this->infonotadebitoImpuestosImpuestoValor = $infonotadebitoImpuestosImpuestoValor;

        return $this;
    }

    public function getInfonotadebitoNumdocmodificado(): ?string
    {
        return $this->infonotadebitoNumdocmodificado;
    }

    public function setInfonotadebitoNumdocmodificado(?string $infonotadebitoNumdocmodificado): self
    {
        $this->infonotadebitoNumdocmodificado = $infonotadebitoNumdocmodificado;

        return $this;
    }

    public function getInfonotadebitoObligadocontabilidad(): ?string
    {
        return $this->infonotadebitoObligadocontabilidad;
    }

    public function setInfonotadebitoObligadocontabilidad(?string $infonotadebitoObligadocontabilidad): self
    {
        $this->infonotadebitoObligadocontabilidad = $infonotadebitoObligadocontabilidad;

        return $this;
    }

    public function getInfonotadebitoPagosPagoFormapago(): ?string
    {
        return $this->infonotadebitoPagosPagoFormapago;
    }

    public function setInfonotadebitoPagosPagoFormapago(?string $infonotadebitoPagosPagoFormapago): self
    {
        $this->infonotadebitoPagosPagoFormapago = $infonotadebitoPagosPagoFormapago;

        return $this;
    }

    public function getInfonotadebitoPagosPagoPlazo(): ?string
    {
        return $this->infonotadebitoPagosPagoPlazo;
    }

    public function setInfonotadebitoPagosPagoPlazo(?string $infonotadebitoPagosPagoPlazo): self
    {
        $this->infonotadebitoPagosPagoPlazo = $infonotadebitoPagosPagoPlazo;

        return $this;
    }

    public function getInfonotadebitoPagosPagoTotal(): ?string
    {
        return $this->infonotadebitoPagosPagoTotal;
    }

    public function setInfonotadebitoPagosPagoTotal(?string $infonotadebitoPagosPagoTotal): self
    {
        $this->infonotadebitoPagosPagoTotal = $infonotadebitoPagosPagoTotal;

        return $this;
    }

    public function getInfonotadebitoPagosPagoUnidadtiempo(): ?string
    {
        return $this->infonotadebitoPagosPagoUnidadtiempo;
    }

    public function setInfonotadebitoPagosPagoUnidadtiempo(?string $infonotadebitoPagosPagoUnidadtiempo): self
    {
        $this->infonotadebitoPagosPagoUnidadtiempo = $infonotadebitoPagosPagoUnidadtiempo;

        return $this;
    }

    public function getInfonotadebitoRazonsocialcomprador(): ?string
    {
        return $this->infonotadebitoRazonsocialcomprador;
    }

    public function setInfonotadebitoRazonsocialcomprador(?string $infonotadebitoRazonsocialcomprador): self
    {
        $this->infonotadebitoRazonsocialcomprador = $infonotadebitoRazonsocialcomprador;

        return $this;
    }

    public function getInfonotadebitoTipoidentificacioncomprador(): ?string
    {
        return $this->infonotadebitoTipoidentificacioncomprador;
    }

    public function setInfonotadebitoTipoidentificacioncomprador(?string $infonotadebitoTipoidentificacioncomprador): self
    {
        $this->infonotadebitoTipoidentificacioncomprador = $infonotadebitoTipoidentificacioncomprador;

        return $this;
    }

    public function getInfonotadebitoTotalsinimpuestos(): ?string
    {
        return $this->infonotadebitoTotalsinimpuestos;
    }

    public function setInfonotadebitoTotalsinimpuestos(?string $infonotadebitoTotalsinimpuestos): self
    {
        $this->infonotadebitoTotalsinimpuestos = $infonotadebitoTotalsinimpuestos;

        return $this;
    }

    public function getInfonotadebitoValortotal(): ?string
    {
        return $this->infonotadebitoValortotal;
    }

    public function setInfonotadebitoValortotal(?string $infonotadebitoValortotal): self
    {
        $this->infonotadebitoValortotal = $infonotadebitoValortotal;

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


}

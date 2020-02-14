<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcComprobante
 *
 * @ORM\Table(name="gc_comprobante", indexes={@ORM\Index(name="IndexNumeroRetencion", columns={"em_id", "pe_id", "co_retencion_numero"}), @ORM\Index(name="IndiceComprobanteFecha", columns={"em_id", "co_periodo", "co_fecha", "co_id"}), @ORM\Index(name="indice_comprobante", columns={"em_id", "co_id"}), @ORM\Index(name="IndiceCheque", columns={"em_id", "co_cuenta_corriente"}), @ORM\Index(name="indiceNumeroRetencionTipoDoc", columns={"em_id", "co_doc_ret_establecimiento", "co_doc_ret_puntoemision", "co_retencion_numero", "co_factura_tipo"})})
 * @ORM\Entity
 */
class GcComprobante
{
    /**
     * @var int
     *
     * @ORM\Column(name="co_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coId;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_periodo", type="integer", nullable=false)
     */
    private $coPeriodo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="us_id", type="bigint", nullable=false)
     */
    private $usId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pe_id", type="bigint", nullable=false)
     */
    private $peId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pe_tipo", type="string", length=1, nullable=false, options={"default"="'*'","fixed"=true})
     */
    private $peTipo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_fuente", type="bigint", nullable=false)
     */
    private $cuIdRetencionFuente = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cu_id_retencion_iva", type="bigint", nullable=false)
     */
    private $cuIdRetencionIva = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tc_id", type="bigint", nullable=false)
     */
    private $tcId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_secuencial", type="bigint", nullable=false)
     */
    private $coSecuencial = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_numero", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $coNumero = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_motivo", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $coMotivo = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_total_texto", type="string", length=150, nullable=false, options={"default"="'*'"})
     */
    private $coTotalTexto = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_total_texto_cheque", type="string", length=150, nullable=false, options={"default"="'*'"})
     */
    private $coTotalTextoCheque = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_observacion", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $coObservacion = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="co_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $coTotal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="co_total_cheque", type="float", precision=10, scale=0, nullable=false)
     */
    private $coTotalCheque = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="co_total_debe", type="float", precision=10, scale=0, nullable=false)
     */
    private $coTotalDebe = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="co_total_haber", type="float", precision=10, scale=0, nullable=false)
     */
    private $coTotalHaber = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_beneficiario", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $coBeneficiario = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_banco", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $coBanco = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_cuenta_corriente", type="string", length=25, nullable=false, options={"default"="'*'"})
     */
    private $coCuentaCorriente = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_cheque", type="string", length=25, nullable=false, options={"default"="'0'"})
     */
    private $coCheque = '\'0\'';

    /**
     * @var float
     *
     * @ORM\Column(name="co_efectivo", type="float", precision=10, scale=0, nullable=false)
     */
    private $coEfectivo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_retencion_numero", type="bigint", nullable=false)
     */
    private $coRetencionNumero = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_cheque_tipo", type="string", length=5, nullable=false, options={"default"="''"})
     */
    private $coChequeTipo = '\'\'';

    /**
     * @var int
     *
     * @ORM\Column(name="co_fa_id", type="bigint", nullable=false)
     */
    private $coFaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_fa_numero", type="string", length=250, nullable=false, options={"default"="'*'"})
     */
    private $coFaNumero = '\'*\'';

    /**
     * @var float
     *
     * @ORM\Column(name="co_factura_total", type="float", precision=10, scale=0, nullable=false)
     */
    private $coFacturaTotal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="co_factura_parcial", type="float", precision=10, scale=0, nullable=false)
     */
    private $coFacturaParcial = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="co_factura_iva", type="float", precision=10, scale=0, nullable=false)
     */
    private $coFacturaIva = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="co_factura_descuento", type="float", precision=10, scale=0, nullable=false)
     */
    private $coFacturaDescuento = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_factura_tipo", type="string", length=5, nullable=false, options={"default"="'*'"})
     */
    private $coFacturaTipo = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="co_tr_id_fuente", type="bigint", nullable=false)
     */
    private $coTrIdFuente = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="co_tr_id_iva", type="bigint", nullable=false)
     */
    private $coTrIdIva = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_estado", type="string", length=1, nullable=false, options={"default"="'C'","fixed"=true})
     */
    private $coEstado = '\'C\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="co_fecha", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $coFecha = '\'0000-00-00 00:00:00\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_retencion_numeroadicional", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $coRetencionNumeroadicional = '\'0\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="co_cruce_valores", type="boolean", nullable=false)
     */
    private $coCruceValores = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="co_papeleta", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $coPapeleta = '\'0\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_doc_ret_establecimiento", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $coDocRetEstablecimiento = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_doc_ret_puntoemision", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $coDocRetPuntoemision = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_doc_ret_autorizacion", type="string", length=50, nullable=false, options={"default"="'0'"})
     */
    private $coDocRetAutorizacion = '\'0\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="co_doc_ret_caduca", type="date", nullable=false, options={"default"="'2006-01-01'"})
     */
    private $coDocRetCaduca = '\'2006-01-01\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_doc_fa_establecimiento", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $coDocFaEstablecimiento = '\'001\'';

    /**
     * @var string
     *
     * @ORM\Column(name="co_doc_fa_puntoemision", type="string", length=5, nullable=false, options={"default"="'001'"})
     */
    private $coDocFaPuntoemision = '\'001\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="co_fecha_chequepago", type="date", nullable=false, options={"default"="'2011-01-01'"})
     */
    private $coFechaChequepago = '\'2011-01-01\'';

    /**
     * @var bool
     *
     * @ORM\Column(name="co_automatico", type="boolean", nullable=false)
     */
    private $coAutomatico = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="co_uso_comprobante_niif", type="boolean", nullable=false, options={"default"="-1"})
     */
    private $coUsoComprobanteNiif = '-1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="co_doc_ret_fecha_autorizacion", type="date", nullable=false, options={"default"="'2000-01-01'"})
     */
    private $coDocRetFechaAutorizacion = '\'2000-01-01\'';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="co_fecha_registro", type="date", nullable=false, options={"default"="'2010-01-01'"})
     */
    private $coFechaRegistro = '\'2010-01-01\'';

    public function getCoId(): ?string
    {
        return $this->coId;
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

    public function getCoPeriodo(): ?int
    {
        return $this->coPeriodo;
    }

    public function setCoPeriodo(int $coPeriodo): self
    {
        $this->coPeriodo = $coPeriodo;

        return $this;
    }

    public function getUsId(): ?string
    {
        return $this->usId;
    }

    public function setUsId(string $usId): self
    {
        $this->usId = $usId;

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

    public function getPeTipo(): ?string
    {
        return $this->peTipo;
    }

    public function setPeTipo(string $peTipo): self
    {
        $this->peTipo = $peTipo;

        return $this;
    }

    public function getCuIdRetencionFuente(): ?string
    {
        return $this->cuIdRetencionFuente;
    }

    public function setCuIdRetencionFuente(string $cuIdRetencionFuente): self
    {
        $this->cuIdRetencionFuente = $cuIdRetencionFuente;

        return $this;
    }

    public function getCuIdRetencionIva(): ?string
    {
        return $this->cuIdRetencionIva;
    }

    public function setCuIdRetencionIva(string $cuIdRetencionIva): self
    {
        $this->cuIdRetencionIva = $cuIdRetencionIva;

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

    public function getCoSecuencial(): ?string
    {
        return $this->coSecuencial;
    }

    public function setCoSecuencial(string $coSecuencial): self
    {
        $this->coSecuencial = $coSecuencial;

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

    public function getCoMotivo(): ?string
    {
        return $this->coMotivo;
    }

    public function setCoMotivo(string $coMotivo): self
    {
        $this->coMotivo = $coMotivo;

        return $this;
    }

    public function getCoTotalTexto(): ?string
    {
        return $this->coTotalTexto;
    }

    public function setCoTotalTexto(string $coTotalTexto): self
    {
        $this->coTotalTexto = $coTotalTexto;

        return $this;
    }

    public function getCoTotalTextoCheque(): ?string
    {
        return $this->coTotalTextoCheque;
    }

    public function setCoTotalTextoCheque(string $coTotalTextoCheque): self
    {
        $this->coTotalTextoCheque = $coTotalTextoCheque;

        return $this;
    }

    public function getCoObservacion(): ?string
    {
        return $this->coObservacion;
    }

    public function setCoObservacion(string $coObservacion): self
    {
        $this->coObservacion = $coObservacion;

        return $this;
    }

    public function getCoTotal(): ?float
    {
        return $this->coTotal;
    }

    public function setCoTotal(float $coTotal): self
    {
        $this->coTotal = $coTotal;

        return $this;
    }

    public function getCoTotalCheque(): ?float
    {
        return $this->coTotalCheque;
    }

    public function setCoTotalCheque(float $coTotalCheque): self
    {
        $this->coTotalCheque = $coTotalCheque;

        return $this;
    }

    public function getCoTotalDebe(): ?float
    {
        return $this->coTotalDebe;
    }

    public function setCoTotalDebe(float $coTotalDebe): self
    {
        $this->coTotalDebe = $coTotalDebe;

        return $this;
    }

    public function getCoTotalHaber(): ?float
    {
        return $this->coTotalHaber;
    }

    public function setCoTotalHaber(float $coTotalHaber): self
    {
        $this->coTotalHaber = $coTotalHaber;

        return $this;
    }

    public function getCoBeneficiario(): ?string
    {
        return $this->coBeneficiario;
    }

    public function setCoBeneficiario(string $coBeneficiario): self
    {
        $this->coBeneficiario = $coBeneficiario;

        return $this;
    }

    public function getCoBanco(): ?string
    {
        return $this->coBanco;
    }

    public function setCoBanco(string $coBanco): self
    {
        $this->coBanco = $coBanco;

        return $this;
    }

    public function getCoCuentaCorriente(): ?string
    {
        return $this->coCuentaCorriente;
    }

    public function setCoCuentaCorriente(string $coCuentaCorriente): self
    {
        $this->coCuentaCorriente = $coCuentaCorriente;

        return $this;
    }

    public function getCoCheque(): ?string
    {
        return $this->coCheque;
    }

    public function setCoCheque(string $coCheque): self
    {
        $this->coCheque = $coCheque;

        return $this;
    }

    public function getCoEfectivo(): ?float
    {
        return $this->coEfectivo;
    }

    public function setCoEfectivo(float $coEfectivo): self
    {
        $this->coEfectivo = $coEfectivo;

        return $this;
    }

    public function getCoRetencionNumero(): ?string
    {
        return $this->coRetencionNumero;
    }

    public function setCoRetencionNumero(string $coRetencionNumero): self
    {
        $this->coRetencionNumero = $coRetencionNumero;

        return $this;
    }

    public function getCoChequeTipo(): ?string
    {
        return $this->coChequeTipo;
    }

    public function setCoChequeTipo(string $coChequeTipo): self
    {
        $this->coChequeTipo = $coChequeTipo;

        return $this;
    }

    public function getCoFaId(): ?string
    {
        return $this->coFaId;
    }

    public function setCoFaId(string $coFaId): self
    {
        $this->coFaId = $coFaId;

        return $this;
    }

    public function getCoFaNumero(): ?string
    {
        return $this->coFaNumero;
    }

    public function setCoFaNumero(string $coFaNumero): self
    {
        $this->coFaNumero = $coFaNumero;

        return $this;
    }

    public function getCoFacturaTotal(): ?float
    {
        return $this->coFacturaTotal;
    }

    public function setCoFacturaTotal(float $coFacturaTotal): self
    {
        $this->coFacturaTotal = $coFacturaTotal;

        return $this;
    }

    public function getCoFacturaParcial(): ?float
    {
        return $this->coFacturaParcial;
    }

    public function setCoFacturaParcial(float $coFacturaParcial): self
    {
        $this->coFacturaParcial = $coFacturaParcial;

        return $this;
    }

    public function getCoFacturaIva(): ?float
    {
        return $this->coFacturaIva;
    }

    public function setCoFacturaIva(float $coFacturaIva): self
    {
        $this->coFacturaIva = $coFacturaIva;

        return $this;
    }

    public function getCoFacturaDescuento(): ?float
    {
        return $this->coFacturaDescuento;
    }

    public function setCoFacturaDescuento(float $coFacturaDescuento): self
    {
        $this->coFacturaDescuento = $coFacturaDescuento;

        return $this;
    }

    public function getCoFacturaTipo(): ?string
    {
        return $this->coFacturaTipo;
    }

    public function setCoFacturaTipo(string $coFacturaTipo): self
    {
        $this->coFacturaTipo = $coFacturaTipo;

        return $this;
    }

    public function getCoTrIdFuente(): ?string
    {
        return $this->coTrIdFuente;
    }

    public function setCoTrIdFuente(string $coTrIdFuente): self
    {
        $this->coTrIdFuente = $coTrIdFuente;

        return $this;
    }

    public function getCoTrIdIva(): ?string
    {
        return $this->coTrIdIva;
    }

    public function setCoTrIdIva(string $coTrIdIva): self
    {
        $this->coTrIdIva = $coTrIdIva;

        return $this;
    }

    public function getCoEstado(): ?string
    {
        return $this->coEstado;
    }

    public function setCoEstado(string $coEstado): self
    {
        $this->coEstado = $coEstado;

        return $this;
    }

    public function getCoFecha(): ?\DateTimeInterface
    {
        return $this->coFecha;
    }

    public function setCoFecha(\DateTimeInterface $coFecha): self
    {
        $this->coFecha = $coFecha;

        return $this;
    }

    public function getCoRetencionNumeroadicional(): ?string
    {
        return $this->coRetencionNumeroadicional;
    }

    public function setCoRetencionNumeroadicional(string $coRetencionNumeroadicional): self
    {
        $this->coRetencionNumeroadicional = $coRetencionNumeroadicional;

        return $this;
    }

    public function getCoCruceValores(): ?bool
    {
        return $this->coCruceValores;
    }

    public function setCoCruceValores(bool $coCruceValores): self
    {
        $this->coCruceValores = $coCruceValores;

        return $this;
    }

    public function getCoPapeleta(): ?string
    {
        return $this->coPapeleta;
    }

    public function setCoPapeleta(string $coPapeleta): self
    {
        $this->coPapeleta = $coPapeleta;

        return $this;
    }

    public function getCoDocRetEstablecimiento(): ?string
    {
        return $this->coDocRetEstablecimiento;
    }

    public function setCoDocRetEstablecimiento(string $coDocRetEstablecimiento): self
    {
        $this->coDocRetEstablecimiento = $coDocRetEstablecimiento;

        return $this;
    }

    public function getCoDocRetPuntoemision(): ?string
    {
        return $this->coDocRetPuntoemision;
    }

    public function setCoDocRetPuntoemision(string $coDocRetPuntoemision): self
    {
        $this->coDocRetPuntoemision = $coDocRetPuntoemision;

        return $this;
    }

    public function getCoDocRetAutorizacion(): ?string
    {
        return $this->coDocRetAutorizacion;
    }

    public function setCoDocRetAutorizacion(string $coDocRetAutorizacion): self
    {
        $this->coDocRetAutorizacion = $coDocRetAutorizacion;

        return $this;
    }

    public function getCoDocRetCaduca(): ?\DateTimeInterface
    {
        return $this->coDocRetCaduca;
    }

    public function setCoDocRetCaduca(\DateTimeInterface $coDocRetCaduca): self
    {
        $this->coDocRetCaduca = $coDocRetCaduca;

        return $this;
    }

    public function getCoDocFaEstablecimiento(): ?string
    {
        return $this->coDocFaEstablecimiento;
    }

    public function setCoDocFaEstablecimiento(string $coDocFaEstablecimiento): self
    {
        $this->coDocFaEstablecimiento = $coDocFaEstablecimiento;

        return $this;
    }

    public function getCoDocFaPuntoemision(): ?string
    {
        return $this->coDocFaPuntoemision;
    }

    public function setCoDocFaPuntoemision(string $coDocFaPuntoemision): self
    {
        $this->coDocFaPuntoemision = $coDocFaPuntoemision;

        return $this;
    }

    public function getCoFechaChequepago(): ?\DateTimeInterface
    {
        return $this->coFechaChequepago;
    }

    public function setCoFechaChequepago(\DateTimeInterface $coFechaChequepago): self
    {
        $this->coFechaChequepago = $coFechaChequepago;

        return $this;
    }

    public function getCoAutomatico(): ?bool
    {
        return $this->coAutomatico;
    }

    public function setCoAutomatico(bool $coAutomatico): self
    {
        $this->coAutomatico = $coAutomatico;

        return $this;
    }

    public function getCoUsoComprobanteNiif(): ?bool
    {
        return $this->coUsoComprobanteNiif;
    }

    public function setCoUsoComprobanteNiif(bool $coUsoComprobanteNiif): self
    {
        $this->coUsoComprobanteNiif = $coUsoComprobanteNiif;

        return $this;
    }

    public function getCoDocRetFechaAutorizacion(): ?\DateTimeInterface
    {
        return $this->coDocRetFechaAutorizacion;
    }

    public function setCoDocRetFechaAutorizacion(\DateTimeInterface $coDocRetFechaAutorizacion): self
    {
        $this->coDocRetFechaAutorizacion = $coDocRetFechaAutorizacion;

        return $this;
    }

    public function getCoFechaRegistro(): ?\DateTimeInterface
    {
        return $this->coFechaRegistro;
    }

    public function setCoFechaRegistro(\DateTimeInterface $coFechaRegistro): self
    {
        $this->coFechaRegistro = $coFechaRegistro;

        return $this;
    }


}

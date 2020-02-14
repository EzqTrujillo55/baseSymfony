<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcCompraParametro
 *
 * @ORM\Table(name="gc_compra_parametro")
 * @ORM\Entity
 */
class GcCompraParametro
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
     * @ORM\Column(name="cp_imprime_factura", type="string", length=1, nullable=false, options={"default"="'S'","fixed"=true})
     */
    private $cpImprimeFactura = '\'S\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_modifica_cuotas", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cpModificaCuotas = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_cancela_factura", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cpCancelaFactura = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_path_reporte_compra", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $cpPathReporteCompra = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_path_reporte_o_compra", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $cpPathReporteOCompra = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_path_reporte_liquidacion_compra", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $cpPathReporteLiquidacionCompra = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_path_reporte_remision", type="string", length=255, nullable=false, options={"default"="'*'"})
     */
    private $cpPathReporteRemision = '\'*\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_imprime_comprobante", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cpImprimeComprobante = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_imprime_comprobante_retencion", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cpImprimeComprobanteRetencion = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_at_sc_id_sustento_reembolso", type="string", length=10, nullable=false, options={"default"="''"})
     */
    private $cpAtScIdSustentoReembolso = '\'\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_solicitar_datos_adicionales", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cpSolicitarDatosAdicionales = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_solicitar_prov_contacto", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cpSolicitarProvContacto = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_solicitar_prov_correo", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cpSolicitarProvCorreo = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_solicitar_prov_razonsocial", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cpSolicitarProvRazonsocial = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_solicitar_prov_sitioweb", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cpSolicitarProvSitioweb = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_solicitar_ingreso_fecha", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cpSolicitarIngresoFecha = '\'N\'';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_calcular_secuencial", type="string", length=1, nullable=false, options={"default"="'N'","fixed"=true})
     */
    private $cpCalcularSecuencial = '\'N\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cp_prov_default_pa_id", type="bigint", nullable=false)
     */
    private $cpProvDefaultPaId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cp_prov_default_ci_id", type="bigint", nullable=false)
     */
    private $cpProvDefaultCiId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cp_prov_default_provincia", type="string", length=100, nullable=false, options={"default"="'*'"})
     */
    private $cpProvDefaultProvincia = '\'*\'';

    /**
     * @var int
     *
     * @ORM\Column(name="cp_prov_default_fp_id", type="bigint", nullable=false)
     */
    private $cpProvDefaultFpId = '0';

    public function getEmId(): ?string
    {
        return $this->emId;
    }

    public function getCpImprimeFactura(): ?string
    {
        return $this->cpImprimeFactura;
    }

    public function setCpImprimeFactura(string $cpImprimeFactura): self
    {
        $this->cpImprimeFactura = $cpImprimeFactura;

        return $this;
    }

    public function getCpModificaCuotas(): ?string
    {
        return $this->cpModificaCuotas;
    }

    public function setCpModificaCuotas(string $cpModificaCuotas): self
    {
        $this->cpModificaCuotas = $cpModificaCuotas;

        return $this;
    }

    public function getCpCancelaFactura(): ?string
    {
        return $this->cpCancelaFactura;
    }

    public function setCpCancelaFactura(string $cpCancelaFactura): self
    {
        $this->cpCancelaFactura = $cpCancelaFactura;

        return $this;
    }

    public function getCpPathReporteCompra(): ?string
    {
        return $this->cpPathReporteCompra;
    }

    public function setCpPathReporteCompra(string $cpPathReporteCompra): self
    {
        $this->cpPathReporteCompra = $cpPathReporteCompra;

        return $this;
    }

    public function getCpPathReporteOCompra(): ?string
    {
        return $this->cpPathReporteOCompra;
    }

    public function setCpPathReporteOCompra(string $cpPathReporteOCompra): self
    {
        $this->cpPathReporteOCompra = $cpPathReporteOCompra;

        return $this;
    }

    public function getCpPathReporteLiquidacionCompra(): ?string
    {
        return $this->cpPathReporteLiquidacionCompra;
    }

    public function setCpPathReporteLiquidacionCompra(string $cpPathReporteLiquidacionCompra): self
    {
        $this->cpPathReporteLiquidacionCompra = $cpPathReporteLiquidacionCompra;

        return $this;
    }

    public function getCpPathReporteRemision(): ?string
    {
        return $this->cpPathReporteRemision;
    }

    public function setCpPathReporteRemision(string $cpPathReporteRemision): self
    {
        $this->cpPathReporteRemision = $cpPathReporteRemision;

        return $this;
    }

    public function getCpImprimeComprobante(): ?string
    {
        return $this->cpImprimeComprobante;
    }

    public function setCpImprimeComprobante(string $cpImprimeComprobante): self
    {
        $this->cpImprimeComprobante = $cpImprimeComprobante;

        return $this;
    }

    public function getCpImprimeComprobanteRetencion(): ?string
    {
        return $this->cpImprimeComprobanteRetencion;
    }

    public function setCpImprimeComprobanteRetencion(string $cpImprimeComprobanteRetencion): self
    {
        $this->cpImprimeComprobanteRetencion = $cpImprimeComprobanteRetencion;

        return $this;
    }

    public function getCpAtScIdSustentoReembolso(): ?string
    {
        return $this->cpAtScIdSustentoReembolso;
    }

    public function setCpAtScIdSustentoReembolso(string $cpAtScIdSustentoReembolso): self
    {
        $this->cpAtScIdSustentoReembolso = $cpAtScIdSustentoReembolso;

        return $this;
    }

    public function getCpSolicitarDatosAdicionales(): ?string
    {
        return $this->cpSolicitarDatosAdicionales;
    }

    public function setCpSolicitarDatosAdicionales(string $cpSolicitarDatosAdicionales): self
    {
        $this->cpSolicitarDatosAdicionales = $cpSolicitarDatosAdicionales;

        return $this;
    }

    public function getCpSolicitarProvContacto(): ?string
    {
        return $this->cpSolicitarProvContacto;
    }

    public function setCpSolicitarProvContacto(string $cpSolicitarProvContacto): self
    {
        $this->cpSolicitarProvContacto = $cpSolicitarProvContacto;

        return $this;
    }

    public function getCpSolicitarProvCorreo(): ?string
    {
        return $this->cpSolicitarProvCorreo;
    }

    public function setCpSolicitarProvCorreo(string $cpSolicitarProvCorreo): self
    {
        $this->cpSolicitarProvCorreo = $cpSolicitarProvCorreo;

        return $this;
    }

    public function getCpSolicitarProvRazonsocial(): ?string
    {
        return $this->cpSolicitarProvRazonsocial;
    }

    public function setCpSolicitarProvRazonsocial(string $cpSolicitarProvRazonsocial): self
    {
        $this->cpSolicitarProvRazonsocial = $cpSolicitarProvRazonsocial;

        return $this;
    }

    public function getCpSolicitarProvSitioweb(): ?string
    {
        return $this->cpSolicitarProvSitioweb;
    }

    public function setCpSolicitarProvSitioweb(string $cpSolicitarProvSitioweb): self
    {
        $this->cpSolicitarProvSitioweb = $cpSolicitarProvSitioweb;

        return $this;
    }

    public function getCpSolicitarIngresoFecha(): ?string
    {
        return $this->cpSolicitarIngresoFecha;
    }

    public function setCpSolicitarIngresoFecha(string $cpSolicitarIngresoFecha): self
    {
        $this->cpSolicitarIngresoFecha = $cpSolicitarIngresoFecha;

        return $this;
    }

    public function getCpCalcularSecuencial(): ?string
    {
        return $this->cpCalcularSecuencial;
    }

    public function setCpCalcularSecuencial(string $cpCalcularSecuencial): self
    {
        $this->cpCalcularSecuencial = $cpCalcularSecuencial;

        return $this;
    }

    public function getCpProvDefaultPaId(): ?string
    {
        return $this->cpProvDefaultPaId;
    }

    public function setCpProvDefaultPaId(string $cpProvDefaultPaId): self
    {
        $this->cpProvDefaultPaId = $cpProvDefaultPaId;

        return $this;
    }

    public function getCpProvDefaultCiId(): ?string
    {
        return $this->cpProvDefaultCiId;
    }

    public function setCpProvDefaultCiId(string $cpProvDefaultCiId): self
    {
        $this->cpProvDefaultCiId = $cpProvDefaultCiId;

        return $this;
    }

    public function getCpProvDefaultProvincia(): ?string
    {
        return $this->cpProvDefaultProvincia;
    }

    public function setCpProvDefaultProvincia(string $cpProvDefaultProvincia): self
    {
        $this->cpProvDefaultProvincia = $cpProvDefaultProvincia;

        return $this;
    }

    public function getCpProvDefaultFpId(): ?string
    {
        return $this->cpProvDefaultFpId;
    }

    public function setCpProvDefaultFpId(string $cpProvDefaultFpId): self
    {
        $this->cpProvDefaultFpId = $cpProvDefaultFpId;

        return $this;
    }


}

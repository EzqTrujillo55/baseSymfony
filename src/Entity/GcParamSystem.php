<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GcParamSystem
 *
 * @ORM\Table(name="gc_param_system")
 * @ORM\Entity
 */
class GcParamSystem
{
    /**
     * @var int
     *
     * @ORM\Column(name="ps_id", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $psId = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ps_empresa", type="blob", length=65535, nullable=false)
     */
    private $psEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_usuario", type="blob", length=65535, nullable=false)
     */
    private $psUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_cuenta_sri", type="blob", length=65535, nullable=false)
     */
    private $psCuentaSri;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_impresora", type="blob", length=65535, nullable=false)
     */
    private $psImpresora;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_perfil_usuario", type="blob", length=65535, nullable=false)
     */
    private $psPerfilUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_barras_manejo", type="blob", length=65535, nullable=false)
     */
    private $psBarrasManejo;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_no_es_gratis", type="blob", length=65535, nullable=false)
     */
    private $psNoEsGratis;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_multiple_sistema", type="blob", length=65535, nullable=false)
     */
    private $psMultipleSistema;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_contribuyente_especial", type="blob", length=65535, nullable=false)
     */
    private $psContribuyenteEspecial;

    /**
     * @var int
     *
     * @ORM\Column(name="em_id", type="bigint", nullable=false)
     */
    private $emId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ps_multiple_bodega", type="blob", length=65535, nullable=false)
     */
    private $psMultipleBodega;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_sugarcrm", type="blob", length=65535, nullable=false)
     */
    private $psSugarcrm;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_impuesto_especial", type="blob", length=65535, nullable=false)
     */
    private $psImpuestoEspecial;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_parametro_pantalla_tamanio", type="blob", length=65535, nullable=false)
     */
    private $psParametroPantallaTamanio;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_consulta_detallada_inventario", type="blob", length=65535, nullable=false)
     */
    private $psConsultaDetalladaInventario;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_anexo_transaccional", type="blob", length=65535, nullable=false)
     */
    private $psAnexoTransaccional;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_parametro_conversion_unidad", type="blob", length=65535, nullable=false)
     */
    private $psParametroConversionUnidad;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_modulo_importaciones", type="blob", length=65535, nullable=false)
     */
    private $psModuloImportaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_modulo_centrocosto", type="blob", length=65535, nullable=false)
     */
    private $psModuloCentrocosto;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_stored_procedure", type="blob", length=65535, nullable=false)
     */
    private $psStoredProcedure;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_multiple_descuento", type="blob", length=65535, nullable=false)
     */
    private $psMultipleDescuento;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_modulo_rrhh", type="blob", length=65535, nullable=false)
     */
    private $psModuloRrhh;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_manejo_cupos", type="blob", length=65535, nullable=false)
     */
    private $psManejoCupos;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_manejo_cuentas_acceso", type="blob", length=65535, nullable=false)
     */
    private $psManejoCuentasAcceso;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_modulo_niifs", type="blob", length=65535, nullable=false)
     */
    private $psModuloNiifs;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_seguimiento_cliente", type="blob", length=65535, nullable=false)
     */
    private $psSeguimientoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_emite_notasventa", type="blob", length=65535, nullable=false)
     */
    private $psEmiteNotasventa;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_indices_financieros", type="blob", length=65535, nullable=false)
     */
    private $psIndicesFinancieros;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_presupuestos", type="blob", length=65535, nullable=false)
     */
    private $psPresupuestos;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_procesos_automaticos", type="blob", length=65535, nullable=false)
     */
    private $psProcesosAutomaticos;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_cliente_especifico", type="blob", length=65535, nullable=false)
     */
    private $psClienteEspecifico;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_cierre_mensual", type="blob", length=65535, nullable=false)
     */
    private $psCierreMensual;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_manejo_comisiones", type="blob", length=65535, nullable=false)
     */
    private $psManejoComisiones;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_digitalizacion", type="blob", length=65535, nullable=false)
     */
    private $psDigitalizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_manejo_kits", type="blob", length=65535, nullable=false)
     */
    private $psManejoKits;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_imagen_servidor", type="blob", length=65535, nullable=false)
     */
    private $psImagenServidor;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_produccion", type="blob", length=65535, nullable=false)
     */
    private $psProduccion;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_servicios", type="blob", length=65535, nullable=false)
     */
    private $psServicios;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_manejo_departamentos", type="blob", length=65535, nullable=false)
     */
    private $psManejoDepartamentos;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_manejo_puntoventa", type="blob", length=65535, nullable=false)
     */
    private $psManejoPuntoventa;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_tarjetacredito", type="blob", length=65535, nullable=false)
     */
    private $psTarjetacredito;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_exportacion", type="blob", length=65535, nullable=false)
     */
    private $psExportacion;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_centrocosto_actividades", type="blob", length=65535, nullable=false)
     */
    private $psCentrocostoActividades;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_documentos_electronicos", type="blob", length=65535, nullable=false)
     */
    private $psDocumentosElectronicos;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_migracion_otros_sistemas", type="blob", length=65535, nullable=false)
     */
    private $psMigracionOtrosSistemas;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_modulo_externo_documento_electronico", type="blob", length=65535, nullable=false)
     */
    private $psModuloExternoDocumentoElectronico;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_inventario_pedido_interno", type="blob", length=65535, nullable=false)
     */
    private $psInventarioPedidoInterno;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_lotes", type="blob", length=65535, nullable=false)
     */
    private $psLotes;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_manejo_vehiculos", type="blob", length=65535, nullable=false)
     */
    private $psManejoVehiculos;

    /**
     * @var string
     *
     * @ORM\Column(name="ps_modulo_externo_sri_to_wiam", type="blob", length=65535, nullable=false)
     */
    private $psModuloExternoSriToWiam;

    public function getPsId(): ?int
    {
        return $this->psId;
    }

    public function getPsEmpresa()
    {
        return $this->psEmpresa;
    }

    public function setPsEmpresa($psEmpresa): self
    {
        $this->psEmpresa = $psEmpresa;

        return $this;
    }

    public function getPsUsuario()
    {
        return $this->psUsuario;
    }

    public function setPsUsuario($psUsuario): self
    {
        $this->psUsuario = $psUsuario;

        return $this;
    }

    public function getPsCuentaSri()
    {
        return $this->psCuentaSri;
    }

    public function setPsCuentaSri($psCuentaSri): self
    {
        $this->psCuentaSri = $psCuentaSri;

        return $this;
    }

    public function getPsImpresora()
    {
        return $this->psImpresora;
    }

    public function setPsImpresora($psImpresora): self
    {
        $this->psImpresora = $psImpresora;

        return $this;
    }

    public function getPsPerfilUsuario()
    {
        return $this->psPerfilUsuario;
    }

    public function setPsPerfilUsuario($psPerfilUsuario): self
    {
        $this->psPerfilUsuario = $psPerfilUsuario;

        return $this;
    }

    public function getPsBarrasManejo()
    {
        return $this->psBarrasManejo;
    }

    public function setPsBarrasManejo($psBarrasManejo): self
    {
        $this->psBarrasManejo = $psBarrasManejo;

        return $this;
    }

    public function getPsNoEsGratis()
    {
        return $this->psNoEsGratis;
    }

    public function setPsNoEsGratis($psNoEsGratis): self
    {
        $this->psNoEsGratis = $psNoEsGratis;

        return $this;
    }

    public function getPsMultipleSistema()
    {
        return $this->psMultipleSistema;
    }

    public function setPsMultipleSistema($psMultipleSistema): self
    {
        $this->psMultipleSistema = $psMultipleSistema;

        return $this;
    }

    public function getPsContribuyenteEspecial()
    {
        return $this->psContribuyenteEspecial;
    }

    public function setPsContribuyenteEspecial($psContribuyenteEspecial): self
    {
        $this->psContribuyenteEspecial = $psContribuyenteEspecial;

        return $this;
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

    public function getPsMultipleBodega()
    {
        return $this->psMultipleBodega;
    }

    public function setPsMultipleBodega($psMultipleBodega): self
    {
        $this->psMultipleBodega = $psMultipleBodega;

        return $this;
    }

    public function getPsSugarcrm()
    {
        return $this->psSugarcrm;
    }

    public function setPsSugarcrm($psSugarcrm): self
    {
        $this->psSugarcrm = $psSugarcrm;

        return $this;
    }

    public function getPsImpuestoEspecial()
    {
        return $this->psImpuestoEspecial;
    }

    public function setPsImpuestoEspecial($psImpuestoEspecial): self
    {
        $this->psImpuestoEspecial = $psImpuestoEspecial;

        return $this;
    }

    public function getPsParametroPantallaTamanio()
    {
        return $this->psParametroPantallaTamanio;
    }

    public function setPsParametroPantallaTamanio($psParametroPantallaTamanio): self
    {
        $this->psParametroPantallaTamanio = $psParametroPantallaTamanio;

        return $this;
    }

    public function getPsConsultaDetalladaInventario()
    {
        return $this->psConsultaDetalladaInventario;
    }

    public function setPsConsultaDetalladaInventario($psConsultaDetalladaInventario): self
    {
        $this->psConsultaDetalladaInventario = $psConsultaDetalladaInventario;

        return $this;
    }

    public function getPsAnexoTransaccional()
    {
        return $this->psAnexoTransaccional;
    }

    public function setPsAnexoTransaccional($psAnexoTransaccional): self
    {
        $this->psAnexoTransaccional = $psAnexoTransaccional;

        return $this;
    }

    public function getPsParametroConversionUnidad()
    {
        return $this->psParametroConversionUnidad;
    }

    public function setPsParametroConversionUnidad($psParametroConversionUnidad): self
    {
        $this->psParametroConversionUnidad = $psParametroConversionUnidad;

        return $this;
    }

    public function getPsModuloImportaciones()
    {
        return $this->psModuloImportaciones;
    }

    public function setPsModuloImportaciones($psModuloImportaciones): self
    {
        $this->psModuloImportaciones = $psModuloImportaciones;

        return $this;
    }

    public function getPsModuloCentrocosto()
    {
        return $this->psModuloCentrocosto;
    }

    public function setPsModuloCentrocosto($psModuloCentrocosto): self
    {
        $this->psModuloCentrocosto = $psModuloCentrocosto;

        return $this;
    }

    public function getPsStoredProcedure()
    {
        return $this->psStoredProcedure;
    }

    public function setPsStoredProcedure($psStoredProcedure): self
    {
        $this->psStoredProcedure = $psStoredProcedure;

        return $this;
    }

    public function getPsMultipleDescuento()
    {
        return $this->psMultipleDescuento;
    }

    public function setPsMultipleDescuento($psMultipleDescuento): self
    {
        $this->psMultipleDescuento = $psMultipleDescuento;

        return $this;
    }

    public function getPsModuloRrhh()
    {
        return $this->psModuloRrhh;
    }

    public function setPsModuloRrhh($psModuloRrhh): self
    {
        $this->psModuloRrhh = $psModuloRrhh;

        return $this;
    }

    public function getPsManejoCupos()
    {
        return $this->psManejoCupos;
    }

    public function setPsManejoCupos($psManejoCupos): self
    {
        $this->psManejoCupos = $psManejoCupos;

        return $this;
    }

    public function getPsManejoCuentasAcceso()
    {
        return $this->psManejoCuentasAcceso;
    }

    public function setPsManejoCuentasAcceso($psManejoCuentasAcceso): self
    {
        $this->psManejoCuentasAcceso = $psManejoCuentasAcceso;

        return $this;
    }

    public function getPsModuloNiifs()
    {
        return $this->psModuloNiifs;
    }

    public function setPsModuloNiifs($psModuloNiifs): self
    {
        $this->psModuloNiifs = $psModuloNiifs;

        return $this;
    }

    public function getPsSeguimientoCliente()
    {
        return $this->psSeguimientoCliente;
    }

    public function setPsSeguimientoCliente($psSeguimientoCliente): self
    {
        $this->psSeguimientoCliente = $psSeguimientoCliente;

        return $this;
    }

    public function getPsEmiteNotasventa()
    {
        return $this->psEmiteNotasventa;
    }

    public function setPsEmiteNotasventa($psEmiteNotasventa): self
    {
        $this->psEmiteNotasventa = $psEmiteNotasventa;

        return $this;
    }

    public function getPsIndicesFinancieros()
    {
        return $this->psIndicesFinancieros;
    }

    public function setPsIndicesFinancieros($psIndicesFinancieros): self
    {
        $this->psIndicesFinancieros = $psIndicesFinancieros;

        return $this;
    }

    public function getPsPresupuestos()
    {
        return $this->psPresupuestos;
    }

    public function setPsPresupuestos($psPresupuestos): self
    {
        $this->psPresupuestos = $psPresupuestos;

        return $this;
    }

    public function getPsProcesosAutomaticos()
    {
        return $this->psProcesosAutomaticos;
    }

    public function setPsProcesosAutomaticos($psProcesosAutomaticos): self
    {
        $this->psProcesosAutomaticos = $psProcesosAutomaticos;

        return $this;
    }

    public function getPsClienteEspecifico()
    {
        return $this->psClienteEspecifico;
    }

    public function setPsClienteEspecifico($psClienteEspecifico): self
    {
        $this->psClienteEspecifico = $psClienteEspecifico;

        return $this;
    }

    public function getPsCierreMensual()
    {
        return $this->psCierreMensual;
    }

    public function setPsCierreMensual($psCierreMensual): self
    {
        $this->psCierreMensual = $psCierreMensual;

        return $this;
    }

    public function getPsManejoComisiones()
    {
        return $this->psManejoComisiones;
    }

    public function setPsManejoComisiones($psManejoComisiones): self
    {
        $this->psManejoComisiones = $psManejoComisiones;

        return $this;
    }

    public function getPsDigitalizacion()
    {
        return $this->psDigitalizacion;
    }

    public function setPsDigitalizacion($psDigitalizacion): self
    {
        $this->psDigitalizacion = $psDigitalizacion;

        return $this;
    }

    public function getPsManejoKits()
    {
        return $this->psManejoKits;
    }

    public function setPsManejoKits($psManejoKits): self
    {
        $this->psManejoKits = $psManejoKits;

        return $this;
    }

    public function getPsImagenServidor()
    {
        return $this->psImagenServidor;
    }

    public function setPsImagenServidor($psImagenServidor): self
    {
        $this->psImagenServidor = $psImagenServidor;

        return $this;
    }

    public function getPsProduccion()
    {
        return $this->psProduccion;
    }

    public function setPsProduccion($psProduccion): self
    {
        $this->psProduccion = $psProduccion;

        return $this;
    }

    public function getPsServicios()
    {
        return $this->psServicios;
    }

    public function setPsServicios($psServicios): self
    {
        $this->psServicios = $psServicios;

        return $this;
    }

    public function getPsManejoDepartamentos()
    {
        return $this->psManejoDepartamentos;
    }

    public function setPsManejoDepartamentos($psManejoDepartamentos): self
    {
        $this->psManejoDepartamentos = $psManejoDepartamentos;

        return $this;
    }

    public function getPsManejoPuntoventa()
    {
        return $this->psManejoPuntoventa;
    }

    public function setPsManejoPuntoventa($psManejoPuntoventa): self
    {
        $this->psManejoPuntoventa = $psManejoPuntoventa;

        return $this;
    }

    public function getPsTarjetacredito()
    {
        return $this->psTarjetacredito;
    }

    public function setPsTarjetacredito($psTarjetacredito): self
    {
        $this->psTarjetacredito = $psTarjetacredito;

        return $this;
    }

    public function getPsExportacion()
    {
        return $this->psExportacion;
    }

    public function setPsExportacion($psExportacion): self
    {
        $this->psExportacion = $psExportacion;

        return $this;
    }

    public function getPsCentrocostoActividades()
    {
        return $this->psCentrocostoActividades;
    }

    public function setPsCentrocostoActividades($psCentrocostoActividades): self
    {
        $this->psCentrocostoActividades = $psCentrocostoActividades;

        return $this;
    }

    public function getPsDocumentosElectronicos()
    {
        return $this->psDocumentosElectronicos;
    }

    public function setPsDocumentosElectronicos($psDocumentosElectronicos): self
    {
        $this->psDocumentosElectronicos = $psDocumentosElectronicos;

        return $this;
    }

    public function getPsMigracionOtrosSistemas()
    {
        return $this->psMigracionOtrosSistemas;
    }

    public function setPsMigracionOtrosSistemas($psMigracionOtrosSistemas): self
    {
        $this->psMigracionOtrosSistemas = $psMigracionOtrosSistemas;

        return $this;
    }

    public function getPsModuloExternoDocumentoElectronico()
    {
        return $this->psModuloExternoDocumentoElectronico;
    }

    public function setPsModuloExternoDocumentoElectronico($psModuloExternoDocumentoElectronico): self
    {
        $this->psModuloExternoDocumentoElectronico = $psModuloExternoDocumentoElectronico;

        return $this;
    }

    public function getPsInventarioPedidoInterno()
    {
        return $this->psInventarioPedidoInterno;
    }

    public function setPsInventarioPedidoInterno($psInventarioPedidoInterno): self
    {
        $this->psInventarioPedidoInterno = $psInventarioPedidoInterno;

        return $this;
    }

    public function getPsLotes()
    {
        return $this->psLotes;
    }

    public function setPsLotes($psLotes): self
    {
        $this->psLotes = $psLotes;

        return $this;
    }

    public function getPsManejoVehiculos()
    {
        return $this->psManejoVehiculos;
    }

    public function setPsManejoVehiculos($psManejoVehiculos): self
    {
        $this->psManejoVehiculos = $psManejoVehiculos;

        return $this;
    }

    public function getPsModuloExternoSriToWiam()
    {
        return $this->psModuloExternoSriToWiam;
    }

    public function setPsModuloExternoSriToWiam($psModuloExternoSriToWiam): self
    {
        $this->psModuloExternoSriToWiam = $psModuloExternoSriToWiam;

        return $this;
    }


}

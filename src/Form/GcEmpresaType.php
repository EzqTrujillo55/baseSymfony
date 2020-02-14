<?php

namespace App\Form;

use App\Entity\GcEmpresa;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GcEmpresaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('emCodigo')
            ->add('emNombre')
            ->add('emDireccion')
            ->add('emTelefono')
            ->add('emFax')
            ->add('emEmail')
            ->add('emCiudad')
            ->add('emRuc')
            ->add('emPeriodo')
            ->add('emObservacion')
            ->add('emSitioWeb')
            ->add('emImagen')
            ->add('emPatronal')
        //    ->add('emEstado')
            ->add('emTipo')
        //    ->add('emIva')
            ->add('emInventario')
            ->add('emSistemaInventario')
            ->add('emContribuyenteEspecial')
         //   ->add('emComprobanteAutomatico')
            ->add('emTelefonoResponsable')
            ->add('emFaxResponsable')
            ->add('emEmailResponsable')
            ->add('emAuditarMensaje')
            ->add('emNumeroDecimales')
            ->add('emIce')
            ->add('emVerificaContinuidad')
            ->add('emRazonSocial')
            ->add('emResponsableTdId')
            ->add('emResponsableDocumento')
            ->add('emContadorRuc')
       //     ->add('emMoneda')
            ->add('emResponsableNombre')
            ->add('emContadorNombre')
            ->add('emContadorCpa')
            ->add('emComprobanteAgrupado')
            ->add('emResponsableTitulo')
            ->add('emLlevaContabilidad')
            ->add('emManejaCentroCosto')
            ->add('emBarrasManejo')
            ->add('paId')
            ->add('emAplicaNiif')
           // ->add('emFechaContrato')
           // ->add('emFechaUltimoPago')
           // ->add('emRegistrosContratados')
            ->add('emContactoNombre')
            ->add('emContactoTelefono')
            ->add('emDepartamentosManejo')
            ->add('emMultiplesDescuentos')
            ->add('emAplicaNiifMetodoDirecto')
            ->add('emAplicaContratoPago')
            ->add('emResolucionContribuyenteEspecial')
            ->add('emDocumentosElectronicos')
            ->add('emDocsElecAmbiente')
            ->add('emDocsElecTipoEmision')
         //   ->add('emServicioPorcentaje')
            ->add('emDocsElecFuncionamiento')
            ->add('emDocsElecDatoAdicionalCodigo')
          //  ->add('emLimiteConsultas')
         //   ->add('emParametroLimiteVentaConsumidorFinal')
            ->add('emServicioRentaActivo')
         //   ->add('emDocsElecFechaCaduca')
            ->add('emDocsEmailCopia')
          //  ->add('emCodigoEntidadControl1')
            ->add('emInventarioLotes')
            ->add('emDocsElecLecturaMasiva')
           // ->add('pais')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GcEmpresa::class,
        ]);
    }
}

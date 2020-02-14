<?php

namespace App\Form;

use App\Entity\GcUsuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GcUsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('emId')
           ->add('usCodigo')
           ->add('usUsuario')
           ->add('usContrasena')
            ->add('usEstado')
            ->add('usObservacion')
            ->add('usSaldo')
            ->add('usMes')
            ->add('usNivel')
            ->add('usAgrupado')
            ->add('usFechaInicial')
            ->add('usFechaFinal')
            ->add('usAdministrar')
            ->add('peId')
            ->add('boId')
            ->add('usSaldoBanco')
            ->add('usSaldoInicial')
            ->add('usConectado')
            ->add('usTransacciona')
            ->add('usCaducarIntento')
            ->add('pvId')
            ->add('usConsultaOtrosDatosPv')
            ->add('usCierreCajaPv')
            ->add('usPassword')
            ->add('usDocumentosElectronicosManejo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GcUsuario::class,
        ]);
    }
}

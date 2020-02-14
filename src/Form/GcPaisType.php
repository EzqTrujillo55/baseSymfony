<?php

namespace App\Form;

use App\Entity\GcPais;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GcPaisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('paNombre')
            ->add('paNacionalidad')
            ->add('paObservacion')
            ->add('paEstado')
            ->add('paDiscado')
            ->add('emId')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GcPais::class,
        ]);
    }
}

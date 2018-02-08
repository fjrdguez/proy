<?php

namespace EmpresaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;

class empresaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre', TextType::class)
        ->add('ciudad', TextType::class, array('label'=>"Domicilio Social", 
                                                'label_attr'=>array('class'=>'etiqueta'), 
                                                'attr'=>array('class'=>"etiquetaElementos")))
        ->add('numEmpleados', IntegerType::class)
        ->add('Guardar', SubmitType::class)
        ->add('Borrar', ResetType::class)
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EmpresaBundle\Entity\empresa'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'empresabundle_empresa';
    }


}

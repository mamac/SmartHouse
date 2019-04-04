<?php

namespace Lljm\HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Lljm\HomeBundle\Entity\ZoneRepository;

class ZoneType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('zonename')
            ->add('heatingenabled')
            ->add('ventilationenabled')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lljm\HomeBundle\Entity\Zone'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lljm_homebundle_zone';
    }
}


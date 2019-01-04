<?php

namespace Lljm\HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Lljm\HomeBundle\Entity\HouseRepository;

class HouseType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address1')
            ->add('address2')
            ->add('postcode')
            ->add('city')
            ->add('country')
            ->add('longitude')
            ->add('latitude')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lljm\HomeBundle\Entity\House'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lljm_homebundle_house';
    }
}


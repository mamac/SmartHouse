<?php

namespace Lljm\HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Lljm\HomeBundle\Entity\ZoneRepository;
use Lljm\HomeBundle\Entity\HeatingmodeRepository;

class ZoneheatingType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tempeco')
            ->add('tempcomfort')
            ->add('heatingmode', 'entity', array(
              'class'    => 'LljmHomeBundle:Heatingmode',
              'query_builder' => function(HeatingmodeRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.modedesc', 'ASC');
              },
              'property' => 'modedesc',
              'multiple' => false,
              'expanded' => false
                ))
            ->add('heattimeslot1')
            ->add('heattimeslot2')
            ->add('heattimeslot3')
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

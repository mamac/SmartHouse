<?php

namespace Lljm\HomeBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Lljm\HomeBundle\Entity\MeterRepository;
use Lljm\HomeBundle\Entity\ResourceRepository;
use Lljm\HomeBundle\Entity\UnitRepository;

class MeterType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('metername')
            ->add('resource', EntityType::class, array(
              'class'    => 'LljmHomeBundle:Resource',
              'query_builder' => function(ResourceRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.resourcename', 'ASC');
              },
              'choice_label' => 'resourcename',
              'multiple' => false,
              'expanded' => false
                ))
            ->add('unit', EntityType::class, array(
              'class'    => 'LljmHomeBundle:Unit',
              'query_builder' => function(UnitRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.unitname', 'ASC');
              },
              'choice_label' => 'unitname',
              'multiple' => false,
              'expanded' => false
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lljm\HomeBundle\Entity\Meter'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lljm_homebundle_meter';
    }
}

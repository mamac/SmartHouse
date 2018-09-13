<?php

namespace Lljm\HomeBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Lljm\HomeBundle\Entity\GaslogRepository;
use Lljm\HomeBundle\Entity\MeterRepository;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class GaslogType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('metervalue')
            ->add('consumption')
            ->add('meterid', EntityType::class, array(
              'class'    => 'LljmHomeBundle:Meter',
              'query_builder' => function(MeterRepository $er) {
                return $er
                    ->createQueryBuilder('u')
                    ->join('u.resource', 'r')
                    ->where('r.id = 3')
                    ->orderBy('u.metername', 'ASC');
              },
              'choice_label' => 'metername',
              'multiple' => false,
              'expanded' => false
                ))
            ->add('daterx', DateTimeType::class, array(
                        'widget' => 'choice',
                                        'format' => 'dd-MM-yyyy',
                                        'years' => range(Date('Y'), 2010),
                                        'label' => 'Received date',
                                        'data'  => date_create()
                        ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lljm\HomeBundle\Entity\Gaslog'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lljm_homebundle_gaslog';
    }
}

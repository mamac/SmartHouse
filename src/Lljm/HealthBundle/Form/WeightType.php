<?php

namespace Lljm\HealthBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Lljm\UserBundle\Entity\UserRepository;

class WeightType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('weightValue')
            ->add('user', 'entity', array(
              'class'    => 'LljmUserBundle:User',
              'query_builder' => function(UserRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.firstname', 'ASC');
              },
              'property' => 'firstname',
              'multiple' => false,
              'expanded' => false
                ))
            ->add('dateRead', 'date', array(
                                    'widget' => 'single_text',
                                    'input' => 'datetime',
                                    'format' => 'yyyy-MM-dd',
                                    'attr' => array('class' => 'datepicker'),
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lljm\HealthBundle\Entity\Weight'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lljm_healthbundle_weight';
    }
}

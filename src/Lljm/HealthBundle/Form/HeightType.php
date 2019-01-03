<?php

namespace Lljm\HealthBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lljm\UserBundle\Entity\UserRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class HeightType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('heightValue')
            ->add('user', EntityType::class, array(
              'class'    => 'LljmUserBundle:User',
              'query_builder' => function(UserRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.firstname', 'ASC');
              },
              'choice_label' => 'firstname',
              'multiple' => false,
              'expanded' => false
                ))
            ->add('dateRead',  DateType::class, array(
                'widget' => 'single_text',
                'attr' => array('class' => 'form-control datepicker')
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lljm\HealthBundle\Entity\Height'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lljm_healthbundle_height';
    }
}

<?php

namespace Lljm\TasksBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lljm\TasksBundle\Entity\TaskRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Lljm\UserBundle\Entity\UserRepository;

class TaskType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('taskdesc')
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
            ->add('dateStart',  DateType::class, array(
                'widget' => 'single_text',
                'attr' => array('class' => 'form-control datepicker')
                ))
            ->add('dateEnd',  DateType::class, array(
                'widget' => 'single_text',
                'attr' => array('class' => 'form-control datepicker')
                ))
            ->add('completed')
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lljm\TasksBundle\Entity\Task'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'lljm_tasksbundle_task';
    }


}

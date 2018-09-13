<?php

namespace Lljm\HomeBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Lljm\HomeBundle\Entity\NodeRepository;
use Lljm\HomeBundle\Entity\ZoneRepository;
use Lljm\HomeBundle\Entity\SubzoneRepository;
use Lljm\HomeBundle\Entity\NodetypeRepository;

class NodeType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nodeguid')
            ->add('nodezone', EntityType::class, array(
              'class'    => 'LljmHomeBundle:Zone',
              'query_builder' => function(ZoneRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.zonename', 'ASC');
              },
              'choice_label' => 'zonename',
              'multiple' => false,
              'expanded' => false
                ))
            ->add('nodesubzone', EntityType::class, array(
              'class'    => 'LljmHomeBundle:Subzone',
              'query_builder' => function(SubzoneRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.subzonename', 'ASC');
              },
              'choice_label' => 'subzonename',
              'multiple' => false,
              'expanded' => false
                ))
            ->add('nodetype', EntityType::class, array(
              'class'    => 'LljmHomeBundle:Nodetype',
              'query_builder' => function(NodetypeRepository $er) {
                return $er->createQueryBuilder('u')
                    ->orderBy('u.nodetype', 'ASC');
              },
              'choice_label' => 'nodetype',
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
            'data_class' => 'Lljm\HomeBundle\Entity\Node'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lljm_homebundle_node';
    }
}

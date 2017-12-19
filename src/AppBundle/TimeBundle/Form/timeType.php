<?php

namespace AppBundle\TimeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class timeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userId')
            ->add('vname')
            ->add('name')
            ->add('datum')
            ->add('kommen')
            ->add('gehen')
            ->add('pause')
            ->add('total')
            ->add('statusId')
            ->add('bemerkung')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\TimeBundle\Entity\time'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_timebundle_time';
    }
}

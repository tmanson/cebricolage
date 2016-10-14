<?php

namespace CE\PermanenceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PermanenceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('startDate', 'date', array(
                'widget' => 'single_text',
                'input' => 'datetime',
                'pattern'=>'dd-MM-yyyy'
            ))
            ->add('endDate', 'date', array(
                'widget' => 'single_text',
                'input' => 'datetime',
                'pattern'=>'dd-MM-yyyy'
            ))
            ->add('allDay')
            ->add('user')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CE\PermanenceBundle\Entity\Permanence'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ce_permanencebundle_permanence';
    }
}

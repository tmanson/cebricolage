<?php

namespace CE\ReservationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Date;

class ReservationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startDate', 'date', array(
                                        'widget' => 'single_text',
                                        'pattern'=>'d M Y',
                                        'attr' => array(
                                            'onchange' => "reloadDevice()",
                                            'id' => 'startDate'
                                        )
            ))
            ->add('endDate', 'date', array(
                                        'widget' => 'single_text',
                                        'pattern'=>'d M Y',
                                        'attr' => array(
                                            'onchange' => "reloadDevice()",
                                            'id' => 'endDate'
                                        )
            ))
            ->add('device')
            ->add('employee')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CE\ReservationBundle\Entity\Reservation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ce_reservationbundle_reservation';
    }
}

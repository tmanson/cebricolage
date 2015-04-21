<?php

namespace CE\ReservationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Date;

class ListReservationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('reservations', 'collection', array('type' => new ReservationType(),
            'label'         => false,
            'allow_add'     => true,
            'by_reference'  => false,
        ))
    ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ce_reservationbundle_list_reservation';
    }

}

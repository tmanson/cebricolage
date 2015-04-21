<?php

namespace CE\ReservationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToArrayTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToRfc3339Transformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToStringTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToTimestampTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Tests\Extension\Core\DataTransformer\BaseDateTimeTransformerTest;
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
            ->add('device')
            ->add('startDate', 'datetime', array(
                                            'widget' => 'single_text',
                                            'read_only'=> true,
                                            'format' => 'yyyy-MM-dd',
                                            'attr' => array(
                                                'class' => 'datepicker startDate',
                                                'id' => 'startDate'
                                            )
                                        ))
            ->add('endDate', 'datetime', array(
                                            'widget' => 'single_text',
                                            'read_only'=> true,
                                            'format' => 'yyyy-MM-dd',
                                            'attr' => array(
                                                'class' => 'datepicker endDate',
                                                'id' => 'endDate'
                                            )
            ))
            ->add('user')
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

<?php

namespace CE\ReservationBundle\Form;

use CE\DeviceBundle\Entity\DeviceRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReservationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('device', 'entity',  array(
                'required' => true,
                'empty_value' => 'Choisissez un matériel',
                'empty_data' => null,
                'class' => 'CE\DeviceBundle\Entity\Device',
                'query_builder' => function(DeviceRepository $er) {
                    return $er->findByDisponible(true);
                }))
            ->add('startDate', 'datetime', array(
                                            'required' => true,
                                            'widget' => 'single_text',
                                            'format' => 'dd-MM-yyyy',
                                            'attr' => array(
                                                'class' => 'datepicker startDate'
                                            )
                                        ))
            ->add('endDate', 'datetime', array(
                                            'required' => true,
                                            'widget' => 'single_text',
                                            'format' => 'dd-MM-yyyy',
                                            'attr' => array(
                                                'class' => 'datepicker endDate'
                                            )
            ))
            ->add('user', 'entity',  array(
                'required' => true,
                'empty_value' => 'Choisissez un utilisateur',
                'empty_data' => null,
                'class' => 'CEUserBundle:User'))
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

<?php

namespace CE\UserBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('identifiant')
            ->add('firstname')
            ->add('phoneNumber')
            ->add('groups', 'entity', array(
                'required' => true,
                'class' => 'CEUserBundle:Group',
                'query_builder' => function(EntityRepository $e) {
                    return $e->createQueryBuilder('c')
                        ->orderBy('c.name', 'ASC');
                }))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CE\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ce_user_registration';
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }
}

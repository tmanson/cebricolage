<?php

namespace CE\UserBundle\Form;

use CE\UserBundle\Entity\BannedPeriod;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('identifiant')
            ->add('firstname')
            ->add('email')
            ->add('phoneNumber')
            ->add(
                'groups', 'entity', array(
                    'required' => true,
                    'class' => 'CEUserBundle:Group',
                    'query_builder' => function (EntityRepository $e) {
                        return $e->createQueryBuilder('c')
                            ->orderBy('c.name', 'ASC');
                    }
                )
            )
            ->add('enabled')
            ->add('bannedPeriods', 'collection', array(
                'required' => false,
                'type' => new BannedPeriodType(),
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'label' => false
            ))
            ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'CE\UserBundle\Entity\User'
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ce_userbundle_user';
    }
}

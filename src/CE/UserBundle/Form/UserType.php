<?php

namespace CE\UserBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
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
            ->add('username', 'Symfony\Component\Form\Extension\Core\Type\TextType', array('disabled' => true))
            ->add('identifiant')
            ->add('name')
            ->add('firstname')
            ->add('email')
            ->add('phoneNumber')
            ->add(
                'groups', 'Symfony\Bridge\Doctrine\Form\Type\EntityType', array(
                    'required' => true,
                    'class' => 'CEUserBundle:Group',
                    'query_builder' => function (EntityRepository $e) {
                        return $e->createQueryBuilder('c')
                            ->orderBy('c.name', 'ASC');
                    }
                )
            )
            ->add('enabled')
            ->add('bannedPeriods', 'Symfony\Component\Form\Extension\Core\Type\CollectionType', array(
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

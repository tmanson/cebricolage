<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CE\UserBundle\Form\Type;

use CE\UserBundle\Form\BannedPeriodType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProfileFormType extends \FOS\UserBundle\Form\Type\ProfileFormType
{
    /**
     * Builds the embedded form representing the user.
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    protected function buildUserForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'username',
                'Symfony\Component\Form\Extension\Core\Type\TextType',
                array('read_only' => true)
            )
            ->add('identifiant')
            ->add('name')
            ->add('firstname')
            ->add('email')
            ->add('phoneNumber')
            ->add(
                'groups',
                TextType::class,
                array(
                    'disabled' => true
                )
            )
            ->add(
                'bannedPeriods',
                CollectionType::class,
                array(
                    'required' => false,
                    'type' => new BannedPeriodType(),
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
                    'label' => false,
                    'disabled' => true
                )
            );
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
        return 'ce_user_profile';
    }

    public function getBlockPrefix()
    {
        return 'fos_user_profile_edit';
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }
}

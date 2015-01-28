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

use CE\UserBundle\Controller\GroupController;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GroupFormType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('roles', 'choice', array(
                                            'label'      => 'Roles',
                                            'required'   => true,
                                            'choices'    => GroupController::getRoleNames(),
                                            'expanded'   => true,
                                            'multiple'   => true,));

    }

    public function getName()
    {
        return 'ce_user_group';
    }

    public function getParent()
    {
        return 'fos_user_group';
    }
}

<?php

namespace CE\DeviceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('libelle')
            ->add('parentId', 'entity', array(
                'placeholder' => 'Choissisez une catégorie',
                'class' => 'CEDeviceBundle:Category',
                'property' => 'libelle',
                'multiple' => true,
                'required' => false,
                'query_builder' => function ($e) {
                    return $e->createQueryBuilder('c')
                        ->orderBy('c.libelle', 'ASC')
                        ->where('c.parentId IS NULL');
                }
            ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CE\DeviceBundle\Entity\Category'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ce_devicebundle_category';
    }
}

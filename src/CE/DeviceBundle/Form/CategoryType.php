<?php

namespace CE\DeviceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoryType extends AbstractType
{
    private $id;

    public function __construct($id=0) {
        $this->id=$id;
    }
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('libelle')
            ->add('parent', 'entity', array(
                'placeholder' => 'Choissisez une catégorie',
                'class' => 'CEDeviceBundle:Category',
                'property' => 'libelle',
                'multiple' => false,
                'required' => false,
                'group_by' => 'parent',
                'query_builder' => function ($e) {
                    return $e->createQueryBuilder('c')
                        ->where('c.id <> :current')
                        ->setParameters(array('current' => $this->id))
                        ->orderBy('c.libelle', 'ASC');
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

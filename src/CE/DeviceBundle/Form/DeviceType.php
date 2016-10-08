<?php

namespace CE\DeviceBundle\Form;

use CE\DeviceBundle\CEDeviceBundle;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DeviceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference')
            ->add('libelle')
                ->add('marque', 'entity', array(
                                            'required' => true,
                                            'class' => 'CEDeviceBundle:Marque',
                                            'query_builder' => function(EntityRepository $e) {
                                                    return $e->createQueryBuilder('c')
                                                        ->orderBy('c.libelle', 'ASC');
                                                }))
            ->add('modele')
            ->add('categories','entity', array(
                'class' => 'CEDeviceBundle:Category',
                'property' => 'libelle',
                'multiple' => true,
                'required' => true,
                'group_by' => 'parentId',
                'query_builder' => function(EntityRepository $e) {
                    return $e->createQueryBuilder('c')
                        ->orderBy('c.libelle', 'ASC')
                        ->where('c.parentId IS NOT NULL');
                })
            )
            ->add('commentaire')
            ->add('dateAchat', 'date', array(
                'widget' => 'single_text',
                'input' => 'datetime',
                'pattern'=>'dd-MM-yyyy'
            ))
            ->add('disponible', 'hidden')
            ->add('disponibleLib', 'hidden')
            ->add('image', new ImageType(), array(
                'required' => false
            ))

        ;
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CE\DeviceBundle\Entity\Device'
        ));
    }


    public function getName()
    {
        return 'device';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: manson
 * Date: 14/11/2016
 * Time: 09:52
 */

namespace CE\UserBundle\DataFixtures\ORM;


use CE\DeviceBundle\Entity\Category;
use CE\ReservationBundle\Entity\ReservationStatus;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCategoryData extends AbstractFixture implements FixtureInterface
{
    const CATEGORY_MAIN = "categ-outil-main";
    const CATEGORY_MATOS = "categ-matos";
    const CATEGORY_ELEC = "categ-outil-elec";

    public function load(ObjectManager $manager)
    {
        $categoryMum = new Category();
        $categoryMum->setCode('C10');
        $categoryMum->setLibelle('Outillage');

        $category = new Category();
        $category->setCode('C11');
        $category->setLibelle('Outillage à main');
        $category->setParent($categoryMum);

        $category1 = new Category();
        $category1->setCode('C020');
        $category1->setLibelle('Matériel et équipement Autre');

        $category12 = new Category();
        $category12->setCode('C21');
        $category12->setLibelle('Matériel de peinture');
        $category->setParent($category1);

        $category2 = new Category();
        $category2->setCode('C12');
        $category2->setLibelle('Outillage électroportatif');
        $category2->setParent($categoryMum);

        $manager->persist($categoryMum);
        $manager->persist($category);
        $manager->persist($category1);
        $manager->persist($category2);
        $manager->persist($category12);
        $manager->flush();

        $this->addReference(self::CATEGORY_MAIN, $category);
        $this->addReference(self::CATEGORY_MATOS, $category12);
        $this->addReference(self::CATEGORY_ELEC, $category2);
    }

}
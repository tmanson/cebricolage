<?php
/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 25/06/2018
 * Time: 22:13
 */

namespace CE\DeviceBundle\DataFixtures\ORM;


use CE\DeviceBundle\Entity\Marque;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadMarqueData extends AbstractFixture implements FixtureInterface
{

    const BRAND_BOSH = "brand-bosh";
    const BRAND_DEXTER = "brand-dexter";
    const BRAND_MAKITA = "brand-makita";

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $brand = new Marque();
        $brand->setLibelle("Bosh");

        $brand2 = new Marque();
        $brand2->setLibelle("Dexter");

        $brand3 = new Marque();
        $brand3->setLibelle("Makita");

        $manager->persist($brand);
        $manager->persist($brand2);
        $manager->persist($brand3);
        $manager->flush();

        $this->addReference(self::BRAND_BOSH, $brand);
        $this->addReference(self::BRAND_DEXTER, $brand2);
        $this->addReference(self::BRAND_MAKITA, $brand3);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 25/06/2018
 * Time: 22:12
 */

namespace CE\DeviceBundle\DataFixtures\ORM;


use CE\DeviceBundle\Entity\Device;
use CE\UserBundle\DataFixtures\ORM\LoadCategoryData;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadDeviceData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $device = new Device();

        $device->setLibelle("Marteau perforateur SDS Plus 720W");
//        $device->setCategories($this->getReference(LoadCategoryData::CATEGORY_ELEC));
        $device->setDateAchat(new \DateTime());
        $device->setImage($this->getReference(LoadImageData::IMG_PERFO));
        $device->setReference("art01");
        $device->setModele("Perforateur1234");
        $device->setEmplacement("DTC");
        $device->setDisponible(true);
        $device->setMarque($this->getReference(LoadMarqueData::BRAND_MAKITA));

        $manager->persist($device);
        $manager->flush();


    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        // TODO: Implement getOrder() method.
        return 2;
    }
}
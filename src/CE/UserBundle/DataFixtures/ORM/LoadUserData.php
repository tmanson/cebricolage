<?php
/**
 * Created by PhpStorm.
 * User: manson
 * Date: 14/11/2016
 * Time: 09:52
 */

namespace CE\UserBundle\DataFixtures\ORM;

use CE\UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUserData extends AbstractFixture implements FixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $admin = new User();
        $admin->setFirstname('Administrateur');
        $admin->setName('admin');
        $admin->setUsername('admin');
        $admin->setGroups($this->getReference('admin-group'));
        $admin->setIdentifiant('Administrateur');
        $admin->setLastLogin(new \DateTime('2016-04-28 10:38:49'));
        $admin->setPhoneNumber('0557298014');
        $admin->setEmail('ce.tsv.bricolage@gmail.com');
        $admin->setPlainPassword('admin');
        $admin->setEnabled(true);
        $manager->persist($admin);
        $manager->flush();
    }

}
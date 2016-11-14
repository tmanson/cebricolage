<?php
/**
 * Created by PhpStorm.
 * User: manson
 * Date: 14/11/2016
 * Time: 09:52
 */

namespace CE\UserBundle\DataFixtures\ORM;


use CE\UserBundle\Entity\Group;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadGroupData extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $admin = new Group('Administrateurs', array('ROLE_SUPER_ADMIN'));
        $member = new Group('Membres de la section bricolage', array('ROLE_ADMIN'));
        $employee = new Group('Salariés', array('ROLE_READ_DEVICE'));

        $manager->persist($admin);
        $manager->persist($member);
        $manager->persist($employee);
        $manager->flush();

        $this->addReference('admin-group', $admin);
    }

}
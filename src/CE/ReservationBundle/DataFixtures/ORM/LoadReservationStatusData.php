<?php
/**
 * Created by PhpStorm.
 * User: manson
 * Date: 14/11/2016
 * Time: 09:52
 */

namespace CE\UserBundle\DataFixtures\ORM;


use CE\ReservationBundle\Entity\ReservationStatus;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadReservationStatusData extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $reserve = new ReservationStatus();
        $reserve->setLibelle('Réservé');
        $emprunte = new ReservationStatus();
        $emprunte->setLibelle('Emprunté');
        $restitue = new ReservationStatus();
        $restitue->setLibelle('Restitué');
        $manager->persist($reserve);
        $manager->persist($emprunte);
        $manager->persist($restitue);
        $manager->flush();
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 03/07/2018
 * Time: 21:19
 */

namespace CE\DeviceBundle\DataFixtures\ORM;


use CE\DeviceBundle\Entity\Image;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class LoadImageData extends AbstractFixture implements FixtureInterface
{

    const IMG_BOSH = "img-bosh";
    const IMG_DEXTER = "img-dexter";
    const IMG_MAKITA = "img-makita";

    const IMG_PATH = "\..\images\\";
    const dash_copy = "copy-";

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        $img = new Image();
        $img->file = $this->copyImage("bosch.jpg");
        $img->upload();
        $manager->persist($img);

        $img2 = new Image();
        $img2->file = $this->copyImage("Dexter.jpg");
        $img2->upload();
        $manager->persist($img2);

        $img3 = new Image();
        $img3->file = $this->copyImage("makita.png");
        $img3->upload();
        $manager->persist($img3);

        $manager->flush();

        $this->addReference(self::IMG_BOSH, $img);
        $this->addReference(self::IMG_DEXTER, $img2);
        $this->addReference(self::IMG_MAKITA, $img3);
    }

    private function copyImage($nomImage) {
        //Obligé de copier l'image, sinon à la création de l'objet UploadedFile, elle est déplacé
        copy(__DIR__ . self::IMG_PATH . $nomImage, __DIR__ . self::IMG_PATH . self::dash_copy . $nomImage);
        return new UploadedFile(__DIR__ . self::IMG_PATH . self::dash_copy . $nomImage, $nomImage,
            null, null, null, true);
    }
}
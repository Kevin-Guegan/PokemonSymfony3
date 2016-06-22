<?php
/**
 * Created by PhpStorm.
 * User: kguegan
 * Date: 22/06/2016
 * Time: 10:59
 */

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAddressData implements FixtureInterface, OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
            // Ceci est l'adresse de la mairie de Vauréal
            $user = new User();
            $user->setUsername('User');
            $user->setLogin('User1');
            $user->setPassword('Password');
            $user->setEmail('a@a.fr');
            $user->setIsActive(true);

            $manager->persist($user);
            $manager->flush();
        }
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        // The order in which fixtures will be loaded
        // the lower the number is, the sooner that this fixture is loaded
        return 1;
    }
}
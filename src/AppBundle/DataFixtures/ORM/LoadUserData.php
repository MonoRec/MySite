<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\User;


class LoadUserData implements FixtureInterface, ContainerAwareInterface {

	private $container;
	
	/**
	* @param ObjectManager $manager 
	*/

	public function load(ObjectManager $manager) 
	{
		$user = new User();
		$user->setUsername('admin2');
		$user->setEmail('admin@admin.com');
		$encoder = $this->container->get('security.password_encoder');
		$password = $encoder->encodePassword($user, '123123');
		$user->setPassword($password);

		$manager->persist($user);
		$manager->flush();
	}



	/**
	* @param ContainerInterface|null $container A ContainerInterface instance or null
	*/

	 public function setContainer(ContainerInterface $container = null)
     {
         $this->container = $container;
     }
}
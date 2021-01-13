<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegisterController extends AbstractController
{
    private $entityManager;

	public function __construct(EntityManagerInterface $entityManager) {
		$this->entityManager = $entityManager;
	}

	/**
	 * @Route("/inscription", name="app_register")
	 * @return RedirectResponse|Response
	 */
	public function index(Request $request, UserPasswordEncoderInterface $encoder):Response {
		$user = new User();
		$form = $this->createForm(RegisterType::class, $user);

		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$user = $form->getData();
			$password = $encoder->encodePassword($user, $user->getPassword()); 
			$user->setPassword($password);
			$this->entityManager->persist($user);
			$this->entityManager->flush();
			// ici add une redirection vers /home (autologin) ou /connexion (si pas autologin)
			// return $this->redirectToRoute('app_login');
		}

		return $this->render('register/index.html.twig', [
			'form' => $form->createView()
		]);
	}
}
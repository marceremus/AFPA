<?php

	namespace App\Controller;

	use App\Entity\User;
	use App\Form\UserType;
	use Doctrine\Common\Persistence\ObjectManager;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;

	class HomeController extends AbstractController
	{

		private $em;

		public function __construct(ObjectManager $em) {
			$this->em = $em;
		}
		/**
		 * @Route("/", name="home")
		 * @param Request $request
		 *
		 * @return Response
		 */
		public function index(Request $request) :Response
		{
			return $this->render('home/index.php.twig', [
				'controller_name' => 'HomeController',
			]);
		}

		/**
		 * @Route("/admin/addUser", name="addUser")
		 * @param Request $request
		 *
		 * @return Response
		 */
		public function addUser(Request $request) :Response
		{
			$user = new User();

			$form = $this->createForm(UserType::class, $user);

			$form->handleRequest($request);

			if($form->isSubmitted() && $form->isValid()){
				//$this->addFlash("success", "L'utilisateur a bien été enregistré. ");
				return $this->redirectToRoute('home.index');
			}

			return $this->render('admin/user/addUser.html.twig', array('forma' => $form->createView()));
		}


	}

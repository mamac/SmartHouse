<?php

namespace Lljm\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Lljm\AdminBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller
{
  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function indexAction()
    {

	    $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();

        return $this->render('LljmAdminBundle:User:index.html.twig', array(
        	'users' => $users
        	));
    }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function adduserAction(Request $request)
    {

	    $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->createUser();

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $password = $form["password"]->getData();
        $user->setPlainPassword($password);
        $userManager -> updateUser($user);

        return $this->redirect($this->generateUrl('admin_user'));
      }

        return $this->render('LljmAdminBundle:User:useradd.html.twig', array(
          'form' => $form->createView()
        	));
    }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function deluserAction( $username ,Request $request)
  {

    $userManager = $this->get('fos_user.user_manager');
    $user = $userManager->findUserByUsername($username);

    $form = $this->createFormBuilder()->getForm();
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $userManager -> deleteUser($user);

        $this->get('session')->getFlashBag()->add('info', 'User deleted');

        return $this->redirect($this->generateUrl('admin_user'));
      }

    return $this->render('LljmAdminBundle:User:userdel.html.twig', array(
      'user' => $user,
      'form'    => $form->createView()
    ));

  } 

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function edituserAction( $username, Request $request )
    {

      $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($username);

    $form = $this->createForm(UserType::class, $user);
    $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $password = $form["password"]->getData();
        $user->setPlainPassword($password);
        $userManager -> updateUser($user);

        return $this->redirect($this->generateUrl('admin_user'));
      }

        return $this->render('LljmAdminBundle:User:useredit.html.twig', array(
          'user' => $user,
          'form' => $form->createView()
          ));
    }
}

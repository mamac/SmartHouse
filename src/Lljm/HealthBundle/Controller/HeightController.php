<?php

namespace Lljm\HealthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lljm\HealthBundle\Entity\Height;
use Lljm\UserBundle\Entity\User;
use Lljm\HealthBundle\Form\HeightType;
use Lljm\HealthBundle\Form\HeightEditType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class HeightController extends Controller
{
    public function indexAction($datefrom, $dateto, $user)
    {
      $heights = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('LljmHealthBundle:Height')
                       ->getHeights($datefrom, $dateto, $user);

      $userlist = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('LljmHealthBundle:Height')
                       ->getUsers();


      return $this->render('LljmHealthBundle:Height:index.html.twig', array(
        'heights' => $heights,
        'datefrom' => $datefrom,
        'dateto' => $dateto,
        'userlist' => $userlist,
        'user' => $user
      ));
    }

  /**
   * @Security("has_role('ROLE_USER')")
   */
       public function heightaddAction()
    {
        $height = new Height;

        $form = $this->createForm(new HeightType, $height);


    $request = $this->get('request');

    if ($request->getMethod() == 'POST') {
      $form->bind($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($height);
        $em->flush();

        return $this->redirect($this->generateUrl('health_height'));
      }
    }
        return $this->render('LljmHealthBundle:Height:heightadd.html.twig', array(
            'form' => $form->createView()
        ));
  }

}

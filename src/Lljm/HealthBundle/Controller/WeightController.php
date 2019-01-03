<?php

namespace Lljm\HealthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Lljm\HealthBundle\Entity\Weight;
use Lljm\UserBundle\Entity\User;
use Lljm\HealthBundle\Form\WeightType;
use Lljm\HealthBundle\Form\WeightEditType;
use Symfony\Component\HttpFoundation\Request;

class WeightController extends Controller
{
    public function indexAction($datefrom, $dateto, $user)
    {
      $weights = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('LljmHealthBundle:Weight')
                       ->getWeights($datefrom, $dateto, $user);

      $userlist = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('LljmHealthBundle:Weight')
                       ->getUsers();


      return $this->render('LljmHealthBundle:Weight:index.html.twig', array(
        'weights' => $weights,
        'datefrom' => $datefrom,
        'dateto' => $dateto,
        'userlist' => $userlist,
        'user' => $user
      ));
    }

  /**
   * @Security("has_role('ROLE_USER')")
   */
       public function weightaddAction(Request $request)
    {
        $weight = new Weight;

        $form = $this->createForm(WeightType::class, $weight);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $em->persist($weight);
        $em->flush();

        return $this->redirect($this->generateUrl('health_weight'));
      }
    else{
            return $this->render('LljmHealthBundle:Weight:weightadd.html.twig', array(
            'form' => $form->createView()
        ));
  }
}

}

<?php

namespace Lljm\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lljm\HomeBundle\Entity\Subzone;
use Lljm\HomeBundle\Form\SubzoneType;
use Lljm\HomeBundle\Form\SubzoneEditType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

class SubzoneController extends Controller
{

    public function subzoneAction()
    {
    $subzones = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('LljmHomeBundle:Subzone')
                     ->getSubzone();

    return $this->render('LljmHomeBundle:Subzone:subzone.html.twig', array(
      'subzones' => $subzones,
    ));
    }

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function subzoneaddAction(Request $request)
    {
        $subzone = new Subzone;

        $form = $this->createForm(SubZoneType::class, $subzone);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($subzone);
        $em->flush();

        return $this->redirect($this->generateUrl('home_subzone'));
      }
    else{

        return $this->render('LljmHomeBundle:Subzone:subzoneadd.html.twig', array(
            'form' => $form->createView()));
  }
}

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function subzonedelAction(Subzone $subzone, Request $request)
  {
    $form = $this->createFormBuilder()->getForm();
     $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->remove($subzone);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Subzone deleted');

        return $this->redirect($this->generateUrl('home_subzone'));
      }
    else{

    return $this->render('LljmHomeBundle:Subzone:subzonedel.html.twig', array(
      'subzone' => $subzone,
      'form'    => $form->createView()
    ));
  }
}

  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
    public function subzoneeditAction(Subzone $subzone, Request $request)
  {
        $form = $this->createForm(SubzoneType::class, $subzone);
        $form->handleRequest($request);

    if($form->isSubmitted() && $form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $em->persist($subzone);
        $em->flush();

        $this->get('session')->getFlashBag()->add('info', 'Subzone updated');

        return $this->redirect($this->generateUrl('home_subzone'));
      }
    else{

    return $this->render('LljmHomeBundle:Subzone:subzoneedit.html.twig', array(
      'subzone' => $subzone,
      'form'    => $form->createView()
    ));
  } 
}

}

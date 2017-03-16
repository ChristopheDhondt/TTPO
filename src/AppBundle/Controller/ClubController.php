<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Federation;
use AppBundle\Form\FederationType;

class ClubController extends Controller
{
    /**
     * @Route("/user/club/index", name="club_index")
     * @Template("AppBundle:user/club:index.html.twig")
     */
    public function indexAction(Request $request)
    {
        $clubs = $this->getDoctrine()->getRepository("AppBundle:Club")->findAll();
        return array("clubs" => $clubs);
    }
    
    /**
     * @Route("/user/club/add" ,name="club_add")
     * @Template("AppBundle:user/club:add.html.twig")
     */
    public function addAction(Request $request)
    {
        $federation = new Federation();
        $form = $this->createForm(FederationType::class, $federation);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($federation);
            $em->flush();
            return $this->redirectToRoute('federation_index');
        }
        return array('form' =>$form->createView());
    }
    
    /**
     * @Route("/admin/config/federation/edit/{federation}", requirements={"federation" = "\d+"} ,name="federation_edit")
     * @Template("AppBundle:admin/config/federation:edit.html.twig")
     */
    public function editAction(Request $request, Federation $federation)
    {
        $form = $this->createForm(FederationType::class, $federation);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('federation_index');
        }
        return array('form' =>$form->createView());
    }
    
    /**
     * @Route("/admin/config/federation/delete/{federation}", requirements={"federation" = "\d+"} ,name="federation_delete")
     */
    public function deleteAction(Request $request, Federation $federation)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($federation);
        $em->flush();
        return $this->redirectToRoute('federation_index');
    }
}

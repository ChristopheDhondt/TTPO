<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Federation;
use AppBundle\Form\FederationType;

class FederationController extends Controller
{
    /**
     * @Route("/admin/config/federation/index", name="federation_index")
     * @Template("AppBundle:admin/config/federation:index.html.twig")
     */
    public function indexAction(Request $request)
    {
        $federations = $this->getDoctrine()->getRepository("AppBundle:Federation")->findAll();
        return array("federations" => $federations);
    }
    
    /**
     * @Route("/admin/config/federation/add" ,name="federation_add")
     * @Template("AppBundle:admin/config/federation:add.html.twig")
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

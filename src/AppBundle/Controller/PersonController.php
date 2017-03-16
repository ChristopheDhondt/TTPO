<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Person;
use AppBundle\Repository\PersonRepository;
use AppBundle\Form\Person\PersonType;

class PersonController extends Controller
{
    /**
     * @Route("/admin/config/person/index/{page}", name="person_index", requirements={"page": "\d+"}, defaults={"page": "1"})
     * @Template("AppBundle:admin/config/person:index.html.twig")
     */
    public function indexAction(Request $request, $page)
    {
        $persons = $this->getDoctrine()->getRepository("AppBundle:Person")->findAll();
        return array("persons" => $persons);
    }
    
    /**
     * @Route("/user/Person/add" ,name="person_add")
     * @Template("AppBundle:user/person:add.html.twig")
     */
    public function addAction(Request $request)
    {
        $person = new Person();
        $form = $this->createForm(PersonType::class, $person);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush();
            return $this->redirectToRoute('person_index');
        }
        return array('form' =>$form->createView());
    }
    
    /**
     * @Route("/admin/config/person/edit/{person}", requirements={"person" = "\d+"} ,name="person_edit")
     * @Template("AppBundle:admin/config/person:edit.html.twig")
     */
    public function editAction(Request $request, Person $person)
    {
        $form = $this->createForm(FederationType::class, $person);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('person_index');
        }
        return array();
    }
    
    /**
     * @Route("/admin/config/person/delete/{person}", requirements={"person" = "\d+"} ,name="person_delete")
     */
    public function deleteAction(Request $request, Person $person)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($person);
        $em->flush();
        return $this->redirectToRoute('person_index');
    }
}

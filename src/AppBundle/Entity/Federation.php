<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Club
 *
 * @ORM\Table(name="federation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FederationRepository")
 */
class Federation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nameFr", type="string", length=255)
     * @Assert\NotNull(message="common.notNull")
     * @Assert\Regex("/^[a-zA-ZÀ-ÿ]{1}(?!.*([\s\’-])\1)[a-zA-ZÀ-ÿ\s\’-]{0,28}[a-zA-ZÀ-ÿ]{1}$/",message="common.incorrectCaracter")
     */
     private $nameFr;
     
     /**
     * @var string
     *
     * @ORM\Column(name="nameNl", type="string", length=255)
     * @Assert\NotNull(message="common.notNull")
     * @Assert\Regex("/^[a-zA-ZÀ-ÿ]{1}(?!.*([\s\’-])\1)[a-zA-ZÀ-ÿ\s\’-]{0,28}[a-zA-ZÀ-ÿ]{1}$/",message="common.incorrectCaracter")
     */
     private $nameNl;
     
     /**
     * @var string
     *
     * @ORM\Column(name="nameDe", type="string", length=255)
     * @Assert\NotNull(message="common.notNull")
     * @Assert\Regex("/^[a-zA-ZÀ-ÿ]{1}(?!.*([\s\’-])\1)[a-zA-ZÀ-ÿ\s\’-]{0,28}[a-zA-ZÀ-ÿ]{1}$/",message="common.incorrectCaracter")
     */
     private $nameDe;
     
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Adress", cascade={"persist","remove"})
     */
     private $officialAdress;
     
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Adress", cascade={"persist","remove"})
     */
     private $postalAdress;     
     
     function getId() {
         return $this->id;
     }

     function getNameFr() {
         return $this->nameFr;
     }

     function getNameNl() {
         return $this->nameNl;
     }

     function getNameDe() {
         return $this->nameDe;
     }
     
     function getName($locale) {
         switch ($locale){
             case 'fr' :
                 return $this->nameFr;
             case 'nl' :
                 return $this->nameNl;
             case 'de' :
                 return $this->nameDe;
         }
     }

     function getOfficialAdress() {
         return $this->officialAdress;
     }

     function getPostalAdress() {
         return $this->postalAdress;
     }

     function setNameFr($name) {
         $this->nameFr = $name;
     }

     function setNameNl($name) {
         $this->nameNl = $name;
     }

     function setNameDe($name) {
         $this->nameDe = $name;
     }

     function setOfficialAdress(Adress $officialAdress) {
         $this->officialAdress = $officialAdress;
     }

     function setPostalAdress(Adress $postalAdress) {
         $this->postalAdress = $postalAdress;
     }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Club
 *
 * @ORM\Table(name="adress")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdressRepository")
 */
class Adress
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
     * @ORM\Column(name="street", type="string", length=255)
     * @Assert\NotNull(message="common.notNull")
     * @Assert\Regex("/^[a-zA-ZÀ-ÿ]{1}(?!.*([\s\’-])\1)[a-zA-ZÀ-ÿ\s\’-]{0,28}[a-zA-ZÀ-ÿ]{1}$/",message="common.incorrectCaracter")
     */
     private $street;
     
     
     /**
     * @var string
     *
     * @ORM\Column(name="postNumber", type="string", length=255)
     * @Assert\NotNull(message="common.notNull")
     * @Assert\Regex("/^[a-zA-ZÀ-ÿ]{1}(?!.*([\s\’-])\1)[a-zA-ZÀ-ÿ\s\’-]{0,28}[a-zA-ZÀ-ÿ]{1}$/",message="common.incorrectCaracter")
     */
     private $postNumber;
     
     /**
     * @var string
     *
     * @ORM\Column(name="postBox", type="string", length=255)
     * @Assert\NotNull(message="common.notNull")
     * @Assert\Regex("/^[a-zA-ZÀ-ÿ]{1}(?!.*([\s\’-])\1)[a-zA-ZÀ-ÿ\s\’-]{0,28}[a-zA-ZÀ-ÿ]{1}$/",message="common.incorrectCaracter")
     */
     private $postBox;
     
     /**
     * @var string
     *
     * @ORM\Column(name="postCode", type="string", length=255)
     * @Assert\NotNull(message="common.notNull")
     * @Assert\Regex("/^[a-zA-ZÀ-ÿ]{1}(?!.*([\s\’-])\1)[a-zA-ZÀ-ÿ\s\’-]{0,28}[a-zA-ZÀ-ÿ]{1}$/",message="common.incorrectCaracter")
     */
     private $postCode;
     
    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255)
     * @Assert\NotNull(message="common.notNull")
     * @Assert\Regex("/^[a-zA-ZÀ-ÿ]{1}(?!.*([\s\’-])\1)[a-zA-ZÀ-ÿ\s\’-]{0,28}[a-zA-ZÀ-ÿ]{1}$/",message="common.incorrectCaracter")
     */
     private $city;
     
     /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     * @Assert\NotNull(message="common.notNull")
     * @Assert\Regex("/^[a-zA-ZÀ-ÿ]{1}(?!.*([\s\’-])\1)[a-zA-ZÀ-ÿ\s\’-]{0,28}[a-zA-ZÀ-ÿ]{1}$/",message="common.incorrectCaracter")
     */
     private $country;
     
     function getId() {
         return $this->id;
     }

     function getStreet() {
         return $this->street;
     }

     function getPostNumber() {
         return $this->postNumber;
     }

     function getPostBox() {
         return $this->postBox;
     }

     function getPostCode() {
         return $this->postCode;
     }

     function getCity() {
         return $this->city;
     }

     function getCountry() {
         return $this->country;
     }

     function setStreet($street) {
         $this->street = $street;
     }

     function setPostNumber($postNumber) {
         $this->postNumber = $postNumber;
     }

     function setPostBox($postBox) {
         $this->postBox = $postBox;
     }

     function setPostCode($postCode) {
         $this->postCode = $postCode;
     }

     function setCity($city) {
         $this->city = $city;
     }

     function setCountry($country) {
         $this->country = $country;
     }
}

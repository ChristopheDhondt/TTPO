<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonRepository")
 */
class Person
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
     * @ORM\Column(name="lastname", type="string", length=255)     
     */
     private $lastname;
     
     /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
     private $firstname;
     
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Adress", cascade={"persist","remove"})
     */
     private $officialAdress;
     
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Adress", cascade={"persist","remove"})
     */
     private $postalAdress;
     
     /**
     * @var string     *
     * @ORM\Column(name="emailAdress", type="string", length=255)
     */
     private $emailAdress;
     
      /**
     * @var string
     * @ORM\Column(name="password", type="string", length=255)     
     */
     private $password;
     
    /**
     * @var string
     * @ORM\Column(name="active", type="boolean")     
     */
     private $active;
     
     /**
     * @var string
     * @ORM\Column(name="lastConnection", type="date")
     */
     private $lastConnection;
     
    /**
     * @ORM\Column(name="appRole", type="smallint")     
     */
     private $appRole;
     
     private $appRoles = array(1 => "Role_User", 2 => "Role_Admin");
     
     public function __construct() {
         $this->appRole = 1;
         $this->active = TRUE;
         $this->lastConnection = new \DateTime();
     }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Person
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    
    public function __toString() {
        return $this->firstname." ".$this->lastname;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Person
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set emailAdress
     *
     * @param string $emailAdress
     *
     * @return Person
     */
    public function setEmailAdress($emailAdress)
    {
        $this->emailAdress = $emailAdress;

        return $this;
    }

    /**
     * Get emailAdress
     *
     * @return string
     */
    public function getEmailAdress()
    {
        return $this->emailAdress;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Person
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Person
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set lastConnection
     *
     * @param \DateTime $lastConnection
     *
     * @return Person
     */
    public function setLastConnection($lastConnection)
    {
        $this->lastConnection = $lastConnection;

        return $this;
    }

    /**
     * Get lastConnection
     *
     * @return \DateTime
     */
    public function getLastConnection()
    {
        return $this->lastConnection;
    }

    /**
     * Set appRole
     *
     * @param integer $appRole
     *
     * @return Person
     */
    public function setAppRole($appRole)
    {
        $this->appRole = $appRole;

        return $this;
    }

    /**
     * Get appRole
     *
     * @return integer
     */
    public function getAppRole()
    {
        return $this->appRole;
    }

    /**
     * Set officialAdress
     *
     * @param \AppBundle\Entity\Adress $officialAdress
     *
     * @return Person
     */
    public function setOfficialAdress(\AppBundle\Entity\Adress $officialAdress = null)
    {
        $this->officialAdress = $officialAdress;

        return $this;
    }

    /**
     * Get officialAdress
     *
     * @return \AppBundle\Entity\Adress
     */
    public function getOfficialAdress()
    {
        return $this->officialAdress;
    }

    /**
     * Set postalAdress
     *
     * @param \AppBundle\Entity\Adress $postalAdress
     *
     * @return Person
     */
    public function setPostalAdress(\AppBundle\Entity\Adress $postalAdress = null)
    {
        $this->postalAdress = $postalAdress;

        return $this;
    }

    /**
     * Get postalAdress
     *
     * @return \AppBundle\Entity\Adress
     */
    public function getPostalAdress()
    {
        return $this->postalAdress;
    }
}

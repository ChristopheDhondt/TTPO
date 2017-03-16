<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClubRepository")
 */
class Club
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
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotNull(message="common.notNull")
     */
     private $name;
     
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Adress", cascade={"persist","remove"})
     */
     private $officialAdress;
     
    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Adress", cascade={"persist","remove"})
     */
     private $postalAdress;
     
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Federation")
     */
     private $federation;
     
    /**
     * ArrayCollection $teams
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Team", mappedBy="Club", cascade={"persist","remove"})
     */
     private $teams;
     
    /**
     * ArrayCollection $clubMembers
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ClubMember", mappedBy="Club", cascade={"persist","remove"})
     */
     private $clubMembers;
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClubMember
 *
 * @ORM\Table(name="club_member")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClubMemberRepository")
 */
class ClubMember
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
     * ArrayCollection $criteria
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Club")
     */
     private $club;
     
     /**
     * ArrayCollection $criteria
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Person")
     */
     private $member;
     
     /**
     */
     private $clubRole;
     
     private $clubRoles = array(1 => "Role_User", 2 => "Role_ClubAdmin");
     
     public function __construct() {
         $this->clubRole = 1;
     }
}

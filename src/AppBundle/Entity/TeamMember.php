<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="team_member")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeamMemberRepository")
 */
class TeamMember
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Team")
     */
     private $team;
     
     /**
     * ArrayCollection $criteria
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ClubMember")
     */
     private $member;
}

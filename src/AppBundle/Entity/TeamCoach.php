<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamCoach
 *
 * @ORM\Table(name="team_coach")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeamRepository")
 */
class TeamCoach
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Team", cascade={"persist","remove"})
     */
     private $team;
     
     /**
     * ArrayCollection $criteria
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ClubMember", cascade={"persist","remove"})
     */
     private $coach;
}

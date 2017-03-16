<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeamRepository")
 */
class Team
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
     * @Assert\Regex("/^[a-zA-ZÀ-ÿ]{1}(?!.*([\s\’-])\1)[a-zA-ZÀ-ÿ\s\’-]{0,28}[a-zA-ZÀ-ÿ]{1}$/",message="common.incorrectCaracter")
     */
     private $name;
     
    /**
     * ArrayCollection $criteria
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Club", inversedBy="teams")
     */
     private $club;
     
    /**
     * ArrayCollection $criteria
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\TeamCoach", mappedBy="Team")
     */
     private $teamMembers;
     
    /**
     * ArrayCollection $criteria
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\TeamCoach", mappedBy="Team")
     */
     private $teamCoachs;
}

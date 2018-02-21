<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TechnologyRepository")
 */
class Technology
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;


    /**
     *  @ORM\ManyToMany(targetEntity="App\Entity\Project", mappedBy="technologies")
     */
    private $projects;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $titre
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function __construct(){

      $this->projects = new \Doctrine\Common\Collections\ArrayCollection();

    }

    public function addProject(\App\Entity\Project $project){

      $this->projects[] = $project;
      return $this;
    }

    public function removeProject(\App\Entity\Project $project){

      $this->projects->removeElement($project);

    }

    public function getProjects(){

    return  $this->projects;

    }

}

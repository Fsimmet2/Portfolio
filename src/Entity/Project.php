<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 */
class Project
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
    private $titre;


    /**
     * @ORM\Column(type="string")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Image", mappedBy="project")
     */
    private $image;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Technology", inversedBy="projects", cascade={"persist"})
     */
    private $technologies;

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
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }


    public function __construct(){

      $this->technologies = new \Doctrine\Common\Collections\ArrayCollection();
      $this->image = new \Doctrine\Common\Collections\ArrayCollection();

    }

    public function addTechnology(\App\Entity\Technology $technology){

      $this->technologies[] = $technology;
      return $this;
    }

    public function removeTechnology(\App\Entity\Technology $technology){

      $this->technologies->removeElement($technology);

    }

    public function getTechnology(){

    return  $this->technologies;

    }


    public function addImage(\App\Entity\Image $images){

      $this->image[] = $images;
      return $this;
    }


    public function removeImage(\App\Entity\Image $images){

      $this->image->removeElement($images);

    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }


}

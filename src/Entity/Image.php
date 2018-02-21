<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @ManyToOne(targetEntity="App\Entity\Project", inversedBy="image")
     */
    private $project;


    public function getId(){

      return $this->id;
    }

    public function getName(){

      return $this->name;
    }

    public function setName($name){

      $this->name = $name;
    }

    public function getUrl(){

      return $this->url;
    }

    public function setUrl($url){

      $this->url = $url;
    }

    public function __construct(){

      $this->projects = new \Doctrine\Common\Collections\ArrayCollection();
    }






}

<?php
// src/AppBundle/Entity/User.php

namespace MyApp\UserBundle\Entity;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;




/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * @Vich\Uploadable
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
     /**
     * @ORM\Column(type="string")
     */
    public $nom;
    /**
     * @ORM\Column(type="string")
     */
    public $prenom;
    
    /**
     * @ORM\Column(type="string")
     */
    public $specialite;
     
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $note;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
        public $etat;

    
    
  /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
     * 
     * @var File
     */
    public $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    public $imageName;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    public $updatedAt;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
    }

        /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return User
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return User
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
    }
    
    

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

        
    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }
    
    
    public function getEttablissement() {
        return $this->ettablissement;
    }

    public function getSpecialite() {
        return $this->specialite;
    }

    
    public function setEttablissement($ettablissement) {
        $this->ettablissement = $ettablissement;
    }

    public function setSpecialite($specialite) {
        $this->specialite = $specialite;
    }

    
    public function getNote() {
        return $this->note;
    }

    public function setNote($note) {
        $this->note = $note;
    }
            
    
    public function getEtat() {
        return $this->etat;
    }

    public function setEtat($etat) {
        $this->etat = $etat;
    }

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    
        



}

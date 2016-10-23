<?php

namespace GrandChita\EntityBundle\Entity;

/**
 * EducationProgram
 */
class EducationProgram
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return EducationProgram
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @var \Application\Sonata\MediaBundle\Entity\GalleryHasMedia
     *
     */
    private $gallery;


    /**
     * Set gallery
     *
     * @param \Application\Sonata\MediaBundle\Entity\GalleryHasMedia $gallery
     *
     * @return EducationProgram
     */
    public function setGallery(\Application\Sonata\MediaBundle\Entity\GalleryHasMedia $gallery = null)
    {
        $this->gallery = $gallery;

        return $this;
    }

    /**
     * Get gallery
     *
     * @return \Application\Sonata\MediaBundle\Entity\GalleryHasMedia
     */
    public function getGallery()
    {
        return $this->gallery;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gallery = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add gallery
     *
     * @param \Application\Sonata\MediaBundle\Entity\GalleryHasMedia $gallery
     *
     * @return EducationProgram
     */
    public function addGallery(\Application\Sonata\MediaBundle\Entity\GalleryHasMedia $gallery)
    {
        $this->gallery[] = $gallery;

        return $this;
    }

    /**
     * Remove gallery
     *
     * @param \Application\Sonata\MediaBundle\Entity\GalleryHasMedia $gallery
     */
    public function removeGallery(\Application\Sonata\MediaBundle\Entity\GalleryHasMedia $gallery)
    {
        $this->gallery->removeElement($gallery);
    }
}

<?php

namespace GrandChita\EntityBundle\Entity;

/**
 * GrandDocuments
 */
class GrandDocuments
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
     * @return GrandDocuments
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $gallery;

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
     * @return GrandDocuments
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

    /**
     * Get gallery
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGallery()
    {
        return $this->gallery;
    }
    /**
     * @var \DateTime
     */
    private $timestamp;


    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return GrandDocuments
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function prePersist()
    {
        $this->setTimestamp(new \DateTime());
    }

    public function preUpdate()
    {
        $this->prePersist();
    }
}

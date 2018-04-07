<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="folder")
 *
 */
class Folder
{

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 *
	 * @var \Int
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=255)
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * @ORM\Column(type="integer", length=5)
	 *
	 * @var integer
	 */
	protected $sortableRank = 0;

	/**
	 * @ORM\OneToMany(targetEntity="Page", mappedBy="folder")
	 * @ORM\OrderBy({"sortableRank" = "ASC"})
	 */
	protected $pages;

	/**
	 * @ORM\Column(type="boolean")
	 *
	 * @var boolean
	 */
	protected $isActive = true;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->pages = new \Doctrine\Common\Collections\ArrayCollection();
	}

	/**
	 * Add page
	 *
	 * @param \AppBundle\Entity\Page $page
	 *
	 * @return Folder
	 */
	public function addPage(\AppBundle\Entity\Page $page)
	{
		$this->pages[] = $page;

		return $this;
	}

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 *
	 * @return Page
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get sortableRank
	 *
	 * @return integer
	 */
	public function getSortableRank()
	{
		return $this->sortableRank;
	}

	/**
	 * Set sortableRank
	 *
	 * @param integer $sortableRank
	 *
	 * @return Folder
	 */
	public function setSortableRank($sortableRank)
	{
		$this->sortableRank = $sortableRank;

		return $this;
	}

	/**
	 * Get pages
	 *
	 * @return \Doctrine\Common\Collections\Collection
	 */
	public function getPages()
	{
		return $this->pages;
	}

	/**
	 * Remove page
	 *
	 * @param \AppBundle\Entity\Page $page
	 */
	public function removePage(\AppBundle\Entity\Page $page)
	{
		$this->pages->removeElement($page);
	}

	public function __toString()
	{
		return $this->getName();
	}

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Folder
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
}

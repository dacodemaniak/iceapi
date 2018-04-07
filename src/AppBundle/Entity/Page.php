<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @ORM\Table(name="page")
 *
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks
 */
class Page
{

	/**
	 * @ORM\ManyToOne(targetEntity="Folder", inversedBy="pages")
	 * @ORM\JoinColumn(name="folder_id", referencedColumnName="id", onDelete="SET NULL")
	 */
	protected $folder;

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 *
	 * @var \Int
	 */
	protected $id;

	/**
	 * NOTE: This is not a mapped field of entity metadata, just a simple property.
	 *
	 * @Vich\UploadableField(mapping="other_image", fileNameProperty="imageName")
	 *
	 * @var File
	 */
	protected $imageFile;

	/**
	 * @ORM\Column(type="string", length=255, nullable = true)
	 *
	 * @var string
	 */
	protected $imageName = null;

	/**
	 * @ORM\Column(type="string", length=255)
	 *
	 * @var string
	 */
	protected $metaDescription;

	/**
	 * @ORM\Column(type="string", length=255)
	 *
	 * @var string
	 */
	protected $metaTitle;

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
	 * @ORM\Column(type="string", length=128, unique=true)
	 *
	 * @var string
	 */
	protected $slug;

	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $text;

	/**
	 * @ORM\Column(type="datetime", nullable = true)
	 *
	 * @var \DateTime
	 */
	protected $updatedAt = null;

    /**
     * @ORM\Column(type="date", nullable = true)
     *
     * @var \DateTime
     */
    protected $publishedAt = null;

	/**
	 * @ORM\Column(type="boolean")
	 *
	 * @var boolean
	 */
	protected $isActive = true;

    /**
     * @ORM\Column(type="boolean")
     *
     * @var boolean
     */
    protected $forHomePage = false;

	/**
	 * Get folder
	 *
	 * @return \AppBundle\Entity\Folder
	 */
	public function getFolder()
	{
		return $this->folder;
	}

	/**
	 * Set folder
	 *
	 * @param \AppBundle\Entity\Folder $folder
	 *
	 * @return Page
	 */
	public function setFolder(\AppBundle\Entity\Folder $folder = null)
	{
		$this->folder = $folder;

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
	 * @return File
	 */
	public function getImageFile()
	{
		return $this->imageFile;
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
	 * @return Slider
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
	 * @return string
	 */
	public function getImageName()
	{
		return $this->imageName;
	}

	/**
	 * @param string $imageName
	 *
	 * @return Slider
	 */
	public function setImageName($imageName)
	{
		$this->imageName = $imageName;

		return $this;
	}

	/**
	 * Get metaDescription
	 *
	 * @return string
	 */
	public function getMetaDescription()
	{
		return $this->metaDescription;
	}

	/**
	 * Set metaDescription
	 *
	 * @param string $metaDescription
	 *
	 * @return Page
	 */
	public function setMetaDescription($metaDescription)
	{
		$this->metaDescription = $metaDescription;

		return $this;
	}

	/**
	 * Get metaTitle
	 *
	 * @return string
	 */
	public function getMetaTitle()
	{
		return $this->metaTitle;
	}

	/**
	 * Set metaTitle
	 *
	 * @param string $metaTitle
	 *
	 * @return Page
	 */
	public function setMetaTitle($metaTitle)
	{
		$this->metaTitle = $metaTitle;

		return $this;
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
	 * @return Page
	 */
	public function setSortableRank($sortableRank)
	{
		$this->sortableRank = $sortableRank;

		return $this;
	}

	/**
	 * Get slug
	 *
	 * @return string
	 */
	public function getSlug()
	{
		return $this->slug;
	}

	/**
	 * Set slug
	 *
	 * @param string $slug
	 *
	 * @return Page
	 */
	public function setSlug($slug)
	{
		$this->slug = $slug;

		return $this;
	}

	/**
	 * Get text
	 *
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}

	/**
	 * Set text
	 *
	 * @param string $text
	 *
	 * @return Page
	 */
	public function setText($text)
	{
		$this->text = $text;

		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}

	/**
	 * @param \DateTime $updatedAt
	 *
	 * @return Slider
	 */
	public function setUpdatedAt($updatedAt)
	{
		$this->updatedAt = $updatedAt;

		return $this;
	}

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Page
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

    /**
     * Set forHomePage
     *
     * @param boolean $forHomePage
     *
     * @return Page
     */
    public function setForHomePage($forHomePage)
    {
        $this->forHomePage = $forHomePage;

        return $this;
    }

    /**
     * Get forHomePage
     *
     * @return boolean
     */
    public function getForHomePage()
    {
        return $this->forHomePage;
    }

    /**
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param \DateTime $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }


    /**
     * @ORM\PreUpdate
     * @ORM\PrePersist
     */
    public function preUpdate()
    {
        if (is_null($this->publishedAt)) {
            $this->publishedAt = new \DateTime('now');
        }
        $this->updatedAt = new \DateTime('now');
    }
}

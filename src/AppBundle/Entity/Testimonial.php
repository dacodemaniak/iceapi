<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @ORM\Table(name="testimonial")
 *
 * @Vich\Uploadable
 */
class Testimonial
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
	 * NOTE: This is not a mapped field of entity metadata, just a simple property.
	 *
	 * @Vich\UploadableField(mapping="other_image", fileNameProperty="imageName")
	 *
	 * @var File
	 */
	protected $imageFile;

	/**
	 * @ORM\Column(type="string", length=255)
	 *
	 * @var string
	 */
	protected $imageName;

	/**
	 * @ORM\Column(type="string", length=100)
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * @ORM\Column(type="integer")
	 *
	 * @var \Int
	 */
	protected $note;

	/**
	 * @ORM\Column(type="integer")
	 *
	 * @var \Int
	 */
	protected $sortableRank;

	/**
	 * @ORM\Column(type="string", length=5000)
	 *
	 * @var string
	 */
	protected $text;

	/**
	 * @ORM\Column(type="datetime")
	 *
	 * @var \DateTime
	 */
	protected $updatedAt;

	/**
	 * @ORM\Column(type="boolean")
	 *
	 * @var boolean
	 */
	protected $isActive = true;

    /**
     * @ORM\ManyToMany(targetEntity="Metropolis", inversedBy="testimonials")
     * @ORM\JoinTable(name="testimonials_metropolises")
     * @ORM\OrderBy({"name" = "ASC"})
     */
    protected $metropolises;


    /**
     * @ORM\Column(type="boolean")
     *
     * @var boolean
     */
    protected $forHomePage = false;

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
	 * Get imageName
	 *
	 * @return string
	 */
	public function getImageName()
	{
		return $this->imageName;
	}

	/**
	 * Set imageName
	 *
	 * @param string $imageName
	 *
	 * @return Testimonial
	 */
	public function setImageName($imageName)
	{
		$this->imageName = $imageName;

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
	 * @return Testimonial
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get note
	 *
	 * @return integer
	 */
	public function getNote()
	{
		return $this->note;
	}

	/**
	 * Set note
	 *
	 * @param integer $note
	 *
	 * @return Testimonial
	 */
	public function setNote($note)
	{
		$this->note = $note;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSortableRank()
	{
		return $this->sortableRank;
	}

	/**
	 * @param mixed $sortableRank
	 *
	 * @return Slider
	 */
	public function setSortableRank($sortableRank)
	{
		$this->sortableRank = $sortableRank;

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
	 * @return Testimonial
	 */
	public function setText($text)
	{
		$this->text = $text;

		return $this;
	}

	/**
	 * Get updatedAt
	 *
	 * @return \DateTime
	 */
	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}

	/**
	 * Set updatedAt
	 *
	 * @param \DateTime $updatedAt
	 *
	 * @return Testimonial
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
     * @return Testimonial
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
     * Constructor
     */
    public function __construct()
    {
        $this->metropolises = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set forHomePage
     *
     * @param boolean $forHomePage
     *
     * @return Testimonial
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
     * Add metropolise
     *
     * @param \AppBundle\Entity\Metropolis $metropolise
     *
     * @return Testimonial
     */
    public function addMetropolise(\AppBundle\Entity\Metropolis $metropolise)
    {
        $this->metropolises[] = $metropolise;

        return $this;
    }

    /**
     * Remove metropolise
     *
     * @param \AppBundle\Entity\Metropolis $metropolise
     */
    public function removeMetropolise(\AppBundle\Entity\Metropolis $metropolise)
    {
        $this->metropolises->removeElement($metropolise);
    }

    /**
     * Get metropolises
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMetropolises()
    {
        return $this->metropolises;
    }
}

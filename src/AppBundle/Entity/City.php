<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\CityRepository")
 * @ORM\Table(name="city")
 *
 * @Vich\Uploadable
 */
class City
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
	 * @ORM\Column(type="boolean")
	 *
	 * @var boolean
	 */
	protected $isDistrict;

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
	 * @ORM\Column(type="string", length=128, unique=true)
	 *
	 * @var string
	 */
	protected $slug;

	/**
	 * @ORM\Column(type="text", nullable = true)
	 *
	 * @var string
	 */
	protected $text = '';

	/**
	 * @ORM\Column(type="string", length=10)
	 *
	 * @var string
	 */
	protected $zipCode;

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
    protected $isGenericCity = false;

    /**
     * @ORM\ManyToOne(targetEntity="Metropolis", inversedBy="cities")
     * @ORM\OrderBy({"name" = "ASC"})
     */
    protected $metropolis;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $areaText;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $transportText;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $developerText;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $populationText;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $altitudeText;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $neighboringCities;

    /**
     * @ORM\Column(type="datetime", nullable = true)
     *
     * @var \DateTime
     */
    protected $updatedAt;


    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $headerTitle;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="home_image", fileNameProperty="headerImageName")
     *
     * @var File
     */
    protected $headerImageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $headerImageName;


    /**
     * @Vich\UploadableField(mapping="home_image", fileNameProperty="sliderImage1Name")
     *
     * @var File
     */
    protected $sliderImage1File;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $sliderImage1Name;

    /**
     * @Vich\UploadableField(mapping="home_image", fileNameProperty="sliderImage2Name")
     *
     * @var File
     */
    protected $sliderImage2File;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $sliderImage2Name;

    /**
     * @Vich\UploadableField(mapping="home_image", fileNameProperty="sliderImage3Name")
     *
     * @var File
     */
    protected $sliderImage3File;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $sliderImage3Name;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $sliderVideo1Html;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $sliderVideo2Html;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $sliderVideo3Html;

    /**
     * @ORM\Column(type="integer", nullable = true)
     *
     * @var string
     */
    protected $sliderImage1Order;

    /**
     * @ORM\Column(type="integer", nullable = true)
     *
     * @var string
     */
    protected $sliderImage2Order;

    /**
     * @ORM\Column(type="integer", nullable = true)
     *
     * @var string
     */
    protected $sliderImage3Order;

    /**
     * @ORM\Column(type="integer", nullable = true)
     *
     * @var string
     */
    protected $sliderVideo1Order;

    /**
     * @ORM\Column(type="integer", nullable = true)
     *
     * @var string
     */
    protected $sliderVideo2Order;

    /**
     * @ORM\Column(type="integer", nullable = true)
     *
     * @var string
     */
    protected $sliderVideo3Order;



    /**
     * @return File
     */
    public function getHeaderImageFile()
    {
        return $this->headerImageFile;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return City
     */
    public function setHeaderImageFile(File $image = null)
    {
        $this->headerImageFile = $image;

        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getSliderImage1File()
    {
        return $this->sliderImage1File;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return City
     */
    public function setSliderImage1File(File $image = null)
    {
        $this->sliderImage1File = $image;

        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getSliderImage2File()
    {
        return $this->sliderImage2File;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return City
     */
    public function setSliderImage2File(File $image = null)
    {
        $this->sliderImage2File = $image;

        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getSliderImage3File()
    {
        return $this->sliderImage3File;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return City
     */
    public function setSliderImage3File(File $image = null)
    {
        $this->sliderImage3File = $image;

        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }

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
	 * Get isDistrict
	 *
	 * @return boolean
	 */
	public function getIsDistrict()
	{
		return $this->isDistrict;
	}

	/**
	 * Set isDistrict
	 *
	 * @param boolean $isDistrict
	 *
	 * @return City
	 */
	public function setIsDistrict($isDistrict)
	{
		$this->isDistrict = $isDistrict;

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
	 * Get zipCode
	 *
	 * @return string
	 */
	public function getZipCode()
	{
		return $this->zipCode;
	}

	/**
	 * Set zipCode
	 *
	 * @param string $zipCode
	 *
	 * @return City
	 */
	public function setZipCode($zipCode)
	{
		$this->zipCode = $zipCode;

		return $this;
	}

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return City
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
        $this->sliders = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set areaText
     *
     * @param string $areaText
     *
     * @return City
     */
    public function setAreaText($areaText)
    {
        $this->areaText = $areaText;

        return $this;
    }

    /**
     * Get areaText
     *
     * @return string
     */
    public function getAreaText()
    {
        return $this->areaText;
    }

    /**
     * Set transportText
     *
     * @param string $transportText
     *
     * @return City
     */
    public function setTransportText($transportText)
    {
        $this->transportText = $transportText;

        return $this;
    }

    /**
     * Get transportText
     *
     * @return string
     */
    public function getTransportText()
    {
        return $this->transportText;
    }

    /**
     * Set developerText
     *
     * @param string $developerText
     *
     * @return City
     */
    public function setDeveloperText($developerText)
    {
        $this->developerText = $developerText;

        return $this;
    }

    /**
     * Get developerText
     *
     * @return string
     */
    public function getDeveloperText()
    {
        return $this->developerText;
    }

    /**
     * Set populationText
     *
     * @param string $populationText
     *
     * @return City
     */
    public function setPopulationText($populationText)
    {
        $this->populationText = $populationText;

        return $this;
    }

    /**
     * Get populationText
     *
     * @return string
     */
    public function getPopulationText()
    {
        return $this->populationText;
    }

    /**
     * Set altitudeText
     *
     * @param string $altitudeText
     *
     * @return City
     */
    public function setAltitudeText($altitudeText)
    {
        $this->altitudeText = $altitudeText;

        return $this;
    }

    /**
     * Get altitudeText
     *
     * @return string
     */
    public function getAltitudeText()
    {
        return $this->altitudeText;
    }

    /**
     * Set neighboringCities
     *
     * @param string $neighboringCities
     *
     * @return City
     */
    public function setNeighboringCities($neighboringCities)
    {
        $this->neighboringCities = $neighboringCities;

        return $this;
    }

    /**
     * Get neighboringCities
     *
     * @return string
     */
    public function getNeighboringCities()
    {
        return $this->neighboringCities;
    }

    /**
     * Set metropolis
     *
     * @param \AppBundle\Entity\Metropolis $metropolis
     *
     * @return City
     */
    public function setMetropolis(\AppBundle\Entity\Metropolis $metropolis = null)
    {
        $this->metropolis = $metropolis;

        return $this;
    }

    /**
     * Get metropolis
     *
     * @return \AppBundle\Entity\Metropolis
     */
    public function getMetropolis()
    {
        return $this->metropolis;
    }

    /**
     * Add slider
     *
     * @param \AppBundle\Entity\Slider $slider
     *
     * @return City
     */
    public function addSlider(\AppBundle\Entity\Slider $slider)
    {
        $this->sliders[] = $slider;

        return $this;
    }

    /**
     * Remove slider
     *
     * @param \AppBundle\Entity\Slider $slider
     */
    public function removeSlider(\AppBundle\Entity\Slider $slider)
    {
        $this->sliders->removeElement($slider);
    }

    /**
     * Get sliders
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSliders()
    {
        return $this->sliders;
    }

    /**
     * Set headerImageName
     *
     * @param string $headerImageName
     *
     * @return City
     */
    public function setHeaderImageName($headerImageName)
    {
        $this->headerImageName = $headerImageName;

        return $this;
    }

    /**
     * Get headerImageName
     *
     * @return string
     */
    public function getHeaderImageName()
    {
        return $this->headerImageName;
    }

    /**
     * Set sliderImage1Name
     *
     * @param string $sliderImage1Name
     *
     * @return City
     */
    public function setSliderImage1Name($sliderImage1Name)
    {
        $this->sliderImage1Name = $sliderImage1Name;

        return $this;
    }

    /**
     * Get sliderImage1Name
     *
     * @return string
     */
    public function getSliderImage1Name()
    {
        return $this->sliderImage1Name;
    }

    /**
     * Set sliderImage2Name
     *
     * @param string $sliderImage2Name
     *
     * @return City
     */
    public function setSliderImage2Name($sliderImage2Name)
    {
        $this->sliderImage2Name = $sliderImage2Name;

        return $this;
    }

    /**
     * Get sliderImage2Name
     *
     * @return string
     */
    public function getSliderImage2Name()
    {
        return $this->sliderImage2Name;
    }

    /**
     * Set sliderImage3Name
     *
     * @param string $sliderImage3Name
     *
     * @return City
     */
    public function setSliderImage3Name($sliderImage3Name)
    {
        $this->sliderImage3Name = $sliderImage3Name;

        return $this;
    }

    /**
     * Get sliderImage3Name
     *
     * @return string
     */
    public function getSliderImage3Name()
    {
        return $this->sliderImage3Name;
    }

    /**
     * Set sliderVideo1Html
     *
     * @param string $sliderVideo1Html
     *
     * @return City
     */
    public function setSliderVideo1Html($sliderVideo1Html)
    {
        $this->sliderVideo1Html = $sliderVideo1Html;

        return $this;
    }

    /**
     * Get sliderVideo1Html
     *
     * @return string
     */
    public function getSliderVideo1Html()
    {
        return $this->sliderVideo1Html;
    }

    /**
     * Set sliderVideo2Html
     *
     * @param string $sliderVideo2Html
     *
     * @return City
     */
    public function setSliderVideo2Html($sliderVideo2Html)
    {
        $this->sliderVideo2Html = $sliderVideo2Html;

        return $this;
    }

    /**
     * Get sliderVideo2Html
     *
     * @return string
     */
    public function getSliderVideo2Html()
    {
        return $this->sliderVideo2Html;
    }

    /**
     * Set sliderVideo3Html
     *
     * @param string $sliderVideo3Html
     *
     * @return City
     */
    public function setSliderVideo3Html($sliderVideo3Html)
    {
        $this->sliderVideo3Html = $sliderVideo3Html;

        return $this;
    }

    /**
     * Get sliderVideo3Html
     *
     * @return string
     */
    public function getSliderVideo3Html()
    {
        return $this->sliderVideo3Html;
    }

    /**
     * Set sliderImage1Order
     *
     * @param integer $sliderImage1Order
     *
     * @return City
     */
    public function setSliderImage1Order($sliderImage1Order)
    {
        $this->sliderImage1Order = $sliderImage1Order;

        return $this;
    }

    /**
     * Get sliderImage1Order
     *
     * @return integer
     */
    public function getSliderImage1Order()
    {
        return $this->sliderImage1Order;
    }

    /**
     * Set sliderImage2Order
     *
     * @param integer $sliderImage2Order
     *
     * @return City
     */
    public function setSliderImage2Order($sliderImage2Order)
    {
        $this->sliderImage2Order = $sliderImage2Order;

        return $this;
    }

    /**
     * Get sliderImage2Order
     *
     * @return integer
     */
    public function getSliderImage2Order()
    {
        return $this->sliderImage2Order;
    }

    /**
     * Set sliderImage3Order
     *
     * @param integer $sliderImage3Order
     *
     * @return City
     */
    public function setSliderImage3Order($sliderImage3Order)
    {
        $this->sliderImage3Order = $sliderImage3Order;

        return $this;
    }

    /**
     * Get sliderImage3Order
     *
     * @return integer
     */
    public function getSliderImage3Order()
    {
        return $this->sliderImage3Order;
    }

    /**
     * Set sliderVideo1Order
     *
     * @param integer $sliderVideo1Order
     *
     * @return City
     */
    public function setSliderVideo1Order($sliderVideo1Order)
    {
        $this->sliderVideo1Order = $sliderVideo1Order;

        return $this;
    }

    /**
     * Get sliderVideo1Order
     *
     * @return integer
     */
    public function getSliderVideo1Order()
    {
        return $this->sliderVideo1Order;
    }

    /**
     * Set sliderVideo2Order
     *
     * @param integer $sliderVideo2Order
     *
     * @return City
     */
    public function setSliderVideo2Order($sliderVideo2Order)
    {
        $this->sliderVideo2Order = $sliderVideo2Order;

        return $this;
    }

    /**
     * Get sliderVideo2Order
     *
     * @return integer
     */
    public function getSliderVideo2Order()
    {
        return $this->sliderVideo2Order;
    }

    /**
     * Set sliderVideo3Order
     *
     * @param integer $sliderVideo3Order
     *
     * @return City
     */
    public function setSliderVideo3Order($sliderVideo3Order)
    {
        $this->sliderVideo3Order = $sliderVideo3Order;

        return $this;
    }

    /**
     * Get sliderVideo3Order
     *
     * @return integer
     */
    public function getSliderVideo3Order()
    {
        return $this->sliderVideo3Order;
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
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return string
     */
    public function getHeaderTitle()
    {
        return $this->headerTitle;
    }

    /**
     * @param string $headerTitle
     */
    public function setHeaderTitle($headerTitle)
    {
        $this->headerTitle = $headerTitle;
    }

    /**
     * @return bool
     */
    public function isGenericCity()
    {
        return $this->isGenericCity;
    }

    /**
     * @param bool $isGenericCity
     */
    public function setIsGenericCity($isGenericCity)
    {
        $this->isGenericCity = $isGenericCity;
    }



    public function getSliderItems()
    {
        $items = array();

        if ($this->getSliderImage1Name() != '') {
            $items[] = array(
                'order'=>$this->getSliderImage1Order(),
                'img'=>'sliderImage1File'
            );
        }
        if ($this->getSliderImage2Name() != '') {
            $items[] = array(
                'order'=>$this->getSliderImage2Order(),
                'img'=>'sliderImage2File'
            );
        }
        if ($this->getSliderImage3Name() != '') {
            $items[] = array(
                'order'=>$this->getSliderImage3Order(),
                'img'=>'sliderImage3File'
            );
        }
        if ($this->getSliderVideo1Html() != '') {
            $items[] = array(
                'order'=>$this->getSliderVideo1Order(),
                'video'=>$this->getSliderVideo1Html()
            );
        }
        if ($this->getSliderVideo2Html() != '') {
            $items[] = array(
                'order'=>$this->getSliderVideo2Order(),
                'video'=>$this->getSliderVideo2Html()
            );
        }
        if ($this->getSliderVideo3Html() != '') {
            $items[] = array(
                'order'=>$this->getSliderVideo3Order(),
                'video'=>$this->getSliderVideo3Html()
            );
        }

        usort($items, function($a, $b){return $a['order'] > $b['order'];});

        return array_slice($items, 0, 3);
    }

    public function __toString()
    {
        return $this->getName();
    }
}

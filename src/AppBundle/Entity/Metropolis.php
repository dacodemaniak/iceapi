<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @ORM\Table(name="metropolis")
 *
 * @Vich\Uploadable
 */
class Metropolis
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
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $metaDescription;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $metaTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
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
     * @ORM\Column(type="datetime", nullable = true)
     *
     * @var \DateTime
     */
    protected $updatedAt = null;

    /**
     * @ORM\Column(type="boolean")
     *
     * @var boolean
     */
    protected $isActive = false;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $topTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $topBtn;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $topBtnLink;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $mainTitle;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $mainContent;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $testimonialTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $developerTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $sliderTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $howItWorksTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $howItWorks1Title;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $howItWorks1Text;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $howItWorks2Title;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $howItWorks2Text;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $howItWorks3Title;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $howItWorks3Text;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $howItWorksMainTitle;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $howItWorksMainText;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $sliderAfterBloc1Title;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $sliderAfterBloc1Text;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $sliderAfterBloc2Title;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $sliderAfterBloc2Text;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $sliderAfterBloc3Title;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $sliderAfterBloc3Text;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $sliderAfterBloc4Title;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $sliderAfterBloc4Text;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $districtsTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $citiesTitle;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $mapSVGHtml;

    /**
     * @ORM\ManyToMany(targetEntity="Developer", mappedBy="metropolises")
     * @ORM\OrderBy({"name" = "ASC"})
     */
    protected $developers;

    /**
     * @ORM\ManyToMany(targetEntity="Testimonial", mappedBy="metropolises")
     * @ORM\OrderBy({"name" = "ASC"})
     */
    protected $testimonials;

    /**
     * @ORM\OneToMany(targetEntity="City", mappedBy="metropolis")
     * @ORM\OrderBy({"name" = "ASC"})
     */
    protected $cities;


    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $headerTitle;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $headerSubtitle;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $headerSearchPlaceholder;


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
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="home_image", fileNameProperty="howItWorksImageName")
     *
     * @var File
     */
    protected $howItWorksImageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $howItWorksImageName;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="home_image", fileNameProperty="developersImageName")
     *
     * @var File
     */
    protected $developersImageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $developersImageName;


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
     * @return Metropolis
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
    public function getHowItWorksImageFile()
    {
        return $this->howItWorksImageFile;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Metropolis
     */
    public function setHowItWorksImageFile(File $image = null)
    {
        $this->howItWorksImageFile = $image;

        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getDevelopersImageFile()
    {
        return $this->developersImageFile;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Metropolis
     */
    public function setDevelopersImageFile(File $image = null)
    {
        $this->developersImageFile = $image;

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
     * @return Metropolis
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
     * @return Metropolis
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
     * @return Metropolis
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
     * Constructor
     */
    public function __construct()
    {
        $this->developers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sliders = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return Metropolis
     */
    public function setMetaDescription($metaDescription)
    {
        $this->metaDescription = $metaDescription;

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
     * Set metaTitle
     *
     * @param string $metaTitle
     *
     * @return Metropolis
     */
    public function setMetaTitle($metaTitle)
    {
        $this->metaTitle = $metaTitle;

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
     * Set name
     *
     * @param string $name
     *
     * @return Metropolis
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * Set slug
     *
     * @param string $slug
     *
     * @return Metropolis
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Metropolis
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Metropolis
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
     * Set topTitle
     *
     * @param string $topTitle
     *
     * @return Metropolis
     */
    public function setTopTitle($topTitle)
    {
        $this->topTitle = $topTitle;

        return $this;
    }

    /**
     * Get topTitle
     *
     * @return string
     */
    public function getTopTitle()
    {
        return $this->topTitle;
    }

    /**
     * Set topBtn
     *
     * @param string $topBtn
     *
     * @return Metropolis
     */
    public function setTopBtn($topBtn)
    {
        $this->topBtn = $topBtn;

        return $this;
    }

    /**
     * Get topBtn
     *
     * @return string
     */
    public function getTopBtn()
    {
        return $this->topBtn;
    }

    /**
     * Set topBtnLink
     *
     * @param string $topBtnLink
     *
     * @return Metropolis
     */
    public function setTopBtnLink($topBtnLink)
    {
        $this->topBtnLink = $topBtnLink;

        return $this;
    }

    /**
     * Get topBtnLink
     *
     * @return string
     */
    public function getTopBtnLink()
    {
        return $this->topBtnLink;
    }

    /**
     * Set mainTitle
     *
     * @param string $mainTitle
     *
     * @return Metropolis
     */
    public function setMainTitle($mainTitle)
    {
        $this->mainTitle = $mainTitle;

        return $this;
    }

    /**
     * Get mainTitle
     *
     * @return string
     */
    public function getMainTitle()
    {
        return $this->mainTitle;
    }

    /**
     * Set mainContent
     *
     * @param string $mainContent
     *
     * @return Metropolis
     */
    public function setMainContent($mainContent)
    {
        $this->mainContent = $mainContent;

        return $this;
    }

    /**
     * Get mainContent
     *
     * @return string
     */
    public function getMainContent()
    {
        return $this->mainContent;
    }

    /**
     * Set testimonialTitle
     *
     * @param string $testimonialTitle
     *
     * @return Metropolis
     */
    public function setTestimonialTitle($testimonialTitle)
    {
        $this->testimonialTitle = $testimonialTitle;

        return $this;
    }

    /**
     * Get testimonialTitle
     *
     * @return string
     */
    public function getTestimonialTitle()
    {
        return $this->testimonialTitle;
    }

    /**
     * Set developerTitle
     *
     * @param string $developerTitle
     *
     * @return Metropolis
     */
    public function setDeveloperTitle($developerTitle)
    {
        $this->developerTitle = $developerTitle;

        return $this;
    }

    /**
     * Get developerTitle
     *
     * @return string
     */
    public function getDeveloperTitle()
    {
        return $this->developerTitle;
    }

    /**
     * Set sliderTitle
     *
     * @param string $sliderTitle
     *
     * @return Metropolis
     */
    public function setSliderTitle($sliderTitle)
    {
        $this->sliderTitle = $sliderTitle;

        return $this;
    }

    /**
     * Get sliderTitle
     *
     * @return string
     */
    public function getSliderTitle()
    {
        return $this->sliderTitle;
    }

    /**
     * Set howItWorksTitle
     *
     * @param string $howItWorksTitle
     *
     * @return Metropolis
     */
    public function setHowItWorksTitle($howItWorksTitle)
    {
        $this->howItWorksTitle = $howItWorksTitle;

        return $this;
    }

    /**
     * Get howItWorksTitle
     *
     * @return string
     */
    public function getHowItWorksTitle()
    {
        return $this->howItWorksTitle;
    }

    /**
     * Set howItWorks1Title
     *
     * @param string $howItWorks1Title
     *
     * @return Metropolis
     */
    public function setHowItWorks1Title($howItWorks1Title)
    {
        $this->howItWorks1Title = $howItWorks1Title;

        return $this;
    }

    /**
     * Get howItWorks1Title
     *
     * @return string
     */
    public function getHowItWorks1Title()
    {
        return $this->howItWorks1Title;
    }

    /**
     * Set howItWorks1Text
     *
     * @param string $howItWorks1Text
     *
     * @return Metropolis
     */
    public function setHowItWorks1Text($howItWorks1Text)
    {
        $this->howItWorks1Text = $howItWorks1Text;

        return $this;
    }

    /**
     * Get howItWorks1Text
     *
     * @return string
     */
    public function getHowItWorks1Text()
    {
        return $this->howItWorks1Text;
    }

    /**
     * Set howItWorks2Title
     *
     * @param string $howItWorks2Title
     *
     * @return Metropolis
     */
    public function setHowItWorks2Title($howItWorks2Title)
    {
        $this->howItWorks2Title = $howItWorks2Title;

        return $this;
    }

    /**
     * Get howItWorks2Title
     *
     * @return string
     */
    public function getHowItWorks2Title()
    {
        return $this->howItWorks2Title;
    }

    /**
     * Set howItWorks2Text
     *
     * @param string $howItWorks2Text
     *
     * @return Metropolis
     */
    public function setHowItWorks2Text($howItWorks2Text)
    {
        $this->howItWorks2Text = $howItWorks2Text;

        return $this;
    }

    /**
     * Get howItWorks2Text
     *
     * @return string
     */
    public function getHowItWorks2Text()
    {
        return $this->howItWorks2Text;
    }

    /**
     * Set howItWorks3Title
     *
     * @param string $howItWorks3Title
     *
     * @return Metropolis
     */
    public function setHowItWorks3Title($howItWorks3Title)
    {
        $this->howItWorks3Title = $howItWorks3Title;

        return $this;
    }

    /**
     * Get howItWorks3Title
     *
     * @return string
     */
    public function getHowItWorks3Title()
    {
        return $this->howItWorks3Title;
    }

    /**
     * Set howItWorks3Text
     *
     * @param string $howItWorks3Text
     *
     * @return Metropolis
     */
    public function setHowItWorks3Text($howItWorks3Text)
    {
        $this->howItWorks3Text = $howItWorks3Text;

        return $this;
    }

    /**
     * Get howItWorks3Text
     *
     * @return string
     */
    public function getHowItWorks3Text()
    {
        return $this->howItWorks3Text;
    }

    /**
     * Set howItWorksMainTitle
     *
     * @param string $howItWorksMainTitle
     *
     * @return Metropolis
     */
    public function setHowItWorksMainTitle($howItWorksMainTitle)
    {
        $this->howItWorksMainTitle = $howItWorksMainTitle;

        return $this;
    }

    /**
     * Get howItWorksMainTitle
     *
     * @return string
     */
    public function getHowItWorksMainTitle()
    {
        return $this->howItWorksMainTitle;
    }

    /**
     * Set howItWorksMainText
     *
     * @param string $howItWorksMainText
     *
     * @return Metropolis
     */
    public function setHowItWorksMainText($howItWorksMainText)
    {
        $this->howItWorksMainText = $howItWorksMainText;

        return $this;
    }

    /**
     * Get howItWorksMainText
     *
     * @return string
     */
    public function getHowItWorksMainText()
    {
        return $this->howItWorksMainText;
    }

    /**
     * Set sliderAfterBloc1Title
     *
     * @param string $sliderAfterBloc1Title
     *
     * @return Metropolis
     */
    public function setSliderAfterBloc1Title($sliderAfterBloc1Title)
    {
        $this->sliderAfterBloc1Title = $sliderAfterBloc1Title;

        return $this;
    }

    /**
     * Get sliderAfterBloc1Title
     *
     * @return string
     */
    public function getSliderAfterBloc1Title()
    {
        return $this->sliderAfterBloc1Title;
    }

    /**
     * Set sliderAfterBloc1Text
     *
     * @param string $sliderAfterBloc1Text
     *
     * @return Metropolis
     */
    public function setSliderAfterBloc1Text($sliderAfterBloc1Text)
    {
        $this->sliderAfterBloc1Text = $sliderAfterBloc1Text;

        return $this;
    }

    /**
     * Get sliderAfterBloc1Text
     *
     * @return string
     */
    public function getSliderAfterBloc1Text()
    {
        return $this->sliderAfterBloc1Text;
    }

    /**
     * Set sliderAfterBloc2Title
     *
     * @param string $sliderAfterBloc2Title
     *
     * @return Metropolis
     */
    public function setSliderAfterBloc2Title($sliderAfterBloc2Title)
    {
        $this->sliderAfterBloc2Title = $sliderAfterBloc2Title;

        return $this;
    }

    /**
     * Get sliderAfterBloc2Title
     *
     * @return string
     */
    public function getSliderAfterBloc2Title()
    {
        return $this->sliderAfterBloc2Title;
    }

    /**
     * Set sliderAfterBloc2Text
     *
     * @param string $sliderAfterBloc2Text
     *
     * @return Metropolis
     */
    public function setSliderAfterBloc2Text($sliderAfterBloc2Text)
    {
        $this->sliderAfterBloc2Text = $sliderAfterBloc2Text;

        return $this;
    }

    /**
     * Get sliderAfterBloc2Text
     *
     * @return string
     */
    public function getSliderAfterBloc2Text()
    {
        return $this->sliderAfterBloc2Text;
    }

    /**
     * Set sliderAfterBloc3Title
     *
     * @param string $sliderAfterBloc3Title
     *
     * @return Metropolis
     */
    public function setSliderAfterBloc3Title($sliderAfterBloc3Title)
    {
        $this->sliderAfterBloc3Title = $sliderAfterBloc3Title;

        return $this;
    }

    /**
     * Get sliderAfterBloc3Title
     *
     * @return string
     */
    public function getSliderAfterBloc3Title()
    {
        return $this->sliderAfterBloc3Title;
    }

    /**
     * Set sliderAfterBloc3Text
     *
     * @param string $sliderAfterBloc3Text
     *
     * @return Metropolis
     */
    public function setSliderAfterBloc3Text($sliderAfterBloc3Text)
    {
        $this->sliderAfterBloc3Text = $sliderAfterBloc3Text;

        return $this;
    }

    /**
     * Get sliderAfterBloc3Text
     *
     * @return string
     */
    public function getSliderAfterBloc3Text()
    {
        return $this->sliderAfterBloc3Text;
    }

    /**
     * Set sliderAfterBloc4Title
     *
     * @param string $sliderAfterBloc4Title
     *
     * @return Metropolis
     */
    public function setSliderAfterBloc4Title($sliderAfterBloc4Title)
    {
        $this->sliderAfterBloc4Title = $sliderAfterBloc4Title;

        return $this;
    }

    /**
     * Get sliderAfterBloc4Title
     *
     * @return string
     */
    public function getSliderAfterBloc4Title()
    {
        return $this->sliderAfterBloc4Title;
    }

    /**
     * Set sliderAfterBloc4Text
     *
     * @param string $sliderAfterBloc4Text
     *
     * @return Metropolis
     */
    public function setSliderAfterBloc4Text($sliderAfterBloc4Text)
    {
        $this->sliderAfterBloc4Text = $sliderAfterBloc4Text;

        return $this;
    }

    /**
     * Get sliderAfterBloc4Text
     *
     * @return string
     */
    public function getSliderAfterBloc4Text()
    {
        return $this->sliderAfterBloc4Text;
    }

    /**
     * Set districtsTitle
     *
     * @param string $districtsTitle
     *
     * @return Metropolis
     */
    public function setDistrictsTitle($districtsTitle)
    {
        $this->districtsTitle = $districtsTitle;

        return $this;
    }

    /**
     * Get districtsTitle
     *
     * @return string
     */
    public function getDistrictsTitle()
    {
        return $this->districtsTitle;
    }

    /**
     * Set citiesTitle
     *
     * @param string $citiesTitle
     *
     * @return Metropolis
     */
    public function setCitiesTitle($citiesTitle)
    {
        $this->citiesTitle = $citiesTitle;

        return $this;
    }

    /**
     * Get citiesTitle
     *
     * @return string
     */
    public function getCitiesTitle()
    {
        return $this->citiesTitle;
    }

    /**
     * Set mapSVGHtml
     *
     * @param string $mapSVGHtml
     *
     * @return Metropolis
     */
    public function setMapSVGHtml($mapSVGHtml)
    {
        $this->mapSVGHtml = $mapSVGHtml;

        return $this;
    }

    /**
     * Get mapSVGHtml
     *
     * @return string
     */
    public function getMapSVGHtml()
    {
        return $this->mapSVGHtml;
    }

    /**
     * Add developer
     *
     * @param \AppBundle\Entity\Developer $developer
     *
     * @return Metropolis
     */
    public function addDeveloper(\AppBundle\Entity\Developer $developer)
    {
        $this->developers[] = $developer;

        return $this;
    }

    /**
     * Remove developer
     *
     * @param \AppBundle\Entity\Developer $developer
     */
    public function removeDeveloper(\AppBundle\Entity\Developer $developer)
    {
        $this->developers->removeElement($developer);
    }

    /**
     * Get developers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDevelopers()
    {
        return $this->developers;
    }

    /**
     * Add slider
     *
     * @param \AppBundle\Entity\Slider $slider
     *
     * @return Metropolis
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
     * Add city
     *
     * @param \AppBundle\Entity\City $city
     *
     * @return Metropolis
     */
    public function addCity(\AppBundle\Entity\City $city)
    {
        $this->cities[] = $city;

        return $this;
    }

    /**
     * Remove city
     *
     * @param \AppBundle\Entity\City $city
     */
    public function removeCity(\AppBundle\Entity\City $city)
    {
        $this->cities->removeElement($city);
    }

    /**
     * Get cities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * Set headerImageName
     *
     * @param string $headerImageName
     *
     * @return Metropolis
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
     * Set howItWorksImageName
     *
     * @param string $howItWorksImageName
     *
     * @return Metropolis
     */
    public function setHowItWorksImageName($howItWorksImageName)
    {
        $this->howItWorksImageName = $howItWorksImageName;

        return $this;
    }

    /**
     * Get howItWorksImageName
     *
     * @return string
     */
    public function getHowItWorksImageName()
    {
        return $this->howItWorksImageName;
    }

    /**
     * Set developersImageName
     *
     * @param string $developersImageName
     *
     * @return Metropolis
     */
    public function setDevelopersImageName($developersImageName)
    {
        $this->developersImageName = $developersImageName;

        return $this;
    }

    /**
     * Get developersImageName
     *
     * @return string
     */
    public function getDevelopersImageName()
    {
        return $this->developersImageName;
    }

    /**
     * Set sliderImage1Name
     *
     * @param string $sliderImage1Name
     *
     * @return Metropolis
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
     * @return Metropolis
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
     * @return Metropolis
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
     * @return Metropolis
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
     * @return Metropolis
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
     * @return Metropolis
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
     * @return Metropolis
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
     * @return Metropolis
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
     * @return Metropolis
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
     * @return Metropolis
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
     * @return Metropolis
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
     * @return Metropolis
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
     * Set headerTitle
     *
     * @param string $headerTitle
     *
     * @return Metropolis
     */
    public function setHeaderTitle($headerTitle)
    {
        $this->headerTitle = $headerTitle;

        return $this;
    }

    /**
     * Get headerTitle
     *
     * @return string
     */
    public function getHeaderTitle()
    {
        return $this->headerTitle;
    }

    /**
     * Set headerSubtitle
     *
     * @param string $headerSubtitle
     *
     * @return Metropolis
     */
    public function setHeaderSubtitle($headerSubtitle)
    {
        $this->headerSubtitle = $headerSubtitle;

        return $this;
    }

    /**
     * Get headerSubtitle
     *
     * @return string
     */
    public function getHeaderSubtitle()
    {
        return $this->headerSubtitle;
    }

    /**
     * Set headerSearchPlaceholder
     *
     * @param string $headerSearchPlaceholder
     *
     * @return Metropolis
     */
    public function setHeaderSearchPlaceholder($headerSearchPlaceholder)
    {
        $this->headerSearchPlaceholder = $headerSearchPlaceholder;

        return $this;
    }

    /**
     * Get headerSearchPlaceholder
     *
     * @return string
     */
    public function getHeaderSearchPlaceholder()
    {
        return $this->headerSearchPlaceholder;
    }

    /**
     * Add testimonial
     *
     * @param \AppBundle\Entity\Testimonial $testimonial
     *
     * @return Metropolis
     */
    public function addTestimonial(\AppBundle\Entity\Testimonial $testimonial)
    {
        $this->testimonials[] = $testimonial;

        return $this;
    }

    /**
     * Remove testimonial
     *
     * @param \AppBundle\Entity\Testimonial $testimonial
     */
    public function removeTestimonial(\AppBundle\Entity\Testimonial $testimonial)
    {
        $this->testimonials->removeElement($testimonial);
    }

    /**
     * Get testimonials
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTestimonials()
    {
        return $this->testimonials;
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

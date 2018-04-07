<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @ORM\Table(name="home")
 *
 * @Vich\Uploadable
 */
class Home
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
    protected $topTitle;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $topText;

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
    protected $topLeftTitle;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="home_image", fileNameProperty="topLeftImageName")
     *
     * @var File
     */
    protected $topLeftImageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $topLeftImageName;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $topLeftText;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $topRightTitle;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="home_image", fileNameProperty="topRightImageName")
     *
     * @var File
     */
    protected $topRightImageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $topRightImageName;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $topRightText;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $articleTitle;

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
    protected $sliderTitle;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $sliderText;

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
    protected $metropolisTitle;

    /**
     * @ORM\Column(type="text", nullable = true)
     *
     * @var string
     */
    protected $mapSVGHtml;

    /**
     * @ORM\Column(type="datetime", nullable = true)
     *
     * @var \DateTime
     */
    protected $updatedAt;


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
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="home_image", fileNameProperty="mainImageName")
     *
     * @var File
     */
    protected $mainImageFile;

    /**
     * @ORM\Column(type="string", length=255, nullable = true)
     *
     * @var string
     */
    protected $mainImageName;


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
     * @return Home
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
    public function getDevelopersImageFile()
    {
        return $this->developersImageFile;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Home
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
    public function getMainImageFile()
    {
        return $this->mainImageFile;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Home
     */
    public function setMainImageFile(File $image = null)
    {
        $this->mainImageFile = $image;

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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return File
     */
    public function getTopLeftImageFile()
    {
        return $this->topLeftImageFile;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Home
     */
    public function setTopLeftImageFile(File $image = null)
    {
        $this->topLeftImageFile = $image;

        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getTopRightImageFile()
    {
        return $this->topRightImageFile;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Home
     */
    public function setTopRightImageFile(File $image = null)
    {
        $this->topRightImageFile = $image;

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
     * Set metaDescription
     *
     * @param string $metaDescription
     *
     * @return Home
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
     * @return Home
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
     * Set topTitle
     *
     * @param string $topTitle
     *
     * @return Home
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
     * Set topText
     *
     * @param string $topText
     *
     * @return Home
     */
    public function setTopText($topText)
    {
        $this->topText = $topText;

        return $this;
    }

    /**
     * Get topText
     *
     * @return string
     */
    public function getTopText()
    {
        return $this->topText;
    }

    /**
     * Set topBtn
     *
     * @param string $topBtn
     *
     * @return Home
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
     * @return Home
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
     * Set topLeftTitle
     *
     * @param string $topLeftTitle
     *
     * @return Home
     */
    public function setTopLeftTitle($topLeftTitle)
    {
        $this->topLeftTitle = $topLeftTitle;

        return $this;
    }

    /**
     * Get topLeftTitle
     *
     * @return string
     */
    public function getTopLeftTitle()
    {
        return $this->topLeftTitle;
    }

    /**
     * Set topLeftImageName
     *
     * @param string $topLeftImageName
     *
     * @return Home
     */
    public function setTopLeftImageName($topLeftImageName)
    {
        $this->topLeftImageName = $topLeftImageName;

        return $this;
    }

    /**
     * Get topLeftImageName
     *
     * @return string
     */
    public function getTopLeftImageName()
    {
        return $this->topLeftImageName;
    }

    /**
     * Set topLeftText
     *
     * @param string $topLeftText
     *
     * @return Home
     */
    public function setTopLeftText($topLeftText)
    {
        $this->topLeftText = $topLeftText;

        return $this;
    }

    /**
     * Get topLeftText
     *
     * @return string
     */
    public function getTopLeftText()
    {
        return $this->topLeftText;
    }

    /**
     * Set topRightTitle
     *
     * @param string $topRightTitle
     *
     * @return Home
     */
    public function setTopRightTitle($topRightTitle)
    {
        $this->topRightTitle = $topRightTitle;

        return $this;
    }

    /**
     * Get topRightTitle
     *
     * @return string
     */
    public function getTopRightTitle()
    {
        return $this->topRightTitle;
    }

    /**
     * Set topRightImageName
     *
     * @param string $topRightImageName
     *
     * @return Home
     */
    public function setTopRightImageName($topRightImageName)
    {
        $this->topRightImageName = $topRightImageName;

        return $this;
    }

    /**
     * Get topRightImageName
     *
     * @return string
     */
    public function getTopRightImageName()
    {
        return $this->topRightImageName;
    }

    /**
     * Set topRightText
     *
     * @param string $topRightText
     *
     * @return Home
     */
    public function setTopRightText($topRightText)
    {
        $this->topRightText = $topRightText;

        return $this;
    }

    /**
     * Get topRightText
     *
     * @return string
     */
    public function getTopRightText()
    {
        return $this->topRightText;
    }

    /**
     * Set articleTitle
     *
     * @param string $articleTitle
     *
     * @return Home
     */
    public function setArticleTitle($articleTitle)
    {
        $this->articleTitle = $articleTitle;

        return $this;
    }

    /**
     * Get articleTitle
     *
     * @return string
     */
    public function getArticleTitle()
    {
        return $this->articleTitle;
    }

    /**
     * Set testimonialTitle
     *
     * @param string $testimonialTitle
     *
     * @return Home
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
     * @return Home
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
     * Set mainTitle
     *
     * @param string $mainTitle
     *
     * @return Home
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
     * @return Home
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
     * Set howItWorksTitle
     *
     * @param string $howItWorksTitle
     *
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * Set sliderTitle
     *
     * @param string $sliderTitle
     *
     * @return Home
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
     * Set sliderText
     *
     * @param string $sliderText
     *
     * @return Home
     */
    public function setSliderText($sliderText)
    {
        $this->sliderText = $sliderText;

        return $this;
    }

    /**
     * Get sliderText
     *
     * @return string
     */
    public function getSliderText()
    {
        return $this->sliderText;
    }

    /**
     * Set sliderAfterBloc1Title
     *
     * @param string $sliderAfterBloc1Title
     *
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * Set metropolisTitle
     *
     * @param string $metropolisTitle
     *
     * @return Home
     */
    public function setMetropolisTitle($metropolisTitle)
    {
        $this->metropolisTitle = $metropolisTitle;

        return $this;
    }

    /**
     * Get metropolisTitle
     *
     * @return string
     */
    public function getMetropolisTitle()
    {
        return $this->metropolisTitle;
    }

    /**
     * Set mapSVGHtml
     *
     * @param string $mapSVGHtml
     *
     * @return Home
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Home
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
     * Set headerImageName
     *
     * @param string $headerImageName
     *
     * @return Home
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
     * Set developersImageName
     *
     * @param string $developersImageName
     *
     * @return Home
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
     * Set mainImageName
     *
     * @param string $mainImageName
     *
     * @return Home
     */
    public function setMainImageName($mainImageName)
    {
        $this->mainImageName = $mainImageName;

        return $this;
    }

    /**
     * Get mainImageName
     *
     * @return string
     */
    public function getMainImageName()
    {
        return $this->mainImageName;
    }

    /**
     * Set sliderImage1Name
     *
     * @param string $sliderImage1Name
     *
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
     * @return Home
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
}

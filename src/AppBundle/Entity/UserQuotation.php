<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user_quotation")
 *
 */
class UserQuotation
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
	 * @ORM\Column(type="datetime")
	 *
	 * @var \DateTime
	 */
	protected $date = null;

	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $text;

	/**
	 * @ORM\Column(type="text")
	 *
	 * @var string
	 */
	protected $userInfos;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return UserQuotation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return UserQuotation
     */
    public function setText($text)
    {
        $this->text = $text;

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
     * Set userInfos
     *
     * @param string $userInfos
     *
     * @return UserQuotation
     */
    public function setUserInfos($userInfos)
    {
        $this->userInfos = $userInfos;

        return $this;
    }

    /**
     * Get userInfos
     *
     * @return string
     */
    public function getUserInfos()
    {
        return $this->userInfos;
    }
}

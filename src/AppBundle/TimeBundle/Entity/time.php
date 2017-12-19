<?php

namespace AppBundle\TimeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * time
 */
class time
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $vname;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $datum;

    /**
     * @var \DateTime
     */
    private $kommen;

    /**
     * @var \DateTime
     */
    private $gehen;

    /**
     * @var \DateTime
     */
    private $pause;

    /**
     * @var \DateTime
     */
    private $total;

    /**
     * @var integer
     */
    private $statusId;

    /**
     * @var string
     */
    private $bemerkung;


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
     * Set userId
     *
     * @param integer $userId
     * @return time
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set vname
     *
     * @param string $vname
     * @return time
     */
    public function setVname($vname)
    {
        $this->vname = $vname;

        return $this;
    }

    /**
     * Get vname
     *
     * @return string 
     */
    public function getVname()
    {
        return $this->vname;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return time
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
     * Set datum
     *
     * @param \DateTime $datum
     * @return time
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime 
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set kommen
     *
     * @param \DateTime $kommen
     * @return time
     */
    public function setKommen($kommen)
    {
        $this->kommen = $kommen;

        return $this;
    }

    /**
     * Get kommen
     *
     * @return \DateTime 
     */
    public function getKommen()
    {
        return $this->kommen;
    }

    /**
     * Set gehen
     *
     * @param \DateTime $gehen
     * @return time
     */
    public function setGehen($gehen)
    {
        $this->gehen = $gehen;

        return $this;
    }

    /**
     * Get gehen
     *
     * @return \DateTime 
     */
    public function getGehen()
    {
        return $this->gehen;
    }

    /**
     * Set pause
     *
     * @param \DateTime $pause
     * @return time
     */
    public function setPause($pause)
    {
        $this->pause = $pause;

        return $this;
    }

    /**
     * Get pause
     *
     * @return \DateTime 
     */
    public function getPause()
    {
        return $this->pause;
    }

    /**
     * Set total
     *
     * @param \DateTime $total
     * @return time
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return \DateTime 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set statusId
     *
     * @param integer $statusId
     * @return time
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return integer 
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set bemerkung
     *
     * @param string $bemerkung
     * @return time
     */
    public function setBemerkung($bemerkung)
    {
        $this->bemerkung = $bemerkung;

        return $this;
    }

    /**
     * Get bemerkung
     *
     * @return string 
     */
    public function getBemerkung()
    {
        return $this->bemerkung;
    }
}

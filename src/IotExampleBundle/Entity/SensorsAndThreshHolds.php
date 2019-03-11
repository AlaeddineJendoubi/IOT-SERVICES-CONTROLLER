<?php

namespace IotExampleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SensorsAndThreshHolds
 *
 * @ORM\Table(name="sensors_and_thresh_holds")
 * @ORM\Entity(repositoryClass="IotExampleBundle\Repository\SensorsAndThreshHoldsRepository")
 */
class SensorsAndThreshHolds
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="temp", type="integer")
     */
    private $temp;

    /**
     * @var int
     *
     * @ORM\Column(name="lum", type="integer")
     */
    private $lum;

    /**
     * @var int
     *
     * @ORM\Column(name="lumThreashHold", type="integer")
     */
    private $lumThreashHold;

    /**
     * @var int
     *
     * @ORM\Column(name="TempThreashHold", type="integer")
     */
    private $tempThreashHold;

    /**
     * @var int
     *
     * @ORM\Column(name="buzzerState", type="integer")
     */
    private $buzzerState;

    /**
     * @var int
     *
     * @ORM\Column(name="ledState", type="integer")
     */
    private $ledState;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string")
     */
    private $message;


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
     * Set temp
     *
     * @param integer $temp
     *
     * @return SensorsAndThreshHolds
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp
     *
     * @return int
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set lum
     *
     * @param integer $lum
     *
     * @return SensorsAndThreshHolds
     */
    public function setLum($lum)
    {
        $this->lum = $lum;

        return $this;
    }

    /**
     * Get lum
     *
     * @return int
     */
    public function getLum()
    {
        return $this->lum;
    }

    /**
     * Set lumThreashHold
     *
     * @param integer $lumThreashHold
     *
     * @return SensorsAndThreshHolds
     */
    public function setLumThreashHold($lumThreashHold)
    {
        $this->lumThreashHold = $lumThreashHold;

        return $this;
    }

    /**
     * Get lumThreashHold
     *
     * @return int
     */
    public function getLumThreashHold()
    {
        return $this->lumThreashHold;
    }

    /**
     * Set tempThreashHold
     *
     * @param integer $tempThreashHold
     *
     * @return SensorsAndThreshHolds
     */
    public function setTempThreashHold($tempThreashHold)
    {
        $this->tempThreashHold = $tempThreashHold;

        return $this;
    }

    /**
     * Get tempThreashHold
     *
     * @return int
     */
    public function getTempThreashHold()
    {
        return $this->tempThreashHold;
    }

    /**
     * Set buzzerState
     *
     * @param integer $buzzerState
     *
     * @return SensorsAndThreshHolds
     */
    public function setBuzzerState($buzzerState)
    {
        $this->buzzerState = $buzzerState;

        return $this;
    }

    /**
     * Get buzzerState
     *
     * @return int
     */
    public function getBuzzerState()
    {
        return $this->buzzerState;
    }

    /**
     * Set ledState
     *
     * @param integer $ledState
     *
     * @return SensorsAndThreshHolds
     */
    public function setLedState($ledState)
    {
        $this->ledState = $ledState;

        return $this;
    }

    /**
     * Get ledState
     *
     * @return int
     */
    public function getLedState()
    {
        return $this->ledState;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

}


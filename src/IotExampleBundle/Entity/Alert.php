<?php

namespace IotExampleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alert
 *
 * @ORM\Table(name="alert")
 * @ORM\Entity(repositoryClass="IotExampleBundle\Repository\AlertRepository")
 */
class Alert
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
     * @var \DateTime
     *
     * @ORM\Column(name="DateAlert", type="date")
     */
    private $dateAlert;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


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
     * Set dateAlert
     *
     * @param \DateTime $dateAlert
     *
     * @return Alert
     */
    public function setDateAlert($dateAlert)
    {
        $this->dateAlert = $dateAlert;

        return $this;
    }

    /**
     * Get dateAlert
     *
     * @return \DateTime
     */
    public function getDateAlert()
    {
        return $this->dateAlert;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Alert
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}


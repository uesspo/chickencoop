<?php

class Hen
{
    protected $_name;

    protected $_age;

    protected $_birthDate;

    public function __construct($name, DateTime $birthdate)
    {
        $this->setName($name);
        $this->setBirthdate($birthdate);
        $this->getAgeInDays();
    }

    /**
     * Set Hen's Name
     *
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->_name;
    }

    /**
     * Set Birth Date
     *
     * @param DateTime $date
     * @return $this
     */
    public function setBirthdate(DateTime $date)
    {
        $this->_birthDate = $date;
        return $this;
    }

    /**
     * Get Birth Date
     *
     * @return DateTime|null
     */
    public function getBirthdate()
    {
        return $this->_birthDate;
    }

    /**
     * Get Hen's Age in Days
     *
     * @return int
     */
    public function getAgeInDays()
    {
        if (is_null($this->_age))
        {
            $today = new DateTime();
            $interval = $today->diff($this->getBirthdate());
            $this->_age = $interval->days;
        }

        return (int)$this->_age;
    }

    /**
     * Get Hen's Age in Weeks
     *
     * @return int
     */
    public function getAgeInWeeks()
    {
        return (int)floor($this->getAgeInDays() / 7);
    }

    /**
     * Has the Hen laid eggs?
     *
     * @todo Make this a recurring determination
     * @return bool
     */
    public function hasProbablyLaidEggs()
    {
        if ($this->getAgeInWeeks() > 20 && $this->getAgeInWeeks() < 26)
        {
            return true;
        }

        return false;
    }
}
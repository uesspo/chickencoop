<?php

class Brood
{
    protected $_hens = array();

    /**
     * Add Hen to Brood
     *
     * @param Hen $hen
     * @return $this
     */
    public function addHen(Hen $hen)
    {
        $this->_hens[] = $hen;
        return $this;
    }

    /**
     * Get Array of Hens
     *
     * @return array
     */
    public function getHens()
    {
        return $this->_hens;
    }
}

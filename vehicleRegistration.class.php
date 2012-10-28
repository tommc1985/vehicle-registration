<?php
require_once('metaDataVehicleRegistrationBase.class.php');
require_once('metaDataPre1932Registration.class.php');
require_once('metaDataPre1963Registration.class.php');
require_once('metaDataPre1982Registration.class.php');
require_once('metaDataPre2001Registration.class.php');
require_once('metaDataCurrentRegistration.class.php');

/**
 * Class to determine what era a UK Vehicle Registration is from, along with any meta data
 *
 * Research from http://en.wikipedia.org/wiki/Vehicle_registration_plates_of_the_United_Kingdom
 * and http://www.cvpg.co.uk/REG.pdf
 */
class VehicleRegistration
{
    protected $_region;
    protected $_rawInput;
    protected $_preparedInput;
    protected $_period;
    protected $_metaData;
    protected $_errorMessage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->_reset();
    }

    /**
     * Reset all class properties
     * @return NULL
     */
    protected function _reset()
    {
        $this->_setRegion('uk');
        $this->_setRawInput('');
        $this->_setPreparedInput(false);
        $this->_setPeriod(false);
        $this->_setMetaData(new VehicleRegistrationMetaData(''));
        $this->_errorMessage = false;
    }

    /**
     * Set Region to check Vehicle Registration against
     * @param string $region    The region
     */
    protected function _setRegion($region)
    {
        $this->_region = $region;
    }

    /**
     * Return the region
     * @return string       The region
     */
    public function getRegion()
    {
        return $this->_region;
    }

    /**
     * Set Initial Raw Input
     * @param string $input     UK Vehicle Registration
     */
    protected function _setRawInput($input)
    {
        if (!is_string($input)) {
            throw new Exception("Input not a string");
        }

        $this->_rawInput = $input;
    }

    /**
     * Returns the Initial Raw Input that was passed in the verifyRegistration method
     * @return string       UK Vehicle Registration
     */
    protected function getRawInput()
    {
        return $this->_rawInput;
    }

    /**
     * Set Prepared Input
     * @param string $input     UK Vehicle Registration
     */
    protected function _setPreparedInput($input)
    {
        $this->_preparedInput = $input;
    }

    /**
     * Return the prepared input
     * @return string       The prepared string
     */
    protected function getPreparedInput()
    {
        return $this->_preparedInput;
    }

    /**
     * Set the period the Vehicle was registered in
     * @param string    $period     The period
     */
    protected function _setPeriod($period)
    {
        $this->_period = $period;
    }

    /**
     * Return the period
     * @return string   The period
     */
    public function getPeriod()
    {
        return $this->_period;
    }

    /**
     * Set the meta data
     * @param Object    $period     Meta Data
     */
    protected function _setMetaData($metaData)
    {
        $this->_metaData = $metaData;
    }

    /**
     * Return the meta data
     * @return string   Meta Data
     */
    public function getMetaData()
    {
        return $this->_metaData;
    }

    /**
     * Set error message
     * @param Exception $errorMessage  The exception that was thrown
     */
    protected function _setErrorMessage($errorMessage)
    {
        $this->_errorMessage = $errorMessage;
    }

    /**
     * Return the error message
     * @return string       The error message
     */
    public function getErrorMessage()
    {
        return $this->_errorMessage;
    }

    /**
     * Verify the UK Vehicle Registration
     * @param  string $input    UK Vehicle Registration
     * @return NULL
     */
    public function verifyRegistration($input)
    {
        try {
            $this->_reset();
            $this->_setRawInput($input);
            $this->_prepareInput();
            $this->_discoverPeriod();
        } catch (Exception $e) {
            $this->_setErrorMessage($e->getMessage());
        }
    }

    /**
     * Verify that the string that was passed is a valid UK Vehicle Registration
     * @return NULL|true    Whether input was valid or not
     */
    protected function _isValidRawInput()
    {
        if (strlen($this->_rawInput) > 8 || preg_match("/[^a-zA-Z\d\s]/", $this->_rawInput)) {
            throw new Exception("Input is not a valid Vehicle Registration for the UK");
        }

        return true;
    }

    /**
     * Prepare input - Check that the input is valid, if so remove all characters except
     * Letters, Digits and spaces, then convert all letters to upper case
     * @return NULL
     */
    protected function _prepareInput()
    {
        $this->_isValidRawInput();

        $preparedInput = preg_replace("/[^a-zA-Z\d]/", '', $this->_rawInput);
        $preparedInput = strtoupper($preparedInput);

        $this->_setPreparedInput($preparedInput);
    }

    /**
     * Verify that the UK Vehicle Registration is from before 1932
     * @return boolean [description]
     */
    protected function _isPre1932()
    {
        return 1 == preg_match("/^[A-Z][A-Z]?[1-9][0-9]{0,3}$|S0$|G0$|RG0$|LM0$/", $this->_preparedInput);
    }

    /**
     * Verify that the UK Vehicle Registration is from before 1963 and after 1932
     * @return boolean [description]
     */
    protected function _isPre1963()
    {
        return 1 == preg_match("/^[A-HJ-PR-Y]{3}[1-9][0-9]{0,2}$|[1-9][0-9]{0,3}[A-HJ-PR-Y]$/", $this->_preparedInput);
    }

    /**
     * Verify that the UK Vehicle Registration is from before 1982 and after 1963
     * @return boolean [description]
     */
    protected function _isPre1982()
    {
        return 1 == preg_match("/^[A-HJ-PR-Y]{3}[1-9][0-9]{0,2}[A-HJ-PR-Y]$/", $this->_preparedInput);
    }

    /**
     * Verify that the UK Vehicle Registration is from before 2001 and after 1982
     * @return boolean [description]
     */
    protected function _isPre2001()
    {
        return 1 == preg_match("/^[A-HJ-PR-Y][1-9][0-9]{0,2}[A-HJ-PR-Y]{3}$/", $this->_preparedInput);
    }

    /**
     * Verify that the UK Vehicle Registration is from after 2001
     * @return boolean [description]
     */
    protected function _isCurrent()
    {
        return 1 === preg_match("/^[A-HJ-PR-Y]{2}[0-9][0-9][A-HJ-PR-Z]{3}/", $this->_preparedInput) && 1  !== preg_match("/^[A-HJ-PR-Y]{2}(01)/", $this->_preparedInput);
    }

    /**
     * Determine which period the Vehicle Registration is from
     * @return NULL
     */
    protected function _discoverPeriod()
    {
        switch (true) {
            case $this->_isCurrent():
                $this->_setPeriod('current');
                $this->_setMetaData(new metaDataCurrentRegistration($this->getPreparedInput()));
                break;
            case $this->_isPre2001():
                $this->_setPeriod('pre2001');
                $this->_setMetaData(new metaDataPre2001Registration($this->getPreparedInput()));
                break;
            case $this->_isPre1982():
                $this->_setPeriod('pre1982');
                $this->_setMetaData(new metaDataPre1982Registration($this->getPreparedInput()));
                break;
            case $this->_isPre1963():
                $this->_setPeriod('pre1963');
                $this->_setMetaData(new metaDataPre1963Registration($this->getPreparedInput()));
                break;
            case $this->_isPre1932():
                $this->_setPeriod('pre1932');
                $this->_setMetaData(new metaDataPre1932Registration($this->getPreparedInput()));
                break;
            default:
                $this->_setPeriod('unknown');
                $this->_setMetaData(new VehicleRegistrationMetaData($this->getPreparedInput()));
        }
    }

    /**
     * Debug method, returns all object variables, formatted within <pre> tags
     * @return NULL
     */
    public function debug()
    {
        echo '<pre>';
        var_dump(get_object_vars($this));
        echo '</pre>';
    }

}
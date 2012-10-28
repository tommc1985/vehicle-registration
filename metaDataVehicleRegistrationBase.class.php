<?php
/**
 * Base Class for Vehicle Registration Meta Data
 */
class VehicleRegistrationMetaData
{
    protected $_registrationNumber;
    protected $_exceptions;
    protected $_exception;
    protected $_locations;
    protected $_location;
    protected $_dates;
    protected $_startDate;
    protected $_endDate;

    /**
     * Constructor
     * @param string $registrationNumber    Vehicle Registration Number
     */
    public function __construct($registrationNumber)
    {
        $this->_reset();

        $this->_loadExceptionData();
        $this->_loadLocationData();
        $this->_loadDatesData();

        $this->_setRegistrationNumber($registrationNumber);

        $this->_verifyException();
        $this->_verifyLocation();
        $this->_verifyDates();
    }

    /**
     * Reset all class properties
     * @return NULL
     */
    protected function _reset()
    {
        $this->_setRegistrationNumber('');
        $this->_setException(false);
        $this->_setLocation(false);
        $this->_setStartDate(false);
        $this->_setEndDate(false);
    }

    /**
     * Set Registration Number
     * @param string $registrationNumber    Vehicle Registration Number
     */
    protected function _setRegistrationNumber($registrationNumber)
    {
        $this->_registrationNumber = $registrationNumber;
    }

    /**
     * Get Vehicle Registration Number
     * @return string   Registration Number
     */
    public function getRegistrationNumber()
    {
        return $this->_registrationNumber;
    }

    /**
     * Set Exception
     * @param string $exception    Exception
     */
    protected function _setException($exception)
    {
        $this->_exception = $exception;
    }

    /**
     * Get Exception Details
     * @return string   Exception Details
     */
    public function getException()
    {
        return $this->_exception;
    }

    /**
     * Set Location
     * @param string $location    Location
     */
    protected function _setLocation($location)
    {
        $this->_location = $location;
    }

    /**
     * Get Location
     * @return string   Location
     */
    public function getLocation()
    {
        return $this->_location;
    }

    /**
     * Set Start Date
     * @param string $startDate   Start Date
     */
    protected function _setStartDate($startDate)
    {
        $this->_startDate = $startDate;
    }

    /**
     * Get Start Date
     * @return string   Start Date
     */
    public function getStartDate()
    {
        return $this->_startDate;
    }

    /**
     * Set End Date
     * @param string $endDate   End Date
     */
    protected function _setEndDate($endDate)
    {
        $this->_endDate = $endDate;
    }

    /**
     * Get End Date
     * @return string   End Date
     */
    public function getEndDate()
    {
        return $this->_endDate;
    }

    /**
     * Verify Exception
     * @return NULL
     */
    protected function _verifyException()
    {
        foreach ($this->_exceptions as $exception) {
            if (1 == preg_match($exception['registrationNumber'], $this->getRegistrationNumber())) {

                $this->_setException($exception['details']);
            }
        }
    }

    /**
     * The given Registration is an exception to the usual rules
     * @return boolean  Is there an exception
     */
    public function isException()
    {
        return false !== $this->getException();
    }

    /**
     * Verify Location
     * @return NULL
     */
    protected function _verifyLocation()
    {
        foreach ($this->_locations as $location) {
            if (1 == preg_match($location['registrationNumber'], $this->getRegistrationNumber())) {

                $this->_setLocation($location['location']);
            }
        }
    }

    /**
     * The location of registration is known
     * @return boolean  Is the location known
     */
    public function locationKnown()
    {
        return false !== $this->getLocation();
    }

    /**
     * Registration Start and End Dates are known
     * @return boolean  Are the Start and End Dates known
     */
    public function datesKnown()
    {
        return false !== $this->getStartDate() && false !== $this->getEndDate();
    }

    /**
     * Verify Date of Registration
     * @return NULL
     */
    protected function _verifyDates()
    {
        foreach ($this->_dates as $date) {
            if (1 == preg_match($date['registrationNumber'], $this->getRegistrationNumber())) {

                $this->_setStartDate($date['startDate']);
                $this->_setEndDate($date['endDate']);
            }
        }
    }

    /**
     * Load Exception Data
     * @return NULL
     */
    protected function _loadExceptionData()
    {
        $this->_exceptions = array();
    }

    /**
     * Load Location Data
     * @return NULL
     */
    protected function _loadLocationData()
    {
        $this->_locations = array();
    }

    /**
     * Load Dates Data
     * @return NULL
     */
    protected function _loadDatesData()
    {
        $this->_dates = array();
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
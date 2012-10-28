<?php
require_once('metaDataVehicleRegistrationBase.class.php');

class metaDataPre1982Registration extends VehicleRegistrationMetaData
{
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
        $this->_dates = array(
            array(
                'registrationNumber' => "/[A]$/",
                'startDate' => "1963-01-01",
                'endDate' => "1963-12-01",
            ),
            array(
                'registrationNumber' => "/[B]$/",
                'startDate' => "1964-01-01",
                'endDate' => "1964-12-01",
            ),
            array(
                'registrationNumber' => "/[C]$/",
                'startDate' => "1965-01-01",
                'endDate' => "1965-12-01",
            ),
            array(
                'registrationNumber' => "/[D]$/",
                'startDate' => "1966-01-01",
                'endDate' => "1966-12-01",
            ),
            array(
                'registrationNumber' => "/[E]$/",
                'startDate' => "1967-01-01",
                'endDate' => "1967-07-31",
            ),
            array(
                'registrationNumber' => "/[F]$/",
                'startDate' => "1967-08-01",
                'endDate' => "1968-07-31",
            ),
            array(
                'registrationNumber' => "/[G]$/",
                'startDate' => "1968-08-01",
                'endDate' => "1969-07-31",
            ),
            array(
                'registrationNumber' => "/[H]$/",
                'startDate' => "1969-08-01",
                'endDate' => "1970-07-31",
            ),
            array(
                'registrationNumber' => "/[J]$/",
                'startDate' => "1970-08-01",
                'endDate' => "1971-07-31",
            ),
            array(
                'registrationNumber' => "/[K]$/",
                'startDate' => "1971-08-01",
                'endDate' => "1972-07-31",
            ),
            array(
                'registrationNumber' => "/[L]$/",
                'startDate' => "1972-08-01",
                'endDate' => "1973-07-31",
            ),
            array(
                'registrationNumber' => "/[M]$/",
                'startDate' => "1973-08-01",
                'endDate' => "1974-07-31",
            ),
            array(
                'registrationNumber' => "/[N]$/",
                'startDate' => "1974-08-01",
                'endDate' => "1975-07-31",
            ),
            array(
                'registrationNumber' => "/[P]$/",
                'startDate' => "1975-08-01",
                'endDate' => "1976-07-31",
            ),
            array(
                'registrationNumber' => "/[R]$/",
                'startDate' => "1976-08-01",
                'endDate' => "1977-07-31",
            ),
            array(
                'registrationNumber' => "/[S]$/",
                'startDate' => "1977-08-01",
                'endDate' => "1978-07-31",
            ),
            array(
                'registrationNumber' => "/[T]$/",
                'startDate' => "1978-08-01",
                'endDate' => "1979-07-31",
            ),
            array(
                'registrationNumber' => "/[V]$/",
                'startDate' => "1979-08-01",
                'endDate' => "1980-07-31",
            ),
            array(
                'registrationNumber' => "/[W]$/",
                'startDate' => "1980-08-01",
                'endDate' => "1981-07-31",
            ),
            array(
                'registrationNumber' => "/[X]$/",
                'startDate' => "1981-08-01",
                'endDate' => "1982-07-31",
            ),
            array(
                'registrationNumber' => "/[Y]$/",
                'startDate' => "1982-08-01",
                'endDate' => "1983-07-31",
            ),
        );
    }
}
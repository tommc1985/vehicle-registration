<?php
require_once('metaDataVehicleRegistrationBase.class.php');

class metaDataPre2001Registration extends VehicleRegistrationMetaData
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
                'registrationNumber' => "/^[A]/",
                'startDate' => "1983-08-01",
                'endDate' => "1984-07-31",
            ),
            array(
                'registrationNumber' => "/^[B]/",
                'startDate' => "1984-08-01",
                'endDate' => "1985-07-31",
            ),
            array(
                'registrationNumber' => "/^[C]/",
                'startDate' => "1985-08-01",
                'endDate' => "1986-07-31",
            ),
            array(
                'registrationNumber' => "/^[D]/",
                'startDate' => "1986-08-01",
                'endDate' => "1987-07-31",
            ),
            array(
                'registrationNumber' => "/^[E]/",
                'startDate' => "1987-08-01",
                'endDate' => "1988-07-31",
            ),
            array(
                'registrationNumber' => "/^[F]/",
                'startDate' => "1988-08-01",
                'endDate' => "1989-07-31",
            ),
            array(
                'registrationNumber' => "/^[G]/",
                'startDate' => "1989-08-01",
                'endDate' => "1990-07-31",
            ),
            array(
                'registrationNumber' => "/^[H]/",
                'startDate' => "1990-08-01",
                'endDate' => "1991-07-31",
            ),
            array(
                'registrationNumber' => "/^[J]/",
                'startDate' => "1991-08-01",
                'endDate' => "1992-07-31",
            ),
            array(
                'registrationNumber' => "/^[K]/",
                'startDate' => "1992-08-01",
                'endDate' => "1993-07-31",
            ),
            array(
                'registrationNumber' => "/^[L]/",
                'startDate' => "1993-08-01",
                'endDate' => "1994-07-31",
            ),
            array(
                'registrationNumber' => "/^[M]/",
                'startDate' => "1994-08-01",
                'endDate' => "1995-07-31",
            ),
            array(
                'registrationNumber' => "/^[N]/",
                'startDate' => "1995-08-01",
                'endDate' => "1996-07-31",
            ),
            array(
                'registrationNumber' => "/^[P]/",
                'startDate' => "1996-08-01",
                'endDate' => "1997-07-31",
            ),
            array(
                'registrationNumber' => "/^[R]/",
                'startDate' => "1997-08-01",
                'endDate' => "1998-07-31",
            ),
            array(
                'registrationNumber' => "/^[S]/",
                'startDate' => "1998-08-01",
                'endDate' => "1999-02-28",
            ),
            array(
                'registrationNumber' => "/^[T]/",
                'startDate' => "1999-03-01",
                'endDate' => "1999-08-31",
            ),
            array(
                'registrationNumber' => "/^[V]/",
                'startDate' => "1999-09-01",
                'endDate' => "2000-02-29",
            ),
            array(
                'registrationNumber' => "/^[W]/",
                'startDate' => "2000-03-01",
                'endDate' => "2000-08-31",
            ),
            array(
                'registrationNumber' => "/^[X]/",
                'startDate' => "2000-09-01",
                'endDate' => "2001-02-28",
            ),
            array(
                'registrationNumber' => "/^[Y]/",
                'startDate' => "2001-03-01",
                'endDate' => "2001-08-31",
            ),
        );
    }
}
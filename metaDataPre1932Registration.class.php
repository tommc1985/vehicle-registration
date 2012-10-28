<?php
require_once('metaDataVehicleRegistrationBase.class.php');

class metaDataPre1932Registration extends VehicleRegistrationMetaData
{
    /**
     * Load Exception Data
     * @return NULL
     */
    protected function _loadExceptionData()
    {
        $this->_exceptions = array(
            array(
                'registrationNumber' => '/^S0$/',
                'details' => 'Owned by The Lord Provost of Edinburgh',
            ),
            array(
                'registrationNumber' => '/^G0$/',
                'details' => 'Owned by The Lord Provost of Glasgow',
            ),
            array(
                'registrationNumber' => '/^RG0$/',
                'details' => 'Owned by The Lord Provost of Aberdeen',
            ),
            array(
                'registrationNumber' => '/^LM0$/',
                'details' => 'Owned by The Lord Mayor of London',
            ),
        );
    }

    /**
     * Load Location Data
     * @return NULL
     */
    protected function _loadLocationData()
    {
        $this->_locations = array(
            array(
                'registrationNumber' => '/^[A]/',
                'location' => 'London',
            ),
            array(
                'registrationNumber' => '/^[B]/',
                'location' => 'Lancashire',
            ),
            array(
                'registrationNumber' => '/^[C]/',
                'location' => 'Yorkshire',
            ),
            array(
                'registrationNumber' => '/^[D]/',
                'location' => 'Kent',
            ),
            array(
                'registrationNumber' => '/^[E]/',
                'location' => 'Staffordshire',
            ),
            array(
                'registrationNumber' => '/^[F]/',
                'location' => 'Essex',
            ),
            array(
                'registrationNumber' => '/^[G]/',
                'location' => 'Glasgow',
            ),
            array(
                'registrationNumber' => '/^[H]/',
                'location' => 'Middlesex',
            ),
            array(
                'registrationNumber' => '/^[J]/',
                'location' => 'Durham',
            ),
            array(
                'registrationNumber' => '/^[K]/',
                'location' => 'Liverpool',
            ),
            array(
                'registrationNumber' => '/^[L]/',
                'location' => 'Glamorgan',
            ),
            array(
                'registrationNumber' => '/^[M]/',
                'location' => 'Cheshire',
            ),
            array(
                'registrationNumber' => '/^[N]/',
                'location' => 'Manchester',
            ),
            array(
                'registrationNumber' => '/^[O]/',
                'location' => 'Birmingham',
            ),
            array(
                'registrationNumber' => '/^[P]/',
                'location' => 'Surrey',
            ),
            array(
                'registrationNumber' => '/^[R]/',
                'location' => 'Derbyshire',
            ),
            array(
                'registrationNumber' => '/^[S]/',
                'location' => 'Edinburgh',
            ),
            array(
                'registrationNumber' => '/^[T]/',
                'location' => 'Devon',
            ),
            array(
                'registrationNumber' => '/^[U]/',
                'location' => 'Leeds',
            ),
            array(
                'registrationNumber' => '/^[V]/',
                'location' => 'Lanarkshire',
            ),
            array(
                'registrationNumber' => '/^[W]/',
                'location' => 'Sheffield',
            ),
            array(
                'registrationNumber' => '/^[X]/',
                'location' => 'Northumberland',
            ),
            array(
                'registrationNumber' => '/^[Y]/',
                'location' => 'Somerset',
            ),
            array(
                'registrationNumber' => '/^[Z]/',
                'location' => 'Dublin, Ireland',
            ),
        );
    }

    /**
     * Load Dates Data
     * @return NULL
     */
    protected function _loadDatesData()
    {
        $this->_dates = array();
    }
}
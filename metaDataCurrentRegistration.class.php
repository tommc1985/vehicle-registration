<?php
require_once('metaDataVehicleRegistrationBase.class.php');

class metaDataCurrentRegistration extends VehicleRegistrationMetaData
{
    /**
     * Load Exception Data
     * @return NULL
     */
    protected function _loadExceptionData()
    {
        $this->_exceptions = array(
            array(
                'registrationNumber' => '/^(AH|AL|BY|CY|DR|ED|EH|GO|HO|MN|MO|MR|MS|MY|OK|ON|OR|OS|RU|SU|VD|VW|WC|XF|XG|XH|XJ|XK|XL|XM|XN|XO|XP|XR|XS|XT|XU|XV|XW|XX|XY)/',
                'details' => 'This area code is only used for personalised number plates',
            ),
            array(
                'registrationNumber' => '/^(FO|FU|NO|WO)/',
                'details' => 'This area code is banned',
            ),
            array(
                'registrationNumber' => '/^(T)/',
                'details' => 'Unknown',
            ),
            array(
                'registrationNumber' => '/^(XA)/',
                'details' => 'Tax Free Export (March/September)',
            ),
            array(
                'registrationNumber' => '/^(XB)/',
                'details' => 'Tax Free Export (April/October)',
            ),
            array(
                'registrationNumber' => '/^(XC)/',
                'details' => 'Tax Free Export (May/November)',
            ),
            array(
                'registrationNumber' => '/^(XD)/',
                'details' => 'Tax Free Export (June/December)',
            ),
            array(
                'registrationNumber' => '/^(XE)/',
                'details' => 'Tax Free Export (July/January)',
            ),
            array(
                'registrationNumber' => '/^(XF)/',
                'details' => 'Tax Free Export (August/February)',
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
                'registrationNumber' => '/^(AA|AB|AC|AD|AE|AF|AG|AJ|AK|AM|AN)/',
                'location' => 'Peterborough',
            ),
            array(
                'registrationNumber' => '/^(AO|AP|AR|AS|AT|AU)/',
                'location' => 'Norwich',
            ),
            array(
                'registrationNumber' => '/^(AV|AW|AX|AY)/',
                'location' => 'Ipswich',
            ),
            array(
                'registrationNumber' => '/^(BA|BB|BC|BD|BE|BF|BG|BH|BJ|BK|BL|BM|BN|BO|BP|BR|BS|BT|BU|BV|BW|BX)/',
                'location' => 'Birmingham',
            ),
            array(
                'registrationNumber' => '/^(CA|CB|CC|CD|CE|CF|CG|CH|CJ|CK|CL|CM|CN|CO)/',
                'location' => 'Cardiff',
            ),
            array(
                'registrationNumber' => '/^(CP|CR|CS|CT|CU|CV)/',
                'location' => 'Swansea',
            ),
            array(
                'registrationNumber' => '/^(CW|CX)/',
                'location' => 'Bangor',
            ),
            array(
                'registrationNumber' => '/^(DA|DB|DC|DD|DE|DF|DG|DH|DJ|DK)/',
                'location' => 'Chester',
            ),
            array(
                'registrationNumber' => '/^(DL|DM|DN|DO|DP|DS|DT|DU|DV|DW|DX|DY)/',
                'location' => 'Shrewsbury',
            ),
            array(
                'registrationNumber' => '/^(EA|EB|EC|EE|EF|EG|E|EK|EL|EM|EN|EO|EP|ER|ES|ET|EU|EV|EW|EX|EY)/',
                'location' => 'Chelmsford',
            ),
            array(
                'registrationNumber' => '/^(FA|FB|FC|FD|FE|FF|FG|FH|FJ|FK|FL|FM|FN|FP)/',
                'location' => 'Nottingham',
            ),
            array(
                'registrationNumber' => '/^(FR|FS|FT|FV|FW|FX|FY)/',
                'location' => 'Lincoln',
            ),
            array(
                'registrationNumber' => '/^(GA|GB|GC|GD|GE|GF|GG|GH|GJ|GK|GL|GM|GN)/',
                'location' => 'Maidstone',
            ),
            array(
                'registrationNumber' => '/^(GP|GR|GS|GT|GU|GV|GW|GX|GY)/',
                'location' => 'Brighton',
            ),
            array(
                'registrationNumber' => '/^(CW|CX)/',
                'location' => 'Bangor',
            ),
            array(
                'registrationNumber' => '/^(HA|HB|HC|HD|HE|HF|HG|HH|HJ)/',
                'location' => 'Bournemouth',
            ),
            array(
                'registrationNumber' => '/^(HK|HL|HM|HN|HP|HR|HS|HT|HU|HV|HX|HY)/',
                'location' => 'Portsmouth',
            ),
            array(
                'registrationNumber' => '/^(HW)/',
                'location' => 'Isle of Wight',
            ),
            array(
                'registrationNumber' => '/^(KA|KB|KC|KD|KE|KF|KG|KH|KJ|KK|KL)/',
                'location' => 'Luton',
            ),
            array(
                'registrationNumber' => '/^(KM|KN|KO|KP|KR|KS|KT|KU|KV|KW|KX|KY)/',
                'location' => 'Northampton',
            ),
            array(
                'registrationNumber' => '/^(LA|LB|LC|LD|LE|LF|LG|LH|LJ)/',
                'location' => 'Wimbledon',
            ),
            array(
                'registrationNumber' => '/^(LK|LL|LM|LN|LO|LP|LR|LS|LT)/',
                'location' => 'Stanmore (London)',
            ),
            array(
                'registrationNumber' => '/^(LU|LV|LW|LX|LY)/',
                'location' => 'Sidcup',
            ),
            array(
                'registrationNumber' => '/^(MA|MB|MC|MD|ME|MF|MG|MH|MJ|MK|ML|MM|MP|MT|MU|MV|MW|MX)/',
                'location' => 'Manchester',
            ),
            array(
                'registrationNumber' => '/^(NA|NB|NC|ND|NE|NF|NG|NH|NJ|NK|NL|NM|NN)/',
                'location' => 'Newcastle',
            ),
            array(
                'registrationNumber' => '/^(NO|NR|NS|NT|NU|NV|NW|NX|NY)/',
                'location' => 'Stockton',
            ),
            array(
                'registrationNumber' => '/^(OA|OB|OC|OD|OE|OF|OG|OH|OJ|OL|OM|OO|OP|OT|OU|OV|OW|OX|OY)/',
                'location' => 'Oxford',
            ),
            array(
                'registrationNumber' => '/^(PA|PB|PC|PD|PE|PF|PG|PH|PJ|PK|PL|PM|PN|PO|PP|PR|PS|PT)/',
                'location' => 'Preston',
            ),
            array(
                'registrationNumber' => '/^(PU|PV|PW|PX|PY)/',
                'location' => 'Carlisle',
            ),
            array(
                'registrationNumber' => '/^(RA|RB|RC|RD|RE|RF|RG|RH|RJ|RK|RL|RM|RN|RO|RR|RS|RT|RV|RW|RX|RY)/',
                'location' => 'Reading',
            ),
            array(
                'registrationNumber' => '/^(SA|SB|SC|SD|SE|SF|SG|SH|SJ)/',
                'location' => 'Glasgow',
            ),
            array(
                'registrationNumber' => '/^(SK|SL|SM|SN|SO)/',
                'location' => 'Edinburgh',
            ),
            array(
                'registrationNumber' => '/^(SP|SS|ST)/',
                'location' => 'Dundee',
            ),
            array(
                'registrationNumber' => '/^(SV|SW)/',
                'location' => 'Aberdeen',
            ),
            array(
                'registrationNumber' => '/^(SX|SY)/',
                'location' => 'Inverness',
            ),
            array(
                'registrationNumber' => '/^(VA|VB|VC|VE|VF|VG|VH|VJ|VK|VL|VM|VN|VO|VP|VS|VT|VU|VV|VX|VY)/',
                'location' => 'Worcester',
            ),
            array(
                'registrationNumber' => '/^(WA|WB|WD|WE|WF|WG|WH|WJ)/',
                'location' => 'Exeter',
            ),
            array(
                'registrationNumber' => '/^(WK|WL)/',
                'location' => 'Truro',
            ),
            array(
                'registrationNumber' => '/^(WM|WN|WP|WR|WS|WT|WU|WV|WW|WX|WY)/',
                'location' => 'Bristol',
            ),
            array(
                'registrationNumber' => '/^(YA|YB|YC|YD|YE|YF|YG|YH|YJ|YK)/',
                'location' => 'Leeds',
            ),
            array(
                'registrationNumber' => '/^(YL|YM|YN|YO|YP|YR|YS|YT|YU)/',
                'location' => 'Sheffield',
            ),
            array(
                'registrationNumber' => '/^(YV|YW|YX|YY)/',
                'location' => 'Beverley',
            ),
        );
    }

    /**
     * Load Dates Data
     * @return NULL
     */
    protected function _loadDatesData()
    {
        $dates = array();

        $year = 2000;
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 10; $j++) {

                if (!in_array($i . $j, array('01', '50', '00'))) {
                    $date = array(
                        'registrationNumber' => "/^[A-Z][A-Z]{$i}{$j}/",
                        'startDate' => "{$year}-03-01",
                        'endDate' => "{$year}-08-31",
                    );

                    $dates[] = $date;

                }

                $year++;
            }
        }

        $year = 2000;
        for ($i = 5; $i < 10; $i++) {
            for ($j = 0; $j < 10; $j++) {

                $date = array(
                    'registrationNumber' => "/^[A-Z][A-Z]{$i}{$j}/",
                    'startDate' => "{$year}-09-01",
                    'endDate' => ($year + 1) . "-02-28",
                );

                $dates[] = $date;

                $year++;
            }
        }

        $date = array(
            'registrationNumber' => "/^[A-Z][A-Z]50/",
            'startDate' => "2050-03-01",
            'endDate' => "2050-08-31",
        );
        $dates[] = $date;

        $date = array(
            'registrationNumber' => "/^[A-Z][A-Z]00/",
            'startDate' => "2050-09-01",
            'endDate' => "2051-03-28",
        );
        $dates[] = $date;

        $this->_dates = $dates;
    }
}
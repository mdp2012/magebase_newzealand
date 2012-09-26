<?php

class MageBase_NewZealand_Localiser implements Mdp2012_Localiser_Model_Interface
{
    public function getSupportedLocaleCodes()
    {
        return array('en_NZ');
    }

    public function getTaxConfiguration($localeCode)
    {
    }
}

<?php

class MageBase_NewZealand_Model_Localiser extends Mdp2012_Localiser_Model_Localiser_Abstract
{

    const CODE = 'magebase_newzealand';
    const NAME = 'MageBase_NewZealand';

    public function getCode()
    {
        return self::CODE;
    }

    public function getModuleName()
    {
        return self::NAME;
    }

    /**
     * return the locale code
     * @return array
     */
    public function getSupportedLocaleCodes()    {
        return array('en_NZ');
    }

}

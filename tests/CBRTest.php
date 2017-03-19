<?php

use AXP\CBRRU\CBR;

class CBRTest extends PHPUnit_Framework_TestCase
{
    public function testGetDaily()
    {
        $this->assertArrayHasKey(
            '@attributes',
            CBR::getDaily([
                'd' => 1,
                'date_req' => date('d/m/Y')
            ])
        );
    }

    public function testGetCurrencyCode()
    {
        $this->assertArrayHasKey(
            '@attributes',
            CBR::getCurrencyCode([
                'd' => 1
            ])
        );
    }

    public function testGetDynamic()
    {
        $this->assertArrayHasKey(
            '@attributes',
            CBR::getDynamic([
                'date_req1' => '02/03/2001',
                'date_req2' => '14/03/2001',
                'VAL_NM_RQ' => 'R01235'
            ])
        );
    }

    public function testGetOStat()
    {
        $this->assertArrayHasKey(
            '@attributes',
            CBR::getOStat([
                'date_req1' => '01/06/2001',
                'date_req2' => '05/06/2001',
            ])
        );
    }

    public function testGetMetal()
    {
        $this->assertArrayHasKey(
            '@attributes',
            CBR::getMetal([
                'date_req1' => '01/07/2001',
                'date_req2' => '13/07/2001',
            ])
        );
    }

    public function testGetMKR()
    {
        $this->assertArrayHasKey(
            '@attributes',
            CBR::getMKR([
                'date_req1' => '01/07/2001',
                'date_req2' => '13/07/2001',
            ])
        );
    }

    public function testGetDEPO()
    {
        $this->assertArrayHasKey(
            '@attributes',
            CBR::getDEPO([
                'date_req1' => '01/07/2001',
                'date_req2' => '13/07/2001',
            ])
        );
    }

    public function testGetNews()
    {
        $this->assertArrayHasKey(
            'Item',
            CBR::getNews()
        );
    }

    public function testGetBIC()
    {
        $this->assertArrayHasKey(
            '@attributes',
            CBR::getBIC([
                'bic' => 044525774
            ])
        );
    }

    public function testGetSwap()
    {
        $this->assertArrayHasKey(
            '@attributes',
            CBR::getSwap([
                'date_req1' => '01/12/2002',
                'date_req2' => '06/12/2002',
            ])
        );
    }

    public function testGetCoinsBase()
    {
        $this->assertArrayHasKey(
            '@attributes',
            CBR::getCoinsBase([
                'date_req1' => '01/12/2005',
                'date_req2' => '06/12/2002',
            ])
        );
    }
}
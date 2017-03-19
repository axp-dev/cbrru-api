<?php
/**
 * CBR.RU API for PHP.
 *
 * @author   Alexander Pushkarev <axp-dev@yandex.com>
 * @link     https://github.com/axp-dev/cbrru-api
 * @license  MIT License
 * @version  1.0.0
 */

namespace AXP\CBRRU;

class CBR
{
    const DAILY = 'http://www.cbr.ru/scripts/XML_daily.asp';
    const CURRENCY_CODE = 'http://www.cbr.ru/scripts/XML_valFull.asp';
    const DYNAMIC = 'http://www.cbr.ru/scripts/XML_dynamic.asp';
    const OSTAT = 'http://www.cbr.ru/scripts/XML_ostat.asp';
    const METAL = 'http://www.cbr.ru/scripts/xml_metall.asp';
    const MKR = 'http://www.cbr.ru/scripts/xml_mkr.asp';
    const DEPO = 'http://www.cbr.ru/scripts/xml_depo.asp';
    const NEWS = 'http://www.cbr.ru/scripts/XML_News.asp';
    const BIC = 'http://www.cbr.ru/scripts/XML_bic.asp';
    const SWAP = 'http://www.cbr.ru/scripts/xml_swap.asp';
    const COINBASE = 'http://www.cbr.ru/scripts/XMLCoinsBase.asp';

    /**
     * @param $params
     * @return mixed
     */
    public static function getDaily( $params ) {
        return self::query( self::DAILY, $params );
    }

    /**
     * @param $params
     * @return mixed
     */
    public static function getCurrencyCode( $params ) {
        return self::query( self::CURRENCY_CODE, $params );
    }

    /**
     * @param $params
     * @return mixed
     */
    public static function getDynamic( $params ) {
        return self::query( self::DYNAMIC, $params );
    }

    /**
     * @param $params
     * @return mixed
     */
    public static function getOStat( $params ) {
        return self::query( self::OSTAT, $params );
    }

    /**
     * @param $params
     * @return mixed
     */
    public static function getMetal( $params ) {
        return self::query( self::METAL, $params );
    }

    /**
     * @param $params
     * @return mixed
     */
    public static function getMKR( $params ) {
        return self::query( self::MKR, $params );
    }

    /**
     * @param $params
     * @return mixed
     */
    public static function getDEPO( $params ) {
        return self::query( self::DEPO, $params );
    }

    /**
     * @return mixed
     */
    public static function getNews() {
        return self::query( self::NEWS, []);
    }

    /**
     * @param $params
     * @return mixed
     */
    public static function getBIC( $params ) {
        return self::query( self::BIC, $params);
    }

    /**
     * @param $params
     * @return mixed
     */
    public static function getSwap( $params ) {
        return self::query( self::SWAP, $params);
    }

    /**
     * @param $params
     * @return mixed
     */
    public static function getCoinsBase( $params ) {
        return self::query( self::COINBASE, $params);
    }

    /**
     * @param $url
     * @param array $params
     * @return array|mixed
     */
    protected function query($url, $params = [] ) {
        $data = [];

        try {
            $xml = simplexml_load_file( $url . '?' . http_build_query( $params ) );
            $json = json_encode( $xml );
            $data = json_decode( $json , true );
        } catch (Exception $e) {
            $data = ['error' => $e->getMessage()];
        }

        return $data;
    }
}
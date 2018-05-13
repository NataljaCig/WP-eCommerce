<?php
/**
 * ICEPAY WP eCommerce Payment Module
 *
 * @package     ICEPAY WP eCommerce Payment Module
 * @author      ICEPAY B.V.
 * @copyright   (c) 2012-2018 ICEPAY B.V. All rights reserved.
 * @license     GNU General Public License, version 3 (GPL-3.0), see LICENSE.md
 */

class ICEPAY_Helper {

    private static $version = '2.0.1';

    public static function getVersion()
    {
        return self::$version;
    }

    public static function isIcepayPage()
    {
        return ($_GET['page'] == 'icepay-configuration');
    }

}
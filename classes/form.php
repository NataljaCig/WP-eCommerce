<?php
/**
 * ICEPAY WP eCommerce Payment Module
 *
 * @package     ICEPAY WP eCommerce Payment Module
 * @author      ICEPAY B.V.
 * @copyright   (c) 2012-2018 ICEPAY B.V. All rights reserved.
 * @license     GNU General Public License, version 3 (GPL-3.0), see LICENSE.md
 */

class ICEPAY_Form {

    public function validateSettings($input)
    {
        $options = get_option('icepay_options');

        if (!Icepay_Parameter_Validation::merchantID(intval($input['icepay_merchantid']))) {
            add_settings_error('ICEPAY', 'ICEPAY_error', __('Icepay Merchant ID:', 'icepay') . " '" . $input['icepay_merchantid'] . "' " . __('is invalid', 'icepay'));
            $input['icepay_merchantid'] = $options['icepay_merchantid'];
        }

        if (!Icepay_Parameter_Validation::secretCode($input['icepay_secretcode'])) {
            add_settings_error('ICEPAY', 'ICEPAY_error', __('Icepay Secret Code:', 'icepay') . " '" . $input['icepay_secretcode'] . "' " . __('is invalid', 'icepay'));
            $input['icepay_secretcode'] = $options['icepay_secretcode'];
        }

        return $input;
    }

    public function urlSettings($fields)
    {
        echo "<strong>" . get_option('siteurl') . "/index.php?page=icepayresult</strong>";
        if (isset($fields[1]))
            echo "<p class='description'>" . $fields[1] . "</p>";
    }

    public function textfieldSettings($fields)
    {
        $options = get_option('icepay_options');
        $field = $fields[0];
        echo "<input id='" . $field . "' name='icepay_options[" . $field . "]' size='40' type='text' value='{$options[$field]}' />";
        if (isset($fields[1]))
            echo "<p class='description'>" . $fields[1] . "</p>";
    }

}

function paymentMethodForm()
{

}


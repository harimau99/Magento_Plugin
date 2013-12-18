<?php
/**
 * MOLPay Sdn. Bhd.
 *
 * @package	MOLPay Magento Plugin
 * @author    netbuilder <code@netbuilder.com.my>
 * @copyright	Copyright (c) 2012 - 2013, Edi Abdul Rahman.
 * @license	https://github.com/eddy03/molpay_magento_plugin/blob/master/LICENSE
 * @link	https://github.com/eddy03/molpay_magento_plugin
 * @since	Version 1.8.x.x
 * @update	MOLPay <technical@molpay.com>
 * @filesource
 */

class Mage_MOLPay_Model_PaymentMethod_Debug extends Mage_Core_Model_Abstract {
  protected function _construct() {
    $this->_init('molpay/paymentmethod_debug');
  }
}
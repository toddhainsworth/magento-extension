<?php
/**
 * Campaign Monitor Magento Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you are unable to obtain it through the world-wide-web, please
 * send an email to license@magento.com and you will be sent a copy.
 *
 * @package Campaignmonitor_Createsend
 * @copyright Copyright (c) 2015 Campaign Monitor (https://www.campaignmonitor.com/)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

/**
 * Campaign Monitor authentication type selector
 *
 */
class Campaignmonitor_Createsend_Model_Config_ConflictResolutionMethod
{
    const RESOLUTION_METHOD_TIMESTAMP   = 'timestamp';
    const RESOLUTION_METHOD_SOURCE      = 'source';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        /** @var Campaignmonitor_Createsend_Helper_Data $helper */
        $helper = Mage::helper('createsend');
        return array(
            array(
                'value' => self::RESOLUTION_METHOD_TIMESTAMP,
                'label' => $helper->__('Timestamp')
            ),
            array(
                'value' => self::RESOLUTION_METHOD_SOURCE,
                'label' => $helper->__('Preferred Source')
            ),
        );
    }
}
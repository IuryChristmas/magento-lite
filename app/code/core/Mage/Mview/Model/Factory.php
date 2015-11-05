<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package     Mage_Mview
 * @copyright   Copyright (c) 2006-2014 X.commerce, Inc. (http://www.magento.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Mage_Mview_Model_Factory
 *
 * @category    Mage
 * @package     Mage_Mview
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Mage_Mview_Model_Factory
{
    /**
     * Returns model
     *
     * @param $classPath
     * @param array $arguments
     * @return false|Mage_Core_Model_Abstract
     */
    public function getModel($classPath, $arguments = array())
    {
        return Mage::getModel($classPath, $arguments);
    }

    /**
     * Returns singleton
     *
     * @param $classPath
     * @param array $arguments
     * @return Mage_Core_Model_Abstract
     */
    public function getSingleton($classPath, $arguments = array())
    {
        return Mage::getSingleton($classPath, $arguments);
    }
}
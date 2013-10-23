<?php
/**
 * Dhl_Account_Helper_Data
 *
 * @package   Dhl_Account
 * @author    Michael Lühr <michael.luehr@netresearch.de>
 * @author    Thomas Birke <thomas.birke@netresearch.de>
 * @copyright Copyright (c) 2012 Netresearch GmbH & Co.KG <http://www.netresearch.de/>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
class Dhl_Account_Helper_Data extends Mage_Core_Helper_Data
{

    /**
     * log to a separate log file
     *
     * @param string $message
     * @param int    $level
     * @param bool   $force
     * @return Dhl_Account_Helper_Data
     */
    public function log($message, $level=null, $force=false)
    {
        if (Mage::getStoreConfig('intraship/general/logging_enabled')) {
            $logfile = Mage::getModel('intraship/config')->getLogfile();
            Mage::log($message, $level, $logfile, $force);
        }
        return $this;
    }

}

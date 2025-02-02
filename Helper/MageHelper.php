<?php
/**
 * MageHelper Magento 2 Enable Disable Toggle in Configuration.
 *
 * @package      MageHelper_ConfigEnableDisableToggle
 * @author       Kishan Savaliya <kishansavaliyakb@gmail.com>
 */

namespace MageHelper\ConfigEnableDisableToggle\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Helper\AbstractHelper;

class MageHelper extends AbstractHelper
{
	protected $_scopeConfig;
	
	public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
    }

	public function getConfig($configPath)
    {
        return $this->_scopeConfig->getValue(
            $configPath,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
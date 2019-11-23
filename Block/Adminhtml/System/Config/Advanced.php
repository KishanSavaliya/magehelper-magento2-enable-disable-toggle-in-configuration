<?php
/**
 * MageHelper Magento 2 Enable Disable Toggle in Configuration.
 *
 * @package      MageHelper_ConfigEnableDisableToggle
 * @author       Kishan Savaliya <kishansavaliyakb@gmail.com>
 */

namespace MageHelper\ConfigEnableDisableToggle\Block\Adminhtml\System\Config;

class Advanced extends \Magento\Config\Block\System\Config\Form\Field
{
    protected $_template = 'MageHelper_ConfigEnableDisableToggle::system/config/advance/check.phtml';

    protected $_configPath = 'magehelper/toggle/enable'; //replace your config path here

    protected $_groupName = 'toggle'; // replace this with your group name

    protected $_fieldName = 'enable'; // replace this with your field name

    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return $this->_decorateRowHtml($element, "<td class='label'>Enable </td><td>" . $this->toHtml() . '</td><td></td>');
    }

    public function getConfigPath(){
        return $this->_configPath;
    }

    public function getGroupName(){
        return $this->_groupName;
    }

    public function getFieldName(){
        return $this->_fieldName;
    }
}
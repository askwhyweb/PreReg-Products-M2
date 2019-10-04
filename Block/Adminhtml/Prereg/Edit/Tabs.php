<?php
namespace OrviSoft\PreReg\Block\Adminhtml\Prereg\Edit;

/**
 * Admin page left menu
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('prereg_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Prereg Information'));
    }
}
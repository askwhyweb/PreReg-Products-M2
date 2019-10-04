<?php
namespace OrviSoft\PreReg\Model;

class Prereg extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('OrviSoft\PreReg\Model\ResourceModel\Prereg');
    }
}
?>
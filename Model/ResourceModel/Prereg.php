<?php
namespace OrviSoft\PreReg\Model\ResourceModel;

class Prereg extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('ov_preregister', 'id');
    }
}
?>
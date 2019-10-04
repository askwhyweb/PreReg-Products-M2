<?php

namespace OrviSoft\PreReg\Model\ResourceModel\Prereg;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('OrviSoft\PreReg\Model\Prereg', 'OrviSoft\PreReg\Model\ResourceModel\Prereg');
        $this->_map['fields']['page_id'] = 'main_table.page_id';
    }

}
?>
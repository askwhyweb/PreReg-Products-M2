<?php

namespace OrviSoft\PreReg\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
		// Ajax Post will lead here...!
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}
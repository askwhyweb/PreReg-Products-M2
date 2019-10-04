<?php
namespace OrviSoft\PreReg\Block\Adminhtml\Prereg;

class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var \Magento\Framework\Module\Manager
     */
    protected $moduleManager;

    /**
     * @var \OrviSoft\PreReg\Model\preregFactory
     */
    protected $_preregFactory;

    /**
     * @var \OrviSoft\PreReg\Model\Status
     */
    protected $_status;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \OrviSoft\PreReg\Model\preregFactory $preregFactory
     * @param \OrviSoft\PreReg\Model\Status $status
     * @param \Magento\Framework\Module\Manager $moduleManager
     * @param array $data
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \OrviSoft\PreReg\Model\PreregFactory $PreregFactory,
        \OrviSoft\PreReg\Model\Status $status,
        \Magento\Framework\Module\Manager $moduleManager,
        array $data = []
    ) {
        $this->_preregFactory = $PreregFactory;
        $this->_status = $status;
        $this->moduleManager = $moduleManager;
        parent::__construct($context, $backendHelper, $data);
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('postGrid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(false);
        $this->setVarNameFilter('post_filter');
    }

    /**
     * @return $this
     */
    protected function _prepareCollection()
    {
        $collection = $this->_preregFactory->create()->getCollection();
        $this->setCollection($collection);

        parent::_prepareCollection();

        return $this;
    }

    /**
     * @return $this
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function _prepareColumns()
    {
        $this->addColumn(
            'id',
            [
                'header' => __('ID'),
                'type' => 'number',
                'index' => 'id',
                'header_css_class' => 'col-id',
                'column_css_class' => 'col-id'
            ]
        );


		
				$this->addColumn(
					'product_name',
					[
						'header' => __('Product Name'),
						'index' => 'product_name',
					]
				);
				
				$this->addColumn(
					'first_name',
					[
						'header' => __('First Name'),
						'index' => 'first_name',
					]
				);
				
				$this->addColumn(
					'last_name',
					[
						'header' => __('Last Name'),
						'index' => 'last_name',
					]
				);
				
				$this->addColumn(
					'customer_email',
					[
						'header' => __('Customer Email'),
						'index' => 'customer_email',
					]
				);
				
				$this->addColumn(
					'timestamp',
					[
						'header' => __('Date'),
						'index' => 'timestamp',
						'type'      => 'datetime',
					]
				);
					
					


		

		
		   $this->addExportType($this->getUrl('prereg/*/exportCsv', ['_current' => true]),__('CSV'));
		   $this->addExportType($this->getUrl('prereg/*/exportExcel', ['_current' => true]),__('Excel XML'));

        $block = $this->getLayout()->getBlock('grid.bottom.links');
        if ($block) {
            $this->setChild('grid.bottom.links', $block);
        }

        return parent::_prepareColumns();
    }

	

    /**
     * @return string
     */
    public function getGridUrl()
    {
        return $this->getUrl('prereg/*/index', ['_current' => true]);
    }

    /**
     * @param \OrviSoft\PreReg\Model\prereg|\Magento\Framework\Object $row
     * @return string
     */
    public function getRowUrl($row)
    {
		return '#';
    }

	

}
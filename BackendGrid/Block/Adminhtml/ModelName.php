<?php
namespace YourCompanyName\BackendGrid\Block\Adminhtml;
class ModelName extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
		
        $this->_controller = 'adminhtml_modelname';
        $this->_blockGroup = 'YourCompanyName_BackendGrid';
        $this->_headerText = __('ModelName');
        $this->_addButtonLabel = __('Add New Entry'); 
        parent::_construct();
		
    }
}
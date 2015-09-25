<?php
/**
 * Copyright © 2015 YourCompanyName. All rights reserved.
 */
namespace YourCompanyName\BackendGrid\Model\Resource;

/**
 * ModelName resource
 */
class ModelName extends \Magento\Framework\Model\Resource\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('backendgrid_modelname', 'id');
    }

  
}

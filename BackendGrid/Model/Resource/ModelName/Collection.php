<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace YourCompanyName\BackendGrid\Model\Resource\ModelName;

/**
 * ModelNames Collection
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Collection extends \Magento\Framework\Model\Resource\Db\Collection\AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('YourCompanyName\BackendGrid\Model\ModelName', 'YourCompanyName\BackendGrid\Model\Resource\ModelName');
    }
}

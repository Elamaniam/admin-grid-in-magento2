<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Ktpl\Customform\Model\Resource\Form;
 
class Collection extends \Magento\Framework\Model\Resource\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Ktpl\Customform\Model\Form', 'Ktpl\Customform\Model\Resource\Form');
        //$this->_map['fields']['page_id'] = 'main_table.page_id';
    }
 
    
}

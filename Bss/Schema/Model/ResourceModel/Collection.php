<?php
namespace Bss\Schema\Model\ResourceModel\DataExample;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
    public function _construct(){
        $this->_init("Bss\Schema\Model\DataExample","Bss\Schema\Model\ResourceModel\DataExample");
    }
}
?>
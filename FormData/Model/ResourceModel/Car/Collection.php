<?php
namespace Arjun\FormData\Model\ResourceModel\Car;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use  Arjun\FormData\Model\Car as Model;
use  Arjun\FormData\Model\ResourceModel\Car as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
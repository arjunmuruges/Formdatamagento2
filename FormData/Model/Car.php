<?php
namespace Arjun\FormData\Model;

use Magento\Framework\Model\AbstractModel;
use Arjun\FormData\Model\ResourceModel as ResourceModel;

class Car extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel\Car::class);
    }
}
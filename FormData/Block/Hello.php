<?php

namespace Arjun\FormData\Block;

use Magento\Framework\View\Element\Template;
use Arjun\FormData\Model\ResourceModel\Car\Collection;

class Hello extends Template
{
    
    private $collection;

    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getAllCars() {
        return $this->collection;
       

    }

    public function getAddCarPostUrl() {
        return $this->getUrl('formdata/car/add');
    }

}
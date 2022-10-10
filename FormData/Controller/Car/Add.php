<?php

namespace Arjun\FormData\Controller\Car;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Arjun\FormData\Model\Car;
use Arjun\FormData\Model\ResourceModel\Car as CarResource;

class Add extends Action
{
    
    private $car;
  
    private $carResource;

    public function __construct(
        Context $context,
        Car $car,
        CarResource $carResource
    )
    {
        parent::__construct($context);
        $this->car = $car;
        $this->carResource = $carResource;
    }

    public function execute()
    {
        /* Get the post data */
        $data = $this->getRequest()->getParams();

        /* Set the data in the model */
        $carModel = $this->car;
        $carModel->setData($data);

        try {
            /* Use the resource model to save the model in the DB */
            $this->carResource->save($carModel);
            $this->messageManager->addSuccessMessage("empdata saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving data"));
        }

        /* Redirect back to cars page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('formdata');
        return $redirect;
    }
}
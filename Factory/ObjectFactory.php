<?php

namespace Prymag\ContactForm\Factory;

use Magento\Framework\ObjectManagerInterface;

class ObjectFactory
{

    /**
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     */
    public function __construct(
        ObjectManagerInterface $objectManager
    )
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Create
     * 
     * @param string $object
     * @return object
     */
    public function create($object)
    {
        return $this->objectManager->create($object);
    }
}
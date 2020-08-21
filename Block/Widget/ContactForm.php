<?php

namespace Prymag\ContactForm\Block\Widget;

use Magento\Widget\Block\BlockInterface;
use Magento\Framework\View\Element\Template\Context;
use Prymag\ContactForm\Factory\ObjectFactory;

class ContactForm extends \Magento\Contact\Block\ContactForm implements BlockInterface {

    protected $_template = 'Magento_Contact::form.phtml';

    protected $_objectFactory;

    /**
     * @param Context $context
     * @param ObjectFactory $objectFactory
     * @param array $data
     */
    public function __construct(
        Context $context, 
        ObjectFactory $objectFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        
        $this->_objectFactory = $objectFactory;
    }

    /**
     * Returns Object Factory for object creation
     * 
     * @return ObjectFactory
     */
    public function getObjectFactory()
    {
        # code...
        return $this->_objectFactory;
    }

    /**
     * Returns view model
     * 
     * @return Magento\Contact\ViewModel\UserDataProvider
     */
    public function getViewModel()
    {
        # code...
        return $this->getObjectFactory()->create('Magento\Contact\ViewModel\UserDataProvider');
    }

    /**
     * Returns action url for contact form
     *
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('contact_form/index/post', ['_secure' => true]);
    }

}

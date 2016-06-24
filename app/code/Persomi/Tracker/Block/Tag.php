<?php
namespace Persomi\Tracker\Block;

class Tag extends \Magento\Framework\View\Element\Template
{
    protected $scopeConfig;
    protected $customerSession;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->scopeConfig = $context->getScopeConfig();
        $this->customerSession = $customerSession;
    }

    public function getConfig($name) {
        return $this->scopeConfig->getValue(
            $name,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}

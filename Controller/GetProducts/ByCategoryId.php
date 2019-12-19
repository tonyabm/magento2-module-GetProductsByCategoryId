<?php
/**
 * Abm
 *
 * Author : Tony Liu
 * Blog: https://www.abmbio.xin
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @package Tony_GetProductsByCategoryId
 */
namespace Tony\GetProductsByCategoryId\Controller\GetProducts;

use Magento\Framework\App\Action\Context;

class ByCategoryId extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        return $resultPage;
    }
}
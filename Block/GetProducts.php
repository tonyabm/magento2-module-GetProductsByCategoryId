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

namespace Tony\GetProductsByCategoryId\Block;

class GetProducts extends \Magento\Framework\View\Element\Template
{
    protected $categoryFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory
    ) {
        $this->categoryFactory = $categoryFactory;
        parent::__construct($context);
    }

    public function getCategoryProduct($categoryId)
    {
        $category = $this->categoryFactory->create()->load($categoryId)->getProductCollection()->addAttributeToSelect('*');
        return $category;
    }
}
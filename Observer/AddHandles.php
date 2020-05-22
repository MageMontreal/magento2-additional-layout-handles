<?php

namespace MageMontreal\AdditionalLayoutHandles\Observer;

use Magento\Framework\Registry;
use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class AddHandles implements ObserverInterface
{
    const CATEGORY_VIEW_ACTION = 'catalog_category_view';
    const PRODUCT_VIEW_ACTION = 'catalog_product_view';

    /**
     * @var Registry
     */
    private $registry;

    public function __construct(
        Registry $registry
    ){
        $this->registry = $registry;
    }

    public function execute(Observer $observer)
    {
        $action = $observer->getFullActionName();

        /** @var \Magento\Framework\View\Layout $layout */
        $layout = $observer->getLayout();

        switch ($action) {
            case self::CATEGORY_VIEW_ACTION:
                $this->addCategoryHandles($layout);
                break;
            case self::PRODUCT_VIEW_ACTION:
                $this->addProductHandles($layout);
                break;
        }
    }

    private function addCategoryHandles($layout) {
        $category = $this->registry->registry('current_category');
        $layout->getUpdate()->addHandle(self::CATEGORY_VIEW_ACTION . '_level_' . $category->getLevel());
    }

    private function addProductHandles($layout) {
        $product = $this->registry->registry('product');
        $layout->getUpdate()->addHandle(self::PRODUCT_VIEW_ACTION . '_attribute_set_id_'. $product->getAttributeSetId());
    }
}

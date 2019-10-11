<?php

namespace MageMontreal\AdditionalLayoutHandles\Plugin;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Helper\Product\View as ProductViewHelper;
use Magento\Framework\View\Result\Page as ResultPage;

class ProductViewAttributeSet
{
    public function beforeInitProductLayout(
        ProductViewHelper $subject,
        ResultPage $resultPage,
        Product $product,
        $params = null
    ) {
        $resultPage->addPageLayoutHandles(
            ['attribute_set_id' => $product->getAttributeSetId()]
        );

        return [$resultPage, $product, $params];
    }
}

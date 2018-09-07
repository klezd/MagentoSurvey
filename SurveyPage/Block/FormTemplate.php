<?php

namespace Survey\SurveyPage\Block;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class FormTemplate extends Template
{

    /**
     * Product repository
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * ListProduct constructor
     *
     * @param ProductRepositoryInterface $productRepository
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        ProductRepositoryInterface $productRepository,
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->productRepository = $productRepository;
    }

    /**
     * @return ProductInterface
     */
    public function getProduct($id) {	
        $product = $this->productRepository->getById(2);
        return $product;
    }

    /**
     * To handle survey answer
     * @return url
     */
    public function getFormAction() {
        return $this->getUrl('Survey/Index/answerHandle');
    }

}
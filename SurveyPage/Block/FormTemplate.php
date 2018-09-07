<?php

namespace Survey\SurveyPage\Block;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class FormTemplate extends Template
{

    /**
     * @return ProductInterface
     */
    public function getProductByID($id) {}

    /**
     * To handle survey answer
     * @return url
     */
    public function getFormAction() {
        return $this->getUrl('Survey/SurveyPage/Index/answerHandle');
    }

}
<?php

namespace Survey\SurveyPage\Model\ResourceModel\Post;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
   protected function __construct()
   {
       $this->_init('Survey\SurveyPage\Model\Post',
                    'Survey\SurveyPage\Model\ResourceModel\Post');
   }
}

<?php

namespace Survey\SurveyPage\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use \Magento\Framework\Model\ResourceModel\AbstractResource;

class Answer extends AbstractDb 
{
   public function _construct()
   {
       $this->_init('survey_answer', 'answer_id');
   }
}

<?php

namespace Survey\SurveyPage\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
   public function __construct()
   {
       $this->_init('survey_answer', 'answer_id');
   }
}

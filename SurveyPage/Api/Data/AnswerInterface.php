<?php
namespace Survey\SurveyPage\Api\Data;
interface AnswerInterface
{
   const ANSWER_ID = 'answer_id';
   const RATING = 'rating';
   const MESSAGE = 'message';
   const PRODUCT_ID = 'product_id';
   const RECOMMEND = 'recommend';
   const USED = 'used';

   public function getId();
   public function getRating();
   public function getMessage();
   public function getProductId();
   public function getRecommend();
   public function getUsed();
   public function setId($id);
   public function setRating($rating);
   public function setMessage($message);
   public function setProductId($product_id);
   public function setRecommend($recommend);
   public function setUsed($used);
}

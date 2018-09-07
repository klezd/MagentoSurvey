<?php
namespace Survey\SurveyPage\Api\Data;
interface ProductInterface
{
   const PRODUCT_ID = 'product_id';
   const PRODUCT_IMG = 'product_img';
   const PRODUCT_PRICE = 'product_price';
   const PRODUCT_COLOR = 'product_color';

   public function getID();
   public function getIMG();
   public function getColor();
   public function getPrice();
}

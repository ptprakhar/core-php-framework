<?php
namespace app\core;
 
 /**
  * Helper
  */
 class Helper{
 
            
        /**
         * pre
         *
         * @param  mixed $arr
         * @return void
         */
        public function pre($arr = []){
            echo '<pre>';
            print_r($arr);
            echo '</pre>';
        }


        public function renderView($fileName , $data = []){

            //Converting dataarray into variables
            foreach($data as $key => $value){
                $$key = $value;
            }
            require_once __DIR__ . "/../public/$fileName.php";

        }


}
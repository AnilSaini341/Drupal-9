<?php 
    namespace Drupal\basic_page\Controller;
    use Drupal\Core\Controller\ControllerBase;

    class BasicPageController extends ControllerBase{
        public function basicPage(){
            return [
                '#title'=>'Basic Page Information' #Overwrite Title of Module
                '#markup'=>'This is our basic page.' #Show content using markup
            ];
        }
    }
?>
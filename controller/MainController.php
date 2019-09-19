<?php

class MainController extends Controller {
    public function pu_index(){
     
        $this->render("index");
    }
    public function pu_process(){
        $this->render("page_process");
    }
     public function pu_destination(){
        $this->render("page_destination");
    }
    
    public function pu_country(){
        $this->render("page_country");
    }
    
    
 
    
 
 
    
    //put your code here
}

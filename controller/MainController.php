<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainController
 *
 * @author OBAM
 */
class MainController extends Controller {
    public function pu_index(){
     
        $this->render("index");
    }
    public function pu_process(){
        $this->render("page_process");
    }
    
    public function pu_test(){
        echo 'here ok for me';
        die();
        $this->render("index","home_client");
    }
    
    //put your code here
}

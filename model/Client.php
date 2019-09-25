<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Client extends Model{
    public function getValideClient($email){
            $client= $this->find(array(
                'conditions'=> 'email ="'.$email.'" AND statut >=0 '));
           
            if(isset($client[0]->idclient)){
                return $client[0]->idclient;
            }
            return 0;
        }
    
    public function getClientByMail($email){
            $client= $this->find(array(
                'conditions'=> 'email ="'.$email.'" '));
           
            if(isset($client[0]->idclient)){
                return $client[0]->idclient;
            }
            return 0;
    }
    
    public function getToken($email){
            $timing=date("Y-m-d H:i:s");          
            $this->update(array(
                'idclient'      =>$this->getClientByMail($email),
                'reset_time'    => $timing,
                'reset_token'   =>  sha1($email.''.$timing)
                ));
            
            return sha1($email.''.$timing);
        }
    
    public function authClient($email,$pass){
           return $this->find(array
		    	('conditions' => 'password ="'.sha1($pass).'" AND email ="'.$email.'"  ') );
		    
    }
    //put your code here
}

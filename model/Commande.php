<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Commande extends Model{
    public function getClientTransactions($idClient){
      $sql="select  FROM commande          
                WHERE commande.client_id ='".$idClient."'              
                 ";
     return $this->findWithRequest($sql);
    }
}

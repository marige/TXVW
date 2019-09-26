

<?php echo $this->Session->flash(); ?>
 


        <div class="card g-brd-teal rounded-0 g-mb-30">
            <h3 class="card-header g-bg-teal g-brd-transparent g-color-white g-font-size-16 rounded-0 mb-0">
                <i class="fa fa-edit g-mr-5"></i>
                HISTORIQUE  DES OPERATIONS
            </h3>
            <div class="table-responsive">
                <table class="table table-striped u-table--v1 mb-0">
                    <thead>
                        <tr>
                            <th>Ticket</th>
                            <th>DESTINATION</th>
                            <th>ITINERARY</th>
                            <th>TAXI</th>
                            <th>Date</th>
                            <th>Etat </th>
                            <th>Commentaire</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($operations_client)) foreach ($operations_client as $key => $value) { ?>
                                       
                                        <tr>
                                            <td><?php echo $value->idcommande ; ?></td>
                                            <td><?php echo $value->iddestination; ?></td>
                                            <td><?php echo $value->iditinerary; ?></td>
                                            <td><?php echo $value->idtaxi ; ?></td>
                                            <td><?php echo $value->date_choose ; ?></td>
                                            <td><?php if($value->etat==0){echo "Transaction en cours";}if($value->etat==1||$value->etat==9){echo "Transaction éffectuée";}if($value->etat==2){echo "Transaction annulée";}?></td>
                                            
                                            <td><?php echo $value->commentaire ; ?></td>
                                        </tr>
                                        <?php  }  ?>
                    </tbody>
                </table>
            </div>
        </div>
            


            <!-- #END# Tabs With Icon Title -->


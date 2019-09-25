         <section>
             ORDER NO:
          <?php echo isset($_SESSION["orderon"])?$_SESSION["orderon"]->idcommande:"NON ACTIVE ORDER"  ?> 
         </section>
             
        <section class="timeline">
            ...  
            <div class="row">
                <!-- 1 элемент -->
                <div class="col-12 col-sm-6 timeline-wrapper">
                    <div class="timeline-item">
                        <span class="timeline-item-section">Step 1</span>
                        <span class="timeline-item-date">07.05.2018</span>
                        <span class="timeline-item-header">MEETING DONE</span>
                        <span class="timeline-item-description">Here you notify when the client is with you</span>
                        <span class="timeline-item-link">
                            <a href="#" class="btn-info">Meeting done</a>
                        </span>
                    </div>
                </div>
                <!-- 2 элемент -->
                <div class="col-12 col-sm-6 timeline-wrapper">
                    <div class="timeline-item">
                        <span class="timeline-item-section">Step 2</span>
                        <span class="timeline-item-date">25.04.2018</span>
                        <span class="timeline-item-header">Order completion</span>
                        <span class="timeline-item-description">Here you complete the order</span>
                        <span class="timeline-item-link">
                            <a href="#">Order Completed</a>
                        </span>
                    </div>
                </div>
                ...
            </div>
            ...
      </section>


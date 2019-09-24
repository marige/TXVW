
<?php echo $this->Session->flash(); ?>
<form  method="POST" action="/client/pu_save_order">  
        
<div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
    <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">Make an Order</h3>
        <div class="g-mb-30">
            <label class="g-mb-10">CHOOSE YOUR DESTINATION</label>
            <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-25 mb-0">
                <select class="js-select u-select--v3-select u-sibling w-100" required="required" title="Placeholder" style="display: none;" tabindex="-98"><option  value=""></option>
                    <option value="1" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-rocket g-font-size-18 g-mr-15&quot;></i><span>Martinique</span></span>">Martinique
                    </option>
                    <option value="2" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-headphone-alt g-font-size-18 g-mr-15&quot;></i><span>Paris</span></span>">Paris
                    </option>
                    <option value="3" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-shift-right g-font-size-18 g-mr-15&quot;></i><span>Ford de France</span></span>">Ford de France
                    </option>
                </select>
            </div>
        </div>
         
        <div class="g-mb-30">
            <label class="g-mb-10">CHOOSE YOUR ITINERARY</label>
            <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-25 mb-0">
                <select class="js-select u-select--v3-select u-sibling w-100" required="required" title="Placeholder" style="display: none;" tabindex="-98">
                    <option  value=""></option>
                    <option value="1" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-rocket g-font-size-18 g-mr-15&quot;></i><span>EXCURSION</span></span>">EXCURSION
                    </option>
                    <option value="2" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-headphone-alt g-font-size-18 g-mr-15&quot;></i><span>SHOPPING</span></span>">SHOPPING
                    </option>
                    <option value="3" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-shift-right g-font-size-18 g-mr-15&quot;></i><span>SEEING VIEWS</span></span>">SEEING VIEWS</option>
                </select>
                </option>
                </select>
            </div>
        </div>
        
        <div class="g-mb-30">
            <label class="g-mb-10">CHOOSE YOUR TAXI</label>
            <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-25 mb-0">
                <select class="js-select u-select--v3-select u-sibling w-100" required="required" title="Placeholder" style="display: none;" tabindex="-98"><option  value=""></option>
                    <option value="1" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-rocket g-font-size-18 g-mr-15&quot;></i><span>4 places</span></span>">4 places
                    </option>
                    <option value="2" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-headphone-alt g-font-size-18 g-mr-15&quot;></i><span>5 places</span></span>">5 places
                    </option>
                    <option value="3" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-shift-right g-font-size-18 g-mr-15&quot;></i><span>9 places</span></span>">9 places
                    </option>
                </select>
            </div>
        </div>
        
        <div class="g-mb-30">
            <label class="g-mb-10">CHOOSE YOUR DATE</label>

            <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-20 g-mb-30">
              <div class="form-group mb-0 g-max-width-400">
                <div id="datepickerWrapper" class="u-datepicker-right u-datepicker--v3 g-pos-rel w-100 g-cursor-pointer g-brd-around g-brd-gray-light-v7 g-rounded-4">
                  <input class="js-range-datepicker w-100 g-bg-transparent g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-pr-80 g-pl-15 g-py-9" type="text" placeholder="Select Date" data-rp-wrapper="#datepickerWrapper" data-rp-date-format="d-m-Y">
                  <div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
                    <i class="hs-admin-calendar g-font-size-18 g-mr-10"></i>
                    <i class="hs-admin-angle-down"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
                
                
    
        
        
</div>
</form>
    
    
    
    
    
<script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/chosen/chosen.jquery.js"></script>
<script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-ui/ui/widgets/datepicker.js"></script>
    
<script >
    $(document).ready(function () {
        // initialization of custom select
      $('.js-select').selectpicker();

       // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

    });
</script>
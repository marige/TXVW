<?php echo $this->Session->flash(); ?>
    
    
    
<div class="g-bg-img-hero g-bg-pos-top-center g-pos-rel g-z-index-1 g-mt-minus-150" >
    <div class="container g-pt-150 g-pb-30">
        <form class="row" method="POST" action="/client/pu_save_order">
            <div class="col-xl-8 g-mb-30">
                
                    <div class="g-mb-50">
                        
                        <label class="g-font-weight-500 g-font-size-15 g-pl-30">CHOOSE YOUR DESTINATION </label>
                        <select name="iddestination" class="js-custom-select w-100 u-select-v2 u-shadow-v19 g-brd-none g-color-black g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-30 g-py-12"  data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" ></option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="1">Martinique</option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="2">Paris</option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="engineering_it">Engineering and IT</option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="indigenous">Indigenous</option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="medicine_health">Medicine and health</option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="natural_sciences">Natural sciences</option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="sport">Sport</option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="university_general_interest">University and general interest</option>
                        </select>
                            
                    </div>
                    <div class=" g-mb-50">
                        
                        <label class="g-font-weight-500 g-font-size-15 g-pl-30">CHOOSE YOUR ITINERARY</label>
                        <select name="iditinerary" class="js-custom-select w-100 u-select-v2 u-shadow-v19 g-brd-none g-color-black g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-30 g-py-12" data-placeholder="Type" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active"></option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="1">EXCURSION</option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="2">SHOPPING</option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="3">SEEING VIEWS</option>
                        </select>
                            
                    </div>
                    <div class="g-mb-50">
                        
                        <label class="g-font-weight-500 g-font-size-15 g-pl-30">CHOOSE YOUR TAXI</label>
                        <select name="idtaxi" class="js-custom-select w-100 u-select-v2 u-shadow-v19 g-brd-none g-color-black g-color-primary--hover g-bg-white text-left g-rounded-30 g-pl-30 g-py-12" data-placeholder="For" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up">
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" ></option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="alumni_and_friends">Alumni and friends</option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="current_students">Current students</option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="future_students">Future students</option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="public">Public</option>
                            <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="staff">Staff</option>
                        </select>
                            
                    </div>
                    
            </div>
            <div class="col-xl-4 g-mb-30">
                
                <label class="g-font-weight-500 g-font-size-15">Select the date</label>
                <div name="date_choose" id="datepickerInline" class="u-datepicker-v1 u-shadow-v32 g-brd-none rounded"></div>
                    
            </div>
            <div class="col-sm-12 g-mt-30 g-mb-30">
                        <div class="d-flex">
                            <button class="btn btn-block u-shadow-v32 g-brd-none g-color-white g-bg-black g-bg-primary--hover g-font-size-16 g-rounded-30 g-py-10 ml-2 g-mt-0" type="button">ORDER</button>
                        </div>
                    </div>
        </form>
    </div>
</div>
    
    
    
 <link rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/icon-awesome/css/font-awesome.min.css">   
<link  rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/slick-carousel/slick/slick.css">
<link  rel="stylesheet" href="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-ui/themes/base/jquery-ui.min.css">
    
    
<script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/chosen/chosen.jquery.js"></script>
<script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-ui/ui/widgets/datepicker.js"></script>
    
    
<script >
    $(document).ready(function () {
        
        // initialization of forms
        $.HSCore.components.HSDatepicker.init('#datepickerInline');
    });
</script>
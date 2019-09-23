<?php echo $this->Session->flash(); ?>

<div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
    <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">Rounded Selects</h3>
    
    <div class="g-mb-30">
        <label class="g-mb-10">CHOOSE YOUR DESTINATION</label>
        <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-25 mb-0">
                <select class="js-select u-select--v3-select u-sibling w-100" required="required" title="Placeholder" style="display: none;" tabindex="-98"><option class="bs-title-option" value=""></option>
                    <option value="1" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-rocket g-font-size-18 g-mr-15&quot;></i><span>Select List Item 1</span></span>">Select List Item 1
                    </option>
                    <option value="2" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-headphone-alt g-font-size-18 g-mr-15&quot;></i><span>Select List Item 2</span></span>">Select List Item 2
                    </option>
                    <option value="3" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-shift-right g-font-size-18 g-mr-15&quot;></i><span>Select List Item 3</span></span>">Select List Item 3
                    </option>
                </select>
        </div>
    </div>
    
    <div class="g-mb-30">
        <label class="g-mb-10">CCHOOSE YOUR ITINERARY</label>
        <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-25 mb-0">
                <select class="js-select u-select--v3-select u-sibling w-100" required="required" title="Placeholder" style="display: none;" tabindex="-98"><option class="bs-title-option" value=""></option>
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
                <select class="js-select u-select--v3-select u-sibling w-100" required="required" title="Placeholder" style="display: none;" tabindex="-98"><option class="bs-title-option" value=""></option>
                    <option value="1" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-rocket g-font-size-18 g-mr-15&quot;></i><span>Select List Item 1</span></span>">Select List Item 1
                    </option>
                    <option value="2" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-headphone-alt g-font-size-18 g-mr-15&quot;></i><span>Select List Item 2</span></span>">Select List Item 2
                    </option>
                    <option value="3" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><i class=&quot;hs-admin-shift-right g-font-size-18 g-mr-15&quot;></i><span>Select List Item 3</span></span>">Select List Item 3
                    </option>
                </select>
        </div>
    </div>
    
    
    <div class="g-mb-30">
        <label class="g-mb-10">Select with Text</label>
        <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-25 mb-0">
            <select class="js-select u-select--v3-select u-select-dropdown--blue-theme u-sibling w-100" required="required" title="Placeholder" style="display: none;" tabindex="-98"><option class="bs-title-option" value=""></option>
                    <option value="selectListItem1" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><span>Select List Item 1</span><i class=&quot;hs-admin-rocket g-font-size-18 ml-auto&quot;></i></span>">Select List Item 1
                    </option>
                    <option value="selectListItem2" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><span>Select List Item 2</span><i class=&quot;hs-admin-headphone-alt g-font-size-18 ml-auto&quot;></i></span>">Select List Item 2
                    </option>
                    <option value="selectListItem3" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><span>Select List Item 3</span><i class=&quot;hs-admin-shift-right g-font-size-18 ml-auto&quot;></i></span>">Select List Item 3
                    </option>
                    <option data-divider="true"></option>
                    <option value="selectListItem4" data-content="<span class=&quot;d-flex align-items-center w-100&quot;><span>Additional List Item 4</span><i class=&quot;hs-admin-import g-font-size-18 ml-auto&quot;></i></span>">Additional List Item 4
                    </option>
            </select>
        </div>
    </div>
    
    
    
</div>

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
                        <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="1">5 places</option>
                        <option class="g-brd-secondary-light-v2 g-color-black g-color-white--active g-bg-primary--active" value="2">9 places</option>             
                    </select>
                    
                </div>
                        
            </div>
            <div class="col-xl-4 g-mb-30">
                
                <label class="g-font-weight-500 g-font-size-15">Select the date</label>
                <input name="date_choose" id="datepickerInline" class="u-datepicker-v1 u-shadow-v32 g-brd-none rounded">
                
            </div>
            <div class="col-sm-12 g-mt-30 g-mb-30">
                <div class="d-flex">
                    <button class="btn btn-block u-shadow-v32 g-brd-none g-color-white g-bg-black g-bg-primary--hover g-font-size-16 g-rounded-30 g-py-10 ml-2 g-mt-0" type="submit">ORDER</button>
                </div>
            </div>
        </form>
    </div>
</div>





<script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/chosen/chosen.jquery.js"></script>
<script src="<?php echo  BASE_URL_THEME; ?>assets/vendor/jquery-ui/ui/widgets/datepicker.js"></script>

<script >
    $(document).ready(function () {
        
        // initialization of forms
        $.HSCore.components.HSDatepicker.init('#datepickerInline');
    });
</script>
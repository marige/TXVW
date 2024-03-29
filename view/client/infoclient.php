    
<link  rel="stylesheet" href="<?php echo  BASE_URL_THEME_UNIFY; ?>vendor/jquery-ui/themes/base/jquery-ui.min.css">
<link  rel="stylesheet" href="<?php echo  BASE_URL_THEME_UNIFY; ?>vendor/icon-awesome/css/font-awesome.min.css"
>

 
<?php echo $this->Session->flash(); ?>
 <div class="g-pa-20">
            <div class="row">
              <div class="col-md-3 g-mb-30 g-mb-0--md">
                <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
                  <!-- User Information -->
                  <section class="text-center g-mb-30 g-mb-50--md">
                    <div class="d-inline-block g-pos-rel g-mb-20">
                      <a class="u-badge-v2--lg u-badge--bottom-right g-width-32 g-height-32 g-bg-secondary g-bg-primary--hover g-transition-0_3 g-mb-20 g-mr-20" href="#">
                        <i class="hs-admin-pencil g-absolute-centered g-font-size-16 g-color-white"></i>
                      </a>
                      <img class="img-fluid rounded-circle" src="<?php echo  BASE_URL_THEME; ?>assets/img-temp/130x130/img1.jpg" alt="Image description">
                    </div>

                    <h3 class="g-font-weight-300 g-font-size-20 g-color-black mb-0">Charlie Bailey</h3>
                  </section>
                  <!-- User Information -->

                  <!-- Profile Completion -->
                  <section class="g-mb-30 g-mb-50--md">
                    <h4 class="media h6 g-font-weight-400 g-mb-15">
			<span class="d-flex align-self-center g-color-gray-dark-v6">Upload picture</span>
		</h4>

                    <div class="progress g-height-4 g-rounded-2">
                     <!-- upload input -->
                    </div>
                  </section>
                  <!-- End Profile Completion -->

                  <!-- Profile Sidebar -->
                  <section>
                    <ul class="list-unstyled mb-0">
                      <li class="g-brd-top g-brd-gray-light-v7 mb-0">
                        <a class="d-flex align-items-center u-link-v5 g-parent g-py-15 active" href="../app-views/app-profile.html">
                          <span class="g-font-size-18 g-color-gray-light-v6 g-color-primary--parent-hover g-color-primary--parent-active g-mr-15">
						<i class="hs-admin-user"></i>
					</span>
                          <span class="g-color-gray-dark-v6 g-color-primary--parent-hover g-color-primary--parent-active">Profile Information</span>
                        </a>
                      </li>
                    </ul>
                  </section>
                  <!-- End Profile Sidebar -->
                </div>

              </div>

              <div class="col-md-9">
                <div class="h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md">
                  <form class="js-validate">
                    <header>
                      <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">General information</h2>
                    </header>

                    <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0" for="#firstName">First Name</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="form-group g-pos-rel mb-0">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                        </span>
                          <input id="firstName" name="firstName" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="text" value="Charlie" required="required" data-msg="This field is mandatory"
                          data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                        </div>
                      </div>
                    </div>

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0" for="#lastName">Last Name</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="form-group g-pos-rel mb-0">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                        </span>
                          <input id="lastName" name="lastName" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="text" value="Bailey" required="required" data-msg="This field is mandatory"
                          data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                        </div>
                      </div>
                    </div>

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0">I’m</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="row g-mx-minus-10">
                          <div class="col-md-auto align-self-center g-width-180--md g-px-10">
                            <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                              <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                            </span>
                              <select class="js-select u-select--v2-select" required="required" style="display: none;">
                                <option value="Male" selected="selected">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                              </select>
                              <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
                            </div>
                          </div>

                          <div class="col align-self-center g-hidden-md-down g-px-10">
                            <span class="g-font-weight-300 g-color-gray-dark-v6">We use this only for statistics</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0">Birth Date</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="row g-mx-minus-10">
                          <div class="col-md align-self-center g-px-10 g-mb-20 g-mb-0--md">
                            <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                              <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                            </span>
                              <select class="js-select u-select--v2-select" required="required" style="display: none;">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April" selected="selected">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                              </select>
                              <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
                            </div>
                          </div>

                          <div class="col-6 col-md-auto align-self-center g-width-100--md g-px-10">
                            <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                              <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                            </span>
                              <select class="js-select u-select--v2-select" required="required" style="display: none;">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12" selected="selected">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                              </select>
                              <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
                            </div>
                          </div>

                          <div class="col-6 col-md-auto align-self-center g-width-135--md g-px-10">
                            <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                              <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                            </span>
                              <select class="js-select u-select--v2-select" required="required" style="display: none;">
                                <option value="1900">1900</option>
                                <option value="1901">1901</option>
                                <option value="1902">1902</option>
                                <option value="1903">1903</option>
                                <option value="1904">1904</option>
                                <option value="1905">1905</option>
                                <option value="1906">1906</option>
                                <option value="1907">1907</option>
                                <option value="1908">1908</option>
                                <option value="1909">1909</option>
                                <option value="1910">1910</option>
                                <option value="1911">1911</option>
                                <option value="1912">1912</option>
                                <option value="1913">1913</option>
                                <option value="1914">1914</option>
                                <option value="1915">1915</option>
                                <option value="1916">1916</option>
                                <option value="1917">1917</option>
                                <option value="1918">1918</option>
                                <option value="1919">1919</option>
                                <option value="1920">1920</option>
                                <option value="1921">1921</option>
                                <option value="1922">1922</option>
                                <option value="1923">1923</option>
                                <option value="1924">1924</option>
                                <option value="1925">1925</option>
                                <option value="1926">1926</option>
                                <option value="1927">1927</option>
                                <option value="1928">1928</option>
                                <option value="1929">1929</option>
                                <option value="1930">1930</option>
                                <option value="1931">1931</option>
                                <option value="1932">1932</option>
                                <option value="1933">1933</option>
                                <option value="1934">1934</option>
                                <option value="1935">1935</option>
                                <option value="1936">1936</option>
                                <option value="1937">1937</option>
                                <option value="1938">1938</option>
                                <option value="1939">1939</option>
                                <option value="1940">1940</option>
                                <option value="1941">1941</option>
                                <option value="1942">1942</option>
                                <option value="1943">1943</option>
                                <option value="1944">1944</option>
                                <option value="1945">1945</option>
                                <option value="1946">1946</option>
                                <option value="1947">1947</option>
                                <option value="1948">1948</option>
                                <option value="1949">1949</option>
                                <option value="1950">1950</option>
                                <option value="1951">1951</option>
                                <option value="1952">1952</option>
                                <option value="1953">1953</option>
                                <option value="1954">1954</option>
                                <option value="1955">1955</option>
                                <option value="1956">1956</option>
                                <option value="1957">1957</option>
                                <option value="1958">1958</option>
                                <option value="1959">1959</option>
                                <option value="1960">1960</option>
                                <option value="1961">1961</option>
                                <option value="1962">1962</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986" selected="selected">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                              </select>
                              <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0" for="#email">Email</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="form-group g-pos-rel mb-0">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                        </span>
                          <input id="email" name="email" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="email" value="charlie.bailey@example.com" required="required" data-msg="This field is mandatory"
                          data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                        </div>
                      </div>
                    </div>

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0" for="#confirmEmail">Confirm Email</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="form-group g-pos-rel mb-0">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                        </span>
                          <input id="confirmEmail" name="confirmEmail" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="email" value="charlie.bailey@example.com" required="required"
                          data-msg="This field is mandatory" data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                        </div>
                      </div>
                    </div>

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0" for="#location">Your Location</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="form-group g-pos-rel mb-0">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                        </span>
                          <input id="location" name="location" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="text" value="London, UK" required="required" data-msg="This field is mandatory"
                          data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                        </div>
                      </div>
                    </div>

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0" for="#phone">Phone Number</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="row g-mx-minus-10">
                          <div class="col-auto align-self-center g-width-270 g-px-10">
                            <div class="form-group g-pos-rel mb-0">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                              <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                            </span>
                              <input id="phone" name="phone" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="tel" value="+44 20 5031 2000" required="required" data-msg="This field is mandatory"
                              data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                            </div>
                          </div>

                          <div class="col align-self-center g-hidden-md-down g-px-10">
                            <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-dark-v6">
                            <span class="g-pos-rel g-width-18 g-height-18 g-bg-secondary g-brd-around g-brd-secondary rounded-circle">
                              <i class="hs-admin-check g-absolute-centered g-font-weight-800 g-font-size-8 g-color-white" title="Confirmed"></i>
                            </span>
                            <span class="g-hidden-lg-down g-font-weight-300 g-font-size-default g-color-secondary g-ml-8">Confirmed</span>
                          </em>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0" for="#secondPhone">Phone Number</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="row g-mx-minus-10">
                          <div class="col-auto align-self-center g-width-270 g-px-10">
                            <div class="form-group g-pos-rel mb-0">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                              <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                            </span>
                              <input id="secondPhone" name="secondPhone" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="tel" required="required" data-msg="This field is mandatory" data-error-class="u-has-error-v3"
                              data-success-class="has-success" aria-required="true">
                            </div>
                          </div>

                          <div class="col align-self-center g-hidden-md-down g-px-10">
                            <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-dark-v6">
                            <span class="g-pos-rel g-width-18 g-height-18 g-brd-around g-brd-gray-light-v7 rounded-circle">
                              <i class="hs-admin-check g-absolute-centered g-font-weight-800 g-font-size-8 g-color-gray-light-v7" title="Confirmed"></i>
                            </span>
                            <span class="g-hidden-lg-down g-font-weight-300 g-font-size-default g-color-gray-dark-v6 g-ml-8">Confirmed</span>
                          </em>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center"></div>

                      <div class="col-md-9 align-self-center">
                        <a class="btn btn-link d-flex align-self-center align-items-center u-link-v5 g-color-secondary g-color-secondary--hover  g-brd-none p-0" href="#">
                          <i class="hs-admin-plus g-font-size-17"></i>
                          <span class="g-font-weight-300 g-ml-10">Add Phone Number</span>
                        </a>
                      </div>
                    </div>

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0">Your Language</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="row g-mx-minus-10">
                          <div class="col-auto align-self-center g-width-270 g-px-10">
                            <div class="form-group u-select--v2 g-pos-rel g-brd-gray-light-v7 g-rounded-4 mb-0">
                              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                              <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                            </span>
                              <select name="language" class="js-select u-select--v2-select" required="required" style="display: none;">
                                <option data-content='<span class="d-flex align-items-center"><img class="g-width-20 g-height-20 rounded-circle g-mr-8" src="<?php echo  BASE_URL_THEME; ?>assets/img/langs/us.png" alt="Image Description"><span class="g-line-height-1 g-color-black">English</span></span>'>English</option>
                                <option data-content='<span class="d-flex align-items-center"><img class="g-width-20 g-height-20 rounded-circle g-mr-8" src="<?php echo  BASE_URL_THEME; ?>assets/img/langs/de.png" alt="Image Description"><span class="g-line-height-1 g-color-black">Deutsche</span></span>'>Deutsche</option>
                                <option data-content='<span class="d-flex align-items-center"><img class="g-width-20 g-height-20 rounded-circle g-mr-8" src="<?php echo  BASE_URL_THEME; ?>assets/img/langs/ru.png" alt="Image Description"><span class="g-line-height-1 g-color-black">Русский</span></span>'>Русский</option>
                              </select>
                              <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v6 ml-auto g-mr-15"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row g-mb-60">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0">Default Currency</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="row g-mx-minus-10">
                          <div class="col-auto align-self-center g-width-270 g-px-10">
                            <div class="btn-group justified-content">
                              <label class="u-check">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="currency" type="radio" checked="checked">
                                <span class="btn btn-md btn-block u-btn-outline-lightgray g-bg-secondary--checked g-font-size-16 g-color-white--checked g-rounded-0--top-right g-rounded-0--bottom-right g-py-10">$</span>
                              </label>
                              <label class="u-check">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="currency" type="radio">
                                <span class="btn btn-md btn-block u-btn-outline-lightgray g-bg-lightblue-v3--checked g-font-size-16 g-color-white--checked g-brd-left-none--md rounded-0 g-py-10">€</span>
                              </label>
                              <label class="u-check">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="currency" type="radio">
                                <span class="btn btn-md btn-block u-btn-outline-lightgray g-bg-lightblue-v3--checked g-font-size-16 g-color-white--checked g-brd-left-none--md rounded-0 g-py-10">£</span>
                              </label>
                              <label class="u-check">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="currency" type="radio">
                                <span class="btn btn-md btn-block u-btn-outline-lightgray g-bg-lightblue-v3--checked g-font-size-16 g-color-white--checked g-brd-left-none--md g-rounded-0--top-left g-rounded-0--bottom-left g-py-10">¥</span>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <header>
                      <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Change password</h2>
                    </header>

                    <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

                    <div class="row g-mb-20">
                      <div class="col-md-3">
                        <label class="mb-0" for="#currentPassword">Current Password</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div>
                          <div class="form-group g-pos-rel mb-0">
                            <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                            <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                          </span>
                            <input id="currentPassword" name="currentPassword" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="password" required="required" data-msg="This field is mandatory"
                            data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                          </div>

                          <a class="form-text g-color-secondary" href="#">
                            <small class="g-font-size-default g-mt-8">Forgot Your Password?</small>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0" for="#newPassword">New Password</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="form-group g-pos-rel mb-0">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                        </span>
                          <input id="newPassword" name="newPassword" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="password" required="required" data-msg="This field is mandatory"
                          data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                        </div>
                      </div>
                    </div>

                    <div class="row g-mb-20">
                      <div class="col-md-3 align-self-center g-mb-5 g-mb-0--md">
                        <label class="mb-0" for="#confirmNewPassword">Confirm Password</label>
                      </div>

                      <div class="col-md-9 align-self-center">
                        <div class="form-group g-pos-rel mb-0">
                          <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                          <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
                        </span>
                          <input id="confirmNewPassword" name="confirmNewPassword" class="form-control h-100 form-control-md g-brd-gray-light-v7 g-brd-lightblue-v3--focus g-brd-primary--error g-rounded-4 g-px-20 g-py-12" type="password" required="required" data-msg="This field is mandatory"
                          data-error-class="u-has-error-v3" data-success-class="has-success" aria-required="true">
                        </div>
                      </div>
                    </div>

                    <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-30--md">

                    <div>
                      <button class="btn btn-md btn-xl--md u-btn-secondary g-width-160--md g-font-size-12 g-font-size-default--md g-mb-10" type="submit">Save Changes</button>
                      <button class="btn btn-md btn-xl--md u-btn-outline-gray-dark-v6 g-font-size-12 g-font-size-default--md g-mr-10 g-mb-10" type="reset">Cancel</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
     <div class="col-md-9">
                <div class="g-pos-rel h-100 g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-30--md">
                  <header>
                    <h2 class="text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Photos &amp; Videos</h2>
                  </header>

                  <hr class="d-flex g-brd-gray-light-v7 g-my-15 g-my-25--md">

                  <form>
                    <div class="form-group">
                      <input class="js-file-attachment" type="file" name="fileAttachment[]">
                    </div>
                  </form>
                </div>
          </div>
     
     
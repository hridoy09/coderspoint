@extends('frontend.layouts.main')
@section('main-container')

    <!-- Start Who We Are Banner Section -->
    <section class="banner quote-banner ">

    </section>

    <!-- Start Who We Are Banner Section -->
    <!-- Start  Body Section -->

    <section class="body-section">
        <div class="container">
            <div class="row">
                {{-- <div class="col-md-3 wow fadeInUp">
                    <div class="menu--links">
                        <div class="menu__content">
                            <p><a href="#"><span><i class="fas fa-bars"></i></span>Services / Web Design</a></p>
                            <p><a href="web-app.html"><span><i class="fas fa-angle-double-right"></i></span>Dynamic Web
                                    Solutions</a></p>
                            <p><a href="custom-software-dev.html"><span><i class="fas fa-angle-double-right"></i></span>Custom web
                                    design</a>
                            </p>
                            <p><a href="web-app.html"><span><i class="fas fa-angle-double-right"></i></span>Web Application</a>
                            </p>
                            <p><a href="web-redesign.html"><span><i class="fas fa-angle-double-right"></i></span>Website
                                    Re-design</a></p>
                            <p><a href="website-maintanance.html"><span><i class="fas fa-angle-double-right"></i></span>Website
                                    Mantainence</a></p>
                            <p><a href="website-maintanance.html"><span><i class="fas fa-angle-double-right"></i></span>Our Design
                                    Process</a></p>
                            <p><a href="recent-dev.html"><span><i class="fas fa-angle-double-right"></i></span>Recent Development
                                    Site</a></p>
                        </div>
                    </div>

                    <div class="menu--links">
                        <div class="menu__content">
                            <p><a href="#"><span><i class="fas fa-bars"></i></span>Services</a></p>
                            <p><a href="web-design.html"><span><i class="fas fa-angle-double-right"></i></span>Web design</a></p>
                            <p><a href="web-app.html"><span><i class="fas fa-angle-double-right"></i></span>Web development</a>
                            </p>
                            <p><a href="mobile-app-dev.html"><span><i class="fas fa-angle-double-right"></i></span>Mobile App
                                    development</a></p>
                            <p><a href="mobile-web-ux-ui.html"><span><i class="fas fa-angle-double-right"></i></span>Mobile &amp; web app
                                    design</a></p>
                            <p><a href="custom-software-dev.html"><span><i class="fas fa-angle-double-right"></i></span>custom software
                                    development</a></p>
                            <p><a href="web-app.html"><span><i class="fas fa-angle-double-right"></i></span>Desktop App
                                    development</a></p>
                            <p><a href="ecommerce-woocommerce.html"><span><i class="fas fa-angle-double-right"></i></span>E-Commerce &amp;
                                    Woo-Commerce development</a></p>
                            <p><a href="graphics-design.html"><span><i class="fas fa-angle-double-right"></i></span>graphics design</a>
                            </p>
                            <p><a href="wordpress-theme-dev.html"><span><i class="fas fa-angle-double-right"></i></span>theme
                                    development(wordpress)</a></p>
                            <p><a href="business-package.html"><span><i class="fas fa-angle-double-right"></i></span>startup business
                                    package(wordpress)</a></p>
                        </div>
                    </div>


                    <div class="menu--links">
                        <div class="menu__content">
                            <p><a href="#"><span><i class="fas fa-bars"></i></span>Softwares</a></p>
                            <p><a href="accounting-software.html"><span><i class="fas fa-angle-double-right"></i></span>Accounting Softwares</a></p>
                            <p><a href="inventory-software.html"><span><i class="fas fa-angle-double-right"></i></span>Inventory Softwares</a>
                            </p>
                            <p><a href="hospital-management-software.html"><span><i class="fas fa-angle-double-right"></i></span>Hospital Management Softwares</a></p>
                            <p><a href="restaurant-software.html"><span><i class="fas fa-angle-double-right"></i></span>Restuarent Management Softwares</a></p>
                            <p><a href="school-management-software.html"><span><i class="fas fa-angle-double-right"></i></span>School Management Softwares</a></p>
                            <p><a href="invoice-billing-software.html"><span><i class="fas fa-angle-double-right"></i></span>Invoice/Billing Softwares</a></p>
                            <p><a href="point-of-sale-software.html"><span><i class="fas fa-angle-double-right"></i></span>Point of Sale (POS)</a></p>
                            <p><a href="hotel-management-software.html"><span><i class="fas fa-angle-double-right"></i></span>Hotel Management Softwares</a>
                            </p>

                        </div>
                    </div>


                </div> --}}
                <div class="col-md-12 wow bounceInUp">
                    <div class="quote-form">
                        <div class="border-bottom mb-2 text-center font-weight-bold">
                            <h2 class="text-uppercase text-info">Project Request Form</h2>
                        </div>

                         @include('frontend.flash-message')
                        <form method="post" action="{{ route('frontend.project.details.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-1">
                                    <div class="input-group">
                                        <input type="text" name="full_name" class="form-control form-control-lg" id="ful-name" aria-describedby="ful-name" placeholder="Your Full Name" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="ful-name"><i class="fas fa-user-alt"></i></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <div class="input-group">
                                        <input type="email" name="email" class="form-control form-control-lg" id="email" aria-describedby="email" placeholder="Email Address" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="email"><i class="fas fa-envelope"></i></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <div class="input-group">
                                        <input type="text" name="phone" class="form-control form-control-lg" id="phone" aria-describedby="phone" placeholder="Phone" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="phone"><i class="fas fa-envelope"></i></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <div class="input-group">
                                        <input type="text" name="company_name" class="form-control form-control-lg" id="company-name" aria-describedby="company-name" placeholder="Company Name" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="company-name"><i class="fas fa-envelope"></i></span>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-12 mb-1">
                                    <div class="input-group">
                                        <input type="text" name="website" class="form-control form-control-lg" id="website" aria-describedby="website" placeholder="Website" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="website"><i class="fas fa-globe-americas"></i></span>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <div class="input-group">
                                        <input type="text" name="address" class="form-control form-control-lg" id="address" aria-describedby="address" placeholder="Address" required>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="address"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>

                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="col-auto my-1 pl-0 pr-0">
                                        <label class="mr-sm-2 sr-only" for="project-budget">Project Budget ?</label>
                                        <select class="form-control form-control-lg" name="project_budget" id="project-budget">
                                            <option selected>Project Budget ?</option>
                                            <option value="Less Than Tk20000">Less Than Tk 20,000</option>
                                            <option value="Tk20000-Tk50000">Tk 20,000-Tk 50,000</option>
                                            <option value="Tk50000-Tk100000">Tk 50,000-Tk 100,000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-auto my-1 pl-0 pr-0">
                                        <label class="mr-sm-2 sr-only" for="start-date">Date you wish to start?</label>
                                        <select class="form-control form-control-lg" 
                                        name="date_to_start" id="start-date">
                                            <option selected>Date you wish to start?</option>
                                            <option value="ASAP">ASAP</option>
                                            <option value="Within 1 week">Within 1 week</option>
                                            <option value="Within 2 weeks">Within 2 weeks</option>
                                            <option value="Within 3 weeks">Within 3 weeks</option>
                                            <option value="Within 1 month">Within 1 month</option>
                                            <option value="Within 2 months">Within 2 months</option>


                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-auto my-1 pl-0 pr-0">
                                        <label class="mr-sm-2 small " for="project-type"> If you want to get Project, Choose your Project Type below: </label>
                                        <select class="form-control form-control-lg" id="project-type" name="project_type">
                                            <option selected>Choose Project Type ...</option>

                                            <option value="Accounting Software">Accounting Software</option>
                                            <option value="Inventory Software">Inventory Software</option>
                                            <option value="MLM Software">MLM Software</option>
                                            <option value="Restaurant Management">Restaurant Management</option>
                                            <option value="Tours & Travels Management">Tours & Travels Management</option>
                                            <option value="Prescription Management">Prescription Management</option>
                                            <option value="School Management ERP">School Management ERP</option>
                                            <option value="Invoice/Billing Software">Invoice/Billing Software</option>
                                            <option value="HR & Payroll Software">HR & Payroll Software</option>
                                            <option value="Medicine Shop Management">Medicine Shop Management</option>
                                            <option value="Point of Sales (POS)">Point of Sales (POS)</option>
                                            <option value="Freight Forwarding Software">Freight Forwarding Software</option>
                                            <option value="Event Management ERP">Event Management ERP</option>
                                            <option value="Image, Face, Voice and Finger Detection Syestem">Image, Face, Voice and Finger Detection Syestem</option>
                                            <option value="Hospital Management">Hospital Management</option>
                                            <option value="Hotel Management">Hotel Management</option>
                                            <option value="Garments Management ERP">Garments Management ERP</option>
                                            <option value="Ticket Management">Ticket Management</option>
                                            <option value="Fingerprint Presence Device">Fingerprint Presence Device</option>
                                            <option value="CCTV Software and Android Systemt">CCTV Software and Android Systemt</option>
                                            <option value="Other">Other</option>
                                        </select>


                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-auto my-1 pl-0 pr-0">
                                        <label class="mr-sm-2 small " for="service-type"> If you want to get Service, Choose your Service Type below: </label>
                                        <select class="form-control form-control-lg" id="service-type" name="service_type">
                                            <option selected> Choose Service Type... </option>
                                            <option value="Professional Web Design">Professional Web Design</option>
                                            <option value="Professional Web Development">Professional Web Development</option>
                                            <option value="Mobile Application Development (Android & IOS)">Mobile Application Development (Android & IOS)</option>
                                            <option value="Mobile & Web Apps Design (UI/UX)">Mobile & Web Apps Design (UI/UX)</option>
                                            <option value="Custom Software Development">Custom Software Development</option>
                                            <option value="Desktop Application Development">Desktop Application Development</option>
                                            <option value="eCommerce & WooCommerce Development">eCommerce & WooCommerce Development</option>
                                            <option value="Graphics Design(Adobe photoshop & Illustrator)">Graphics Design(Adobe photoshop & Illustrator)</option>
                                            <option value="Theme Development (Wordpress)">Theme Development (Wordpress)</option>
                                            <option value="Startup Business Package(Wordpress)">Startup Business Package(Wordpress)</option>
                                            <option value="Artificial Intelligent & Machine learning Solution">Artificial Intelligent & Machine learning Solution</option>
                                            <option value="Professional IT Training">Professional IT Training</option>
                                            <option value="Domain Hosting Service">Domain Hosting Service</option>
                                            <option value="ERP Solution">ERP Solution</option>
                                            <option value="Search Engine Optimization(SEO)">Search Engine Optimization(SEO)</option>
                                            <option value="Content Writing">Content Writing</option>
                                            <option value="EV VR Solution">EV VR Solution</option>
                                            <option value="Affiliated Marketing">Affiliated Marketing</option>
                                            <option value="CCTV Camera Service">CCTV Camera Service</option>
                                            <option value="Banking & FinTech Solution">Banking & FinTech Solution</option>



                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="col-auto my-1 pl-0 pr-0">
                                        <label class="mr-sm-2 sr-only" for="country">Country</label>
                                        <select class="form-control form-control-lg" id="country" name="country">
                                            <option selected>Country</option>
                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote D'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                            <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>


                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-auto my-1 pl-0 pr-0">
                                        <label class="mr-sm-2 sr-only" for="page"> No. of Pages? </label>
                                        <select class="form-control form-control-lg" id="page" name="no_of_pages">
                                            <option selected> No. of Pages? </option>
                                            <option value="1 - 5">1 - 5</option>
                                            <option value="5 - 10">5 - 10</option>
                                            <option value="10 - 15">10 - 15</option>
                                            <option value="15 - 20">15 - 20</option>
                                            <option value="20 - 30">20 - 30</option>
                                            <option value="30 - 40">30 - 40</option>
                                            <option value="40 - 50">40 - 50</option>
                                            <option value="50 or more">50 or more</option>
                                            <option value="100 plus">100 plus</option>


                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-auto my-1 pl-0 pr-0">
                                        <label for="similar-site" class="mr-sm-2 sr-only"></label>
                                        <input class="form-control form-control-lg" name="reference_site" id="similar-site" type="text" placeholder="List a site similar to your needs">
                                    </div>

                                </div>
                                <div class="pt-4 pb-0  pl-2">
                                    <h5 class="mb-0 pb-0 small">Please check any that apply <span class="text-danger">*</span> not required!</h5>
                                </div>

                            </div>

                            <div class="row">


                                <div class="col-md-12">
                                    <div class="col-auto my-1 pl-0 pr-0">
                                        <label class="mr-sm-2 sr-only" for="hosting"> Will you need hosting? </label>
                                        <select class="form-control form-control-lg" id="hosting" name="hosting">
                                            <option selected> Will you need hosting? </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>


                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="col-auto my-1 pl-0 pr-0">
                                        <label class="mr-sm-2 sr-only" for="domain"> Do you already have a domain? </label>
                                        <select class="form-control form-control-lg" id="domain" name="domain">
                                            <option selected> Do you already have a domain?</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>


                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-auto my-1 pl-0 pr-0">
                                        <label class="mr-sm-2 sr-only" for="content"> Will you be providing content? </label>
                                        <select class="form-control form-control-lg" id="content" name="content">
                                            <option selected> Will you be providing content? </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>


                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-auto my-1 pl-0 pr-0">
                                        <label class="mr-sm-2 sr-only" for="logo"> Do you have a company logo? </label>
                                        <select class="form-control form-control-lg" id="logo" name="logo">
                                            <option selected> Do you have a company logo? </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>


                                        </select>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="project-details">Please list the details of your project</label>
                                        <textarea name="project_details" class="form-control" id="project-details" placeholder="Please list the details of your project" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="text-center mb-4">
                                <button class="btn btn-primary btn-submit" type="submit">Submit </button>
                            </div>




                        </form>
                    </div>
                </div>
            </div>




        </div>
    </section>

    <!-- Start  Body Section -->

@endsection





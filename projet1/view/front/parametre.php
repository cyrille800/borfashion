
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> Nephos :: Modern Bulma Ecommerce App and Dashboard</title>
        <link rel="icon" type="image/png" href="assets/images/favicon.png" />

        <!--Core CSS -->
        <link rel="stylesheet" href="assets/css/bulma.css">
        <link rel="stylesheet" href="assets/css/core.css">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">
        
        <!-- plugins -->
        <link rel="stylesheet" href="assets/js/slick/slick.css">
        <link rel="stylesheet" href="assets/js/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/js/webuipopover/jquery.webui-popover.min.css">
        <link rel="stylesheet" href="assets/js/izitoast/css/iziToast.min.css">
        <link rel="stylesheet" href="assets/js/zoom/zoom.css">
        <link rel="stylesheet" href="assets/js/jpcard/card.css">
        <link rel="stylesheet" href="assets/css/chosen/chosen.css">
        <link rel="stylesheet" href="assets/css/icons.min.css">

    </head>
    <body>
        
        <div class="shop-wrapper" style="margin-left:0;width:100%;">

            <div class="section">
                <!-- Container -->
                <div class="container">
        
                    <!-- Edit Account -->
                    <div class="columns account-header">
                        <div class="column is-10 is-offset-1">
                            <div class="account-title">
                                <h2>EDIT ACCOUNT</h2>
                                <img class="brand-filigrane" src="assets/images/logo/nephos-greyscale.svg" alt="">
                            </div>
        
                            <!-- Account tabs -->
                            <div class="tabs account-tabs">
                                <ul>
                                    <li class="is-active"><a href="compte_client.php">Mon compte</a></li>
                                    <li><a href="pub&offre.php">Pub & Offre</a></li>
                                    <li><a href="panier.php">Panier</a></li>
                                </ul>
                            </div>
        
                            <!-- Edit Account Layout -->
                            <div class="columns is-account-grid is-multiline" style="display:none;">
                                <div class="column is-4">
                                    <!-- Upload Avatar -->
                                    <div class="flat-card upload-card is-auto">
                                        <div class="card-body">
                                            <!-- Avatar form -->
                                            <div id="avatar-upload" class="avatar-wrapper has-simple-popover" data-content="Change profile picture" data-placement="top">
                                                <img class="profile-pic" src="https://image.ibb.co/b04PYv/placeholder_w.jpg" alt="">
                                                <div class="upload-button">
                                                    <i class="upload-icon" data-feather="plus" aria-hidden="true"></i>
                                                </div>
                                                <input class="file-upload" type="file" accept="image/*"/>
                                            </div>
                                            <!-- /Avatar form -->
        
                                            <!-- User -->
                                            <div class="username has-text-centered">
                                                <span>Elie Daniels</span>
                                                <span>eliedaniels@gmail.com</span>
                                            </div>
        
                                            <div class="has-text-centered">
                                                <button class="button feather-button secondary-button will-upload">
                                                    Save picture
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Upload Avatar -->
                                </div>
                                <div class="column is-8">
                                    <!-- Edit contact Info -->
                                    <div class="flat-card profile-info-card is-auto">
                                        <!-- Title -->
                                        <div class="card-title">
                                            <h3>Contact info</h3>
                                            <!-- Save button -->
                                            <div class="confirm-button">
                                                <a href="javascript:void(0);" role="button" class="has-simple-popover" data-content="Save Contact info" data-placement="top"><i class="feather-icons" data-feather="check"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="columns">
                                                <div class="column is-6">
                                                    <div class="info-block">
                                                        <span class="label-text">First Name</span>
                                                        <div class="control">
                                                            <input type="text" class="input is-default" value="Elie">
                                                        </div>
                                                    </div>
        
                                                    <div class="info-block">
                                                        <span class="label-text">Email</span>
                                                        <div class="control">
                                                            <input type="email" class="input is-default" value="eliedaniels@gmail.com">
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="column is-6">
                                                    <div class="info-block">
                                                        <span class="label-text">Last Name</span>
                                                        <div class="control">
                                                            <input type="text" class="input is-default" value="Daniels">
                                                        </div>
                                                    </div>
        
                                                    <div class="info-block">
                                                        <span class="label-text">Phone</span>
                                                        <div class="control">
                                                            <input type="text" class="input is-default" value="+1 555 623 568">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Edit contact Info -->
        
                                    <!-- Edit BIlling Address -->
                                    <div class="flat-card profile-info-card is-auto has-overflow">
                                        <!-- Title -->
                                        <div class="card-title">
                                            <h3>Billing Address</h3>
        
                                            <div class="confirm-button">
                                                <a href="javascript:void(0);" role="button" class="has-simple-popover" data-content="Save Addresses" data-placement="top"><i class="feather-icons" data-feather="check"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="columns">
                                                <div class="column is-6">
                                                    <!-- Form group -->
                                                    <div class="info-block">
                                                        <span class="label-text">Number</span>
                                                        <div class="control">
                                                            <input type="text" class="input is-default" value="23, Block C2">
                                                        </div>
                                                    </div>
                                                    <!-- Form group -->
                                                    <div class="info-block">
                                                        <span class="label-text">City</span>
                                                        <div class="control">
                                                            <input type="text" class="input is-default" value="Los Angeles">
                                                        </div>
                                                    </div>
                                                    <!-- Form group -->
                                                    <div class="info-block">
                                                        <span class="label-text">State</span>
                                                        <div class="control">
                                                            <input type="text" class="input is-default" value="CA">
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="column is-6">
                                                    <!-- Form group -->
                                                    <div class="info-block">
                                                        <span class="label-text">Street</span>
                                                        <div class="control">
                                                            <input type="text" class="input is-default" value="Church Street">
                                                        </div>
                                                    </div>
                                                    <!-- Form group -->
                                                    <div class="info-block">
                                                        <span class="label-text">Postal Code</span>
                                                        <div class="control">
                                                            <input type="text" class="input is-default" value="100065">
                                                        </div>
                                                    </div>
                                                    <!-- Select -->
                                                    <div class="info-block">
                                                        <span class="label-text">Country</span>
                                                        <div class="control">
                                                            <select class="chosen-select">
                                                                <option value="United States">United States</option> 
                                                                <option value="United Kingdom">United Kingdom</option> 
                                                                <option value="Afghanistan">Afghanistan</option> 
                                                                <option value="Albania">Albania</option> 
                                                                <option value="Algeria">Algeria</option> 
                                                                <option value="American Samoa">American Samoa</option> 
                                                                <option value="Andorra">Andorra</option> 
                                                                <option value="Angola">Angola</option> 
                                                                <option value="Anguilla">Anguilla</option> 
                                                                <option value="Antarctica">Antarctica</option> 
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
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
                                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                                                <option value="Botswana">Botswana</option> 
                                                                <option value="Bouvet Island">Bouvet Island</option> 
                                                                <option value="Brazil">Brazil</option> 
                                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                                                <option value="Bulgaria">Bulgaria</option> 
                                                                <option value="Burkina Faso">Burkina Faso</option> 
                                                                <option value="Burundi">Burundi</option> 
                                                                <option value="Cambodia">Cambodia</option> 
                                                                <option value="Cameroon">Cameroon</option> 
                                                                <option value="Canada">Canada</option> 
                                                                <option value="Cape Verde">Cape Verde</option> 
                                                                <option value="Cayman Islands">Cayman Islands</option> 
                                                                <option value="Central African Republic">Central African Republic</option> 
                                                                <option value="Chad">Chad</option> 
                                                                <option value="Chile">Chile</option> 
                                                                <option value="China">China</option> 
                                                                <option value="Christmas Island">Christmas Island</option> 
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                                                <option value="Colombia">Colombia</option> 
                                                                <option value="Comoros">Comoros</option> 
                                                                <option value="Congo">Congo</option> 
                                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                                                <option value="Cook Islands">Cook Islands</option> 
                                                                <option value="Costa Rica">Costa Rica</option> 
                                                                <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                                                <option value="Croatia">Croatia</option> 
                                                                <option value="Cuba">Cuba</option> 
                                                                <option value="Cyprus">Cyprus</option> 
                                                                <option value="Czech Republic">Czech Republic</option> 
                                                                <option value="Denmark">Denmark</option> 
                                                                <option value="Djibouti">Djibouti</option> 
                                                                <option value="Dominica">Dominica</option> 
                                                                <option value="Dominican Republic">Dominican Republic</option> 
                                                                <option value="Ecuador">Ecuador</option> 
                                                                <option value="Egypt">Egypt</option> 
                                                                <option value="El Salvador">El Salvador</option> 
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                                                <option value="Eritrea">Eritrea</option> 
                                                                <option value="Estonia">Estonia</option> 
                                                                <option value="Ethiopia">Ethiopia</option> 
                                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                                                <option value="Faroe Islands">Faroe Islands</option> 
                                                                <option value="Fiji">Fiji</option> 
                                                                <option value="Finland">Finland</option> 
                                                                <option value="France">France</option> 
                                                                <option value="French Guiana">French Guiana</option> 
                                                                <option value="French Polynesia">French Polynesia</option> 
                                                                <option value="French Southern Territories">French Southern Territories</option> 
                                                                <option value="Gabon">Gabon</option> 
                                                                <option value="Gambia">Gambia</option> 
                                                                <option value="Georgia">Georgia</option> 
                                                                <option value="Germany">Germany</option> 
                                                                <option value="Ghana">Ghana</option> 
                                                                <option value="Gibraltar">Gibraltar</option> 
                                                                <option value="Greece">Greece</option> 
                                                                <option value="Greenland">Greenland</option> 
                                                                <option value="Grenada">Grenada</option> 
                                                                <option value="Guadeloupe">Guadeloupe</option> 
                                                                <option value="Guam">Guam</option> 
                                                                <option value="Guatemala">Guatemala</option> 
                                                                <option value="Guinea">Guinea</option> 
                                                                <option value="Guinea-bissau">Guinea-bissau</option> 
                                                                <option value="Guyana">Guyana</option> 
                                                                <option value="Haiti">Haiti</option> 
                                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                                                <option value="Honduras">Honduras</option> 
                                                                <option value="Hong Kong">Hong Kong</option> 
                                                                <option value="Hungary">Hungary</option> 
                                                                <option value="Iceland">Iceland</option> 
                                                                <option value="India">India</option> 
                                                                <option value="Indonesia">Indonesia</option> 
                                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                                                <option value="Iraq">Iraq</option> 
                                                                <option value="Ireland">Ireland</option> 
                                                                <option value="Israel">Israel</option> 
                                                                <option value="Italy">Italy</option> 
                                                                <option value="Jamaica">Jamaica</option> 
                                                                <option value="Japan">Japan</option> 
                                                                <option value="Jordan">Jordan</option> 
                                                                <option value="Kazakhstan">Kazakhstan</option> 
                                                                <option value="Kenya">Kenya</option> 
                                                                <option value="Kiribati">Kiribati</option> 
                                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                                                <option value="Korea, Republic of">Korea, Republic of</option> 
                                                                <option value="Kuwait">Kuwait</option> 
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                                                <option value="Latvia">Latvia</option> 
                                                                <option value="Lebanon">Lebanon</option> 
                                                                <option value="Lesotho">Lesotho</option> 
                                                                <option value="Liberia">Liberia</option> 
                                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                                                <option value="Liechtenstein">Liechtenstein</option> 
                                                                <option value="Lithuania">Lithuania</option> 
                                                                <option value="Luxembourg">Luxembourg</option> 
                                                                <option value="Macao">Macao</option> 
                                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                                                <option value="Madagascar">Madagascar</option> 
                                                                <option value="Malawi">Malawi</option> 
                                                                <option value="Malaysia">Malaysia</option> 
                                                                <option value="Maldives">Maldives</option> 
                                                                <option value="Mali">Mali</option> 
                                                                <option value="Malta">Malta</option> 
                                                                <option value="Marshall Islands">Marshall Islands</option> 
                                                                <option value="Martinique">Martinique</option> 
                                                                <option value="Mauritania">Mauritania</option> 
                                                                <option value="Mauritius">Mauritius</option> 
                                                                <option value="Mayotte">Mayotte</option> 
                                                                <option value="Mexico">Mexico</option> 
                                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                                                <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                                                <option value="Monaco">Monaco</option> 
                                                                <option value="Mongolia">Mongolia</option> 
                                                                <option value="Montserrat">Montserrat</option> 
                                                                <option value="Morocco">Morocco</option> 
                                                                <option value="Mozambique">Mozambique</option> 
                                                                <option value="Myanmar">Myanmar</option> 
                                                                <option value="Namibia">Namibia</option> 
                                                                <option value="Nauru">Nauru</option> 
                                                                <option value="Nepal">Nepal</option> 
                                                                <option value="Netherlands">Netherlands</option> 
                                                                <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                                                <option value="New Caledonia">New Caledonia</option> 
                                                                <option value="New Zealand">New Zealand</option> 
                                                                <option value="Nicaragua">Nicaragua</option> 
                                                                <option value="Niger">Niger</option> 
                                                                <option value="Nigeria">Nigeria</option> 
                                                                <option value="Niue">Niue</option> 
                                                                <option value="Norfolk Island">Norfolk Island</option> 
                                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                                                <option value="Norway">Norway</option> 
                                                                <option value="Oman">Oman</option> 
                                                                <option value="Pakistan">Pakistan</option> 
                                                                <option value="Palau">Palau</option> 
                                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                                                <option value="Panama">Panama</option> 
                                                                <option value="Papua New Guinea">Papua New Guinea</option> 
                                                                <option value="Paraguay">Paraguay</option> 
                                                                <option value="Peru">Peru</option> 
                                                                <option value="Philippines">Philippines</option> 
                                                                <option value="Pitcairn">Pitcairn</option> 
                                                                <option value="Poland">Poland</option> 
                                                                <option value="Portugal">Portugal</option> 
                                                                <option value="Puerto Rico">Puerto Rico</option> 
                                                                <option value="Qatar">Qatar</option> 
                                                                <option value="Reunion">Reunion</option> 
                                                                <option value="Romania">Romania</option> 
                                                                <option value="Russian Federation">Russian Federation</option> 
                                                                <option value="Rwanda">Rwanda</option> 
                                                                <option value="Saint Helena">Saint Helena</option> 
                                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                                                <option value="Saint Lucia">Saint Lucia</option> 
                                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                                                <option value="Samoa">Samoa</option> 
                                                                <option value="San Marino">San Marino</option> 
                                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                                                <option value="Saudi Arabia">Saudi Arabia</option> 
                                                                <option value="Senegal">Senegal</option> 
                                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                                                                <option value="Seychelles">Seychelles</option> 
                                                                <option value="Sierra Leone">Sierra Leone</option> 
                                                                <option value="Singapore">Singapore</option> 
                                                                <option value="Slovakia">Slovakia</option> 
                                                                <option value="Slovenia">Slovenia</option> 
                                                                <option value="Solomon Islands">Solomon Islands</option> 
                                                                <option value="Somalia">Somalia</option> 
                                                                <option value="South Africa">South Africa</option> 
                                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                                                <option value="Spain">Spain</option> 
                                                                <option value="Sri Lanka">Sri Lanka</option> 
                                                                <option value="Sudan">Sudan</option> 
                                                                <option value="Suriname">Suriname</option> 
                                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                                                <option value="Swaziland">Swaziland</option> 
                                                                <option value="Sweden">Sweden</option> 
                                                                <option value="Switzerland">Switzerland</option> 
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                                                                <option value="Tajikistan">Tajikistan</option> 
                                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                                                <option value="Thailand">Thailand</option> 
                                                                <option value="Timor-leste">Timor-leste</option> 
                                                                <option value="Togo">Togo</option> 
                                                                <option value="Tokelau">Tokelau</option> 
                                                                <option value="Tonga">Tonga</option> 
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                                                <option value="Tunisia">Tunisia</option> 
                                                                <option value="Turkey">Turkey</option> 
                                                                <option value="Turkmenistan">Turkmenistan</option> 
                                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                                                <option value="Tuvalu">Tuvalu</option> 
                                                                <option value="Uganda">Uganda</option> 
                                                                <option value="Ukraine">Ukraine</option> 
                                                                <option value="United Arab Emirates">United Arab Emirates</option> 
                                                                <option value="United Kingdom">United Kingdom</option> 
                                                                <option value="United States">United States</option> 
                                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                                                <option value="Uruguay">Uruguay</option> 
                                                                <option value="Uzbekistan">Uzbekistan</option> 
                                                                <option value="Vanuatu">Vanuatu</option> 
                                                                <option value="Venezuela">Venezuela</option> 
                                                                <option value="Viet Nam">Viet Nam</option> 
                                                                <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                                                <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                                                <option value="Western Sahara">Western Sahara</option> 
                                                                <option value="Yemen">Yemen</option> 
                                                                <option value="Zambia">Zambia</option> 
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Edit Billing Address -->
        
                                    <!-- Edit Shipping Address -->
                                    <div class="flat-card profile-info-card is-auto has-overflow">
                                        <div class="card-title">
                                            <h3>Shipping Address</h3>
        
                                            <div class="switch-wrapper has-simple-popover" data-content="Enable if you need a different shipping address" data-placement="top">
                                                <!--input type="checkbox" class="js-switch address-switcher"/-->
                                                <label class="form-switch">
                                                    <input type="checkbox" class="is-switch">
                                                    <i></i>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card-body is-disabled">
                                            <div class="columns">
                                                <div class="column is-6">
                                                    <!-- Form group -->
                                                    <div class="info-block">
                                                        <span class="label-text">Number</span>
                                                        <div class="control">
                                                            <input type="text" class="input is-default" value="23, Block C2">
                                                        </div>
                                                    </div>
                                                    <!-- Form group -->
                                                    <div class="info-block">
                                                        <span class="label-text">City</span>
                                                        <div class="control">
                                                            <input type="text" class="input is-default" value="Los Angeles">
                                                        </div>
                                                    </div>
                                                    <!-- Form group -->
                                                    <div class="info-block">
                                                        <span class="label-text">State</span>
                                                        <div class="control">
                                                            <input type="text" class="input is-default" value="CA">
                                                        </div>
                                                    </div>
                                                </div>
        
                                                <div class="column is-6">
                                                    <!-- Form group -->
                                                    <div class="info-block">
                                                        <span class="label-text">Street</span>
                                                        <div class="control">
                                                            <input type="text" class="input is-default" value="Church Street">
                                                        </div>
                                                    </div>
                                                    <!-- Form group -->
                                                    <div class="info-block">
                                                        <span class="label-text">Postal Code</span>
                                                        <div class="control">
                                                            <input type="text" class="input is-default" value="100065">
                                                        </div>
                                                    </div>
                                                    <!-- Form group -->
                                                    <div class="info-block">
                                                        <span class="label-text">Country</span>
                                                        <div class="control">
                                                            <select class="chosen-select">
                                                                <option value="United States">United States</option> 
                                                                <option value="United Kingdom">United Kingdom</option> 
                                                                <option value="Afghanistan">Afghanistan</option> 
                                                                <option value="Albania">Albania</option> 
                                                                <option value="Algeria">Algeria</option> 
                                                                <option value="American Samoa">American Samoa</option> 
                                                                <option value="Andorra">Andorra</option> 
                                                                <option value="Angola">Angola</option> 
                                                                <option value="Anguilla">Anguilla</option> 
                                                                <option value="Antarctica">Antarctica</option> 
                                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
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
                                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                                                                <option value="Botswana">Botswana</option> 
                                                                <option value="Bouvet Island">Bouvet Island</option> 
                                                                <option value="Brazil">Brazil</option> 
                                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                                                                <option value="Brunei Darussalam">Brunei Darussalam</option> 
                                                                <option value="Bulgaria">Bulgaria</option> 
                                                                <option value="Burkina Faso">Burkina Faso</option> 
                                                                <option value="Burundi">Burundi</option> 
                                                                <option value="Cambodia">Cambodia</option> 
                                                                <option value="Cameroon">Cameroon</option> 
                                                                <option value="Canada">Canada</option> 
                                                                <option value="Cape Verde">Cape Verde</option> 
                                                                <option value="Cayman Islands">Cayman Islands</option> 
                                                                <option value="Central African Republic">Central African Republic</option> 
                                                                <option value="Chad">Chad</option> 
                                                                <option value="Chile">Chile</option> 
                                                                <option value="China">China</option> 
                                                                <option value="Christmas Island">Christmas Island</option> 
                                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                                                                <option value="Colombia">Colombia</option> 
                                                                <option value="Comoros">Comoros</option> 
                                                                <option value="Congo">Congo</option> 
                                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                                                                <option value="Cook Islands">Cook Islands</option> 
                                                                <option value="Costa Rica">Costa Rica</option> 
                                                                <option value="Cote D'ivoire">Cote D'ivoire</option> 
                                                                <option value="Croatia">Croatia</option> 
                                                                <option value="Cuba">Cuba</option> 
                                                                <option value="Cyprus">Cyprus</option> 
                                                                <option value="Czech Republic">Czech Republic</option> 
                                                                <option value="Denmark">Denmark</option> 
                                                                <option value="Djibouti">Djibouti</option> 
                                                                <option value="Dominica">Dominica</option> 
                                                                <option value="Dominican Republic">Dominican Republic</option> 
                                                                <option value="Ecuador">Ecuador</option> 
                                                                <option value="Egypt">Egypt</option> 
                                                                <option value="El Salvador">El Salvador</option> 
                                                                <option value="Equatorial Guinea">Equatorial Guinea</option> 
                                                                <option value="Eritrea">Eritrea</option> 
                                                                <option value="Estonia">Estonia</option> 
                                                                <option value="Ethiopia">Ethiopia</option> 
                                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                                                                <option value="Faroe Islands">Faroe Islands</option> 
                                                                <option value="Fiji">Fiji</option> 
                                                                <option value="Finland">Finland</option> 
                                                                <option value="France">France</option> 
                                                                <option value="French Guiana">French Guiana</option> 
                                                                <option value="French Polynesia">French Polynesia</option> 
                                                                <option value="French Southern Territories">French Southern Territories</option> 
                                                                <option value="Gabon">Gabon</option> 
                                                                <option value="Gambia">Gambia</option> 
                                                                <option value="Georgia">Georgia</option> 
                                                                <option value="Germany">Germany</option> 
                                                                <option value="Ghana">Ghana</option> 
                                                                <option value="Gibraltar">Gibraltar</option> 
                                                                <option value="Greece">Greece</option> 
                                                                <option value="Greenland">Greenland</option> 
                                                                <option value="Grenada">Grenada</option> 
                                                                <option value="Guadeloupe">Guadeloupe</option> 
                                                                <option value="Guam">Guam</option> 
                                                                <option value="Guatemala">Guatemala</option> 
                                                                <option value="Guinea">Guinea</option> 
                                                                <option value="Guinea-bissau">Guinea-bissau</option> 
                                                                <option value="Guyana">Guyana</option> 
                                                                <option value="Haiti">Haiti</option> 
                                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                                                                <option value="Honduras">Honduras</option> 
                                                                <option value="Hong Kong">Hong Kong</option> 
                                                                <option value="Hungary">Hungary</option> 
                                                                <option value="Iceland">Iceland</option> 
                                                                <option value="India">India</option> 
                                                                <option value="Indonesia">Indonesia</option> 
                                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                                                                <option value="Iraq">Iraq</option> 
                                                                <option value="Ireland">Ireland</option> 
                                                                <option value="Israel">Israel</option> 
                                                                <option value="Italy">Italy</option> 
                                                                <option value="Jamaica">Jamaica</option> 
                                                                <option value="Japan">Japan</option> 
                                                                <option value="Jordan">Jordan</option> 
                                                                <option value="Kazakhstan">Kazakhstan</option> 
                                                                <option value="Kenya">Kenya</option> 
                                                                <option value="Kiribati">Kiribati</option> 
                                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                                                                <option value="Korea, Republic of">Korea, Republic of</option> 
                                                                <option value="Kuwait">Kuwait</option> 
                                                                <option value="Kyrgyzstan">Kyrgyzstan</option> 
                                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                                                                <option value="Latvia">Latvia</option> 
                                                                <option value="Lebanon">Lebanon</option> 
                                                                <option value="Lesotho">Lesotho</option> 
                                                                <option value="Liberia">Liberia</option> 
                                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                                                                <option value="Liechtenstein">Liechtenstein</option> 
                                                                <option value="Lithuania">Lithuania</option> 
                                                                <option value="Luxembourg">Luxembourg</option> 
                                                                <option value="Macao">Macao</option> 
                                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                                                                <option value="Madagascar">Madagascar</option> 
                                                                <option value="Malawi">Malawi</option> 
                                                                <option value="Malaysia">Malaysia</option> 
                                                                <option value="Maldives">Maldives</option> 
                                                                <option value="Mali">Mali</option> 
                                                                <option value="Malta">Malta</option> 
                                                                <option value="Marshall Islands">Marshall Islands</option> 
                                                                <option value="Martinique">Martinique</option> 
                                                                <option value="Mauritania">Mauritania</option> 
                                                                <option value="Mauritius">Mauritius</option> 
                                                                <option value="Mayotte">Mayotte</option> 
                                                                <option value="Mexico">Mexico</option> 
                                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                                                                <option value="Moldova, Republic of">Moldova, Republic of</option> 
                                                                <option value="Monaco">Monaco</option> 
                                                                <option value="Mongolia">Mongolia</option> 
                                                                <option value="Montserrat">Montserrat</option> 
                                                                <option value="Morocco">Morocco</option> 
                                                                <option value="Mozambique">Mozambique</option> 
                                                                <option value="Myanmar">Myanmar</option> 
                                                                <option value="Namibia">Namibia</option> 
                                                                <option value="Nauru">Nauru</option> 
                                                                <option value="Nepal">Nepal</option> 
                                                                <option value="Netherlands">Netherlands</option> 
                                                                <option value="Netherlands Antilles">Netherlands Antilles</option> 
                                                                <option value="New Caledonia">New Caledonia</option> 
                                                                <option value="New Zealand">New Zealand</option> 
                                                                <option value="Nicaragua">Nicaragua</option> 
                                                                <option value="Niger">Niger</option> 
                                                                <option value="Nigeria">Nigeria</option> 
                                                                <option value="Niue">Niue</option> 
                                                                <option value="Norfolk Island">Norfolk Island</option> 
                                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                                                                <option value="Norway">Norway</option> 
                                                                <option value="Oman">Oman</option> 
                                                                <option value="Pakistan">Pakistan</option> 
                                                                <option value="Palau">Palau</option> 
                                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                                                                <option value="Panama">Panama</option> 
                                                                <option value="Papua New Guinea">Papua New Guinea</option> 
                                                                <option value="Paraguay">Paraguay</option> 
                                                                <option value="Peru">Peru</option> 
                                                                <option value="Philippines">Philippines</option> 
                                                                <option value="Pitcairn">Pitcairn</option> 
                                                                <option value="Poland">Poland</option> 
                                                                <option value="Portugal">Portugal</option> 
                                                                <option value="Puerto Rico">Puerto Rico</option> 
                                                                <option value="Qatar">Qatar</option> 
                                                                <option value="Reunion">Reunion</option> 
                                                                <option value="Romania">Romania</option> 
                                                                <option value="Russian Federation">Russian Federation</option> 
                                                                <option value="Rwanda">Rwanda</option> 
                                                                <option value="Saint Helena">Saint Helena</option> 
                                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                                                <option value="Saint Lucia">Saint Lucia</option> 
                                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                                                                <option value="Samoa">Samoa</option> 
                                                                <option value="San Marino">San Marino</option> 
                                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                                                <option value="Saudi Arabia">Saudi Arabia</option> 
                                                                <option value="Senegal">Senegal</option> 
                                                                <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                                                                <option value="Seychelles">Seychelles</option> 
                                                                <option value="Sierra Leone">Sierra Leone</option> 
                                                                <option value="Singapore">Singapore</option> 
                                                                <option value="Slovakia">Slovakia</option> 
                                                                <option value="Slovenia">Slovenia</option> 
                                                                <option value="Solomon Islands">Solomon Islands</option> 
                                                                <option value="Somalia">Somalia</option> 
                                                                <option value="South Africa">South Africa</option> 
                                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                                                                <option value="Spain">Spain</option> 
                                                                <option value="Sri Lanka">Sri Lanka</option> 
                                                                <option value="Sudan">Sudan</option> 
                                                                <option value="Suriname">Suriname</option> 
                                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                                                                <option value="Swaziland">Swaziland</option> 
                                                                <option value="Sweden">Sweden</option> 
                                                                <option value="Switzerland">Switzerland</option> 
                                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                                                                <option value="Tajikistan">Tajikistan</option> 
                                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                                                                <option value="Thailand">Thailand</option> 
                                                                <option value="Timor-leste">Timor-leste</option> 
                                                                <option value="Togo">Togo</option> 
                                                                <option value="Tokelau">Tokelau</option> 
                                                                <option value="Tonga">Tonga</option> 
                                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                                                                <option value="Tunisia">Tunisia</option> 
                                                                <option value="Turkey">Turkey</option> 
                                                                <option value="Turkmenistan">Turkmenistan</option> 
                                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                                                                <option value="Tuvalu">Tuvalu</option> 
                                                                <option value="Uganda">Uganda</option> 
                                                                <option value="Ukraine">Ukraine</option> 
                                                                <option value="United Arab Emirates">United Arab Emirates</option> 
                                                                <option value="United Kingdom">United Kingdom</option> 
                                                                <option value="United States">United States</option> 
                                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                                                                <option value="Uruguay">Uruguay</option> 
                                                                <option value="Uzbekistan">Uzbekistan</option> 
                                                                <option value="Vanuatu">Vanuatu</option> 
                                                                <option value="Venezuela">Venezuela</option> 
                                                                <option value="Viet Nam">Viet Nam</option> 
                                                                <option value="Virgin Islands, British">Virgin Islands, British</option> 
                                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                                                                <option value="Wallis and Futuna">Wallis and Futuna</option> 
                                                                <option value="Western Sahara">Western Sahara</option> 
                                                                <option value="Yemen">Yemen</option> 
                                                                <option value="Zambia">Zambia</option> 
                                                                <option value="Zimbabwe">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Edit Shipping Address -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Edit Account -->
                </div>
            </div>
            <!-- /Container -->
        </div>
        <!-- /Main wrapper -->
        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>
        <!-- Helios js -->
        <script src="assets/js/nephos.js"></script>
        <script src="assets/js/jquery.min.js"></script>
<script>
    $(function(){
        $(".columns.is-account-grid.is-multiline").fadeIn("100");
    })
</script>    </body>  
</html>

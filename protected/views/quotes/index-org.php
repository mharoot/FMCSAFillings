<?php
/* @var $this QuotesController */

$this->breadcrumbs=array(
	'Quotes',
);
?>
<br>
<h3>Add Quote </h3>
<form action="/account/quote.php" name="lqoForm" method="post" onsubmit="return validateForm(this)" id="lqoForm">
    <input type="hidden" name="dateModified" value="">
    <div id="formSection">
        <div id="" class="formSectionWrapper">
            <h3><!-- <a class="togbox"><i class="fa fa-plus"></i> </a> --> Shipper Information</h3>
            <div class="formSectionContent">
                <fieldset class="formfields3Col shipper-fieldset">
                    <ol>
                        <li>
                            <label>Select Shipper</label>
                            <select name="customer_id" id="customer_id" style="vertical-align: middle; width: 150px; float: left;" onchange="if(updateCustomer()) enableUnloadPrompt(true);">
                                <option value="">New Shipper</option>
                                <option value="739090"></option>
                                <option value="1045659"></option>
                                <option value="1049748"></option>
                                <option value="704890">11th Street Auto</option>
                                <option value="1018994">A Gud Buy Used Cars</option>
                                <option value="1567347">Aaron's Truck Salvage</option>
                                <option value="1035018">Ami's Car Export</option>
                                <option value="1036090">AmPm Transport</option>
                                <option value="934526">Auto Export International</option>
                                <option value="903747">Auto Workz</option>
                                <option value="799599">Autos TJ</option>
                                <option value="697146">AV Auto Body</option>
                                <option value="1018761">BB TOW</option>
                                <option value="1119806">Becker Automotive Designs, Inc.</option>
                                <option value="912752">Bidadoo Auction</option>
                                <option value="923878">Bidadoo Auctions</option>
                                <option value="1053005">Black Katz Auto Accessories</option>
                                <option value="770788">BMS Motor Sports Inc.</option>
                                <option value="1050190">BMS Motsport</option>
                                <option value="916198">Bob Bell Nissan</option>
                                <option value="908320">BRG Miami</option>
                                <option value="637383">Camino Real Chevrolet</option>
                                <option value="924714">Casa De Cadillac</option>
                                <option value="897122">Central Sales, Inc.</option>
                                <option value="1420472">CJ Wilson Mazda</option>
                                <option value="915143">Courtesy Ford</option>
                                <option value="922815">Cross Roads Locators</option>
                                <option value="628480">Dallas Cowboys</option>
                                <option value="1030401">Dealer</option>
                                <option value="761793">Deals R US Auto Sales</option>
                                <option value="1511369">Direct Auto Sales</option>
                                <option value="1067012">E&amp;E Automotive</option>
                                <option value="923547">Elio Motors</option>
                                <option value="1014431">EnviroSmart Inc.</option>
                                <option value="825468">EV Auto Body</option>
                                <option value="925865">Express Medical Transporters</option>
                                <option value="946396">Family Food Mart</option>
                                <option value="926125">Fiat of Van Nuys</option>
                                <option value="1019016">First Avenue Auto Mark</option>
                                <option value="682547">Fitzmark</option>
                                <option value="916459">Fleets 101</option>
                                <option value="1012590">Fox Motorsports</option>
                                <option value="941985">Garage Candy</option>
                                <option value="783961">Generation Kia</option>
                                <option value="799869">Glendale Nissan</option>
                                <option value="1123078">Golden California Coach Inc.</option>
                                <option value="1121689">Griffs American Auto Parks &amp; Rest</option>
                                <option value="934346">Guam Freight Service</option>
                                <option value="995910">Hamre Equipment</option>
                                <option value="924705">Honda of Downtown LA</option>
                                <option value="922487">Hyundai of Temecula</option>
                                <option value="940900">I AM Sports &amp; Entertainment</option>
                                <option value="1254672">IAM Sports Entertainment</option>
                                <option value="876175">Integrity Management Services Group Inc</option>
                                <option value="736962">Jimenez &amp; Sons  Towing LLC</option>
                                <option value="757335">Keyes Audi</option>
                                <option value="845564">Kia of Alhambra</option>
                                <option value="1457968">Kitchen Experts of California</option>
                                <option value="858521">L.A. Hyundai at LAX</option>
                                <option value="665388">LA Auto World</option>
                                <option value="886429">Longo Lexus</option>
                                <option value="922943">Luxury  Motoring</option>
                                <option value="911666">Marina City Club</option>
                                <option value="1663999">Marvel Deals LLC</option>
                                <option value="852719">Mercedes Benz</option>
                                <option value="1457128">Mercedes Benz of Oakland</option>
                                <option value="1251421">Mercedes-Benz of Midlothian</option>
                                <option value="985450">Moritz Mini</option>
                                <option value="1478854">Morristown Ford</option>
                                <option value="919185">My Auto Wrecking</option>
                                <option value="981965">Napa Ford</option>
                                <option value="1062558">Napa Ford</option>
                                <option value="944794">Napa Ford Lincoln</option>
                                <option value="754198">National Recovery</option>
                                <option value="1480472">New Car Super Store</option>
                                <option value="848978">Peace of Mind Relocation - Daisy</option>
                                <option value="972468">Penske Toyota of Downey</option>
                                <option value="1821154">Pitre Kia of Las Cruces</option>
                                <option value="843638">Putnam GM</option>
                                <option value="1013884">Richmond BMW</option>
                                <option value="1522636">Santa Fe Mini</option>
                                <option value="1490304">Santa Monica Audi</option>
                                <option value="905108">Shujaa</option>
                                <option value="1036697">Singer Porsche</option>
                                <option value="823019">Skyline Auto Center Inc.</option>
                                <option value="863300">South Gate Motors</option>
                                <option value="1038075">Sparta LLC</option>
                                <option value="1229193">Star Ford Lincoln</option>
                                <option value="1528738">Subaru of America, Inc.</option>
                                <option value="795808">Supersportz Inc.</option>
                                <option value="1264675">Swift Superstore</option>
                                <option value="1784856">Teledyne Scientific and Imaging</option>
                                <option value="1011683">Toyota of Northridge</option>
                                <option value="842442">Trans Van Lines</option>
                                <option value="840641">TRE, LLC</option>
                                <option value="805678">Ultimate Auto Werks</option>
                                <option value="1405247">University VW Mazda</option>
                                <option value="657764">UT Freight</option>
                                <option value="653990">Utility Trucking</option>
                                <option value="657687">Vip Relocation</option>
                                <option value="978273">WhyBuyNewAutos</option>
                                <option value="1003727">XtraBarter Logistics &amp; Marketing</option>
                                <option value="1595093">Yates Buick GMC</option>

                            </select>
                            <div class="searchButton" style="cursor: pointer;" onclick="openLocateShipper()"></div>
                            <span id="systemWorking" style="display: none; position: absolute">Loading...</span>
                        </li>
                        <li>
                            <label id="first_name_label">First Name <span id="first_name_req"><em>*</em></span></label>
                            <input type="text" class="text" name="first_name" id="first_name" value="" size="28" maxlength="50" onchange="enableUnloadPrompt(true); ">
                        </li>
                        <li>
                            <label id="last_name_label">Last Name <span id="last_name_req"><em>*</em></span></label>
                            <input type="text" class="text" name="last_name" id="last_name" value="" size="28" maxlength="50" onchange="enableUnloadPrompt(true); " autocomplete="off">
                            <div id="ac_break_last_name"></div><ul class="autocomplete" style="display: none;"></ul>
                        </li>
                        <li>
                            <label id="customer_company">Company <span id="company_req" style="display: none;"><em>*</em></span></label>
                            <input type="text" class="text" name="company_name" id="company_name" value="" size="28" onkeyup="checkCompanyName()" onchange="enableUnloadPrompt(true); " autocomplete="off">
                            <div id="ac_break_company_name"></div><ul class="autocomplete" style="display: none;"></ul>
                        </li>
                        <li id="create_customer_section">
                            <label>&nbsp;</label>
                            <input type="checkbox" name="create_customer" id="create_customer" value="0" onclick="createCustomer()" style="vertical-align: middle">
                            Add to saved shippers list
                        </li>
                    </ol>
                </fieldset>
                <fieldset class="formfields3Col shipper-fieldset">
                    <ol>
                        <li>
                            <label>Email </label>
                            <input type="text" class="text" name="email" id="email" value="" size="28" onchange="enableUnloadPrompt(true); " autocomplete="off">
                            <div id="ac_break_email"></div><ul class="autocomplete" style="display: none;"></ul>
                        </li>
                        <li>
                            <label>Phone 1 </label>
                            <input type="text" class="text" name="phone" id="phone" value="" size="28" onchange="enableUnloadPrompt(true); ">
                        </li>
                        <li>
                            <label>Phone 2</label>
                            <input type="text" class="text" name="phone_2" id="phone_2" value="" size="28" onchange="enableUnloadPrompt(true); ">
                        </li>
                        <li>
                            <label>Mobile</label>
                            <input type="text" class="text" name="phone_cell" id="phone_cell" value="" size="28" onchange="enableUnloadPrompt(true); ">
                        </li>
                        <li>
                            <label>Fax</label>
                            <input type="text" class="text" name="phone_fax" id="phone_fax" value="" size="28" onchange="enableUnloadPrompt(true); ">
                        </li>
                    </ol>
                </fieldset>
                <fieldset class="formfields3Col shipper-fieldset">
                    <ol>
                        <li>
                            <label>Address</label>
                            <input type="text" class="text" name="address" id="address" value="" size="28" onchange="enableUnloadPrompt(true); ">
                            <div style="margin-left: 85px;">
                                <input type="text" class="text" name="address2" id="address2" value="" size="28" onchange="enableUnloadPrompt(true); "></div>
                        </li>
                        <li>
                            <label>City</label>
                            <input type="text" class="text" name="city" id="city" value="" size="28" onchange="enableUnloadPrompt(true); ">
                        </li>
                        <li>
                            <label>State/Zip</label>
                            <select name="state_code" id="state_code" onchange="enableUnloadPrompt(true);" style="width: 120px;">
                                <option value="">Select a state</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">Dist. of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="GU">Guam</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VI">Virgin Islands</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                                <option value="CP">Canada-Province Not Specified</option>
                                <option value="AB">Canada-Alberta</option>
                                <option value="BC">Canada-British Columbia</option>
                                <option value="MB">Canada-Manitoba</option>
                                <option value="NB">Canada-New Brunswick</option>
                                <option value="NL">Canada-Newfoundland</option>
                                <option value="NT">Canada-Northwest Territories</option>
                                <option value="NS">Canada-Nova Scotia</option>
                                <option value="NU">Canada-Nunavut</option>
                                <option value="ON">Canada-Ontario</option>
                                <option value="PE">Canada-Prince Edward Island</option>
                                <option value="QC">Canada-Quebec</option>
                                <option value="SK">Canada-Saskatchewan</option>
                                <option value="YT">Canada-Yukon</option>
                                <option value="OC">OTHER COUNTRIES</option>

                            </select>
                            <input type="text" class="text" name="zip" id="zip" value="" size="5" onchange="enableUnloadPrompt(true);" style="width: 40px;">
                        </li>
                        <li>
                            <label>Country</label>
                            <select name="country_id" id="country_id" onchange="enableUnloadPrompt(true); ">
                                <option value="">Select a country</option>
                                <option value="1" selected="selected">United States</option>
                                <option value="2">Canada</option>
                                <option value="3">Mexico</option>
                                <option value="4">Afghanistan</option>
                                <option value="5">Albania</option>
                                <option value="6">Algeria</option>
                                <option value="202">American Samoa</option>
                                <option value="203">Andorra</option>
                                <option value="7">Angola</option>
                                <option value="8">Antigua and Barbuda</option>
                                <option value="9">Argentina</option>
                                <option value="10">Armenia</option>
                                <option value="11">Aruba</option>
                                <option value="12">Australia</option>
                                <option value="13">Austria</option>
                                <option value="14">Azerbaijan</option>
                                <option value="15">Bahamas</option>
                                <option value="16">Bahrain</option>
                                <option value="17">Bangladesh</option>
                                <option value="18">Barbados</option>
                                <option value="19">Belarus</option>
                                <option value="20">Belgium</option>
                                <option value="21">Belgium/Luxembourg</option>
                                <option value="22">Belize</option>
                                <option value="23">Benin</option>
                                <option value="24">Bermuda</option>
                                <option value="25">Bhutan</option>
                                <option value="26">Bolivia</option>
                                <option value="27">Bosnia and Herzegovina</option>
                                <option value="28">Botswana</option>
                                <option value="29">Brazil</option>
                                <option value="204">British Virgin Islands</option>
                                <option value="30">Brunei Darussalam</option>
                                <option value="31">Bulgaria</option>
                                <option value="32">Burkina Faso</option>
                                <option value="33">Burundi</option>
                                <option value="34">Cambodia</option>
                                <option value="35">Cameroon</option>
                                <option value="37">Cape Verde</option>
                                <option value="205">Cayman Islands</option>
                                <option value="38">Central African Rep</option>
                                <option value="39">Chad</option>
                                <option value="206">Channel Islands</option>
                                <option value="40">Chile</option>
                                <option value="41">China</option>
                                <option value="42">Colombia</option>
                                <option value="43">Comoros</option>
                                <option value="44">Congo</option>
                                <option value="45">Congo, Dem Rep</option>
                                <option value="207">Cook Islands</option>
                                <option value="46">Costa Rica</option>
                                <option value="47">Cote dIvoire</option>
                                <option value="48">Croatia</option>
                                <option value="49">Cuba</option>
                                <option value="50">Cyprus</option>
                                <option value="51">Czech Rep</option>
                                <option value="52">Denmark</option>
                                <option value="53">Djibouti</option>
                                <option value="54">Dominica</option>
                                <option value="55">Dominican Rep</option>
                                <option value="208">East Timor</option>
                                <option value="56">Ecuador</option>
                                <option value="57">Egypt</option>
                                <option value="58">El Salvador</option>
                                <option value="59">Equatorial Guinea</option>
                                <option value="60">Eritrea</option>
                                <option value="61">Estonia</option>
                                <option value="62">Ethiopia</option>
                                <option value="209">Faeroe Islands</option>
                                <option value="210">Falkland Islands</option>
                                <option value="63">Fiji</option>
                                <option value="64">Finland</option>
                                <option value="65">France</option>
                                <option value="66">French Guiana</option>
                                <option value="67">French Polynesia</option>
                                <option value="68">Gabon</option>
                                <option value="69">Gambia</option>
                                <option value="228">Gaza Strip</option>
                                <option value="70">Georgia</option>
                                <option value="71">Germany</option>
                                <option value="72">Ghana</option>
                                <option value="212">Gibraltar</option>
                                <option value="73">Greece</option>
                                <option value="213">Greenland</option>
                                <option value="74">Grenada</option>
                                <option value="75">Guadeloupe</option>
                                <option value="214">Guam</option>
                                <option value="76">Guatemala</option>
                                <option value="77">Guinea</option>
                                <option value="78">Guinea-Bissau</option>
                                <option value="79">Guyana</option>
                                <option value="80">Haiti</option>
                                <option value="81">Honduras</option>
                                <option value="82">Hong Kong</option>
                                <option value="83">Hungary</option>
                                <option value="84">Iceland</option>
                                <option value="85">India</option>
                                <option value="86">Indonesia</option>
                                <option value="87">Iran, Islamic Rep</option>
                                <option value="88">Iraq</option>
                                <option value="89">Ireland</option>
                                <option value="215">Isle of Man</option>
                                <option value="90">Israel</option>
                                <option value="91">Italy</option>
                                <option value="92">Jamaica</option>
                                <option value="93">Japan</option>
                                <option value="94">Jordan</option>
                                <option value="95">Kazakhstan</option>
                                <option value="96">Kenya</option>
                                <option value="97">Kiribati</option>
                                <option value="98">Korea, Dem Peoples Rep</option>
                                <option value="99">Korea, Rep</option>
                                <option value="100">Kuwait</option>
                                <option value="101">Kyrgyzstan</option>
                                <option value="102">Lao Peoples Dem Rep</option>
                                <option value="103">Latvia</option>
                                <option value="104">Lebanon</option>
                                <option value="105">Lesotho</option>
                                <option value="106">Liberia</option>
                                <option value="107">Libyan Arab Jamahiriya</option>
                                <option value="216">Liechtenstein</option>
                                <option value="108">Lithuania</option>
                                <option value="109">Luxembourg</option>
                                <option value="110">Macau</option>
                                <option value="111">Macedonia, FYR</option>
                                <option value="112">Madagascar</option>
                                <option value="113">Malawi</option>
                                <option value="114">Malaysia</option>
                                <option value="115">Maldives</option>
                                <option value="116">Mali</option>
                                <option value="117">Malta</option>
                                <option value="118">Marshall Islands</option>
                                <option value="119">Martinique</option>
                                <option value="120">Mauritania</option>
                                <option value="121">Mauritius</option>
                                <option value="123">Micronesia, Fed States</option>
                                <option value="124">Moldova, Rep</option>
                                <option value="217">Monaco</option>
                                <option value="125">Mongolia</option>
                                <option value="126">Morocco</option>
                                <option value="127">Mozambique</option>
                                <option value="128">Myanmar</option>
                                <option value="129">Namibia</option>
                                <option value="218">Nauru</option>
                                <option value="130">Nepal</option>
                                <option value="131">Netherlands</option>
                                <option value="132">Netherlands Antilles</option>
                                <option value="133">New Caledonia</option>
                                <option value="134">New Zealand</option>
                                <option value="135">Nicaragua</option>
                                <option value="136">Niger</option>
                                <option value="137">Nigeria</option>
                                <option value="219">Niue</option>
                                <option value="220">Northern Mariana Islands</option>
                                <option value="138">Norway</option>
                                <option value="139">Oman</option>
                                <option value="230">Other</option>
                                <option value="140">Pakistan</option>
                                <option value="221">Palau</option>
                                <option value="211">Palestinian Territories</option>
                                <option value="141">Panama</option>
                                <option value="142">Papua New Guinea</option>
                                <option value="143">Paraguay</option>
                                <option value="144">Peru</option>
                                <option value="145">Philippines</option>
                                <option value="146">Poland</option>
                                <option value="147">Portugal</option>
                                <option value="148">Puerto Rico</option>
                                <option value="149">Qatar</option>
                                <option value="150">Reunion</option>
                                <option value="151">Romania</option>
                                <option value="152">Russian Federation</option>
                                <option value="153">Rwanda</option>
                                <option value="222">Saint Helena</option>
                                <option value="223">Saint Kitts and Nevis</option>
                                <option value="224">Saint Pierre and Miquelon</option>
                                <option value="154">Samoa</option>
                                <option value="225">San Marino</option>
                                <option value="155">Sao Tome &amp; Principe</option>
                                <option value="156">Saudi Arabia</option>
                                <option value="157">Senegal</option>
                                <option value="199">Serbia and Montenegro</option>
                                <option value="158">Seychelles</option>
                                <option value="159">Sierra Leone</option>
                                <option value="160">Singapore</option>
                                <option value="161">Slovakia</option>
                                <option value="162">Slovenia</option>
                                <option value="163">Solomon Islands</option>
                                <option value="164">Somalia</option>
                                <option value="165">South Africa</option>
                                <option value="166">Spain</option>
                                <option value="167">Sri Lanka</option>
                                <option value="168">St. Lucia</option>
                                <option value="169">St. Vincent &amp; Grenadines</option>
                                <option value="170">Sudan</option>
                                <option value="171">Suriname</option>
                                <option value="172">Swaziland</option>
                                <option value="173">Sweden</option>
                                <option value="174">Switzerland</option>
                                <option value="175">Syrian Arab Rep</option>
                                <option value="176">Taiwan</option>
                                <option value="177">Tajikistan</option>
                                <option value="178">Tanzania</option>
                                <option value="179">Thailand</option>
                                <option value="180">Togo</option>
                                <option value="181">Tonga</option>
                                <option value="182">Trinidad and Tobago</option>
                                <option value="183">Tunisia</option>
                                <option value="184">Turkey</option>
                                <option value="185">Turkmenistan</option>
                                <option value="226">Turks and Caicos Islands</option>
                                <option value="186">Uganda</option>
                                <option value="187">Ukraine</option>
                                <option value="188">United Arab Emirates</option>
                                <option value="189">United Kingdom</option>
                                <option value="191">Uruguay</option>
                                <option value="192">Uzbekistan</option>
                                <option value="193">Vanuatu</option>
                                <option value="194">Venezuela</option>
                                <option value="195">Viet Nam</option>
                                <option value="196">Virgin Islands</option>
                                <option value="229">West Bank</option>
                                <option value="227">Western Sahara</option>
                                <option value="197">Yemen</option>
                                <option value="198">Yemen, Rep</option>
                                <option value="200">Zambia</option>
                                <option value="201">Zimbabwe</option>

                            </select>
                        </li>
                    </ol>
                </fieldset>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>

    <div id="formSection">
        <div id="" class="formSectionWrapper">
            <h3><!-- <a class="togbox"><i class="fa fa-plus"></i> </a> --> Origin &amp; Destination</h3>
            <div class="formSectionContent">
                <fieldset class="formfields2Col">
                    <ol>
                        <li>
                            <label><b>From:</b> Select Location</label>
                            <select style="vertical-align: middle;" name="pickup_contact_id" id="pickup_contact_id" onchange="enableUnloadPrompt(true); updateLocation('pickup', this.value);">
                                <option value="">New location</option>
                                <option value="0">Same as shipper</option>

                            </select>
                            <span id="systemWorking2" style="display: none; position: absolute;">Loading...</span>
                        </li>
                        <li>
                            <label>City <em>*</em></label>
                            <input type="text" class="text" name="pickup_city" id="pickup_city" value="" size="28" onchange="enableUnloadPrompt(true);">
                        </li>
                        <li>
                            <label>State/Zip <em>*</em></label>
                            <select name="pickup_state_code" id="pickup_state_code" onchange="enableUnloadPrompt(true);" style="width: 120px;">
                                <option value="">Select a state</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">Dist. of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="GU">Guam</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VI">Virgin Islands</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                                <option value="CP">Canada-Province Not Specified</option>
                                <option value="AB">Canada-Alberta</option>
                                <option value="BC">Canada-British Columbia</option>
                                <option value="MB">Canada-Manitoba</option>
                                <option value="NB">Canada-New Brunswick</option>
                                <option value="NL">Canada-Newfoundland</option>
                                <option value="NT">Canada-Northwest Territories</option>
                                <option value="NS">Canada-Nova Scotia</option>
                                <option value="NU">Canada-Nunavut</option>
                                <option value="ON">Canada-Ontario</option>
                                <option value="PE">Canada-Prince Edward Island</option>
                                <option value="QC">Canada-Quebec</option>
                                <option value="SK">Canada-Saskatchewan</option>
                                <option value="YT">Canada-Yukon</option>
                                <option value="OC">OTHER COUNTRIES</option>

                            </select>
                            <input type="text" class="text" name="pickup_zip" id="pickup_zip" value="" size="5" onchange="enableUnloadPrompt(true);" style="width: 40px;">
                        </li>
                        <li>
                            <label>Country <em>*</em></label>
                            <select name="pickup_country_id" id="pickup_country_id" onchange="enableUnloadPrompt(true);">
                                <option value="">Select a country</option>
                                <option value="1" selected="selected">United States</option>
                                <option value="2">Canada</option>
                                <option value="3">Mexico</option>
                                <option value="4">Afghanistan</option>
                                <option value="5">Albania</option>
                                <option value="6">Algeria</option>
                                <option value="202">American Samoa</option>
                                <option value="203">Andorra</option>
                                <option value="7">Angola</option>
                                <option value="8">Antigua and Barbuda</option>
                                <option value="9">Argentina</option>
                                <option value="10">Armenia</option>
                                <option value="11">Aruba</option>
                                <option value="12">Australia</option>
                                <option value="13">Austria</option>
                                <option value="14">Azerbaijan</option>
                                <option value="15">Bahamas</option>
                                <option value="16">Bahrain</option>
                                <option value="17">Bangladesh</option>
                                <option value="18">Barbados</option>
                                <option value="19">Belarus</option>
                                <option value="20">Belgium</option>
                                <option value="21">Belgium/Luxembourg</option>
                                <option value="22">Belize</option>
                                <option value="23">Benin</option>
                                <option value="24">Bermuda</option>
                                <option value="25">Bhutan</option>
                                <option value="26">Bolivia</option>
                                <option value="27">Bosnia and Herzegovina</option>
                                <option value="28">Botswana</option>
                                <option value="29">Brazil</option>
                                <option value="204">British Virgin Islands</option>
                                <option value="30">Brunei Darussalam</option>
                                <option value="31">Bulgaria</option>
                                <option value="32">Burkina Faso</option>
                                <option value="33">Burundi</option>
                                <option value="34">Cambodia</option>
                                <option value="35">Cameroon</option>
                                <option value="37">Cape Verde</option>
                                <option value="205">Cayman Islands</option>
                                <option value="38">Central African Rep</option>
                                <option value="39">Chad</option>
                                <option value="206">Channel Islands</option>
                                <option value="40">Chile</option>
                                <option value="41">China</option>
                                <option value="42">Colombia</option>
                                <option value="43">Comoros</option>
                                <option value="44">Congo</option>
                                <option value="45">Congo, Dem Rep</option>
                                <option value="207">Cook Islands</option>
                                <option value="46">Costa Rica</option>
                                <option value="47">Cote dIvoire</option>
                                <option value="48">Croatia</option>
                                <option value="49">Cuba</option>
                                <option value="50">Cyprus</option>
                                <option value="51">Czech Rep</option>
                                <option value="52">Denmark</option>
                                <option value="53">Djibouti</option>
                                <option value="54">Dominica</option>
                                <option value="55">Dominican Rep</option>
                                <option value="208">East Timor</option>
                                <option value="56">Ecuador</option>
                                <option value="57">Egypt</option>
                                <option value="58">El Salvador</option>
                                <option value="59">Equatorial Guinea</option>
                                <option value="60">Eritrea</option>
                                <option value="61">Estonia</option>
                                <option value="62">Ethiopia</option>
                                <option value="209">Faeroe Islands</option>
                                <option value="210">Falkland Islands</option>
                                <option value="63">Fiji</option>
                                <option value="64">Finland</option>
                                <option value="65">France</option>
                                <option value="66">French Guiana</option>
                                <option value="67">French Polynesia</option>
                                <option value="68">Gabon</option>
                                <option value="69">Gambia</option>
                                <option value="228">Gaza Strip</option>
                                <option value="70">Georgia</option>
                                <option value="71">Germany</option>
                                <option value="72">Ghana</option>
                                <option value="212">Gibraltar</option>
                                <option value="73">Greece</option>
                                <option value="213">Greenland</option>
                                <option value="74">Grenada</option>
                                <option value="75">Guadeloupe</option>
                                <option value="214">Guam</option>
                                <option value="76">Guatemala</option>
                                <option value="77">Guinea</option>
                                <option value="78">Guinea-Bissau</option>
                                <option value="79">Guyana</option>
                                <option value="80">Haiti</option>
                                <option value="81">Honduras</option>
                                <option value="82">Hong Kong</option>
                                <option value="83">Hungary</option>
                                <option value="84">Iceland</option>
                                <option value="85">India</option>
                                <option value="86">Indonesia</option>
                                <option value="87">Iran, Islamic Rep</option>
                                <option value="88">Iraq</option>
                                <option value="89">Ireland</option>
                                <option value="215">Isle of Man</option>
                                <option value="90">Israel</option>
                                <option value="91">Italy</option>
                                <option value="92">Jamaica</option>
                                <option value="93">Japan</option>
                                <option value="94">Jordan</option>
                                <option value="95">Kazakhstan</option>
                                <option value="96">Kenya</option>
                                <option value="97">Kiribati</option>
                                <option value="98">Korea, Dem Peoples Rep</option>
                                <option value="99">Korea, Rep</option>
                                <option value="100">Kuwait</option>
                                <option value="101">Kyrgyzstan</option>
                                <option value="102">Lao Peoples Dem Rep</option>
                                <option value="103">Latvia</option>
                                <option value="104">Lebanon</option>
                                <option value="105">Lesotho</option>
                                <option value="106">Liberia</option>
                                <option value="107">Libyan Arab Jamahiriya</option>
                                <option value="216">Liechtenstein</option>
                                <option value="108">Lithuania</option>
                                <option value="109">Luxembourg</option>
                                <option value="110">Macau</option>
                                <option value="111">Macedonia, FYR</option>
                                <option value="112">Madagascar</option>
                                <option value="113">Malawi</option>
                                <option value="114">Malaysia</option>
                                <option value="115">Maldives</option>
                                <option value="116">Mali</option>
                                <option value="117">Malta</option>
                                <option value="118">Marshall Islands</option>
                                <option value="119">Martinique</option>
                                <option value="120">Mauritania</option>
                                <option value="121">Mauritius</option>
                                <option value="123">Micronesia, Fed States</option>
                                <option value="124">Moldova, Rep</option>
                                <option value="217">Monaco</option>
                                <option value="125">Mongolia</option>
                                <option value="126">Morocco</option>
                                <option value="127">Mozambique</option>
                                <option value="128">Myanmar</option>
                                <option value="129">Namibia</option>
                                <option value="218">Nauru</option>
                                <option value="130">Nepal</option>
                                <option value="131">Netherlands</option>
                                <option value="132">Netherlands Antilles</option>
                                <option value="133">New Caledonia</option>
                                <option value="134">New Zealand</option>
                                <option value="135">Nicaragua</option>
                                <option value="136">Niger</option>
                                <option value="137">Nigeria</option>
                                <option value="219">Niue</option>
                                <option value="220">Northern Mariana Islands</option>
                                <option value="138">Norway</option>
                                <option value="139">Oman</option>
                                <option value="230">Other</option>
                                <option value="140">Pakistan</option>
                                <option value="221">Palau</option>
                                <option value="211">Palestinian Territories</option>
                                <option value="141">Panama</option>
                                <option value="142">Papua New Guinea</option>
                                <option value="143">Paraguay</option>
                                <option value="144">Peru</option>
                                <option value="145">Philippines</option>
                                <option value="146">Poland</option>
                                <option value="147">Portugal</option>
                                <option value="148">Puerto Rico</option>
                                <option value="149">Qatar</option>
                                <option value="150">Reunion</option>
                                <option value="151">Romania</option>
                                <option value="152">Russian Federation</option>
                                <option value="153">Rwanda</option>
                                <option value="222">Saint Helena</option>
                                <option value="223">Saint Kitts and Nevis</option>
                                <option value="224">Saint Pierre and Miquelon</option>
                                <option value="154">Samoa</option>
                                <option value="225">San Marino</option>
                                <option value="155">Sao Tome &amp; Principe</option>
                                <option value="156">Saudi Arabia</option>
                                <option value="157">Senegal</option>
                                <option value="199">Serbia and Montenegro</option>
                                <option value="158">Seychelles</option>
                                <option value="159">Sierra Leone</option>
                                <option value="160">Singapore</option>
                                <option value="161">Slovakia</option>
                                <option value="162">Slovenia</option>
                                <option value="163">Solomon Islands</option>
                                <option value="164">Somalia</option>
                                <option value="165">South Africa</option>
                                <option value="166">Spain</option>
                                <option value="167">Sri Lanka</option>
                                <option value="168">St. Lucia</option>
                                <option value="169">St. Vincent &amp; Grenadines</option>
                                <option value="170">Sudan</option>
                                <option value="171">Suriname</option>
                                <option value="172">Swaziland</option>
                                <option value="173">Sweden</option>
                                <option value="174">Switzerland</option>
                                <option value="175">Syrian Arab Rep</option>
                                <option value="176">Taiwan</option>
                                <option value="177">Tajikistan</option>
                                <option value="178">Tanzania</option>
                                <option value="179">Thailand</option>
                                <option value="180">Togo</option>
                                <option value="181">Tonga</option>
                                <option value="182">Trinidad and Tobago</option>
                                <option value="183">Tunisia</option>
                                <option value="184">Turkey</option>
                                <option value="185">Turkmenistan</option>
                                <option value="226">Turks and Caicos Islands</option>
                                <option value="186">Uganda</option>
                                <option value="187">Ukraine</option>
                                <option value="188">United Arab Emirates</option>
                                <option value="189">United Kingdom</option>
                                <option value="191">Uruguay</option>
                                <option value="192">Uzbekistan</option>
                                <option value="193">Vanuatu</option>
                                <option value="194">Venezuela</option>
                                <option value="195">Viet Nam</option>
                                <option value="196">Virgin Islands</option>
                                <option value="229">West Bank</option>
                                <option value="227">Western Sahara</option>
                                <option value="197">Yemen</option>
                                <option value="198">Yemen, Rep</option>
                                <option value="200">Zambia</option>
                                <option value="201">Zimbabwe</option>

                            </select>
                        </li>
                    </ol>
                </fieldset>
                <fieldset class="formfields2Col">
                    <ol>
                        <li>
                            <label><b>To:</b> Select Location</label>
                            <select style="vertical-align: middle;" name="dropoff_contact_id" id="dropoff_contact_id" onchange="enableUnloadPrompt(true); updateLocation('dropoff', this.value);">
                                <option value="">New location</option>
                                <option value="0">Same as shipper</option>

                            </select>
                        </li>
                        <li>
                            <label>City <em>*</em></label>
                            <input type="text" class="text" name="dropoff_city" id="dropoff_city" value="" size="28" onchange="enableUnloadPrompt(true);">
                        </li>
                        <li>
                            <label>State/Zip <em>*</em></label>
                            <select name="dropoff_state_code" id="dropoff_state_code" onchange="enableUnloadPrompt(true);" style="width: 120px;">
                                <option value="">Select a state</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">Dist. of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="GU">Guam</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VI">Virgin Islands</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                                <option value="CP">Canada-Province Not Specified</option>
                                <option value="AB">Canada-Alberta</option>
                                <option value="BC">Canada-British Columbia</option>
                                <option value="MB">Canada-Manitoba</option>
                                <option value="NB">Canada-New Brunswick</option>
                                <option value="NL">Canada-Newfoundland</option>
                                <option value="NT">Canada-Northwest Territories</option>
                                <option value="NS">Canada-Nova Scotia</option>
                                <option value="NU">Canada-Nunavut</option>
                                <option value="ON">Canada-Ontario</option>
                                <option value="PE">Canada-Prince Edward Island</option>
                                <option value="QC">Canada-Quebec</option>
                                <option value="SK">Canada-Saskatchewan</option>
                                <option value="YT">Canada-Yukon</option>
                                <option value="OC">OTHER COUNTRIES</option>

                            </select>
                            <input type="text" class="text" name="dropoff_zip" id="dropoff_zip" value="" size="5" onchange="enableUnloadPrompt(true);" style="width: 40px;">
                        </li>
                        <li>
                            <label>Country <em>*</em></label>
                            <select name="dropoff_country_id" id="dropoff_country_id" onchange="enableUnloadPrompt(true); ">
                                <option value="">Select a country</option>
                                <option value="1" selected="selected">United States</option>
                                <option value="2">Canada</option>
                                <option value="3">Mexico</option>
                                <option value="4">Afghanistan</option>
                                <option value="5">Albania</option>
                                <option value="6">Algeria</option>
                                <option value="202">American Samoa</option>
                                <option value="203">Andorra</option>
                                <option value="7">Angola</option>
                                <option value="8">Antigua and Barbuda</option>
                                <option value="9">Argentina</option>
                                <option value="10">Armenia</option>
                                <option value="11">Aruba</option>
                                <option value="12">Australia</option>
                                <option value="13">Austria</option>
                                <option value="14">Azerbaijan</option>
                                <option value="15">Bahamas</option>
                                <option value="16">Bahrain</option>
                                <option value="17">Bangladesh</option>
                                <option value="18">Barbados</option>
                                <option value="19">Belarus</option>
                                <option value="20">Belgium</option>
                                <option value="21">Belgium/Luxembourg</option>
                                <option value="22">Belize</option>
                                <option value="23">Benin</option>
                                <option value="24">Bermuda</option>
                                <option value="25">Bhutan</option>
                                <option value="26">Bolivia</option>
                                <option value="27">Bosnia and Herzegovina</option>
                                <option value="28">Botswana</option>
                                <option value="29">Brazil</option>
                                <option value="204">British Virgin Islands</option>
                                <option value="30">Brunei Darussalam</option>
                                <option value="31">Bulgaria</option>
                                <option value="32">Burkina Faso</option>
                                <option value="33">Burundi</option>
                                <option value="34">Cambodia</option>
                                <option value="35">Cameroon</option>
                                <option value="37">Cape Verde</option>
                                <option value="205">Cayman Islands</option>
                                <option value="38">Central African Rep</option>
                                <option value="39">Chad</option>
                                <option value="206">Channel Islands</option>
                                <option value="40">Chile</option>
                                <option value="41">China</option>
                                <option value="42">Colombia</option>
                                <option value="43">Comoros</option>
                                <option value="44">Congo</option>
                                <option value="45">Congo, Dem Rep</option>
                                <option value="207">Cook Islands</option>
                                <option value="46">Costa Rica</option>
                                <option value="47">Cote dIvoire</option>
                                <option value="48">Croatia</option>
                                <option value="49">Cuba</option>
                                <option value="50">Cyprus</option>
                                <option value="51">Czech Rep</option>
                                <option value="52">Denmark</option>
                                <option value="53">Djibouti</option>
                                <option value="54">Dominica</option>
                                <option value="55">Dominican Rep</option>
                                <option value="208">East Timor</option>
                                <option value="56">Ecuador</option>
                                <option value="57">Egypt</option>
                                <option value="58">El Salvador</option>
                                <option value="59">Equatorial Guinea</option>
                                <option value="60">Eritrea</option>
                                <option value="61">Estonia</option>
                                <option value="62">Ethiopia</option>
                                <option value="209">Faeroe Islands</option>
                                <option value="210">Falkland Islands</option>
                                <option value="63">Fiji</option>
                                <option value="64">Finland</option>
                                <option value="65">France</option>
                                <option value="66">French Guiana</option>
                                <option value="67">French Polynesia</option>
                                <option value="68">Gabon</option>
                                <option value="69">Gambia</option>
                                <option value="228">Gaza Strip</option>
                                <option value="70">Georgia</option>
                                <option value="71">Germany</option>
                                <option value="72">Ghana</option>
                                <option value="212">Gibraltar</option>
                                <option value="73">Greece</option>
                                <option value="213">Greenland</option>
                                <option value="74">Grenada</option>
                                <option value="75">Guadeloupe</option>
                                <option value="214">Guam</option>
                                <option value="76">Guatemala</option>
                                <option value="77">Guinea</option>
                                <option value="78">Guinea-Bissau</option>
                                <option value="79">Guyana</option>
                                <option value="80">Haiti</option>
                                <option value="81">Honduras</option>
                                <option value="82">Hong Kong</option>
                                <option value="83">Hungary</option>
                                <option value="84">Iceland</option>
                                <option value="85">India</option>
                                <option value="86">Indonesia</option>
                                <option value="87">Iran, Islamic Rep</option>
                                <option value="88">Iraq</option>
                                <option value="89">Ireland</option>
                                <option value="215">Isle of Man</option>
                                <option value="90">Israel</option>
                                <option value="91">Italy</option>
                                <option value="92">Jamaica</option>
                                <option value="93">Japan</option>
                                <option value="94">Jordan</option>
                                <option value="95">Kazakhstan</option>
                                <option value="96">Kenya</option>
                                <option value="97">Kiribati</option>
                                <option value="98">Korea, Dem Peoples Rep</option>
                                <option value="99">Korea, Rep</option>
                                <option value="100">Kuwait</option>
                                <option value="101">Kyrgyzstan</option>
                                <option value="102">Lao Peoples Dem Rep</option>
                                <option value="103">Latvia</option>
                                <option value="104">Lebanon</option>
                                <option value="105">Lesotho</option>
                                <option value="106">Liberia</option>
                                <option value="107">Libyan Arab Jamahiriya</option>
                                <option value="216">Liechtenstein</option>
                                <option value="108">Lithuania</option>
                                <option value="109">Luxembourg</option>
                                <option value="110">Macau</option>
                                <option value="111">Macedonia, FYR</option>
                                <option value="112">Madagascar</option>
                                <option value="113">Malawi</option>
                                <option value="114">Malaysia</option>
                                <option value="115">Maldives</option>
                                <option value="116">Mali</option>
                                <option value="117">Malta</option>
                                <option value="118">Marshall Islands</option>
                                <option value="119">Martinique</option>
                                <option value="120">Mauritania</option>
                                <option value="121">Mauritius</option>
                                <option value="123">Micronesia, Fed States</option>
                                <option value="124">Moldova, Rep</option>
                                <option value="217">Monaco</option>
                                <option value="125">Mongolia</option>
                                <option value="126">Morocco</option>
                                <option value="127">Mozambique</option>
                                <option value="128">Myanmar</option>
                                <option value="129">Namibia</option>
                                <option value="218">Nauru</option>
                                <option value="130">Nepal</option>
                                <option value="131">Netherlands</option>
                                <option value="132">Netherlands Antilles</option>
                                <option value="133">New Caledonia</option>
                                <option value="134">New Zealand</option>
                                <option value="135">Nicaragua</option>
                                <option value="136">Niger</option>
                                <option value="137">Nigeria</option>
                                <option value="219">Niue</option>
                                <option value="220">Northern Mariana Islands</option>
                                <option value="138">Norway</option>
                                <option value="139">Oman</option>
                                <option value="230">Other</option>
                                <option value="140">Pakistan</option>
                                <option value="221">Palau</option>
                                <option value="211">Palestinian Territories</option>
                                <option value="141">Panama</option>
                                <option value="142">Papua New Guinea</option>
                                <option value="143">Paraguay</option>
                                <option value="144">Peru</option>
                                <option value="145">Philippines</option>
                                <option value="146">Poland</option>
                                <option value="147">Portugal</option>
                                <option value="148">Puerto Rico</option>
                                <option value="149">Qatar</option>
                                <option value="150">Reunion</option>
                                <option value="151">Romania</option>
                                <option value="152">Russian Federation</option>
                                <option value="153">Rwanda</option>
                                <option value="222">Saint Helena</option>
                                <option value="223">Saint Kitts and Nevis</option>
                                <option value="224">Saint Pierre and Miquelon</option>
                                <option value="154">Samoa</option>
                                <option value="225">San Marino</option>
                                <option value="155">Sao Tome &amp; Principe</option>
                                <option value="156">Saudi Arabia</option>
                                <option value="157">Senegal</option>
                                <option value="199">Serbia and Montenegro</option>
                                <option value="158">Seychelles</option>
                                <option value="159">Sierra Leone</option>
                                <option value="160">Singapore</option>
                                <option value="161">Slovakia</option>
                                <option value="162">Slovenia</option>
                                <option value="163">Solomon Islands</option>
                                <option value="164">Somalia</option>
                                <option value="165">South Africa</option>
                                <option value="166">Spain</option>
                                <option value="167">Sri Lanka</option>
                                <option value="168">St. Lucia</option>
                                <option value="169">St. Vincent &amp; Grenadines</option>
                                <option value="170">Sudan</option>
                                <option value="171">Suriname</option>
                                <option value="172">Swaziland</option>
                                <option value="173">Sweden</option>
                                <option value="174">Switzerland</option>
                                <option value="175">Syrian Arab Rep</option>
                                <option value="176">Taiwan</option>
                                <option value="177">Tajikistan</option>
                                <option value="178">Tanzania</option>
                                <option value="179">Thailand</option>
                                <option value="180">Togo</option>
                                <option value="181">Tonga</option>
                                <option value="182">Trinidad and Tobago</option>
                                <option value="183">Tunisia</option>
                                <option value="184">Turkey</option>
                                <option value="185">Turkmenistan</option>
                                <option value="226">Turks and Caicos Islands</option>
                                <option value="186">Uganda</option>
                                <option value="187">Ukraine</option>
                                <option value="188">United Arab Emirates</option>
                                <option value="189">United Kingdom</option>
                                <option value="191">Uruguay</option>
                                <option value="192">Uzbekistan</option>
                                <option value="193">Vanuatu</option>
                                <option value="194">Venezuela</option>
                                <option value="195">Viet Nam</option>
                                <option value="196">Virgin Islands</option>
                                <option value="229">West Bank</option>
                                <option value="227">Western Sahara</option>
                                <option value="197">Yemen</option>
                                <option value="198">Yemen, Rep</option>
                                <option value="200">Zambia</option>
                                <option value="201">Zimbabwe</option>

                            </select>
                        </li>
                    </ol>
                </fieldset>
                <div style="clear: both;"></div>
                <div style="width: 875px; text-align: right;">
                    <span class="grayButton"><span>View Route Map<input type="button" onclick="viewMap()" value="View Route Map"></span></span>
                </div>
            </div>
        </div>
    </div>
    <div id="formSection">
        <div id="" class="formSectionWrapper">
            <h3><!-- <a class="togbox"><i class="fa fa-plus"></i> </a> --> Shipping Information</h3>
            <div class="formSectionContent">
                <fieldset class="formfields2Col">
                    <ol>
                        <li>
                            <label>Estimated Ship Date <em>*</em></label>
                            <input type="text" name="estimated_ship_date" id="estimated_ship_date" value="" size="28" onchange="enableUnloadPrompt(true);" class="dp-applied"><a href="#" class="dp-choose-date" title="Choose date">Choose date</a>
                            <span class="fieldComment">&nbsp; mm/dd/yyyy</span>
                            <div style="clear: both;"></div>
                        </li>
                        <li>
                            <label>Vehicle(s) Run <em>*</em></label>
                            <select name="vehicle_runs" id="vehicle_runs" onchange="enableUnloadPrompt(true);">
                                <option value="">Select one</option>
                                <option value="1">Yes</option>
                                <option value="0">No</option>

                            </select>
                        </li>
                        <li>
                            <label>Ship Via <em>*</em></label>
                            <select name="ship_via_id" id="ship_via_id" onchange="enableUnloadPrompt(true); ">
                                <option value="">Select one</option>
                                <option value="1">Open</option>
                                <option value="2">Enclosed</option>
                                <option value="3">Driveaway</option>

                            </select>
                        </li>
                    </ol>
                </fieldset>
                <fieldset class="formfields2Col">
                    <ol>
                        <li>
                            <label>Notes from Shipper</label>
                            <textarea name="customer_comment" rows="3" cols="30" onchange="enableUnloadPrompt(true); "></textarea>
                        </li>
                    </ol>
                </fieldset>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
    <a name="vehicle_information"></a>
    <div id="formSection">
        <div class="formSectionWrapper">
            <h3><!-- <a class="togbox"><i class="fa fa-plus"></i> </a> --> Vehicle Information</h3>
            <div class="formSectionContent">
                <div id="vehicle1">
                    <div id="vehicle1_content">
                        <fieldset class="formfields3Col">
                            <input type="hidden" name="vehicle_id[]" id="vehicle_id1" value="">
                            <ol>
                                <li>
                                    <label><span id="vehicle_label1">New Vehicle</span></label>
                                    <span class="grayButton" id="vehicle1_removelink"><span>Remove Vehicle<input type="button" onclick="removeVehicle(1)" value="Remove Vehicle"></span></span>
                                </li>
                                <li class="vehicle_tariff">
                                    <label>Tariff <em>*</em></label>
                                    $<input type="text" class="text" name="tariff1" id="tariff1" value="" size="10" onchange="updateDepositRequired(1)" onkeyup="updateTotalTariff()">
                                </li>
                                <li class="vehicle_deposit">
                                    <label>Deposit <em>*</em></label>
                                    $<input type="text" class="text" name="deposit_required1" id="deposit_required1" value="" size="10" onchange="enableUnloadPrompt(true);" onkeyup="updateTotalDeposit()">
                                </li>
                            </ol>
                        </fieldset>
                        <fieldset class="formfields3Col">
                            <ol>
                                <li>
                                    <label>Year/Make <em>*</em></label>
                                    <input type="text" class="text" name="year1" id="year1" value="" size="5">
                                    <input type="text" class="text" name="make1" id="make1" value="" size="15" maxlength="50" autocomplete="off">
                                    <div id="ac_break_make1"></div><ul class="autocomplete" style="display: none;"></ul>
                                </li>
                                <li>
                                    <label>Model <em>*</em></label>
                                    <input type="text" class="text" name="model1" id="model1" value="" size="25" maxlength="50" autocomplete="off">
                                    <a href="#" id="jsGoogleImagesLink1" class="jsGoogleImagesLink" title="Google Image Search" target="_blank"><img src="/img/google-icon.png" style="vertical-align: middle; border: none;"></a>                        <div id="ac_break_model1"></div><ul class="autocomplete" style="display: none;"></ul>
                                </li>
                                <li>
                                    <label>Type <em>*</em></label>
                                    <select name="vehicle_type_id1" id="vehicle_type_id1">
                                        <option value="">Select one</option>
                                        <option value="21">Coupe</option>
                                        <option value="1">Sedan Small</option>
                                        <option value="13">Sedan Midsize</option>
                                        <option value="2">Sedan Large</option>
                                        <option value="14">Convertible</option>
                                        <option value="3">Pickup Small</option>
                                        <option value="5">Pickup Crew Cab</option>
                                        <option value="15">Pickup Full-size</option>
                                        <option value="4">Pickup Extd. Cab</option>
                                        <option value="22">RV</option>
                                        <option value="20">Dually</option>
                                        <option value="6">SUV Small</option>
                                        <option value="7">SUV Mid-size</option>
                                        <option value="8">SUV Large</option>
                                        <option value="23">Travel Trailer</option>
                                        <option value="9">Van Mini</option>
                                        <option value="10">Van Full-size</option>
                                        <option value="16">Van Extd. Length</option>
                                        <option value="18">Van Pop-Top</option>
                                        <option value="19">Motorcycle</option>
                                        <option value="12">Boat</option>
                                        <option value="11">Other</option>

                                    </select>
                                    <div style="margin-left: 100px;">
                                        <input type="text" class="text" style="display: none;" name="vehicle_type_other1" id="vehicle_type_other1" value="" size="28" maxlength="50">
                                    </div>
                                </li>
                            </ol>
                        </fieldset>
                        <div style="clear: both;"></div>
                    </div>
                </div>
                <div id="vehicle_holder">
                    <div id="vehicle2" style="display: none;">
                        <div id="vehicle2_content">
                            <fieldset class="formfields3Col">
                                <input type="hidden" name="vehicle_id[]" id="vehicle_id2" value="">
                                <ol>
                                    <li>
                                        <label><span id="vehicle_label2">New Vehicle</span></label>
                                        <span class="grayButton" id="vehicle2_removelink"><span>Remove Vehicle<input type="button" onclick="removeVehicle(2)" value="Remove Vehicle"></span></span>
                                    </li>
                                    <li class="vehicle_tariff">
                                        <label>Tariff <em>*</em></label>
                                        $<input type="text" class="text" name="tariff2" id="tariff2" value="" size="10" onchange="updateDepositRequired(2)" onkeyup="updateTotalTariff()">
                                    </li>
                                    <li class="vehicle_deposit">
                                        <label>Deposit <em>*</em></label>
                                        $<input type="text" class="text" name="deposit_required2" id="deposit_required2" value="" size="10" onchange="enableUnloadPrompt(true);" onkeyup="updateTotalDeposit()">
                                    </li>
                                </ol>
                            </fieldset>
                            <fieldset class="formfields3Col">
                                <ol>
                                    <li>
                                        <label>Year/Make <em>*</em></label>
                                        <input type="text" class="text" name="year2" id="year2" value="" size="5">
                                        <input type="text" class="text" name="make2" id="make2" value="" size="15" maxlength="50">
                                        <div id="ac_break_make2"></div>
                                    </li>
                                    <li>
                                        <label>Model <em>*</em></label>
                                        <input type="text" class="text" name="model2" id="model2" value="" size="25" maxlength="50">
                                        <a href="#" id="jsGoogleImagesLink2" class="jsGoogleImagesLink" title="Google Image Search" target="_blank"><img src="/img/google-icon.png" style="vertical-align: middle; border: none;"></a>                        <div id="ac_break_model2"></div>
                                    </li>
                                    <li>
                                        <label>Type <em>*</em></label>
                                        <select name="vehicle_type_id2" id="vehicle_type_id2">
                                            <option value="">Select one</option>
                                            <option value="21">Coupe</option>
                                            <option value="1">Sedan Small</option>
                                            <option value="13">Sedan Midsize</option>
                                            <option value="2">Sedan Large</option>
                                            <option value="14">Convertible</option>
                                            <option value="3">Pickup Small</option>
                                            <option value="5">Pickup Crew Cab</option>
                                            <option value="15">Pickup Full-size</option>
                                            <option value="4">Pickup Extd. Cab</option>
                                            <option value="22">RV</option>
                                            <option value="20">Dually</option>
                                            <option value="6">SUV Small</option>
                                            <option value="7">SUV Mid-size</option>
                                            <option value="8">SUV Large</option>
                                            <option value="23">Travel Trailer</option>
                                            <option value="9">Van Mini</option>
                                            <option value="10">Van Full-size</option>
                                            <option value="16">Van Extd. Length</option>
                                            <option value="18">Van Pop-Top</option>
                                            <option value="19">Motorcycle</option>
                                            <option value="12">Boat</option>
                                            <option value="11">Other</option>

                                        </select>
                                        <div style="margin-left: 100px;">
                                            <input type="text" class="text" style="display: none;" name="vehicle_type_other2" id="vehicle_type_other2" value="" size="28" maxlength="50">
                                        </div>
                                    </li>
                                </ol>
                            </fieldset>
                            <div style="clear: both;"></div>
                        </div>
                    </div></div>
                <span class="grayButton"><span>Add Vehicle<input type="button" value="Add Vehicle" onclick="addVehicle()"></span></span>
                <input type="hidden" name="remove_vehicle_ids" id="remove_vehicle_ids" value="">
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var vehicle_count = 1;
        var inc_tariff = 1;
        var inc_deposit = 1;
        var inc_info = 1;
        var inc_more = 0;
        var dispatch = 0;
        var dep_type = 'amount';
        var dep_default = '150.00';
        var dep_overwrite = 0;
        var autoprice = 0;
        var vehicle_include_google_link = 1;
    </script>
    <script type="text/javascript" src="/js/vehicle.min.1520395154.js"></script>
    <div id="formSection">
        <div id="" class="formSectionWrapper">
            <h3><!-- <a class="togbox"><i class="fa fa-plus"></i> </a> --> Pricing Information</h3>
            <div class="formSectionContent">
                <fieldset class="formfields1Col">
                    <ol>
                        <li>
                            <label>Total Tariff</label>
                            $ <span id="total_tariff">0.00</span> &nbsp; &nbsp; <span class="fieldComment">(Edit tariff under the <a style="color: #999;" href="#vehicle_information">Vehicle Information</a> section)</span>
                        </li>
                        <li>
                            <label>Required Deposit</label>
                            $ <span id="total_deposit">0.00</span> &nbsp; &nbsp; <span class="fieldComment">(Edit deposit under the <a style="color: #999" href="#vehicle_information">Vehicle Information</a> section)</span>
                        </li>
                    </ol>
                </fieldset>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
    <div id="formSection">
        <div id="" class="formSectionWrapper">
            <h3><!-- <a class="togbox"><i class="fa fa-plus"></i> </a> --> Additional Information</h3>
            <div class="formSectionContent">
                <fieldset class="formfields1Col">
                    <ol>
                        <li>
                            <label>Note to Shipper</label>
                            <textarea name="note_to_customer" rows="3" cols="30" onchange="enableUnloadPrompt(true); "></textarea>
                        </li>
                        <li>
                            <label>Referred By</label>
                            <select name="lqo_referrer_id" onchange="enableUnloadPrompt(true); ">
                                <option value="">Select one</option>
                                <option value="39866">BBB</option>
                                <option value="39858">Business Card</option>
                                <option value="39861">Dealership</option>
                                <option value="39863">Facebook</option>
                                <option value="39859">Friend</option>
                                <option value="39865">Junk Yard</option>
                                <option value="39860">Moving Company</option>
                                <option value="39864">Online</option>
                                <option value="39862">Returning Customer</option>
                                <option value="39857">Unknown</option>
                                <option value="47760">Yellow Pages</option>

                            </select>
                        </li>
                    </ol>
                </fieldset>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
    <div style="text-align:right; margin-top: 10px">
        <span class="blueButton"><span>Save Only<input type="button" value="Save Only" onclick="submitSaveOnly()"></span></span>
        <span class="blueButton"><span>Save and Email Quote<input type="button" value="Save and Email Quote" onclick="submitSaveEmail()"></span></span>
    </div>
    <input type="hidden" name="action" value="add">
    <input type="hidden" name="lead_parse_id" value="-2">
    <input type="hidden" name="email_customer" value="0">
    <input type="hidden" name="edit_return" value="0">
    <input type="hidden" name="broker_id" value="3760">
    <input type="hidden" id="lqo_id" name="lqo_id" value="">
    <input type="hidden" id="CSRFToken" name="CSRFToken" value="ce4369426e081c80c39900d6d9a671f0cbe869929fc281a5da27aca840e6458a"></form>
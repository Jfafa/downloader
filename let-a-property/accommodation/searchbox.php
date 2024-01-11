<script type="text/javascript" src="_include/factory.js"></script>
<script type="text/javascript" src="_include/asynchronous2.js"></script>
<script type="text/javascript" src="_include/searchbox.js"></script>
<!--webbot BOT="GeneratedScript" PREVIEW=" " startspan --><script Language="JavaScript" Type="text/javascript"><!--
function submitSearch()
{
	if(FrontPage_Form1_Validator(FrontPage_Form1))
	{
		FrontPage_Form1.submit();
	}
}
function FrontPage_Form1_Validator(theForm)
{
		if(theForm.searchType.value == "1")
	{
		theForm.action = "_scripts/search_4_wanted.php?page=1";
	}
	  return (true);
}
//--></script><!--webbot BOT="GeneratedScript" endspan -->
<form id="frmSearch" name="FrontPage_Form1" action="_scripts/search_4_prop.php?page=1" method="post" language="JavaScript" target="_parent">
	<table cellpadding="5" cellspacing="0" border="0">
        <tr>
			<td>
				<select name="SelCountries" id="SelCountries" value="GO" style="font-family: Tahoma; color: #0066CC; background-color: #FFFFCC; font-size:14pt; width:250" onclick="javascript:loadGeographic(this,'SelStates',0,'');">
					<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan" >Afghanistan</option><option value="Albania" >Albania</option><option value="Algeria" >Algeria</option><option value="Andorra" >Andorra</option><option value="Angola" >Angola</option><option value="Antigua And Barbuda" >Antigua And Barbuda</option><option value="Argentina" >Argentina</option><option value="Armenia" >Armenia</option><option value="Australia" >Australia</option><option value="Austria" >Austria</option><option value="Azerbaijan" >Azerbaijan</option><option value="Bahamas" >Bahamas</option><option value="Bahrain" >Bahrain</option><option value="Bangladesh" >Bangladesh</option><option value="Barbados" >Barbados</option><option value="Belarus" >Belarus</option><option value="Belgium" >Belgium</option><option value="Belize" >Belize</option><option value="Benin" >Benin</option><option value="Bermuda" >Bermuda</option><option value="Bhutan" >Bhutan</option><option value="Bolivia" >Bolivia</option><option value="Bosnia And Herzegovina" >Bosnia And Herzegovina</option><option value="Botswana" >Botswana</option><option value="Brazil" >Brazil</option><option value="British Indian Ocean Territory" >British Indian Ocean Territory</option><option value="British Virgin Islands" >British Virgin Islands</option><option value="Brunei" >Brunei</option><option value="Bulgaria" >Bulgaria</option><option value="Burkina Faso" >Burkina Faso</option><option value="Burundi" >Burundi</option><option value="Cambodia" >Cambodia</option><option value="Cameroon" >Cameroon</option><option value="Canada" >Canada</option><option value="Cape Verde" >Cape Verde</option><option value="Cayman Islands" >Cayman Islands</option><option value="Central African Republic" >Central African Republic</option><option value="Chad" >Chad</option><option value="Chile" >Chile</option><option value="China" >China</option><option value="Colombia" >Colombia</option><option value="Comoros" >Comoros</option><option value="Congo" >Congo</option><option value="Costa Rica" >Costa Rica</option><option value="Croatia" >Croatia</option><option value="Cuba" >Cuba</option><option value="Cyprus" >Cyprus</option><option value="Czech Republic" >Czech Republic</option><option value="Denmark" >Denmark</option><option value="Djibouti" >Djibouti</option><option value="Dominica" >Dominica</option><option value="Dominican Republic" >Dominican Republic</option><option value="East Timor" >East Timor</option><option value="Ecuador" >Ecuador</option><option value="Egypt" >Egypt</option><option value="El Salvador" >El Salvador</option><option value="Equatorial Guinea" >Equatorial Guinea</option><option value="Eritrea" >Eritrea</option><option value="Estonia" >Estonia</option><option value="Ethiopia" >Ethiopia</option><option value="Fiji" >Fiji</option><option value="Finland" >Finland</option><option value="France" >France</option><option value="French Guiana" >French Guiana</option><option value="French Polynesia" >French Polynesia</option><option value="Gabon" >Gabon</option><option value="Georgia" >Georgia</option><option value="Germany" >Germany</option><option value="Ghana" >Ghana</option><option value="Greece" >Greece</option><option value="Greenland" >Greenland</option><option value="Grenada" >Grenada</option><option value="Guatemala" >Guatemala</option><option value="Guinea" >Guinea</option><option value="Guinea Bissau" >Guinea Bissau</option><option value="Guyana" >Guyana</option><option value="Haiti" >Haiti</option><option value="Honduras" >Honduras</option><option value="Hungary" >Hungary</option><option value="Iceland" >Iceland</option><option value="India" >India</option><option value="Indonesia" >Indonesia</option><option value="Iran" >Iran</option><option value="Iraq" >Iraq</option><option value="Ireland" >Ireland</option><option value="Israel" >Israel</option><option value="Italy" >Italy</option><option value="Jamaica" >Jamaica</option><option value="Japan" >Japan</option><option value="Jersey" >Jersey</option><option value="Jordan" >Jordan</option><option value="Kazakhstan" >Kazakhstan</option><option value="Kenya" >Kenya</option><option value="Kiribati" >Kiribati</option><option value="Kuwait" >Kuwait</option><option value="Kyrgyzstan" >Kyrgyzstan</option><option value="Laos" >Laos</option><option value="Latvia" >Latvia</option><option value="Lebanon" >Lebanon</option><option value="Lesotho" >Lesotho</option><option value="Liberia" >Liberia</option><option value="Libya" >Libya</option><option value="Liechtenstein" >Liechtenstein</option><option value="Lithuania" >Lithuania</option><option value="Macedonia" >Macedonia</option><option value="Madagascar" >Madagascar</option><option value="Malawi" >Malawi</option><option value="Malaysia" >Malaysia</option><option value="Maldives" >Maldives</option><option value="Mali" >Mali</option><option value="Malta" >Malta</option><option value="Marshall Islands" >Marshall Islands</option><option value="Mauritania" >Mauritania</option><option value="Mauritius" >Mauritius</option><option value="Mexico" >Mexico</option><option value="Moldova" >Moldova</option><option value="Monaco" >Monaco</option><option value="Mongolia" >Mongolia</option><option value="Montserrat" >Montserrat</option><option value="Morocco" >Morocco</option><option value="Mozambique" >Mozambique</option><option value="Myanmar (Burma)" >Myanmar (Burma)</option><option value="Namibia" >Namibia</option><option value="Nauru" >Nauru</option><option value="Nepal" >Nepal</option><option value="Netherlands" >Netherlands</option><option value="New Caledonia" >New Caledonia</option><option value="New Zealand" >New Zealand</option><option value="Nicaragua" >Nicaragua</option><option value="Niger" >Niger</option><option value="Nigeria" >Nigeria</option><option value="North Korea" >North Korea</option><option value="Northern Ireland" >Northern Ireland</option><option value="Norway" >Norway</option><option value="Oman" >Oman</option><option value="Pakistan" >Pakistan</option><option value="Palestinian Territory" >Palestinian Territory</option><option value="Panama" >Panama</option><option value="Papua New Guinea" >Papua New Guinea</option><option value="Paraguay" >Paraguay</option><option value="Peru" >Peru</option><option value="Philippines" >Philippines</option><option value="Poland" >Poland</option><option value="Portugal" >Portugal</option><option value="Puerto Rico" >Puerto Rico</option><option value="Qatar" >Qatar</option><option value="Romania" >Romania</option><option value="Russia" >Russia</option><option value="Rwanda" >Rwanda</option><option value="Saint Helena" >Saint Helena</option><option value="Saint Kitts And Nevis" >Saint Kitts And Nevis</option><option value="Saint Lucia" >Saint Lucia</option><option value="Saint Vincent And The Grenadines" >Saint Vincent And The Grenadines</option><option value="Samoa" >Samoa</option><option value="San Marino" >San Marino</option><option value="Sao Tome And Principe" >Sao Tome And Principe</option><option value="Saudi Arabia" >Saudi Arabia</option><option value="Scotland" >Scotland</option><option value="Senegal" >Senegal</option><option value="Serbia And Montenegro" >Serbia And Montenegro</option><option value="Seychelles" >Seychelles</option><option value="Sierra Leone" >Sierra Leone</option><option value="Singapore" >Singapore</option><option value="Slovakia" >Slovakia</option><option value="Slovenia" >Slovenia</option><option value="Solomon Islands" >Solomon Islands</option><option value="Somalia" >Somalia</option><option value="South Africa" >South Africa</option><option value="South Korea" >South Korea</option><option value="Spain" >Spain</option><option value="Sri Lanka" >Sri Lanka</option><option value="Sudan" >Sudan</option><option value="Suriname" >Suriname</option><option value="Swaziland" >Swaziland</option><option value="Sweden" >Sweden</option><option value="Switzerland" >Switzerland</option><option value="Syria" >Syria</option><option value="Taiwan" >Taiwan</option><option value="Tanzania" >Tanzania</option><option value="Thailand" >Thailand</option><option value="The Bahamas" >The Bahamas</option><option value="The Gambia" >The Gambia</option><option value="Togo" >Togo</option><option value="Tonga" >Tonga</option><option value="Trinidad And Tobago" >Trinidad And Tobago</option><option value="Tunisia" >Tunisia</option><option value="Turkey" >Turkey</option><option value="Turkmenistan" >Turkmenistan</option><option value="Tuvalu" >Tuvalu</option><option value="Uganda" >Uganda</option><option value="Ukraine" >Ukraine</option><option value="United Arab Emirates" >United Arab Emirates</option><option value="United Kingdom" >United Kingdom</option><option value="United States of America" >United States of America</option><option value="Uruguay" >Uruguay</option><option value="Uzbekistan" >Uzbekistan</option><option value="Vanuatu" >Vanuatu</option><option value="Vatican City" >Vatican City</option><option value="Venezuela" >Venezuela</option><option value="Vietnam" >Vietnam</option><option value="Wales" >Wales</option><option value="Yemen" >Yemen</option><option value="Zambia" >Zambia</option><option value="Zimbabwe" >Zimbabwe</option>				</select>
			</td>
		</tr>
		<tr>
			<td>
							<select name="SelCounties" id="SelStates" style="font-family: Tahoma; color: #0066CC; background-color: #FFFFCC; font-size:14pt; width:250;display: none;" onchange="javascript:loadGeographic(this,'SelTowns',1,'');">
							</select>
			</td>
		</tr>
				<tr>
			<td>
				<select name="SelTowns" id="SelTowns" style="font-family: Tahoma; color: #0066CC; background-color: #FFFFCC; font-size:14pt; width:250;display: none;">
				</select>
			</td>
		</tr>
				<input type="hidden" name="selProperty_Type" value="all"/>
		<!--
		<tr>
			<td>
				--webbot bot="Validation" b-value-required="TRUE" b-disallow-first-item="TRUE"
				<select name="selProperty_Type" id="selProperty_Type" style="font-family: Tahoma; background-color: #ffffcc; color:#0066CC; font-size:14pt; width:250">
					<option value="all"selected>All Property Types</option>
						<option value="Apartment/Flat">Apartment/Flat</option>
	
	<option value="Barn">Barn</option>
	<option value="Beach">Beach</option>
	<option value="Bed and Breakfas">Bed and Breakfast</option>
	<option value="Bedsit">Bedsit</option>
	<option value="Bungalow">Bungalow</option>
	
	<option value="Camp Site">Camp Site</option>
	<option value="Chain Hotel">Chain Hotel</option>
	<option value="Chalet">Chalet</option>
	<option value="Character Property">Character Property</option>
	<option value="Commercial Property">Commercial Property</option>
	<option value="Condo">Condo</option>
	<option value="Conversion">Conversion</option>
	<option value="Cottage">Cottage</option>
	
	<option value="Council House">Council House</option>
	<option value="Discounted off-plan">Discounted off-plan</option>
	<option value="Detached House">Detached House</option>
	<option value="Duplex">Duplex</option>
	<option value="End of Terrace">End of Terrace</option>
	<option value="Family Home">Family Home</option>
	<option value="Farmhouse">Farmhouse</option>
	<option value="Farms">Farms</option>
	<option value="Flat">Flat</option>
	
	<option value="Garage">Garage</option>
	<option value="Golf Property">Golf Property</option>
	<option value="Guest House">Guest House</option>
	<option value="High-Rise Apartment">High-Rise Apartment</option>
	<option value="Holiday Home">Holiday Home</option>
	<option value="Hostel">Hostel</option>
	<option value="Hotel">Hotel</option>
	<option value="Houseboat">Houseboat</option>
	
	<option value="Independent Hotel">Independent Hotel</option>
	<option value="Investment Property">Investment Property</option>
	<option value="Land">Land</option>
	<option value="Listed Building">Listed Building</option>
	<option value="Maisonette">Maisonette</option>
	<option value="Mansion">Mansion</option>
	<option value="Mews">Mews</option>
	<option value="Mobile Home">Mobile Home</option>
	<option value="New Homes">New Homes</option>
	
	<option value="Parking">Parking</option>
	<option value="Penthouse">Penthouse</option>
	<option value="Property">Property</option>
	<option value="Public House">Public House</option>
	<option value="Renovation Projects">Renovation Projects</option>
	<option value="Restaurant">Restaurant</option>
	<option value="Retail Shop">Retail Shop</option>
	<option value="Retirement">Retirement</option>
	<option value="Room">Room</option>
	
	<option value="Self Catering">Self Catering</option>
	<option value="Semi-Detached House">Semi-Detached House</option>
	<option value="Serviced Apartment">Serviced Apartment</option>
	<option value="Shared Housing">Shared Housing</option>
	<option value="Ski Property">Ski Property</option>
	<option value="Thatched Property">Thatched Property</option>
	<option value="Terraced House">Terraced House</option>
	<option value="Town House">Town House</option>
	<option value="Townhouse">Townhouse</option>
	<option value="Villa">Villa</option>
	<option value="Warehouse">Warehouse</option>
					</select>
			</td>
		</tr>
		-->
		<tr>
			<td>
				<!--webbot bot="Validation" b-value-required="TRUE" b-disallow-first-item="TRUE" -->
				<select name="selLetting_type" id="selLetting_type" style="font-family: Tahoma; background-color: #ffffcc; font-size:14pt; color:#0066CC; width:250">
					<option value="all">All Letting Types</option>
					<option value="furnished">Furnished</option>
					<option value="unfurnished">Unfurnished</option>
				</select>
			<td>
		</tr>
		<tr>
			<td>    
				<!--webbot bot="Validation" b-value-required="TRUE" b-disallow-first-item="TRUE" -->
				<select name="selRent" id="selRent" style="font-size: 14pt; font-family: Tahoma; background-color: #ffffcc; color:#0066CC; width:250">
					<option value="all">All Rental Values</option>
					<option value="100 to 200">100 to 200</option>
					<option value="200 to 300">200 to 300</option>
					<option value="300 to 400">300 to 400</option>
					<option value="400 to 500">400 to 500</option>
					<option value="500 to 600">500 to 600</option>
					<option value="600 to 700">600 to 700</option>
					<option value="700 to 800">700 to 800</option>
					<option value="800 to 900">800 to 900</option>
					<option value="900 to 1000">900 to 1000</option>
					<option value="1000 to 1200">1000 to 1200</option>
					<option value="1200 to 1500">1200 to 1500</option>
					<option value="1500 to 2000">1500 to 2000</option>
					<option value="2000 to 3000">2000 to 3000</option>
					<option value="3000 to 5000">3000 to 5000</option>
				</select>
			</td>
        </tr>
		<tr>
			<td>
				<select name="searchType" style="font-size: 14pt; font-family: Tahoma; background-color: #ffffcc; color:#0066CC; width:250">
					<option value="0">Available Properties</option>
					<option value="1">Wanted Notices</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input type="button" value="Search" name="B3" style="color: #FF0000; font-family: Tahoma; font-size: 14pt; font-weight: bold; width:250" language="javascript" onclick="javascript:submitSearch();">
			</td>
		</tr>
	</table>
</form>
<script type="text/javascript">

	loadGeographic(document.getElementById('SelCountries'),'SelStates',0,'');
	
	loadGeographic(document.getElementById('SelStates'),'SelTowns',1,'');
</script>

    <!--
    <p style="margin-top: 0; margin-bottom: 0" align="center"><font size="2" face="Arial">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="results.htm"><font color="#008000">
    next page&gt;&gt;&gt;</font></a></font><p style="margin-top: 0; margin-bottom: 0">&nbsp;</td>
    -->
    </td>
  </tr>
  </table>

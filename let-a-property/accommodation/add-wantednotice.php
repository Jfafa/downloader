<html>
<head>
<meta http-equiv=Content-Language content=en-gb><META NAME=ROBOTS CONTENT="INDEX, FOLLOW"><TITLE>Post a Wanted Notice for FREE</TITLE><META NAME=Title CONTENT="Post a Wanted Notice for FREE"><META NAME=description CONTENT="Tenants... post a free 'wanted notice' in out free noticeboard so letting agents can contact you."><META NAME=keywords CONTENT="accommodation, student, housing, rental property, housing, England, UK, London, uk, letting"><META NAME=document-rating CONTENT=General><META NAME=document-distribution CONTENT=Global>

<link type="text/css" href="_scripts/css/ui-lightness/jquery-ui-1.8.14.custom.css" rel="Stylesheet" />	
<script type="text/javascript" src="_scripts/jquery-1.6.2.js"></script>
<script type="text/javascript" src="_scripts/js/jquery-ui-1.8.14.custom.min.js"></script>
<script type="text/javascript" src="_include/factory.js"></script>
<script type="text/javascript" src="_include/asynchronous2.js"></script>
<script type="text/javascript" src="_include/searchbox.js"></script>
<script language="JavaScript" type="text/javascript" src="_admin/_scripts/ValidateElement.js"></script>

<script language="JavaScript">
<!-- Begin
function addbookmark() {
	bookmarkurl="http://www.let-a-property.info/index.htm";
	bookmarktitle="Accommodation adverts - Let-a-Property.info";
	if (document.all)
		window.external.AddFavorite(bookmarkurl,bookmarktitle);
}

function searchFormSubmit() {
	searchForm = document.getElementById('frmSearch');
    if( searchForm.SelCounties.selectedIndex.value == "null" ) {
        alert( "Please select a county not a country or divider" );
        searchForm.SelCounties.focus();
    } else {
        searchForm.submit();
    }
}
//  End -->
</script>
<script type="text/javascript" language="javascript">

$("document").ready(function() {
	$('#txtAvailableFrom').datepicker({
		dateFormat: 'dd/M/yy', 
		minDate: new Date(),
		// Following options are set for IE optimisation
		showAnim: null,
		duration: ''
	});
});

var liCalIndexPutter;

function checkMailValid(szEmail) {
	var x = szEmail;
	var filter  = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (filter.test(x)) { return true; } else { return false; }
}
function showCalControl( liControlIndex ) {
    liCalIndexPutter = liControlIndex;
    divCalControl.style.visibility = "visible";
}

function getDateFromCal() {
    if( liCalIndexPutter == 0 ) {
        frmEditProperty.txtAvailableFrom.value = getSelectedDate() + "/" + getMonthName().substr( 0, 3 ).toUpperCase() + "/" + getSelectedYear();
    } else {
        frmEditProperty.txtAvailableTo.value = getSelectedDate() + "/" + getMonthName().substr( 0, 3 ).toUpperCase() + "/" + getSelectedYear();
    }
    divCalControl.style.visibility = "hidden";
}

function submitEditForm() {
    if( frmEditProperty.SelCounty.options[frmEditProperty.SelCounty.selectedIndex ].value == "null" ) {
        alert( "You cant select a country or a divider in the counties drop down." );
        frmEditProperty.SelCounty.focus();
    } else if ($('#selConditions').val() == 0) {
		alert('Please agree to the terms and conditions');
	} else {
        frmEditProperty.txtAvailableFrom.disabled = false;
		frmEditProperty.submit();
    }
}

function submitForm() {
	// Remove any highlighting that may have been applied
	$('input').css('border-color', 'white');
	$('#selBedrooms').css('border-color', '#0066CC');
	$('#txtDescription').css('border-color', '#0066CC');
	if ($('input:[value=""], #selBedrooms > :selected:[value="0"], #txtDescription:[value=""]').not('#SelTown, #SelCounties, #selLetting_Type, #selProperty_Type, #SelCountry, #selConditions').length > 0) {
		// Highlight mandatory fields that have not yet been filled in
		$('input:[value=""], #txtDescription:[value=""]').not('#SelTown, #SelCounties, #selLetting_Type, #selProperty_Type, #SelCountry, #selConditions').css('border-color', 'yellow');
		$('#selBedrooms > :selected:[value="0"]').parent().css('border-color', 'yellow');
		alert('Please fill in all fields.');
	} else if ($('#selConditions > :selected:[value="0"]').length > 0) {
		alert('Please agree to the terms and conditions');
	} else {
		document.getElementById('frmEditProperty').action = "_admin/_scripts/add_edit_prop.php?addnew=true&wantednotice=true&regUser=true";
		document.getElementById('frmEditProperty').submit();
	}
}

//  End -->
</script> 

<link rel=stylesheet type="text/css" href="http://www.let-a-property.info/images/style.css">
</head>

<div class="body"><body topmargin="0"></div>

<center><center><table border="0" cellpadding="0" cellspacing="0" style="border:1px solid #808080; border-collapse: collapse; " bordercolor="#111111" width="1024" bgcolor="#FFFFFF"><tr><td colspan="3">
      
<div class="header"> <table border=1 cellpadding=0 cellspacing=0 style="border-collapse: collapse" bordercolor="#111111" width="100%"> <tr> 
   <td> 
   <table border=1 cellpadding=0 cellspacing=0 style="border:1px solid #003366; border-collapse: collapse" bordercolor="#003366" width="100%"> <tr> <td style="border-left-style:solid; border-left-width:1; border-right-style:none; border-right-width:medium; border-top-style:solid; border-top-width:1; border-bottom-style:none; border-bottom-width:medium" bgcolor="#003366" height=28 bordercolor="#003366"> <a href="http://www.let-a-property.info/"> <img border=0 src="http://www.let-a-property.info/images/Let-a-Propertyinfo.gif" align=left width=198 height=24></a></td> <td style="border-left-style:solid; border-left-width:1; border-right-style:none; border-right-width:medium; border-top-style:solid; border-top-width:1; border-bottom-style:none; border-bottom-width:medium" bgcolor="#003366" height=28 bordercolor="#003366"> 
 
 
 <form action="http://www.let-a-property.info/results.htm" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-5778532101016978:8788609247" />
    <input type="hidden" name="cof" value="FORID:9" />
    <input type="hidden" name="ie" value="UTF-8" />
    <p align="right">
    <input type="text" name="q" size="30" />
    <input type="submit" name="sa" value="Site Search" style="color: #FFFFFF; font-family: Tahoma; font-size: 10pt; background-color: #0066cc" />
  </div>
</form>

<script type="text/javascript" src="http://www.google.co.uk/coop/cse/brand?form=cse-search-box&amp;lang=en"></script>



 </td></tr> </table> </td></tr></table></center></div>

</td></tr><tr><td valign="top">
      
<div class="leftborder"><table border=0 cellpadding=0 cellspacing=0 style="border-collapse: collapse" bordercolor="#111111" bgcolor="#D8D8D8" width="180"> 
	<tr> 
		<td valign=top>&nbsp;</td> 
		<td valign=top> <font size=1>Property Search</font></td> 
		<td valign=top>&nbsp;</td>
	</tr> 
	<tr> 
		<td valign=top>&nbsp;</td> 	
		<td valign=top>
			<form id=frmSearch name=FrontPage_Form1 action="/accommodation/_scripts/search_4_prop.php?page=1" method=post language=JavaScript> 
				<table border=1 cellpadding=0 cellspacing=0 style="border-collapse: collapse; border-width: 0" bordercolor="#111111"> 
					<tr> 
						<td style="border-style: none; border-width: medium; width:171" align=left valign=top> 
							<p style="margin-top: 0; margin-bottom: 0"> </p>
							<select name=SelCounties id=SelCounties value=GO style="width: 170; color: #0066CC">
								<option value=all> All UK Counties</option>
								<option value=null>------------------------</option>
								<option value=null>ENGLAND:-</option>
								<option value=Avon> Avon</option>
								<option value=Bedfordshire> Bedfordshire</option>
								<option value=Berkshire> Berkshire</option>
								<option value=Buckinghamshire> Buckinghamshire</option>
								<option value=Cambridgeshire> Cambridgeshire</option>
								<option value=Cheshire> Cheshire</option>
								<option value=Cleveland> Cleveland</option>
								<option value=Cornwall> Cornwall</option>
								<option value=Cumbria> Cumbria</option>
								<option value=Derbyshire> Derbyshire</option>
								<option value=Devon> Devon</option>
								<option value=Dorset> Dorset</option>
								<option value=Durham> Durham</option>
								<option value="East Sussex"> East Sussex</option>
								<option value=Essex> Essex</option>
								<option value=Gloucestershire> Gloucestershire</option>
								<option value="Guernsey Channel Islands"> Guernsey Channel Islands</option>
								<option value=Hampshire> Hampshire</option>
								<option value=Herefordshire> Herefordshire</option>
								<option value=Hertfordshire> Hertfordshire</option>
								<option value=Humberside> Humberside</option>
								<option value="Isle of Man"> Isle of Man</option>
								<option value="Isle of Scilly"> Isle of Scilly</option>
								<option value="Isle of Wight"> Isle of Wight</option>
								<option value="Jersey Channel Islands"> Jersey Channel Islands</option>
								<option value=Kent> Kent</option><option value=Lancashire> Lancashire</option>
								<option value=Leicestershire> Leicestershire</option>
								<option value=Lincolnshire> Lincolnshire</option>
								<option value=London> London</option>
								<option value=Manchester> Manchester</option>
								<option value=Merseyside> Merseyside</option>
								<option value=Middlesex> Middlesex</option>
								<option value=Norfolk> Norfolk</option>
								<option value=Northamptonshire> Northamptonshire</option>
								<option value=Northumberland> Northumberland</option>
								<option value=Nottinghamshire> Nottinghamshire</option>
								<option value=Oxfordshire> Oxfordshire</option>
								<option value=Rutland> Rutland</option>
								<option value=Shropshire> Shropshire</option>
								<option value=Somerset> Somerset</option>
								<option value=Staffordshire> Staffordshire</option>
								<option value=Suffolk> Suffolk</option>
								<option value=Surrey> Surrey</option>
								<option value="Tyne and Wear"> Tyne and Wear</option>
								<option value=Warwickshire> Warwickshire</option>
								<option value="West Midlands"> West Midlands</option>
								<option value="West Sussex"> West Sussex</option>
								<option value=Wiltshire> Wiltshire</option>
								<option value=Worcestershire> Worcestershire</option>
								<option value=Yorkshire> Yorkshire</option>
								<option value=null>------------------------</option>
								<option value=null>SCOTLAND</option>
								<option value=Aberdeenshire> Aberdeenshire</option>
								<option value=Angus> Angus</option>
								<option value="Argyll and Bute"> Argyll and Bute</option>
								<option value=Ayrshire> Ayrshire</option>
								<option value=Banffshire> Banffshire</option>
								<option value=Carmarthenshire> Carmarthenshire</option>
								<option value=Clackmannanshire> Clackmannanshire</option>
								<option value="Dumfries and Galloway"> Dumfries and Galloway</option>
								<option value=Dunbartonshire> Dunbartonshire</option>
								<option value="East Lothian"> East Lothian</option>
								<option value=Fife> Fife</option>
								<option value=Flintshire> Flintshire</option>
								<option value=Highland> Highland</option>
								<option value=Inverclyde> Inverclyde</option>
								<option  value="Inverness Shire"> Inverness Shire</option>
								<option  value=Lanarkshire> Lanarkshire</option>
								<option  value=Midlothian> Midlothian</option>
								<option  value=Moray> Moray</option>
								<option  value="Orkney Islands"> Orkney Islands</option>
								<option  value=Perthshire> Perthshire</option>
								<option  value=Renfrewshire> Renfrewshire</option>
								<option  value="Scottish Borders"> Scottish Borders</option>
								<option  value="Shetland Islands"> Shetland Islands</option>
								<option  value=Stirlingshire> Stirlingshire</option>
								<option  value="West Dunbart"> West Dunbart</option>
								<option  value="West Lothian"> West Lothian</option>
								<option  value="Western Isles"> Western Isles</option>
								<option  value=null>------------------------</option>
								<option  value=null>WALES</option>
								<option  value=Caerphilly> Caerphilly</option>
								<option  value=Ceredigion> Ceredigion</option>
								<option  value=Clwyd> Clwyd</option>
								<option  value=Conwy> Conwy</option>
								<option  value=Denbighshire> Denbighshire</option>
								<option  value=Dyfed> Dyfed</option>
								<option  value=Gwent> Gwent</option>
								<option  value=Gwynedd> Gwynedd</option>
								<option  value="Isle of Anglesey"> Isle of Anglesey</option>
								<option  value="Merthyr Tydfil"> Merthyr Tydfil</option>
								<option  value="Mid Glamorgan"> Mid Glamorgan</option>
								<option  value=Monmouthshire> Monmouthshire</option>
								<option  value=Pembrokeshire> Pembrokeshire</option>
								<option  value=Powys> Powys</option>
								<option  value="Rhondda Cynon Taff"> Rhondda Cynon Taff</option>
								<option  value="South Glamorgan"> South Glamorgan</option>
								<option  value=Torfaen> Torfaen</option>
								<option  value="Vale of Glamorgan"> Vale of Glamorgan</option>
								<option  value="West Glamorgan"> West Glamorgan</option>
								<option  value=null>------------------------</option>
								<option  value=null>NORTHERN IRELAND</option>
								<option  value="County Antrim"> County Antrim</option>
								<option  value="County Down"> County Down</option>
								<option  value="County Fermanagh"> County Fermanagh</option>
								<option  value="County Londonderry"> County Londonderry</option>
								<option  value="County Tyrone"> County Tyrone</option> 
							</select>
							<p style="margin-top: 0; margin-bottom: 0"> </p>
							<select name=selProperty_Type id=selProperty_Type style="width: 170; color: #0066CC">
								<option value=all selected>All Property Types</option>
								<option  value="Apartment/Flat">Apartment/Flat</option>
								<option  value="Semi-Detached House">Semi-Detached House</option>
								<option  value="Detached House">Detached House</option>
								<option  value="Terraced House">Terraced House</option>
								<option  value=Bungalow>Bungalow</option>
								<option  value=Cottage>Cottage</option>
								<option  value="Mobile Home">Mobile Home</option>
								<option  value="Holiday Home">Holiday Home</option> 
							</select> 
							<p style="margin-top: 0; margin-bottom: 0"> </p>
							<select name=selLetting_type id=selLetting_type style="width: 170; color: #0066CC">
								<option value=all>All Letting Types</option>
								<option  value=furnished>Furnished</option>
								<option  value=unfurnished>Unfurnished</option> 
							</select> 
							<p style="margin-top: 0; margin-bottom: 0"> </p>
							<select name=selRent id=selRent style="width: 170; color: #0066CC">
								<option value=all>All Rental Values</option>
								<option  value="100 to 200">&#163;100 to &#163;200</option>
								<option  value="200 to 300">&#163;200 to &#163;300</option>
								<option  value="300 to 400">&#163;300 to &#163;400</option>
								<option  value="400 to 500">&#163;400 to &#163;500</option>
								<option  value="500 to 600">&#163;500 to &#163;600</option>
								<option  value="600 to 700">&#163;600 to &#163;700</option>
								<option  value="700 to 800">&#163;700 to &#163;800</option>
								<option  value="800 to 900">&#163;800 to &#163;900</option>
								<option  value="900 to 1000">&#163;900 to &#163;1000</option>
								<option  value="1000 to 1200">&#163;1000 to &#163;1200</option>
								<option  value="1200 to 1500">&#163;1200 to &#163;1500</option>
								<option  value="1500 to 2000">&#163;1500 to &#163;2000</option>
								<option  value="2000 to 3000">&#163;2000 to &#163;3000</option>
								<option  value="3000 to 5000">&#163;3000 to &#163;5000</option>
							</select> 
							<p style="margin-top: 0; margin-bottom: 0"> </p>
							<input type=button value="Search for Rental Property" name=B3 language=javascript onclick="searchFormSubmit();" style="color: #FFFFFF; font-size: 8pt; width: 170; background-color: #0066CC" />
						</td>
					</tr> 
				</table> 
			</form> 
		</td> 
	<td valign=top>&nbsp;</td>
	</tr> 
	<tr> 
		<td style="border-style: none"> &nbsp;</td> 
		<td style="border-style: none"> 
			<p> 
				<a href="/accommodation/advertise.php"> Free Property Advertising</a>
			</p>
			<p>
				<a href="/accommodation/add-wantednotice.php"> Post a Wanted Notice</a>
			</p>
			<p>
				<a href="/accommodation/_scripts/search_4_wanted.php?page=1"> View Tenant Notices</a> 
			</p>	
			<p> 
				<a href="/accommodation/login.php" rel=nofollow> Advertiser Log In</a> 
			</p>
			<p>
				<a href="/accommodation/forgot.php" rel=nofollow> Forgot Password</a>
			</p> 
		</td> 
		<td style="border-style: none"> &nbsp;</td>
	</tr> 
	<tr> 
		<td style="border-style: none"> &nbsp;</td> 
		<td style="border-style: none"> &nbsp;</td> 
		<td style="border-style: none"> &nbsp;</td>
	</tr> 
</table> 
<p>&nbsp;</p> 
<table border=0 cellpadding=0 cellspacing=0 style="border-collapse: collapse" bordercolor="#111111" bgcolor="#BFBFFF" width="180"> 
	<p></p>
	<tr> 
		<td valign=top>&nbsp;</td> 
		<td valign=top> 
			<font size=1>Landlord Insurance Guides</font></td> 
		<td valign=top>&nbsp;</td>
	</tr>		
	<tr> 
		<td style="border-style: none"> &nbsp;</td> 
		<td style="border-style: none"> 
			<p>
				<a href="../buy-to-let-insurance.htm">Buy to Let Insurance</a>
			</p>
			<p> 
				<a href="/building-insurance-uk.htm">Building Insurance</a>
			</p> 
			<p> 
				<a href="/empty-property-insurance.htm">Empty Property Insurance</a>
			</p>
			<p> 
				<a href="/buy-to-let-insurance-uk.htm">Landlord Building Insurance</a>
			</p>	
			<p align="left"> 
				<a href="/landlords-contents.htm">Landlord Contents Insurance</a>
			</p>
		</td> 
		<td style="border-style: none"> &nbsp;</td>
	</tr> 
	<tr> 
		<td style="border-style: none"> &nbsp;</td> 
		<td style="border-style: none"> &nbsp;</td> 
		<td style="border-style: none"> &nbsp;</td>
	</tr> 
</table>
<p>&nbsp;</p>
<table border=0 cellpadding=0 cellspacing=0 style="border-collapse: collapse" bordercolor="#111111" bgcolor="#BFBFFF" width="180"> 
	<p></p>
	<tr> 
		<td valign=top bgcolor="#DBDBDB">&nbsp;</td> 
		<td valign=top bgcolor="#DBDBDB"> 
			<font size="1">Tenant Articles</font></td> 
		<td valign=top bgcolor="#DBDBDB">&nbsp;</td>
	</tr>		
	<tr> 
		<td style="border-style: none" bgcolor="#DBDBDB"> &nbsp;</td> 
		<td style="border-style: none" bgcolor="#DBDBDB"> 
            <p>  
  <a href="http://www.let-a-property.info/articles/a-Adverse-Credit-Rating.php">  Adverse Credit Ratings </a>    <p>
  <a href="http://www.let-a-property.info/articles/a-guide-to-AST.php">AST Agreements</a></p>    <p>    
  <a href="http://www.let-a-property.info/articles/a-Avoiding-Disputes-Over-Your-Lease.php">    Avoiding Lease Disputes</a></p>    <p>    
  <a href="http://www.let-a-property.info/articles/a-Accident-Claims.php">    Claims Compensation </a></p>    <p>    
  <a href="http://www.let-a-property.info/articles/a-Extending-a-Lease.php">  Extending A Lease</a></p>    <p>
  <a href="http://www.let-a-property.info/articles/a-Make-Friends-with-Your-Landlord.php">    Lease Extension Issues</a></p>    <p>
  <a href="http://www.let-a-property.info/articles/a-Leasehold-Service-Charges.php">    Leasehold Service Charges</a></p>    <p>
  <a href="http://www.let-a-property.info/articles/a-Redundancy-Compensation.php">    Redundancy Compensation </a></p>    <p>
  <a href="http://www.let-a-property.info/articles/a-Compromise-Agreements.php">    UK Compromise Agreements</a></p>    
		</td> 
		<td style="border-style: none" bgcolor="#DBDBDB"> &nbsp;</td>
	</tr> 
	<tr> 
		<td style="border-style: none" bgcolor="#DBDBDB"> &nbsp;</td> 
		<td style="border-style: none" bgcolor="#DBDBDB"> &nbsp;</td> 
		<td style="border-style: none" bgcolor="#DBDBDB"> &nbsp;</td>
	</tr> 
</table>
<p>&nbsp;</p>
<table border=0 cellpadding=0 cellspacing=0 style="border-collapse: collapse; " bordercolor="#111111" bgcolor="#EFEFEF" align=left width="180"> <tr> 
  <td valign=top bgcolor="#BFBFFF">&nbsp;</td>   
  <td valign=top bgcolor="#BFBFFF"> <font size=1>Landlord Articles</font></td>   
  <td valign=top bgcolor="#BFBFFF">&nbsp;</td> </tr> <tr> 
    <td style="border-style: none" bgcolor="#BFBFFF"> &nbsp;</td> 
    <td style="border-style: none" bgcolor="#BFBFFF"> <p> 
  <a href="http://www.let-a-property.info/articles/a-top10-buytolet-tips.php"> Top 10 Buy to Let Tips</a><p> 
  <a href="http://www.let-a-property.info/articles/a-managing-student-lettings.php"> Managing Student Lettings</a></p> <p> 
  <a href="http://www.let-a-property.info/articles/a-finding-buytlet-mortgages.php"> Buy to Let Mortgages</a></p> <p> 
  <a href="http://www.let-a-property.info/articles/a-buytlet-popularity.php"> Buy to Let Popularity</a></p> <p> 
  <a href="http://www.let-a-property.info/articles/a-gas-safety-certificates.php"> Landlord Gas Safety</a></p> <p> 
  <a href="http://www.let-a-property.info/articles/a-commercial-mortgage-for-business.php"> Commercial Mortgages </a></p> <p> 
  <a href="http://www.let-a-property.info/articles/a-importance-of-tenancy-agreement.php"> Tenancy Agreements </a></p> <p> 
  <a href="http://www.let-a-property.info/articles/a-guide-to-business-insurance.php"> Business Insurance Guide </a></p> <p>
  <a href="http://www.let-a-property.info/articles/a-moving-in-day.php"> Moving Home &amp; Security </a></p> <p>
  <a href="http://www.let-a-property.info/articles/a-buytolet-mortgages.php"> Which Buy to Let Mortgage?</a><p>
  <a href="http://www.let-a-property.info/student-accommodation-landlord-uk.htm">Letting to Students</a><p>  
  <a href="http://www.let-a-property.info/investment-property.htm">The Risks of Letting</a><p>
  <a href="http://www.let-a-property.info/Rental-Property.htm">  Preparing the Property</a><p>
  <a href="http://www.let-a-property.info/uk-interest-rates.htm">Mortgage Interest Rates</a></td> 
    <td style="border-style: none" bgcolor="#BFBFFF"> &nbsp; </td> </tr> <tr> 
    <td style="border-style: none" bgcolor="#BFBFFF"> &nbsp;</td> 
    <td style="border-style: none" bgcolor="#BFBFFF"> &nbsp;</td>     
    <td style="border-style: none" bgcolor="#BFBFFF"> &nbsp;</td> </tr> </table></div>

</td><td valign="top">
      
<div class=breadcrumb><a href="http://www.let-a-property.info/index.htm">Homepage</a><font color="#FF0000" size="1"> &gt;</font> <a href="http://www.let-a-property.info/accommodation/Tenant-Seeking-Accommodation.php"> Tenants Wanted Notices</a><font color="#FF0000" size="1"> &gt;</font> Post a FREE Wanted Notice  <font color="#FF0000" size="1"> &gt;</font> </div><div class=pagetitle><h1>Post a Wanted Notice for FREE</h1></div><div class=mainbody>

<center>
<table>
  <tr>
 </tr>
  </table>
<center>

<table>
  <tr>
  
  <center>
<td>
    <span onmouseover="window.status=&quot; &quot;; return true" onmouseout="window.status=&quot;&quot;; return true">
    <font size="2">
    <p><font color="#808080">If you are looking for a place to live, please feel free to post a free 
    </font>'<a href="http://www.let-a-property.info/accommodation/_scripts/search_4_wanted.php?page=1">wanted' notice on this website</a>.<font color="#808080"> It only takes one minute. All that is 
    required is a valid email address, so our system can automatically email you 
    a confirmation of your wanted notice submission. Try to add as much detail 
    about the type of accommodation you are seeking, including property type, 
    location, fixtures and fittings and access to local transport links, shops 
    and so on. Be as descriptive as you can. This will increase the response 
    rate to your advertisement. We would advise against posting any contact information within 
    the 'description' section of your 
    advert, (to eliminate the possibility of receiving nuisance calls from other 
    commercial organisations in the future). </font> </p>
          </font>

      </span>
    <p align="center" style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
  
      <p align="center" style="margin-top: 0; margin-bottom: 0"><b>
      <font face="Tahoma" color="#0066CC">
      </span>
            
<span style="background-color: #FFFFFF" onmouseover="window.status=&quot; &quot;; return true" onmouseout="window.status=&quot;&quot;; return true">
    <font face="Tahoma" size="2">
	<form id="frmEditProperty" name="FrontPage_Form1" method="post" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript" >
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; color:#000000; font-size:10pt" bordercolor="#111111">
          <tr>
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
            <font face="Arial" size="2">
            <b>
            <font size="2" face="Tahoma">Name</font></b></td>
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
            <font face="Arial" size="2">
<font face="Tahoma" size="2">
            <input id="txtGivenName0" title="Your Google Toolbar can fill this in for you. Select AutoFill" style="BACKGROUND-COLOR: #DDDDDD; color:#0066CC; font-family:Tahoma; font-size:10pt; width:200" maxLength="30" name="givenName" size="20" value="">
            </font></span></td>
          </tr>
          <tr>
      <font face="Tahoma">        
  
<font face="Tahoma" size="2">
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt">
            <b><font size="2" face="Tahoma">I am Seeking </font></b></td>
        
      <font face="Tahoma" color="#0066CC">
<font face="Tahoma" size="2">
            
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
      <font face="Tahoma" color="#0066CC">
        
            
<font face="Tahoma" size="2">
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
            </font></font><font size="2" face="Tahoma">
            <select style="font-family: Tahoma; background-color: #dddddd; color:#0066CC; font-size:10pt; width:200" name="selPropertyType" id="selPropertyType">
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
	            </select> </font>
            </td>
          </tr>
          <tr>
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt">
            <font size="2"><b>With</b></font></td>
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
            </font></font>
        
<font face="Arial" size="2">
        
<font face="Tahoma" size="2">
<span style="background-color: #FFFFFF" onmouseover="window.status=&quot; &quot;; return true" onmouseout="window.status=&quot;&quot;; return true">
            <select class="text" style="font-family: Tahoma; background-color: #dddddd; color:#0066CC; font-size:10pt; width:200" name="selBedrooms" id="selBedrooms">
              <option selected="selected" value="0">Bedrooms</option>
              <option value="1">Dont Mind</option>
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
			        </select></span></td>
          </tr>
		<tr>
			 <td align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt"><font size="2" face="Tahoma"><b>Country</b></font></td>
			<td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
			<select name="SelCountry" id="selCountry" value="GO" style="font-size: 10pt; font-family: Tahoma; background-color: #DDDDDD; color:#0066CC; width:200" onclick="javascript:loadGeographic(this,'SelCounty',0,'','trSelState')">
							<option value="United Kingdom">United Kingdom</option>
							<option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Antigua And Barbuda">Antigua And Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Costa Rica">Costa Rica</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="East Timor">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="Gabon">Gabon</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea Bissau">Guinea Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Honduras">Honduras</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mexico">Mexico</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar (Burma)">Myanmar (Burma)</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="North Korea">North Korea</option><option value="Northern Ireland">Northern Ireland</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palestinian Territory">Palestinian Territory</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome And Principe">Sao Tome And Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Scotland">Scotland</option><option value="Senegal">Senegal</option><option value="Serbia And Montenegro">Serbia And Montenegro</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="The Bahamas">The Bahamas</option><option value="The Gambia">The Gambia</option><option value="Togo">Togo</option><option value="Tonga">Tonga</option><option value="Trinidad And Tobago">Trinidad And Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States of America">United States of America</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Wales">Wales</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>						</select>
			
			</td>
		</tr>
          <tr id="trSelState" style="display:none;">
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt">
        
<font face="Arial" size="2">
            <b><font size="2" face="Tahoma">County / State</font></b></span></td>
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
    </font><font size="2" face="Tahoma">
    		<select name="SelCounty" id="SelCounty" style="font-family: Tahoma; font-size: 10pt; color: #0066CC; background-color: #dddddd; width:200;" onchange="javascript:loadGeographic(this,'SelTown',1,'','trSelTown')">
            <option value="">Select One</option>
        </select></font>
        
		</td>
	</tr>
	<tr id="trSelTown" style="display:none;">
		<td align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt"><font size="2" face="Tahoma"><b>Town</b></font></td>
		<td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
		<td bgcolor="#FFFFFF" >
    <font size="2" face="Tahoma">
    	<select name="SelTown" id="SelTown" style="font-family: Tahoma; font-size: 10pt; color: #0066CC; background-color: #dddddd; width:200;">
            <option value="">Select One</option>
        </select></font></td>
          </tr>
          <tr>
      <font face="Tahoma">
        
<font face="Arial" size="2">
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt">
            <b>
            <font size="2" face="Tahoma">Maximum Budget</font></b></td>
        
      <font face="Tahoma" color="#0066CC">
        
<font face="Tahoma" size="2">
            
<font face="Arial" size="2">
            
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
      <font face="Tahoma" color="#0066CC">
                        
<font face="Arial" size="2">
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
            <select style="font-size: 10pt; font-family: Tahoma; background-color: #dddddd; color:#0066CC; width:200" name="selRentValue" id="selRentValue">
              <option value="0" selected> Per Month</option>
              <option value="100">100</option><option value="125">125</option><option value="150">150</option><option value="175">175</option><option value="200">200</option><option value="225">225</option><option value="250">250</option><option value="275">275</option><option value="300">300</option><option value="325">325</option><option value="350">350</option><option value="375">375</option><option value="400">400</option><option value="425">425</option><option value="450">450</option><option value="475">475</option><option value="500">500</option><option value="525">525</option><option value="550">550</option><option value="575">575</option><option value="600">600</option><option value="625">625</option><option value="650">650</option><option value="675">675</option><option value="700">700</option><option value="725">725</option><option value="750">750</option><option value="775">775</option><option value="800">800</option><option value="825">825</option><option value="850">850</option><option value="875">875</option><option value="900">900</option><option value="925">925</option><option value="950">950</option><option value="975">975</option><option value="1000">1000</option><option value="1025">1025</option><option value="1050">1050</option><option value="1075">1075</option><option value="1100">1100</option><option value="1125">1125</option><option value="1150">1150</option><option value="1175">1175</option><option value="1200">1200</option><option value="1225">1225</option><option value="1250">1250</option><option value="1275">1275</option><option value="1300">1300</option><option value="1325">1325</option><option value="1350">1350</option><option value="1375">1375</option><option value="1400">1400</option><option value="1425">1425</option><option value="1450">1450</option><option value="1475">1475</option><option value="1500">1500</option><option value="1625">1625</option><option value="1650">1650</option><option value="1675">1675</option><option value="1700">1700</option><option value="1725">1725</option><option value="1750">1750</option><option value="1775">1775</option><option value="1800">1800</option><option value="1825">1825</option><option value="1850">1850</option><option value="1875">1875</option><option value="1900">1900</option><option value="2000">2000</option><option value="2500">2500</option><option value="3000">3000</option><option value="3500">3500</option><option value="4000">4000</option>              </select></td>
          </tr>
          <tr>
        
      <font face="Tahoma">
        
<font face="Tahoma" size="2">
<font size="2">
  
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; font-size:10pt; color:#000000">
            <span style="background-color: #FFFFFF"><b>From</b></span></td>
        
      <font face="Tahoma" color="#0066CC">
        
<font face="Tahoma" size="2">
            
<font face="Arial" size="2">
            
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
      <font face="Tahoma" color="#0066CC">
            
<font face="Arial" size="2">
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
            <p>
        
<span style="background-color: #FFFFFF" onmouseover="window.status=&quot; &quot;; return true" onmouseout="window.status=&quot;&quot;; return true">
<font face="Arial" size="2">
            <font face="Tahoma" size="2"> 
			<input  type="text" readonly="true" name="txtAvailableFrom" id="txtAvailableFrom" onchange="javascript: this.value = this.value.toUpperCase();" size="20" style="background-color: #dddddd; width:200"
			 />
			</td>
          </tr>
          <tr>
<font size="2">
        
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt">
  
      <font face="Tahoma">
        
<font face="Tahoma" size="2">
  
      <font face="Tahoma">
        
<font face="Tahoma" size="2">
        
<font size="2">
            <span style="font-weight: 700; background-color: #FFFFFF" onmouseover="window.status=&quot; &quot;; return true" onmouseout="window.status=&quot;&quot;; return true">For the 
            Period of</span></td>
<font face="Arial" size="2">
            
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
            
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
            <p>
        
<span style="background-color: #FFFFFF" onmouseover="window.status=&quot; &quot;; return true" onmouseout="window.status=&quot;&quot;; return true">
<font face="Arial" size="2">
            <font face="Tahoma" size="2">
        
<font face="Arial" size="2">
        
<font face="Tahoma" size="2">
            <select class="text" style="font-family: Tahoma; background-color: #dddddd; color:#0066CC; font-size:10pt; width:200" name="selRentalPeriod" id="selRentalPeriod">
              <option value="6 Months" selected>6 Months</option>
              <option value="Short Term Let">Short Term Let</option>
              <option value="1 Year">1 Year</option>
              <option value="2 Years">2 Years</option>
            </select>
            </td>
          </tr>
          <tr>
        
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt">
        
<font face="Arial" size="2">
<span style="background-color: #FFFFFF" onmouseover="window.status=&quot; &quot;; return true" onmouseout="window.status=&quot;&quot;; return true">
            <p style="margin-top: 0; margin-bottom: 0"><b>
            <font size="2" face="Tahoma">Headline</font></b></p>
            </span>
            </td>
        
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
<font face="Tahoma" size="2">
            
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
            <input id="txtGivenName0" title="Your Google Toolbar can fill this in for you. Select AutoFill" style="BACKGROUND-COLOR: #dddddd; color:#0066CC; font-family:Tahoma; font-size:10pt; width:350" name="Name" size="20" value="">
            </font></span></td>
          </tr>
          <tr>
            <td  align="right" bgcolor="#FFFFFF" valign="top" style="border-style: none; border-width: medium; color:#000000; font-size:10pt" width="200">
            <p style="margin-top: 0; margin-bottom: 0"><b>
            <font size="2" face="Tahoma">Detailed Message</font></b></p>
<font size="2">
            <p style="margin-top: 0; margin-bottom: 0">
       &nbsp;<font face="Tahoma" size="2"><p style="margin-top: 0; margin-bottom: 0">
       &nbsp;</td>
            <font face="Arial" size="2">
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
            <td bgcolor="#FFFFFF" valign="top" style="border-style: none; border-width: medium">
            <font face="Tahoma" size="2">
            <textarea style="font-size: 10pt; background-color: #DDDDDD; width:350; height:200; color:#0066CC" tabIndex="0" name="txtDescription" id="txtDescription" rows="7" cols="59"></textarea></td>
          </tr>
          
		<tr>
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt">
    &nbsp;</td>
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
  <font size="2">&nbsp;&nbsp; </font></td>
          </tr>
          <tr>
        
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt">
    <b><font size="2" face="Tahoma">Choose a Username </font></b></td>
        
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
            
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
  <p style="margin-top: 0; margin-bottom: 0">
        
<span style="background-color: #FFFFFF" onmouseover="window.status=&quot; &quot;; return true" onmouseout="window.status=&quot;&quot;; return true">
  <font size="2" face="Arial">
  <input id="txtGivenName1" title="Your Google Toolbar can fill this in for you. Select AutoFill" style="BACKGROUND-COLOR: #DDDDDD; color:#0066CC; font-family:Tahoma; font-size:10pt; width:200" maxLength="30" name="username" size="20" value=""></td>
          </tr>
          <tr>
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt">
    &nbsp;</td>
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
  <font size="2">&nbsp;&nbsp; </font></td>
          </tr>
          <tr>
        
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt">
    <b><font size="2" face="Tahoma">Your Email </font></b></td>
        
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
            
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
  <p style="margin-top: 0; margin-bottom: 0">
        
<span style="background-color: #FFFFFF" onmouseover="window.status=&quot; &quot;; return true" onmouseout="window.status=&quot;&quot;; return true">
  <font size="2" face="Arial">
  <input id="txtGivenName1" title="Your Google Toolbar can fill this in for you. Select AutoFill" style="BACKGROUND-COLOR: #DDDDDD; color:#0066CC; font-family:Tahoma; font-size:10pt; width:200" maxLength="30" name="email" size="20" value=""></font></span></p>
  <p style="margin-top: 0; margin-bottom: 0">
            <font size="1" face="Arial" color="#808080">(This will <u>never</u> 
            appear on the site. Our system will forward replies to you)</font></td>
          </tr>
          <tr>
  
      <font face="Tahoma">
        
<font face="Tahoma" size="2">
            
<font face="Arial" size="2">
        
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt">
    <b><font face="Tahoma" size="2">Choose a Password</font></b></td>
            
      <font face="Tahoma" color="#0066CC">
        
<font face="Tahoma" size="2">
            
<font face="Arial" size="2">
            
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
            
      <font face="Tahoma" color="#0066CC">
  
<font face="Tahoma" size="2">
            
<font face="Arial" size="2">
            
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
        
<font face="Tahoma" size="2">
        
<span style="background-color: #FFFFFF" onmouseover="window.status=&quot; &quot;; return true" onmouseout="window.status=&quot;&quot;; return true">
            <input  type="password"  id="txtGivenName3" title="Your Google Toolbar can fill this in for you. Select AutoFill" style="BACKGROUND-COLOR: #DDDDDD; color:#0066CC; font-family:Tahoma; font-size:10pt; width:140" maxLength="30" name="password1" size="20" /></span></td>
          </tr>
          <tr>
  
      <font face="Tahoma">
        
<font face="Tahoma" size="2">
            
<font face="Arial" size="2">
        
                    <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium; color:#000000; font-size:10pt">
    <p style="margin-top: 0; margin-bottom: 0">
  
      <b>
      <font face="Tahoma">
        
<span style="background-color: #FFFFFF" onmouseover="window.status=&quot; &quot;; return true" onmouseout="window.status=&quot;&quot;; return true">
<font face="Tahoma" size="2">
            
<font face="Arial" size="2">
        
<font face="Tahoma" size="2">
    &nbsp;Confirm Password</font></span></td>
            
      <font face="Tahoma" color="#0066CC">
        
<font face="Tahoma" size="2">
            
<font face="Arial" size="2">
            
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
            
      <font face="Tahoma" color="#0066CC">
        
<font face="Tahoma" size="2">
            
<font face="Arial" size="2">
            
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
        
<span style="background-color: #FFFFFF" onmouseover="window.status=&quot; &quot;; return true" onmouseout="window.status=&quot;&quot;; return true">
<font face="Tahoma" size="2">
    <input  type="password" id="txtGivenName2" title="Your Google Toolbar can fill this in for you. Select AutoFill" style="BACKGROUND-COLOR: #DDDDDD; color:#0066CC; font-family:Tahoma; font-size:10pt; width:140" maxLength="30" name="password" size="20" />&nbsp;&nbsp;</font></span></td>
          </tr>
            
          <tr>
        
            <td  align="right" bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
    &nbsp;</td>
            
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">&nbsp;</td>
        
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
            <p style="margin-top: 0; margin-bottom: 0">
			<br />
            <font face="Arial" color="#808080"><font size="1">Your password will allow you to return 
            to this website and amend or delete your advert</font></font><font face="Arial" size="2" color="#0066CC">.</td>
			<br />
          </tr>
          
		<tr>
			<td>
				<br />
				<span style="position: relative; left:55%;">
					<span style="position: relative; font-size: 10pt; color: black; height: auto; width: auto;">
	<span>
		<span height="33">
			'Spam Prevention' Code
		</span>
		<br />
		<br />
		<span>
			<font face="Tahoma" color="#ff0000" size="2">
			&nbsp;<img id="captcha" src="../securimage/securimage_show.php" alt="CAPTCHA Image" />
			</font>
		</span>
		<br />
		<br />
	</span>
	
	<span height="38">
		<b>CAREFULLY enter the Code from above</b>
		<br />
		(case sensitive)
		<br />
		<br />
	</span>
	<span height="38">
		<font face="Tahoma" color="#ff0000" size="2">
			<input type="text" name="captcha_code" size="10" maxlength="6" autocomplete="off" />
			<b>
				<a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
			</b>
			<br />
			<br />
		</font>
	</span>	
</span>				</span>
			</td>
		</tr>
		  
          <tr>
        <td style="border:medium none; " align="right" bgcolor="#FFFFFF" valign="top">
        <font color="#ff0000">
        <p align="right"><b><font face="Tahoma" color="#333333" size="1">
        <a href="http://www.let-a-property.info/siteterms.htm" target="_blank">
        <font color="#0066CC">Terms of Use</font></a></font></b></font></td>
        <td style="border: medium none" bgColor="#FFFFFF">&nbsp;</td>
            <td bgcolor="#FFFFFF" style="border-style: none; border-width: medium">
            <p style="margin-top: 0; margin-bottom: 0"><font color="#ff0000"><b>
            <font face="Tahoma" color="#000066" size="2">
            <select id="selConditions" style="color: #0066CC; font-family: Tahoma; font-size: 8pt; background-color: #dddddd" size="1" name="selConditions">
            <option value="1" >I accept Terms &amp; Conditions</option>
            <option value="0" selected="selected">I do NOT accept Terms &amp; Conditions</option>
            </select></font></b></font></p>
            <p style="margin-top: 0; margin-bottom: 0"><b>
            <font face="Tahoma" size="2" color="#000066">&nbsp;</font></b></p>
            <p style="margin-top: 0; margin-bottom: 0" align="left">
        
<span style="background-color: #FFFFFF" onmouseover="window.status=&quot; &quot;; return true" onmouseout="window.status=&quot;&quot;; return true">
			<input type="button" value="Post a Wanted Notice" name="cmdEditProp" id="cmdEditProp" language="javascript" onclick="submitForm();" style="font-family: Tahoma; font-size: 10pt; color: #FFFFFF; background-color:#0066CC">&nbsp;
        </span>
            <p style="margin-top: 0; margin-bottom: 0" align="left">
        &nbsp;<p style="margin-top: 0; margin-bottom: 0" align="left">
        &nbsp;<p style="margin-top: 0; margin-bottom: 0" align="left">
        &nbsp;<p style="margin-top: 0; margin-bottom: 0" align="left">
        &nbsp;<p style="margin-top: 0; margin-bottom: 0" align="left">
        &nbsp;<p style="margin-top: 0; margin-bottom: 0" align="left">
        &nbsp;<p style="margin-top: 0; margin-bottom: 0" align="left">
        &nbsp;</td>
          </tr>
<font face="Tahoma" size="2">
  </table>
  </form>
</blockquote>
      </span>
    </td>
  </tr>
  </table>
		<script type="text/javascript">
			loadGeographic(document.getElementById('selCountry'),'SelCounty',0,'','trSelState');
		</script></div>  

</td><td valign="top">

<div class="rightborder">

<table border="1" cellpadding="0" cellspacing="0" style="border-style:solid; border-color:#FFFFFF; border-collapse: collapse; " bordercolor="#111111" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF" bgcolor="#FFFFFF"><tr>
  <td style="border-style: none; border-width: medium" valign="top">
    
 
</td></tr><tr><td style="border-style: none; border-width: medium" valign="top">
    
&nbsp;</td></tr><tr>
    <td style="border-style: none; border-width: medium" valign="top">
    
    
</td></tr></table>

</div>
 </td></tr><tr><td colspan="3">
      
<div class="footer"><div class=footer><p><a href="/sitemap.xml">Sitemap.xml</a>&nbsp; <a href="/site-terms.htm" rel=nofollow> Site Terms</a>&nbsp; <a href="/site-map.htm"> Site Map</a>&nbsp; <a href="/contactus.htm" rel=nofollow> Contact Us</a>&nbsp; <a href="/addasite.htm">Links</a></p></div></div>

</td></tr></table>

</body>
</html>


<html>
<head>
<meta name="copyright" content="Copyright (C) 2001-2004 Bruce Corkhill" />
<title>SADLA Discussion Forum Members</title>

<!-- Web Wiz Forums ver. 7.7 is written and produced by Bruce Corkhill ©2001-2004
     	If you want your own Forum then goto http://www.webwizforums.com -->

<script  language="JavaScript">

//Function to check form is filled in correctly before submitting
function CheckForm () {

	//Check for a somthing to search for
	if (document.frmMemberSearch.SF.value==""){

		msg = "_______________________________________________________________\n\n";
		msg += "The form has not been submitted because there are problem(s) with the form.\n";
		msg += "Please correct the problem(s) and re-submit the form.\n";
		msg += "_______________________________________________________________\n\n";
		msg += "The following field(s) need to be corrected: -\n";

		alert(msg + "\n\tMember Search\t- Enter a Members Username to search for\n\n");
		document.frmMemberSearch.SF.focus();
		return false;
	}

	return true;
}

//Function to choose how the members list is sorted
function MembersSort(SelectSort){

   	if (SelectSort != "") self.location.href = "members.asp?SF=&GID=0&SO=" + SelectSort.options[SelectSort.selectedIndex].value;
	return true;
}

//Function to move to another page of members
function MembersPage(SelectPage){

   	if (SelectPage != -1) self.location.href = "members.asp?SF=&GID=0&SO=&MemPN=" + SelectPage.options[SelectPage.selectedIndex].value;
	return true;
}
</script>
<!-- start of header file -->
<script language="javascript" src="includes/default_javascript.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="/forum/includes/default_style.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--jAVA FOR NAVE CELL COLOR CHANGE -->
<script language="Javascript"> 
	<!-- 
	function inCell(cell, newcolor) { 
		if (!cell.contains(event.fromElement)) { 
		cell.bgColor = newcolor; 
		} 
	} 

	function outCell(cell, newcolor) { 
		if (!cell.contains(event.toElement)) { 
		cell.bgColor = newcolor;
		} 
	} 
	
	function go(loc) {
		window.location.href = loc;
	}
//  End -->
</script>

</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#ffffff">
<table cellspacing="0" cellpadding="0" border="0" width="100%"><tr>
	<td width="136" style="background:#009cf0; margin:10px; padding-top:10px;" valign="top">
	<div align="center"><img src="/images/sadlaLogo.gif" width="82" height="135" border="0" alt=""></div>
		<br />
<div id=navvy>
<table class="tooltext1" cellspacing="0" cellpadding="0" style="border:0px;">


    <tr>
    <TD class="tooltext1" ALIGN="LEFT" BGCOLOR="#6898d0" WIDTH="153" onmouseover="inCell(this, '#686868');" onmouseout="outCell(this, '#6898d0');" onclick="go('active_topics.asp')" height="27"> 
     &nbsp;Active&nbsp;Topics
    </TD></tr><tr>
    <TD class="tooltext1" ALIGN="LEFT" BGCOLOR="#6898d0" WIDTH="153" onmouseover="inCell(this, '#686868');" onmouseout="outCell(this, '#6898d0');" onClick="go('members.asp')" height="27"> 
      &nbsp;Member List
    </TD></tr><tr>
    <TD class="tooltext1" ALIGN="LEFT" BGCOLOR="#6898d0" WIDTH="153" onmouseover="inCell(this, '#686868');" onmouseout="outCell(this, '#6898d0');" onclick="go('search_form.asp?FID=0');" height="27"> 
      &nbsp;Search
    </TD></tr><tr>
    <TD class="tooltext1" ALIGN="LEFT" BGCOLOR="#6898d0" WIDTH="153" onmouseover="inCell(this, '#686868');" onmouseout="outCell(this, '#6898d0');" onclick="go('help.asp');" height="27"> 
      &nbsp;Help
    </TD></tr>
		 <tr>
		 
	<TD class="tooltext1" ALIGN="LEFT" BGCOLOR="#6898d0" WIDTH="153" onmouseover="inCell(this, '#686868');" onmouseout="outCell(this, '#6898d0');" onclick="go('registration_rules.asp?FID=0');" height="27">
	&nbsp;Register
  </TD></tr><tr> 
  <TD class="tooltext1" ALIGN="LEFT" BGCOLOR="#6898d0" WIDTH="153" onmouseover="inCell(this, '#686868');" onmouseout="outCell(this, '#6898d0');" onclick="go('login_user.asp?FID=0');" height="27">
	&nbsp;Login
  </TD></tr>
	<!-- closing cell -->
	<TD class="tooltext1"> 
  &nbsp;
  </TD></tr><tr>
	
	<TD class="tooltext1" ALIGN="LEFT" BGCOLOR="#6898d0" WIDTH="153" onmouseover="inCell(this, '#686868');" onmouseout="outCell(this, '#6898d0');" onclick="go('/members/member-home.asp')" height="27"> 
  &nbsp;<img src="\images\backarrow.gif">&nbsp;Members&nbsp;Home
  </TD></tr><tr>

	<TD class="tooltext1"> 
  &nbsp;
  </TD></tr>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- this included file needs to be surrounded by <tr><td> (if it is active) -->

	
  </table>
</div>  <!-- end of navvy -->	 
<!-- End of menu table -->

</td>
	<td valign="top">
	
	<!-- its a table to just hold the banner -->
		<table width="100%" border="0" cellspacing="0" cellpadding="0" height="30">
      <tr bgcolor="#009CF0">
       	  <td height="30"> 
         	  <div align="center"><img src="/Images/slogan2.gif" width="486" height="25"
           	alt="Sheffield District and Landlord Association" align="middle"> </div>
         	</td>
      </tr>
    </table>
		
			<img src="../images/corner.gif" width="25" height="20" border="0" alt="">	
			
<!-- end of header file -->
<!-- The navigation file -->
  <table width="98%" border="0" cellspacing="0" cellpadding="3" align="center">
  <tr>
  <td align="left" class="heading">Forum Members</td>
</tr>
 <tr>
  <td align="left" width="71%" class="bold"><img src="forum_images/open_folder_icon.gif" border="0" align="absmiddle">&nbsp;<a href="default.asp" target="_self" class="boldLink">SADLA Discussion Forum</a> : Forum Members</td>
 </tr>
</table>
    <br />
    <form name="frmMemberSearch" method="get" action="members.asp" onSubmit="return CheckForm();">
     <table width="490" border="0" cellspacing="0" cellpadding="1" height="24" align="center" bgcolor="#999999">
      <tr>
       <td align="center" height="2">
        <table width="100%" border="0" cellspacing="0" cellpadding="4" bgcolor="#999999">
         <tr>
          <td align="center" bgcolor="#F4F4FB" background="" width="100%" height="20"><span class="text">Member Search:</span>
           <input type="text" name="SF" size="15" maxlength="15" value="">
           <input type="submit" name="Submit" value="Search">
          </td>
         </tr>
         <tr>
          <td align="center" bgcolor="#F4F4FB" background="" width="100%"><a href="members.asp" target="_self">All</a> <a href="members.asp?SF=A" target="_self">A</a> <a href="members.asp?SF=B" target="_self">B</a> <a href="members.asp?SF=C" target="_self">C</a>
           <a href="members.asp?SF=D" target="_self">D</a> <a href="members.asp?SF=E" target="_self">E</a> <a href="members.asp?SF=F" target="_self">F</a>
           <a href="members.asp?SF=G" target="_self">G</a> <a href="members.asp?SF=H" target="_self">H</a> <a href="members.asp?SF=I" target="_self">I</a>
           <a href="members.asp?SF=J" target="_self">J</a> <a href="members.asp?SF=K" target="_self">K</a> <a href="members.asp?SF=L" target="_self">L</a>
           <a href="members.asp?SF=M" target="_self">M</a> <a href="members.asp?SF=N" target="_self">N</a> <a href="members.asp?SF=O" target="_self">O</a>
           <a href="members.asp?SF=P" target="_self">P</a> <a href="members.asp?SF=Q" target="_self">Q</a> <a href="members.asp?SF=R" target="_self">R</a>
           <a href="members.asp?SF=S" target="_self">S</a> <a href="members.asp?SF=T" target="_self">T</a> <a href="members.asp?SF=U" target="_self">U</a>
           <a href="members.asp?SF=V" target="_self">V</a> <a href="members.asp?SF=W" target="_self">W</a> <a href="members.asp?SF=X" target="_self">X</a>
           <a href="members.asp?SF=Y" target="_self">Y</a> <a href="members.asp?SF=Z" target="_self">Z</a></td>
         </tr>
        </table>
       </td>
      </tr>
     </table>
    </form>
   </div>
   <div align="center">
<span class="bold">Sorry, you must be a registered forum member in order to use this feature.</span><br /><br />
<a href="registration_rules.asp" target="_self"><img src="forum_images/register.gif"  alt="Register" border="0" align="absmiddle"></a>&nbsp;&nbsp;<a href="login_user.asp" target="_self"><img src="forum_images/login.gif"  alt="Login" border="0" align="absmiddle"></a><br /><br /><br /><br /><br /><br />
    </form>
    <div align="center"><span class="smText"><br /><br />This page was generated in 0.0469 seconds.</span>
    </div>
   </div>
   <!-- footer -->

	<table width="95%"><tr>
 		<td valign="middle" bgcolor="#FFFFFF" height="30"><div align="center" class="copyright">Copyright
    	© 2002 Sheffield and District Landlord Association  |  Site by <a
    	href="http://www.novate.co.uk" target="_blank" class="subtitle">Novate</a>
    	</div></td>
  	</tr>
	</table>
</table>
</body>
</html>
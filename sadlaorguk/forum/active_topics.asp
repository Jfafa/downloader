
<html>
<head>
<meta name="copyright" content="Copyright (C) 2001-2004 Bruce Corkhill" />
<title>SADLA Discussion Forum: Active Topics</title>

<!-- Web Wiz Forums ver. 7.7 is written and produced by Bruce Corkhill �2001-2004
     	If you want your own Forum then goto http://www.webwizforums.com -->

<script  language="JavaScript">
<!-- Hide from older browsers...

//Function to choose how many topics are show
function ShowTopics(Show){

   	strShow = escape(Show.options[Show.selectedIndex].value);
   	document.cookie = "AT=" + strShow

   	if (Show != "") self.location.href = "active_topics.asp?PN=1";
	return true;
}
// -->
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
  <td align="left" class="heading">Active Topics</td>
</tr>
 <tr>
  <td align="left" width="71%" class="bold"><img src="forum_images/open_folder_icon.gif" border="0" align="absmiddle">&nbsp;<a href="default.asp" target="_self" class="boldLink">SADLA Discussion Forum</a> : <a href="active_topics.asp" class="boldLink">Active Topics</a><br /></td>
 </tr>
</table>
      <table width="98%" border="0" cellspacing="0" cellpadding="4" align="center">
        <tr>
          <form>
            <td><span class="text">Show Active Topics since</span>
              <select name="show" onChange=ShowTopics(this)>
                <option value="1" >09/February/2009 at 01:00</option>
                <option value="2" >Last 15 minutes</option>
                <option value="3" >Last 30 minutes</option>
                <option value="4" >Last 45 minutes</option>
                <option value="5" >Last hour</option>
                <option value="6" >Last 2 hours</option>
                <option value="7" selected>Last 4 hours</option>
                <option value="8" >Last 6 hours</option>
                <option value="9" >Last 8 hours</option>
                <option value="10" >Last 12 hours</option>
                <option value="11" >Last 16 hours</option>
                <option value="12" >Yesterday</option>
                <option value="13" >from the Last Week</option>
                <option value="14" >from the Last Month</option>
              </select>
            </td>
          </form>
        </tr>
      </table>
<table width="98%" border="0" cellspacing="0" cellpadding="1" bgcolor="#999999" align="center">
 <tr>
  <td>
  <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
     <td bgcolor="#FFFFFF">
   <table width="100%" border="0" cellspacing="1" cellpadding="3" height="14" bgcolor="#FFFFFF">
    <tr>
     <td bgcolor="#009cf0" width="3%" class="tHeading" background="">&nbsp;</td>
     <td bgcolor="#009cf0" width="41%" class="tHeading" background="">Topics</td>
     <td bgcolor="#009cf0" width="15%" class="tHeading" background="">Topic Starter</td>
     <td bgcolor="#009cf0" width="7%" align="center" class="tHeading" background="">Replies</td>
     <td bgcolor="#009cf0" width="7%" align="center" class="tHeading" background="">Views</td>
     <td bgcolor="#009cf0" width="29%" align="center" class="tHeading" background="">Last Post</td>
    </tr>
    
<td bgcolor="#F4F4FB" background="" colspan="6" class="text">There are no Active Topics since Last 4 hours to display</td>
   </table>
  </td>
 </tr>
</table>
</td>
 </tr>
</table>
<br />
<form>
        <table width="98%" border="0" cellspacing="0" cellpadding="4" align="center">
          <tr>
            <td>
              
	<span class="text">Forum Jump</span>
	 <select onChange="ForumJump(this)" name="SelectJumpForum">
           <option value="" selected>-- Select Forum --</option>
		<option value="">Sadla Organisation</option>
		<option value="">General Discussion</option>
		<option value="forum_topics.asp?FID=7">&nbsp;&nbsp;-&nbsp;Sadla General Discussion</option>
		<option value="">Properties</option>
		<option value="forum_topics.asp?FID=13">&nbsp;&nbsp;-&nbsp;Properties to Rent</option>
		<option value="forum_topics.asp?FID=16">&nbsp;&nbsp;-&nbsp;Recommended Tradesmen and Services</option>
		<option value="forum_topics.asp?FID=14">&nbsp;&nbsp;-&nbsp;Items for Sale</option>
		<option value="forum_topics.asp?FID=15">&nbsp;&nbsp;-&nbsp;Properties for Sale</option>
	</select>
            </td>	  </tr>
        </table>
</form>
<div align="center">
 <table width="617" border="0" cellspacing="0" cellpadding="2">
  <tr>
   <td width="173" class="text"><img src="forum_images/no_new_posts_icon.gif" alt="Topic [no new posts]"> <span class="smText">Topic [no new posts]</span></td>
   <td width="174" class="text"><img src="forum_images/hot_topic_no_new_posts_icon.gif" alt="Hot Topic [no new posts]"> <span class="smText">Hot Topic [no new posts]</span></td>
   <td width="171" class="text"><img src="forum_images/priority_post_icon.gif" alt="Announcement"> <span class="smText">Announcement</span></td>
   <td width="94" class="text"><img src="forum_images/pinned_topic_icon.gif" alt="Sticky Topic"> <span class="smText">Sticky Topic</span></td>
  </tr>
  <tr>
   <td width="173" class="text"><img src="forum_images/new_posts_icon.gif" alt="Topic [new post]"> <span class="smText">Topic [new post]</span></td>
   <td width="174" class="text"><img src="forum_images/hot_topic_new_posts_icon.gif" alt="Hot Topic [new posts]"> <span class="smText">Hot Topic [new posts]</span></td>
   <td width="171" class="text"><img src="forum_images/priority_post_locked_icon.gif" alt="Locked Announcement"> <span class="smText">Locked Announcement</span></td>
   <td width="94" class="text"><img src="forum_images/closed_topic_icon.gif" alt="Closed&nbsp;Topic"> <span class="smText">Closed&nbsp;Topic</span></td>
  </tr>
 </table>
 <br />
</div>
<div align="center">
 <span class="smText"><br /><br />This page was generated in 0.0940 seconds.</span>
</div>
<!-- footer -->

	<table width="95%"><tr>
 		<td valign="middle" bgcolor="#FFFFFF" height="30"><div align="center" class="copyright">Copyright
    	� 2002 Sheffield and District Landlord Association  |  Site by <a
    	href="http://www.novate.co.uk" target="_blank" class="subtitle">Novate</a>
    	</div></td>
  	</tr>
	</table>
</table>
</body>
</html>
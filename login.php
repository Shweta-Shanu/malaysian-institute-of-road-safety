<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<style type="text/css">
@import url("file:///C|/AppServ/www/sispek/images/mm_dashed_line.gif.css");
@import url("mm_travel2.css");
	<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
</style>
</head>

<body bgcolor="#C8C8C8">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#C8C8C8">
    <td colspan="2" rowspan="2"><img src="images/logo_miros_only.png" width="250" height="86" alt=""/></td>
    <td width="570" height="50" id="logo" valign="middle" align="center">DOCUMENT TRACKING SYSTEM</td>
    <td width="300">&nbsp;</td>
  </tr>

  <tr bgcolor="#C8C8C8">
    <td width="570" height="50" id="tagline" valign="top" align="center"><p>MALAYSIA INSTITUTE OF ROAD SAFETY RESEARCH</p>
	</td>
	<td width="300">&nbsp;</td>
  </tr>


  <tr>
    <td height="5" colspan="4" bgcolor="#000000"></td>
  </tr>

  <tr>
    <td height="5" colspan="4" bgcolor="#000000"> </td>
  </tr>

  <tr bgcolor="#000000">
  <td>&nbsp;</td>

  </tr>

  <tr>
    <td height="5" colspan="4" bgcolor="#000000"></td>
  </tr>

	<tr>
	<div>
		<form class="user" action="code.php" method="POST">
      <div class="form-group">
             <input type="email" name="emaill" class="form-control form-control-user" placeholder="Enter Email Address...">
       </div>
       <div class="form-group">
             <input type="password" name="passwordd" class="form-control form-control-user" placeholder="Password">
       </div>
            
        <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
        <hr>
 </form>
	
	</div>
	</tr>
</body>
</html>

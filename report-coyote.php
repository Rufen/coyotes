<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<!-- TemplateVersion="1109" -->
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!--<script type="text/javascript" src="http://www.newtonma.gov/inc/js/jquery/1.4.4/jquery-1.4.4.min.js"></script>-->
<!--<script type="text/javascript" LANGUAGE="javascript1.2" src="http://www.newtonma.gov/inc/js/swfobject/2.2/swfobject.js"></script>
<script TYPE="text/javascript" LANGUAGE="javascript1.2" SRC="http://www.newtonma.gov/inc/js/jquery/1.4.2/jquery.marquee.min.js"></SCRIPT>
<script TYPE="text/javascript" LANGUAGE="javascript1.2" SRC="http://www.newtonma.gov/inc/js/jquery/1.4.2/jquery.qtip-1.0.min.js"></SCRIPT>
<script TYPE="text/javascript" LANGUAGE="javascript1.2" SRC="http://www.newtonma.gov/inc/js/jquery/1.4.2/jquery.tools.min.js"></SCRIPT>
<script TYPE="text/javascript" LANGUAGE="javascript1.2" SRC="http://www.newtonma.gov/inc/js/jquery/1.4.2/jquery.nospam.js"></SCRIPT>
<script type='text/javascript' LANGUAGE="javascript1.2" src='www.newtonma.gov/inc/js/jquery/plugins/jquery.scrollTo-1.4.2-min.js'></script>-->
<!--<link rel="icon" href="http://www.newtonma.gov/favicon.ico" type="image/x-icon" />-->
<!--<link rel="shortcut icon" href="http://www.newtonma.gov/favicon.ico" type="image/x-icon" />-->
<!--<script LANGUAGE="JavaScript" TYPE="text/javascript">var javascript_version = 1.0;</script>
<script LANGUAGE="JavaScript1.1" TYPE="text/javascript">javascript_version = 1.1;</script>
<script LANGUAGE="javascript1.2" TYPE="text/javascript" SRC="http://www.newtonma.gov/civica/inc/popupwin.js"></script>
<script LANGUAGE="JavaScript1.2" SRC="http://www.newtonma.gov/inc/dynamic.js?t=-3155806243" TYPE="text/javascript"></script>
<script LANGUAGE="JavaScript1.2" SRC="http://www.newtonma.gov/inc/dynamicdata.js?t=-3155806243" TYPE="text/javascript"></script>-->

<!--<link rel="stylesheet" type="text/css" href="http://www.newtonma.gov/inc/common.css?t=-3155806243">-->
<!--<link rel="stylesheet" type="text/css" href="http://www.newtonma.gov/inc/hi.css?t=-3155806243">-->
<!--<link rel="stylesheet" type="text/css" href="http://www.newtonma.gov/custom/0000/style/htmleditor/default.css?t=-3155806243">-->
<!--<link rel="stylesheet" type="text/css" href="http://www.newtonma.gov/inc/00/spooky.css?t=-3155806243">-->
<!--<link rel="stylesheet" type="text/css" href="http://www.newtonma.gov/navdata/menu00.css?t=-3155806243">-->
<!--link rel="stylesheet" type="text/css" href="http://www.newtonma.gov/inc/template.css?t=-3155806243"-->
<!--link rel="stylesheet" type="text/css" href="http://www.newtonma.gov/inc/layout00hi.css?t=-3155806243"-->
<!--<link rel="stylesheet" type="text/css" href="http://www.newtonma.gov/inc/00/layouthi.css?t=-3155806243">-->
<!--<link rel="stylesheet" type="text/css" href="http://www.newtonma.gov/inc/00/common.css?t=-3155806243">-->
<!--<link rel="stylesheet" type="text/css" href="http://www.newtonma.gov/inc/00/combomenu.css?t=-3155806243">-->

<title>Report Coyote Sighting</title>
 <!-------  DATEPICKER  ------->
  
  <link href="css/redmond/jquery-ui-1.8.9.custom.css" rel="stylesheet" />
  <script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>
  <script src="js/jquery-ui-1.8.9.custom.min.js" type="text/javascript"></script>

  <script type="text/javascript">
  $(function() {
	// Initialize a calendar widget for the #date form element
	$( "#date" ).datepicker(
		{showAnim: 'slide'}
	);
  });
  </script>
  
  <!------- END DATEPICKER ------->
  
  <!-------  VALIDATOR  ------->
  <script src="js/gen_validatorv4.js" type="text/javascript"></script>
  <!-------  END VALIDATOR  ------->
  
  <script src="http://www.google.com/jsapi"></script>
	<script type="text/javascript" src="includes/json.php"></script>
    <script type="text/javascript" src="js/markerclusterer.js"></script>

	<script type="text/javascript" src="includes/date.js"></script>
	<script type="text/javascript" src="http://code.google.com/p/datejs/source/browse/trunk/src/time.js"></script>
	<script type="text/javascript" src="includes/coyote.js"></script>

    <script type="text/javascript">
      google.load('maps', '3', {
      	other_params: 'sensor=false'
      });
	  
      google.setOnLoadCallback(coyote.init);

    </script>
		<script type="text/javascript">
			function getDocumentHeight() {
				if ($.browser.msie) {
					var $temp = $("<div>").css("position", "absolute").css("left", "-10000px").append($("body").html());

					$("body").append($temp);
					var h = $temp.height();
					$temp.remove();
					return h + 50;
				}
				return $(document).height() + 50;
			}
			$(window).load(function() {
				parent.resizeIframe(getDocumentHeight());
			});
		</script>
<!-- ANALYTICS CODE -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28662720-1']);
  _gaq.push(['_setDomainName', 'newtonma.gov']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<link href="includes/coyote.css" type="text/css" rel="stylesheet" />

</head>

<body id="devbody">

<!--<center><table border="0" style="width:100%; height:100%;" cellspacing="0" cellpadding="0"><tr><td class="LeftSideFade"><img src="http://www.newtonma.gov/img/blank.gif" alt="" width="1" height="1" border="0"></td><td style="width:972; vertical-align:top; "><div id="oAllScreen" class="oAllScreen"><table border="0" style="width:100%; " cellspacing="0" cellpadding="0"><tr><td class="headercrumb">-->



<!-- Top Navigation Table -->

<!--<a name="top"></a><div id="header" class="headercrumb"><div id="top" ><a class="lowgraphics" href="JavaScript:subGrphVer('lo')">Low Graphics Version</a><a class="linkbackhome" href="http://www.newtonma.gov/default.asp" title="Homepage"> </a><div id="fontsize"><span id="fontsize0"><a id="size0" href="#">A</a> </span><span id="fontsize1"><a id="size1" class="selected" href="#">A</a> </span><span id="fontsize2"><a id="size2" href="#">A</a> </span></div><div id="top-links"><a href="http://www.newtonma.gov/cals/default.asp">City Calendar</a>&nbsp;<span class="bull">&bull;</span>&nbsp;<a href="http://www.newtonma.gov/sitemap/default.asp">Site Map</a>&nbsp;<span class="bull">&bull;</span>&nbsp;<a href="http://www.newtonma.gov/faqs/default.asp">FAQs</a></div><div id="top-translate"><span id="trans">Translate:</span><div id="google_translate_element"></div></div>

      

   </div><div id="nbuts" ><div id="but" ><div id="divPopMenu2" style="display:none; position:absolute; z-index: 5001;"></div><a class="abs-link" style="left:0" href="http://www.newtonma.gov/about/default.asp" target="_self"><img src="http://www.newtonma.gov/img/00/navbuts/but1_off.png" alt="About Newton" width="210" height="40" border="0" id="imgPopMenu2"></a><div id="divPopMenu3" style="display:none; position:absolute; z-index: 5001;"></div><a class="abs-link" style="left:210" href="http://www.newtonma.gov/gov/default.asp" target="_self"><img src="http://www.newtonma.gov/img/00/navbuts/but2_off.png" alt="City Government" width="211" height="40" border="0" id="imgPopMenu3"></a><div id="divPopMenu4" style="display:none; position:absolute; z-index: 5001;"></div><a class="abs-link" style="left:421" href="http://www.newtonma.gov/residents/default.asp" target="_self"><img src="http://www.newtonma.gov/img/00/navbuts/but3_off.png" alt="Residents" width="132" height="40" border="0" id="imgPopMenu4"></a><div id="divPopMenu5" style="display:none; position:absolute; z-index: 5001;"></div><a class="abs-link" style="left:553" href="http://www.newtonma.gov/businesses/default.asp" target="_self"><img src="http://www.newtonma.gov/img/00/navbuts/but4_off.png" alt="Businesses" width="136" height="40" border="0" id="imgPopMenu5"></a><div id="divPopMenu6" style="display:none; position:absolute; z-index: 5001;"></div><a class="abs-link" style="left:689" href="http://www3.newton.k12.ma.us/" target="_self"><img src="http://www.newtonma.gov/img/00/navbuts/but5_off.png" alt="Schools" width="118" height="40" border="0" id="imgPopMenu6"></a><div id="divPopMenu7" style="display:none; position:absolute; z-index: 5001;"></div><a class="abs-link" style="left:807" href="http://www.newtonma.gov/howdoi/default.asp" target="_self"><img src="http://www.newtonma.gov/img/00/navbuts/but6_off.png" alt="How Do I?" width="165" height="40" border="0" id="imgPopMenu7"></a></div></div></div></td></tr><tr><td style="width:972; vertical-align:top; border: solid 0px #ffffff; height:auto; background:url(http://www.newtonma.gov/img/00/layout/bodyrep.png) repeat-y;"><table id="content" class="content"  border="0" style="width:972; background:url(http://www.newtonma.gov/img/00/layout/curve_top_2.png) no-repeat 12px 0;" cellspacing="0" cellpadding="0"><td id="col0l"> </td><td id="col0" style="background:url(http://www.newtonma.gov/img/00/layout/curve_bot.png) no-repeat left bottom;"> <img src="http://www.newtonma.gov/img/00/layout/pgtop_full.png" width="940px" height="9px" style="margin-left:4px;" /><div id="content-wrap-full"><table class="tmplFullTable" border="0" cellspacing="0" cellpadding="0" style="width:100%; background-color:Inherit;"><tr><td style="width:100%; vertical-align:top;">-->
      <style>
	  	#wide-box {
			margin:0;
			font-size:13px;
		}
	  </style>
	
		<div id="wide-box">
		
			<h2>Report a Coyote Sighting</h2>
		
			<div id='coyote_errorloc' class='error_strings'></div>
						
			<form id="coyote" action="includes/report-coyote-process.php" method="post" autocomplete="on">
				<div class="form-div">
					<h3>Contact information</h3>
					
					<h4>Name <span class="req">&nbsp;*</span></h4>
					<input type="text" name="name" />
					
					<h4>Phone Number</h4>
					<input type="text" name="phoneNumber" />
					
					<h4>Email Address <span class="req">&nbsp;*</span></h4>
					<input type="text" name="email" />
					
					<h3 style="margin-top:10px;">Location of the Coyote Sighting</h3>
					
					<h4>Street Number</h4>
					<input type="text" name="streetNum" size="2" />
					
					<h4>Street Name <span class="req">&nbsp;*</span></h4>
					<?php include 'includes/address-list.php'; ?>
					
				</div>
				
				<div class="form-div2">
					
					<h3>Date and Time of Sighting</h3>
					
					<h4>Date <span class="req">&nbsp;*</span></h4>
					<input type="text" id="date" name="date" />
					
					<h4>Time <span class="req">&nbsp;*</span></h4>
					<?php include 'includes/time-include.php'; ?>
					
					<p>&nbsp;</p>
					
					<h3 style="margin-top:20px;">Description and/or Comments</h3>
					<textarea name="description"></textarea><br />
					
					<p>(NOTE: <span class="req">*</span> indicates required fields)</p>
					<input type="submit" value="Submit" />
				</div>
				<div class"clear"></div>
			</form>
				
			<!-----  VALIDATOR SCRIPT  ----->
			<script type="text/javascript">
				// Create a new form validator and set error settings
				var frmValidator = new Validator("coyote");
				frmValidator.EnableOnPageErrorDisplaySingleBox();
				frmValidator.EnableMsgsTogether();
				
				// Add rules to validation
				frmValidator.addValidation("name","req","Please enter your name");
				frmValidator.addValidation("email","req","Please enter your email address");
				frmValidator.addValidation("email","email","Please enter a valid email address");
				frmValidator.addValidation("date","req","Please enter the date");
			</script>
			<!-----  END VALIDATOR SCRIPT  ----->
			
			<div style="clear:both;">
				<br>
				<h2>Sightings (last 6 months)</h2>
				<h4>Most recent on top</h4>
				
				<div id="panel-markers" style="border:none;">
					<div id="markerlist" style="height:450px;"></div>
				</div>
				
				<div id="map-container" style="padding-top:10px;">
					<div id="map"></div>
				</div>
	
				<div id="notes">
					<h2>Notes</h2>
					
					<p>The numbers in the middle of a marker represent the number of sightings within a given area. These numbers and the color of the markers will adjust depending on the zoom level that you are currently set at. Look at the legend to the right for the marker color and the number of sightings associated with that color. The marker colors do NOT determine a level of threat, merely the number of sightings.</p>
					
					<p>When you click on a marker with a number the map will zoom in allowing you to see individual sightings (points). Clicking on a point brings up a window with the address and the date and time of the sighting. When clicking on a numbered marker you may be zoomed in to what looks like a single point. This means that there has been more than one sighting at the given location. When this point is clicked the info window will display only the most recent sighting.</p>
					
					<p>The list of sightings on the left is sorted chronologically with most recent at the top. You can click any of these entries and an info window will pop up on the map pointing to the location.</p>
					<p><a href="http://www.mass.gov/eea/agencies/dfg/dfw/fish-wildlife-plants/mammals/eastern-coyote-in-massachusetts.html" target="_blank">Information on the Eastern Coyote</a>  | <a href="http://www.mass.gov/eea/docs/dfg/dfw/wildlife/wildlife-living/living-with-coyotes.pdf" target="_blank">Living with Coyotes</a></p>
				</div>
	
				<div id="legend" style="float:left; margin-top:10px;">
					<h3><strong>Legend</strong></h3>
	
					<table>
						<tr>
							<td><img src="includes/images/small-red.png" style="height:20px; width:12px" /></td>
							<td>1</td>
						</tr>
						<tr>
							<td><img src="includes/images/m2.png" /></td>
							<td>2-3</td>
						</tr>
						<tr>
							<td><img src="includes/images/m3.png" /></td>
							<td>4-7</td>
						</tr>
						<tr>
							<td><img src="includes/images/m4.png" /></td>
							<td>8-15</td>
						</tr>
						<tr>
							<td><img src="includes/images/m5.png" /></td>
							<td>16+</td>
						</tr>
					</table>
				</div>
			</div>
			
		</div>
		
	   </td></tr></table>

<!--<script language="JavaScript" type="text/javascript" src="http://www.newtonma.gov/inc/NavMenu.js"></script>-->

</div>
<!--<img src="http://www.newtonma.gov/img/00/layout/pgbot_full.png" width="940px" height="9px" style="margin-left:4px;" /></td><td id="col0r"> </td></tr></table></td></tr><tr><td id="footer" class="footer" ><table class="footer" border="0" cellspacing="0" cellpadding="0"><tr><td><div id="footer-top"><a id="civica-ico" href="http://www.civicasoft.com" target="_blank" title="Civica Software"><img src="http://www.newtonma.gov/img/00/layout/civica-icon.png" alt="Powered by Civica" width="82" height="34" border="0"></a><div id="newton-contact"><div id="PageContacts"><table border="0" cellspacing="0" cellpadding="0">-->
	<!--<tr><td>Newton City Hall, 1000 Commonwealth Ave,

            Newton Centre, MA 02459<br><div id="row2"><b>Tel: </b>617-796-1000 <b>TDD/TTY: </b>617-796-1089 |

              <STRONG>Mon. - Fri.</STRONG> 8:30 am - 5:00 pm <STRONG>Tue</STRONG>. 8:30 am - 8:00 pm<br></div></td></tr>
            </table></div></div></div><div id="footer-nav"><div id="nav"><a class="footer" href="http://www.newtonma.gov/about/default.asp" target="_self">About Newton</a><span class="bull">&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;</span><a class="footer" href="http://www.newtonma.gov/gov/default.asp" target="_self">City Government</a><span class="bull">&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;</span><a class="footer" href="http://www.newtonma.gov/residents/default.asp" target="_self">Residents</a><span class="bull">&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;</span><a class="footer" href="http://www.newtonma.gov/businesses/default.asp" target="_self">Businesses</a><span class="bull">&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;</span><a class="footer" href="http://www3.newton.k12.ma.us/" target="_self">Schools</a><span class="bull">&nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;</span><a class="footer" href="http://www.newtonma.gov/howdoi/default.asp" target="_self">How Do I?</a></div></div></td></tr></table></td></tr></table></div></td><td class="RightSideFade"><img src="http://www.newtonma.gov/img/blank.gif" alt="" width="1" height="1" border="0"><form style="display: inline; margin: 0;" name="frmPrintable" id="frmPrintable" action="http://www.newtonma.gov/gov/featured/full_width.asp" method="post" target="_blank"><input type="hidden" name="prnt" value="y"></form><form style="display: inline; margin: 0;" name="frmGrpxVer" id="frmGrpxVer" action="http://www.newtonma.gov/gov/featured/full_width.asp" method="post" ><input type="hidden" name="grpxver" value="lo"></form><form style="display: inline; margin: 0;" name="wfpost" method=post target="_new" action=""></form>-->
<!--<script>

jQuery(document).ready(function()

{

	TextSizeToggle();

	$('a.email_replace').nospam({replaceText: false, filterLevel: 'normal'});

});

</script>-->

</td></tr></table></center><div id="cvOvrlyShim" style="display:none;position:absolute;"></div><div id="cvOvrlyWrapper" style="display:none;position:absolute;"><div id="cvOvrlyContainer"><table id="cvOvrlyTable" cellpadding="0" cellspacing ="0" border="0"><tr><td class="tl"></td><td class="t"></td><td class="tr"><a href="JavaScript:hideoverlay();" ><img src="http://www.newtonma.gov/img/blank.gif" alt="" width="65" height="61" border="0"/></a></td></tr><tr><td class="l"></td><td class="c"><iframe id="cvOvrlyIFrame" width="500" height="400" frameborder="0" src="" scrolling="no" ></iframe></td><td class="r"></td></tr><tr><td class="bl"></td><td class="b"></td><td class="br"></td></tr></table></div></div>

</body>

</html>
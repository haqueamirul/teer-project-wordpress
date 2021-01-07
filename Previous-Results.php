<?php 
/*
Template Name: Previous Result
*/
 ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN"
"http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html>
	
<!-- Mirrored from teertoday.com/Previous-Results.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 10:59:35 GMT -->
<head>
		<title>Teer | Shillong | Teer Results Online | Dream Numbers: TeerCounter.com</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="description" content="Check out dream numbers in Shillong teer result at TeerCounter.com">
		<meta name="keyword" content="teer,shillong,Teer result,lottery result,dream numbers, dream meaning">	
		
		<link href="<?php echo get_template_directory_uri(); ?>/css/style1.css" media="all" rel="stylesheet" type="text/css" />
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-54245329-2', 'auto');
		  ga('send', 'pageview');

		</script>
		<!-- Start Alexa Certify Javascript -->
		<script type="text/javascript">
		_atrk_opts = { atrk_acct:"hYtMk1a4eFf2cv", domain:"teercounter.com",dynamic: true};
		(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "../d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
		</script>
		<noscript><img src="../d5nxst8fruw4z.cloudfront.net/atrk6355.gif?account=hYtMk1a4eFf2cv" style="display:none" height="1" width="1" alt="" /></noscript>
		<!-- End Alexa Certify Javascript -->  	
        <style>
            table, th, td 
            {
                border: 1px solid black;
            }
        
        </style>
	</head>
	<body>
		<div id="home" class="header">
        <div class="top-header" style="background-color:#FF5733;" align="center">
            <a href="https://play.google.com/store/apps/details?id=in.stetig.teercounterapp&amp;hl=en" target="_blank">
                <h3>DOWNLOAD ANDROID APP</h3>
            </a>
            
        </div>
    </div>
        <!--- start-header-->
			<div id="home" class="header">
					<div class="top-header">
					<a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/teer.jpg" title ="Teer" Alt= "Teer"></a>
				</div>
			</div>

<div id="work" class="work" style="background-color:white;">
						<div class="container" style="background-color:white;">
						<div class="head-one text-center team-head">
						<h2>Previous Results</h2>
                            <br/>


<table dir="ltr" border="1" cellspacing="0" cellpadding="0" style="width:100%;"><colgroup><col width="100" /><col width="100" /><col width="100" /><col width="100" /></colgroup>
<tbody>
<tr>
<td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Date&quot;}">Date</td>
<td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;F/R&quot;}">F/R</td>
<td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;S/R&quot;}">S/R</td>
<td data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;City&quot;}">City</td>
</tr>

 <?php 
    $winnumber = new WP_Query(array(
        'post_type'      => 'teerposts',
        'posts_per_page' => -1
    ));
    while ( $winnumber->have_posts() ) : $winnumber->the_post(); 

    $recent_city = get_post_meta( get_the_ID(), '_teerpro_recent_city', true);
    $first_result = get_post_meta( get_the_ID(), '_teerpro_first_result', true);
    $secend_result = get_post_meta( get_the_ID(), '_teerpro_secend_result', true);
 ?>
<tr>
    <td align="center"><?php the_date('d-m-y'); ?></td>
    <td align="center"><?php echo $first_result; ?></td>
    <td align="center"><?php echo $secend_result; ?></td>
    <td align="center"><?php echo $recent_city; ?></td>
</tr>

<?php endwhile; ?>




</tbody>
</table>

</div>
<div class="clear"></div>
</div>
</div>
</div>	
<div id="work1" class="container" style="background-color:white;">
					<!---works-->
					<div class="works">
							<div id="whatever">
									<div class="col-md-50 work-grid">
								    <div class="item1">
								        <a href="index2.html"><img src="<?php echo get_template_directory_uri(); ?>/images/teer-result.jpg" title="Home"  alt="Online Teer Result"/></a>								        
								    </div>  
							    </div> 
								<div class="col-md-50 work-grid">
								    <div class="item1">
								        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/teercounterSocial.jpg" title="teercounterSocial" alt="TeerCounter Social Network" /></a>						        
								    </div>  
							    </div> 
								<div class="col-md-50 work-grid">
								    <div class="item1">
								        <a href="dream-numbers.html"><img src="<?php echo get_template_directory_uri(); ?>/images/teer-dream-numbers.jpg" title="Dream Number" alt="Teer Dream Numbers" /></a>								        
								    </div>  
							    </div> 
								<div class="col-md-50 work-grid">
								    <div class="item1">
								        <a href="common-numbers2.html"><img src="<?php echo get_template_directory_uri(); ?>/images/teer-common-numbers.jpg" title="Common Numbers"  alt="Teer Common Numbers" /></a>							        
								    </div>  
							    </div> 
								<div class="col-md-50 work-grid">
								    <div class="item1">
								        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/targetgame.jpg" title="Groups" alt="Prediction Analysis"/></a>								        
								    </div>  
							    </div> 
								<div class="col-md-50 work-grid">
								    <div class="item1">
								        <a href="Previous-Results.html"><img src="<?php echo get_template_directory_uri(); ?>/images/teer-previous-numbers.jpg" title="Previous Result" alt="Teer Previous Results"  /></a>								        
								    </div>  
							    </div> 	
						</div>
			</div>
			
			  <div id="work" class="work" style="background-color:#D3D3D3;">													
				<div align="center" class="container" style="background-color:#D3D3D3;">
					<a href="https://play.google.com/store/apps/details?id=in.stetig.teercounterapp&amp;hl=en" target="_blank"><u>Download TeerCounter Android App - OTP NOT REQUIRED. Available in All Countries.</u></a>	
				</div>
		</div>	
		<div class='footer-left1'>
<a href='http://www.teercounter.com/termsofuse.php'>Terms</a>
</div>
<div class='footer-center1'>
<a href='http://www.teercounter.com/contact-us.php'>Contact Us</a>
</div>
<div class='footer-right1'>
<a href='http://www.teercounter.com/privacypolicy.php'> Privacy Policy</a>
</div>

</body>

<!-- Mirrored from teertoday.com/Previous-Results.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 11:00:05 GMT -->
</html>

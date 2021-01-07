<?php 
	get_header();
 ?>
     

    <!---work-->
    <div id="work" class="work" style="background-color:white;">
        <!--<div id="team" class="team" style="background-color:white;">-->
        </div>
            <div class="container" style="background-color:white;">
                <div class="head-one text-center team-head">

                    <?php 
	            		$winnumber = new WP_Query(array(
	            			'post_type'      => 'teerposts',
	            			'posts_per_page' => '1'
	            		));
	            		while ( $winnumber->have_posts() ) : $winnumber->the_post(); 

		            	$recent_city = get_post_meta( get_the_ID(), '_teerpro_recent_city', true);
		            	$first_result = get_post_meta( get_the_ID(), '_teerpro_first_result', true);
		            	$secend_result = get_post_meta( get_the_ID(), '_teerpro_secend_result', true);
                     ?>
                    <!--Step 1 : Change the Date -->
                    <h2><?php the_date('d - m - y'); ?></h2>

                 	 <table class="table">
                        <tr>
                            <th colspan="2"><?php echo $recent_city; ?></th>
                        </tr>
                        <tr style="background-color:#3FD5BA">
                            <td align="center">F/R(4:00PM)</td>
                            <td align="center">S/R(5:00PM)</td>
                        </tr>
                        <tr style="background-color:cream; border: 1px solid black;">
                            <!---Step 2 SHILLONG RESULT STARTS HERE-->
                            <td align="center">
                            <?php echo $first_result; ?>
                            </td>
                            <td align="center">
                            <?php echo $secend_result; ?>
                            </td><!--Shillong S/R Result-->
                        </tr>
                    </table>

                <?php endwhile; ?>
                </div>
				
				</div>

                <div id="work" class="work" style="background-color:white;">
                    <div class="container" style="background-color:white;">
                        <div class="head-one text-center team-head">
                            <script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
                            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5824382477682918" data-ad-slot="9616795697" data-ad-format="auto"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </div>
                </div>
                <div id="work1" class="container" style="background-color:white;">
                    <!---works-->
                    <div class="works">
                        <div class="col-md-45 work-grid">
                            <div class="item1">
                                <a href="http://localhost/teerpro/common-number/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/teer-common-numbers.jpg" title="Common Number" alt="Teer Common Numbers" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-45 work-grid">
                            <div class="item1">
                                <a href="http://localhost/teerpro/online-deals/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/Deals.jpg" title="teercounterSocial" alt="TeerCounter Social Network" />
                                </a>
                                <div class="caption" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-45 work-grid">
                            <div class="item1">
                                <a href="http://localhost/teerpro/dream-numbers/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/teer-dream-numbers.jpg" title="Dream Number" alt="Teer Dream Numbers" />
                                </a>
                                <div class="caption" style="display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- Adsense Code Starts -->
                <script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5824382477682918" data-ad-slot="9616795697" data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <!-- Adsense Code Ends -->
                <div id="work1" class="container" style="background-color:white;">
                    <!---works-->
                    <div class="works">


                        <div class="col-md-45 work-grid">
                            <div class="item1">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/analytics.png" title="Prediction Analysis" alt="Prediction Analysis" />
                                </a>
                                <div class="caption" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-45 work-grid">
                            <div class="item1">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/targetgame.jpg" title="target game" alt="Target Game" />
                                </a>
                                <div class="caption" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-45 work-grid">
                            <div class="item1">
                                <a href="http://localhost/teerpro/previous-result/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/teer-previous-numbers.jpg" title="Previous Result" alt="Teer Previous Results" />
                                </a>
                                <div class="caption" style="display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!-- Adsense Code Starts -->
                <script async src="../pagead2.googlesyndication.com/pagead/js/f.txt"></script>
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5824382477682918" data-ad-slot="9616795697" data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <!-- Adsense Code Ends -->
                <div id="work1" class="container" style="background-color:white;">
                    <!---works-->
                    <div class="works">
                        <div class="col-md-45 work-grid">
                            <div class="item1">
                                <a href="#">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/TeerCalendar.jpg" title="Teer Calendar" alt="Teer Calendar" />
                                </a>
                                <div class="caption" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-45 work-grid">
                            <div class="item1">
                                <a href="http://localhost/teerpro/reputed-counter/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ReputedCounter.jpg" title="ReputedCounter" alt="ReputedCounter" />
                                </a>
                                <div class="caption" style="display: none;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-45 work-grid">
                            <div class="item1">
                                <a href="https://play.google.com/store/apps/details?id=in.stetig.tarset">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/target_logo.jpg" title="TeerTarget" alt="Target App" />
                                </a>
                                <div class="caption" style="display: none;">
                                </div>
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


<!-- Mirrored from teertoday.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 May 2020 10:59:08 GMT -->
</html>
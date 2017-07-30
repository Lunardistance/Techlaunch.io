<footer data-rootpath="<?php echo $rootPath ?>">
    <div class="first">
        <img src="<?php echo $rootPath ?>images/logos/techlaunch_at_fvi_vertical_dark_bg.png" alt="Techlaunch at Florida Vocational Institute logo" class="logo">
        <address>
            8400 NW 36th St #450,<br>
            Doral, FL 33166<br>
            <br>
            Email: info@techlaunch.io<br>
            Phone: (305) 783-3599
        </address>
    </div>
    <div class="second">
        <h3 class="heading">Useful Links</h3>
        <ul>
            <li>
                <a target="_blank" rel="noopener" href="https://www.techlaunch.io/blog">
                    Blog
                </a>
            </li>
            <li>
                <a target="_blank" rel="noopener" href="<?php echo $rootPath ?>student-disclosures/">
                    Student Disclosures
                </a>
            </li>
            <li>
                <a target="_blank" rel="noopener" href="<?php echo $rootPath ?>fvi_catalog.pdf">
                    Catalog
                </a>
            </li>
            <li>
                <a target="_blank" rel="noopener" href="http://www.fvi.edu/calculator/npcalc.htm">
                    Net Price Calculator
                </a>
            </li>
            <li>
                <a target="_blank" rel="noopener" href="<?php echo $rootPath ?>privacy-policy/">
                    Privacy Policy
                </a>
            </li>
            <li>
                <a target="_blank" rel="noopener" href="<?php echo $rootPath ?>sitemap.html">
                    Sitemap
                </a>
            </li>
        </ul>
        <div class="social-media">
            <a target="_blank" rel="noopener" href="https://www.facebook.com/FVITech/?ref=br_rs">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a target="_blank" rel="noopener" href="https://twitter.com/techlaunchmiami">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a target="_blank" rel="noopener" href="https://www.linkedin.com/company-beta/3825643/">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a target="_blank" rel="noopener" href="https://www.instagram.com/techlaunchmiami/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a target="_blank" rel="noopener" href="https://www.youtube.com/channel/UCGJcXuVSkHrNSzXsM_lBZ4w">
                <i class="fa fa-youtube" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <div class="third">
        <h3 class="heading">Latest Tweets</h3>
        <div class="tweets-list">
            <div class="tweet">
                <a class="link" target="_blank" rel="noopener" href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <div class="text-container">
                    <p class="text">FVI is hiring instructors! Do you know #javascript and live in #miami? Join the team! #miamitech</p>
                    <p class="date">Jan 22 2017</p>
                </div>
            </div>
            <div class="tweet">
                <a class="link" target="_blank" rel="noopener" href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <div class="text-container">
                    <p class="text">RT @ForbesTech: How Companies Like Facebook Use Benefits To Build Millennial Traps: http://forbes.com/16has8</p>
                    <p class="date">Feb 15 2017</p>
                </div>
            </div>
            <div class="tweet">
                <a class="link" target="_blank" rel="noopener" href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <div class="text-container">
                    <p class="text">10 Web Design &amp; UX Trends for 2017 That Can Boost Conversions</p>
                    <p class="date">May 04 2017</p>
                </div>
            </div>
        </div>
    </div>
    
    <style>
	.blog_title > a {

	 
		color: #aaa;
    font-size: 14px;
    font-style: normal;
	}
	.blog_title > p
	{
	color: #777;
    font-size: 12px;
	}
	</style>
    <div class="fourth">
        <h3 class="heading">Latest Posts</h3>
        <div class="blog-list">
        <?php
		error_reporting(1);
		$curl = curl_init();
curl_setopt_array($curl, Array(
	CURLOPT_URL            => 'https://techlaunch.io/blog/feed/',
	CURLOPT_USERAGENT      => 'spider',
	CURLOPT_TIMEOUT        => 120,
	CURLOPT_CONNECTTIMEOUT => 30,
	CURLOPT_RETURNTRANSFER => TRUE,
	CURLOPT_ENCODING       => 'UTF-8'
));
$data = curl_exec($curl);
curl_close($curl);
$xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA);
		?>
            
            
            <?php foreach ($xml->channel->item as $item) {
 

?>
            
            <div class="blog_title">
                <a   target="_blank"  href="<?=$item->link?>">
                    <?=$item->title?>
                </a>
                 
                    
                    <p class="blog-date"><?=$item->pubDate?></p>
               
            </div>
            
            <?php
			}
			?>
            
            
        </div>
        <br>
        <!--
        <h3 class="heading">Newsletter</h3>
        <p>Get updates from Techlaunch</p>
        <form action="" id="newsletter-form">
            <div class="form-input">
                <input type="email" placeholder="Your email">
                <button type="submit"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></button>
            </div>
        </form> -->
    </div>
</footer>

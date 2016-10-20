<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

    <div id="about" class="section section-about">
      <div class="section-contents">
        <?php echo get_field("intro"); ?>
      </div>
    </div>
    
    <div id="attorneys" class="section section-attorneys">
      <div class="section-contents">
        <div class="section-attorneys-title section-attorneys-title-hed">Attorneys</div>
        <?php 

            $image = get_field("attorney_image");
            
            if( !empty($image) ): ?>
                
                <div class="attorney-image">
            	    <img src="<?php echo $image["url"]; ?>" alt="<?php echo $image["alt"]; ?>" />
                </div>
                
        <?php endif; ?>
        <!--<img class="section-attorneys-img" src="images/ff.jpg" alt="">-->
        
        <div class="section-attorneys-title section-attorneys-title-dek"><?php echo get_field("attorney_name"); ?></div>
        
                        
        <?php echo get_field("attorney_bio"); ?>
                        
        
        <!--<p class="section-attorneys-para">Attorney Feliks Finkel is experienced in corporate and transactional law, governance, and securities regulation. He counsels clients on issues of start-up law, entity formation, financing and commercial transactions, securities offerings, mergers and acquisitions, contracts, and employment-related agreements. He advises both entrepreneurs and established businesses on the issues of US entity formation, New York and Delaware corporate law, internal governance, and private placement of debt and equity securities.  Feliks drafts contracts and negotiates deals for clients of the firm.</p>-->
        <!--<p class="section-attorneys-para">Prior to attending law school, Feliks was a Wall Street trader and a macro-economist. He analyzed companies and traded equities and derivatives in brokerages in New York City and hedge funds of Connecticut. Feliks has a real-world understanding of the economy and the people and that drive the growth of global businesses.</p>-->
        <!--<p class="section-attorneys-para">As a trader, Feliks was fascinated by the even-handedness of Delaware judiciary’s market-moving decisions concerning billion dollar corporate takeovers.  To be completely immersed in Delaware’s corporate law community, Feliks attended Delaware’s only law school – Widener University School of Law in Wilmington, Delaware. There, he concentrated his studies on Delaware corporate and alternative entity law, fiduciary obligations, securities regulation, corporate bankruptcy, and contract law. Feliks graduated third in his class – magna cum laude.</p>-->
        <!--<p class="section-attorneys-para">Feliks was selected by the Delaware Supreme Court to serve as a Wolcott Fellow clerk to Justice Henry duPont Ridgely. He assisted the Justice and the Court on appeals involving cutting-edge Delaware corporate law and corporate governance issues.</p>-->
        <!--<p class="section-attorneys-para">Prior to his service on the Court, Feliks interned with Chief Magistrate Judge Mary Pat Thynge of the United States District Court for the District of Delaware. During his final year of law school, Feliks served as the Manuscript Editor for the Delaware Journal of Corporate Law, selecting scholarly articles for publication.</p>-->
        <!--<p class="section-attorneys-para">After graduation, Feliks practiced law with Marks, O’Neill, O’Brien, Doherty and Kelly, P.C., a Delaware and New York law firm, and with Murray Law LLC, located in Georgetown, Delaware.</p>-->
        <!--<p class="section-attorneys-para">Feliks graduated from Hunter College, City University of New York, with a Bachelors of Arts in Economics.</p>-->
      </div>
    </div>
    
    <?php if(get_field("areas_of_practice")):?>
        <div id="practice" class="section section-practice">
          <div class="section-contents">
            <div class="section-practice-group">
                <?php echo get_field("areas_of_practice"); ?>
            </div>
          </div>
        </div>
    <?php endif ?>
   
    <div id="contact" class="section section-contact">
        <div class="section-contents">
            <div class="section-contact-hed">Contact</div>
            <?php echo do_shortcode("[wpforms id='120']"); ?>
        </div>
    </div>
    

<?php get_sidebar(); ?>
<?php get_footer(); ?>

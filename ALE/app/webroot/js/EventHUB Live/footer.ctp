
<div class="center-block">
    <!--Footer Links Starts-->
    <div class="footer_links">
        <h3>information</h3>
	<?php foreach ($cmsPages as $cmsPage) { ?>
		<p>
			<a href="<?php echo BASE_URL; ?>/CmsPages/cmsPage/<?php echo @$cmsPage['CmsPage']['title'] ?>"><?php echo @$cmsPage['CmsPage']['title'] ?></a>
		</p>
	<?php }?>
    </div>
    <!--Footer Links Ends-->
    <!--Footer Links Starts-->
    <div class="footer_links">
        <h3>contact us</h3>
        <p>ALIST<br/>PO Box 966 <br/> Fairfax, CA 94978</p>
        <p><a href="mailto:support@alisthub.com">support@alisthub.com</a></p>
    </div>
    <!--Footer Links Ends-->
    <!--Footer Links Starts-->
    <div class="footer_links compact">
        <h3>newsletter</h3>
        <p>Sign up for our newsletter and be the first to know about awesome stuff that we're doing!</p>
        <span id = "newsletter_message"></span>
        <div class="news_email">
            <input placeholder="Enter Your Email" type="email" id = "newsletter_email" required = "required"/>
            <span style = "display:none; float: none !important;" class="loader" id="load_newsletter"><?php echo $this->html->image('/img/admin/loader.gif'); ?></span>
        </div>
        <input type="submit" value="Subscribe" class="mhrn_button" onclick="javascript:newsletter();"/>
        
    </div>
    <!--Footer Links Ends-->
    <!--Social Likes Starts-->
    <div class="social_links">
	<?php echo $this->Html->image("front/footer_logo.png");?>
        
        <p><div data-colorscheme ="dark" class="fb-like" data-href="https://www.facebook.com/AListCalendar" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"width="225px"></div></p>
    </div>
    <!--Social Likes Ends-->
    <div class="clear"></div>
    <p class="footer_nav"><?php echo $this->Html->link('Site Map', '/CmsPages/cmsPage/Site Map', array('class' => '')); ?>|<?php echo $this->Html->link('FAQ', '/CmsPages/cmsPage/FAQ', array('class' => '')); ?>|<?php echo $this->Html->link('Work for Us', '/CmsPages/cmsPage/Work For Us', array('class' => '')); ?>|<?php echo $this->Html->link('Contact Us',array("controller"=>"CmsPages","action"=>"contactUs"), array('class' => '')); ?></p>
    <div class="payment">
        <label>PAYMENT ACCEPTED</label>

<?php echo $this->Html->image("front/visa.png");?>
<?php echo $this->Html->image("front/mastercard.png");?>
<?php echo $this->Html->image("front/paypal.png");?>
        <!--<a href="#"><img src="../../img/front/visa.png" alt=""/></a>
        <a href="#"><img src="../../img/front/mastercard.png" alt=""/></a>
        <a href="#"><img src="../../img/front/paypal.png" alt=""/></a>-->
    </div>
</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=254573598080796&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

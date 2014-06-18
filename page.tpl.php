

<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]--> 

<!--

     mobile menu start

    //--> 
<i class="glyphicon glyphicon-align-justify" id="ntv-mobile-menu-btn"></i>
<div class="ntv-mobile-menu" id="ntv-mobile-menu">
  <h3>Main Menu</h3>
  <nav>
    <?php print render($page['responsivemenu']); ?>
    <!--
	Mobile Menu end
	//--> 
  </nav>
  
  <!--
     mobile menu end
   //--> 
</div>
<!--
    search on mobile
//--> 
<i class="glyphicon glyphicon-search" id="ntv-mobile-cart-btn"></i>
<div class="ntv-mobile-menu" id="ntv-mobile-cart">
  <h3>SEARCH NTV</h3>
  <div class="ntv-mobile-cart-list">
    <?php print render($page['search']); ?>
  </div>
  <!--
    search on mobile end
    //--> 
</div>
<!--
    header start
//-->
<header class="ntv-header ntv-header-1"> 
  <!--
      Top Empty bar 
  //-->
  <div style="padding:15px 0px; background: #f1f1f2;"></div>
  <!--

      Top bar start

      //-->
  <div class="ntv-top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12"> 
          <!--Tikcer information start//-->
          <div class="ticker">
            <?php print render($page['ticker']); ?>
          </div>
          <!--Ticker information end//--> 
          <!--Search Drop Down//-->
          <div class="shopping-cart"> <span><i class="fa fa-search"></i></span>
            <div class="cart">
              <p class="title">Search NTV</p>
              <div class="cart-entry" id="topbarcart">
                <?php print render($page['search']); ?>
              </div>
            </div>
            <!--
              Search end
              //--> 
          </div>
          <!--Social Buttons start//-->
          <ul class="social-btns">
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
            <li><a href=""><i class="fa fa-rss"></i></a></li>
          <!--Social Buttons end//-->
          </ul>
        </div>
      </div>
    </div>
    <!--

      Top bar end

      //--> 
  </div>
  <!--Logo & Menu start//-->
  <div class="ntv-header-bg" id="ntv-header-menu">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ntv-relative"> 
            <!--Site Logo start//-->
            <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="logo"> <div class="ntv-logo"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></div> </a>
            <?php endif; ?> <!--Site Logo end//--> 
             
            <!--Desktop Menu start//-->
            <nav>
              <?php print render($page['mainmenu']); ?>
            <!--Desktop Menu end//--> 
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!--Logo & Menu end//--> 
  </div>
  <!--header end//--> 
  <!--header end//--> 
</header>
<!--
     site content start
    //-->
<div class="ntv-content"> 
  <!--Top Advert Spot//-->
  <?php if ($page['topadposition']): ?>
  <section class="ntv-section ntv-top-adspot ntv-section-align-center">
    <div class="container container-30 container-white"><?php print render($page['topadposition']); ?></div>
    <!--Top Advert Spot End//--> 
  </section>
  <?php endif; ?>
  
  <!--Breadcrum Trail Section//-->
  <?php if ($breadcrumb):?>
  <section class="ntv-desktop-breadcrumbs">
  	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            	<div class="ntv-desktop-breadcrumbs-inner">
                	<?php print $breadcrumb; ?>
                </div>
            </div>
        </div>
    </div>
  </section>
  <?php endif; ?>
  <!--Breadcrum Trail Section Ends//-->
  
  <!--Mobile breadscrubs end//-->
  <section class="envor-mobile-breadscrubs">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
             <?php print $breadcrumb; ?>
            </div>
          </div>
        </div>
  <!--Mobile breadscrubs end//-->
  </section>
  
  <!--Title Section//-->
  <?php if ($title): ?>
  <section class="ntv-page-title-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <?php print render($title_prefix); ?>
          	  <h1><?php print $title; ?></h1>
        	  <?php print render($title_suffix); ?>
            </div>
          </div>
        </div>
      <!-- Page Title end//-->
   </section>
   <?php endif; ?>
  <!--Title Section End//-->
  
  <!--Main Actual Content Section//-->
  <div class="container">
    <div class="row"> 
      <!--Main Content start//-->
      <div class="col-lg-9 col-md-9"> 
      	
        <!--Alerts start//-->
        <?php if($messages || $page['help']): ?>
        <div class="envor-msg">
                <header>
                  Alert!
                  <i class="fa fa-times"></i>
                </header>
                <?php print $messages . render($page['help']); ?>
         </div>
         <?php endif; ?>
         <!--Alerts End//-->

       <!--Main Content Actual start//-->
       
			<?php if ($tabs = render($tabs)): ?>
            <div class="tabs"><?php print $tabs; ?></div>
            <?php endif; ?>
            <?php if ($highlighted = render($page['highlighted'])): print $highlighted; endif; ?>
            <?php if ($action_links = render($action_links)): ?>
            <ul class="action-links">
              <?php print $action_links; ?>
            </ul>
            <?php endif; ?>
            <?php if ($content = render($page['content'])): print $content; endif; ?>     
        
       <!--Main Content end//--> 
      </div>
      
      <!-- Sidebar start//-->
      <div class="col-lg-3 col-md-3">
        <?php print render($page['sidebar']); ?>
        <!--Sidebar end//--> 
      </div>
    </div>
  </div>
  
  <!--Shows, Page Bottom Container, Video Tabs//-->
  <?php if ($page['bottomcontent']): ?>
  <section class="ntv-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        	<?php print render($page['bottomcontent']); ?>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <!--Shows, Page Bottom Container, Video Tabs End//-->
  
  <!--Links Buttons-->
  <section class="ntv-section ntv-section-bgwhite ntv-soc-buttons-list">
        <div class="container">
          <div class="row" style="margin-top: 0px;">
            <div class="col-lg-12">
            	<?php print render($page['linkbuttons']); ?>
            </div>
          </div>
        </div>
  <!--Social Buttons List end //-->
  </section>
  
  <!--site content end//--> 
</div>

<!--footer start//-->
<footer class="ntv-footer">
  <div class="container">
    <div class="row"> 
      <!--Footer Links Widget start//-->
      <div class="col-lg-2 col-md-2">
        <div class="ntv-widget ntv-links-widget">
          <?php print render($page['foooter_one']); ?>
        </div>
        <!--Footer Links Widget end//--> 
      </div>
      <!--Footer About Widget start//-->
      <div class="col-lg-4 col-md-4">
        <div class="ntv-widget ntv-links-widget">
          <?php print render($page['footer_two']); ?>
        </div>
        <!--Footer About Widget end//--> 
      </div>
      <!--Footer Tags Widget start//-->
      <div class="col-lg-3 col-md-3">
        <div class="ntv-widget ntv-links-widget">
          <?php print render($page['footer_three']); ?>
        </div>
        <!--Footer Tags Widget end//--> 
      </div>
      <!--Footer Contacts Widget start//-->
      <div class="col-lg-3 col-md-3">
        <div class="ntv-widget ntv-links-widget">
          <?php print render($page['footer_four']); ?>
        </div>
        <!--Footer Contacts Widget end//--> 
      </div>
      <!--Footer Copyright start//-->
      <div class="col-lg-12">
        <div class="ntv-widget ntv-copyright-widget">
          <div class="ntv-widget-inner">
            <?php print render($page['footer']); ?>
          </div>
        </div>
        <!--Footer Copyright end//--> 
      </div>
    </div>
  </div>
  <!--
     footer end
    //--> 
</footer>
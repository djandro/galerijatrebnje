<?php defined( '_JEXEC' ) or die; 

include_once JPATH_THEMES.'/'.$this->template.'/logic.php'; // load logic.php
require_once('snippet/main.php');


?><!doctype html>
<!--[if IEMobile]><html class="iemobile" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="<?php echo $this->language; ?>"> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang="<?php echo $this->language; ?>"> <!--<![endif]-->

<head>
  <jdoc:include type="head" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
  <!--[if lte IE 8]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <?php if ($pie==1) : ?>
      <style> 
        {behavior:url(<?php echo $tpath; ?>/js/PIE.htc);}
      </style>
    <?php endif; ?>
  <![endif]-->
</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('page')).' '.$active->alias.' '.$pageclass; ?>">
  
      <div class="container-logo">
      	
        <div id="logo" class="hidden-xs hidden-sm">
            <jdoc:include type="modules" name="logo" />
        </div> <!-- /logo -->
        
        <div class="krivulja hidden-xs hidden-sm"></div>
        <div class="copic hidden-xs hidden-sm"></div>
        
      	<div class="container">
              <div class="header">
              	
                <?php if($this->countModules('topleft or topright')) : ?> 
                <div class="top row">
                	<?php if($this->countModules('topleft')) : ?> 
                	<div id="topleft" class="col-md-3">
                    	<jdoc:include type="modules" name="topleft" />
                    </div>
                    <?php endif; ?>
                    <?php if($this->countModules('topright')) : ?> 
                	<div id="topright" class="col-md-3 col-md-offset-<?php echo $topoffsetwidth; ?>">
                    	<jdoc:include type="modules" name="topright" />
                    </div>
                    <?php endif; ?>
                </div> <!-- /top -->
                <?php endif; ?>
              
              	<h1 class="heading"><a href="/"><?php echo $app->getCfg('sitename'); ?></a></h1>

                <div id="menu" class="row">
                	<div class="col-md-12">
                    	<jdoc:include type="modules" name="menu" />
                    </div>
                </div> <!-- /menu -->
                
              </div> <!-- /header -->
        		
              <?php if($this->countModules('slider')) : ?>  
              <div id="slider" class="shadow row">
              	<div class="col-md-12">
                	<jdoc:include type="modules" name="slider" />
                </div>
              </div> <!-- /slider -->
			  <?php endif; ?>
        		
              <?php if ($this->countModules( 'maintop1 or maintop2 or maintop3 or maintop4' )) : ?>  
              <div class="maintop row">
				<?php if ($this->countModules('maintop1')) {?>
				<div id="maintop1" class="<?php echo $maintopmodwidth ?>" ><jdoc:include type="modules" name="maintop1" style="galerijastyle" /> </div><?php } ?>
				<?php if ($this->countModules('maintop2')) {?>
				<div id="maintop2" class="<?php echo $maintopmodwidth ?>" ><jdoc:include type="modules" name="maintop2" style="galerijastyle" /> </div><?php } ?>
				<?php if ($this->countModules('maintop3')) {?>
				<div id="maintop3" class="<?php echo $maintopmodwidth ?>" ><jdoc:include type="modules" name="maintop3" style="galerijastyle" /> </div><?php } ?>
				<?php if ($this->countModules('maintop4')) {?>
				<div id="maintop4" class="<?php echo $maintopmodwidth ?>" ><jdoc:include type="modules" name="maintop4" style="galerijastyle" /> </div><?php } ?>              </div> <!-- /maintop -->
              <?php endif; ?>
              
              <!-- content -->
              <div class="content row">
              	
                <?php if($this->countModules('left')) : ?>
              	<div id="left" class="col-md-4">
                	<jdoc:include type="modules" name="left" style="galerijastyle" />
                </div>
                <?php endif; ?>
                
              	<div id="content" class="box col-md-<?php echo $contentwidth; ?>">
                	<?php if($this->countModules('contenttop')) : ?>
                	<jdoc:include type="modules" name="contenttop" style="galerijastyle" />
                    <?php endif; ?>
                    
                    <div id="component">
                        <jdoc:include type="modules" name="debug" />
                        <jdoc:include type="message" />
                        <jdoc:include type="component" />
                    </div>
                    
                    <?php if($this->countModules('contentbottom')) : ?>
                    <jdoc:include type="modules" name="contentbottom" style="galerijastyle" />
                    <?php endif; ?>
                </div>
                
                <?php if($this->countModules('right')) : ?>
              	<div id="right" class="col-md-4">
                	<jdoc:include type="modules" name="right" style="galerijastyle" />
                </div>
                <?php endif; ?>
                
              </div> <!-- /content -->
              
              
              <?php if ($this->countModules( 'mainbottom1 or mainbottom2 or mainbottom3 or mainbottom4' )) : ?>  
              <div class="mainbottom row">
				<?php if ($this->countModules('mainbottom1')) {?>
				<div id="mainbottom1" class="<?php echo $mainbottommodwidth ?>" ><jdoc:include type="modules" name="mainbottom1" style="galerijastyle" /> </div><?php } ?>
				<?php if ($this->countModules('mainbottom2')) {?>
				<div id="mainbottom2" class="<?php echo $mainbottommodwidth ?>" ><jdoc:include type="modules" name="mainbottom2" style="galerijastyle" /> </div><?php } ?>
				<?php if ($this->countModules('mainbottom3')) {?>
				<div id="mainbottom3" class="<?php echo $mainbottommodwidth ?>" ><jdoc:include type="modules" name="mainbottom3" style="galerijastyle" /> </div><?php } ?>
				<?php if ($this->countModules('mainbottom4')) {?>
				<div id="mainbottom4" class="<?php echo $mainbottommodwidth ?>" ><jdoc:include type="modules" name="mainbottom4" style="galerijastyle" /> </div><?php } ?>              </div> <!-- /mainbottom -->
              <?php endif; ?>              
        
              <div class="footer row">
              	<div class="col-md-4 row-fluid">
                	<div class="col-md-5">
                	Delovanje nam omogočajo
                    </div>
                    <div class="col-md-7">
                    <a href="http://www.trebnje.si" class="pecat obcina" target="_blank"><img src="/images/trebnje.png" title="Občina Trebnje" alt="obcina trebnje"/></a> 
                    <a href="http://www.ciktrebnje.si" class="pecat cik" target="_blank"><img src="/images/ciktrebnje.png" title="CIK Trebnje" alt="cik trebnje"/></a>     
                    </div>               
                </div>
              	<div class="col-md-4">
                	<p>&copy; Galerija likovnih samorastnikov Trebnje 2014<br/>
                    	Vse pravice pridržane.</p>
                </div>
              	<div class="col-md-4">
                	Poiščite nas tudi 
                    <a href="https://www.facebook.com/galerija.trebnje?fref=ts" class="icon fb" target="_blank"><img src="/images/facebook.png" alt="fbicon"/></a> 
                    <a href="https://www.youtube.com/channel/UC3Wh496w8-vlNCGeRg7axPA?feature=watch" class="icon youtube" target="_blank"><img src="/images/youtube.png" alt="youtubeicon"/></a>
                </div>
                
              </div> <!-- /footer -->
		</div> <!-- /container -->
    </div> <!-- /container-logo -->
  
</body>

</html>


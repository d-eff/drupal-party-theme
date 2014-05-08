<div id="pageWrap">
    <div id="navCol">
    <?php if ($main_menu  || $secondary_menu): ?>
        <nav>
            <?php print theme('links__system_main_menu', 
            array('links' => $main_menu, 
                'attributes' => array(
                    'id' => 'main-menu', 
                    'class' => array(
                        'links', 'mainNav')))); ?>
        </nav> 
        
    <?php print theme('links__system_secondary_menu', 
        array('links' => $secondary_menu, 
            'attributes' => array(
                'id' => 'secondary-menu', 
                'class' => array('links', 'social')))); ?>
    <?php endif; ?>

    <?php print render($page['nav_banners']); ?>
    </div>

    <div id="contentWrap">
    <?php if ($site_name || $site_slogan): ?>
        <header>
        <?php if($site_name): ?>
        <h1><<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
        <?php endif; ?>
        <?php if($site_slogan): ?>
            <h3><?php print $site_slogan; ?>
        <?php endif; ?>
        </header>
    <?php endif; ?>     

    <?php print render($page['banner']); ?>

        <div class="contentBox clearfix">
            <div class="headshot">
                <img src="http://dummyimage.com/250">
            </div>    
            <div class="content">
                <?php print render($page['content']); ?>
            </p>
            </div>
        </div>
        <?php print render($page['featured']); ?>
    </div>
</div>

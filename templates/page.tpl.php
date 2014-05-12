<div id="pageWrap">
    <div id="navCol">
    <?php print render($page['nav_col']); ?>
    </div>

    <div id="contentWrap">
    <?php if ($site_name || $site_slogan): ?>
         <header class="clearfix">
            <div class="sitename">
        <?php if($site_name): ?>
        <h1>
            <a id="burger" href="#"><img src="/sites/all/themes/party/images/menu-alt-25b.png" alt="menu burger" ></a>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
        <?php endif; ?>
        <?php if($site_slogan): ?>
            <h3><?php print $site_slogan; ?></h3>
        <?php endif; ?>
</div>
        <?php print render($page['header_form']); ?>

        </header>
    <?php endif; ?>     

    <?php print render($page['banner']); ?>

        <div class="contentBox clearfix">
            <div class="content">
                <?php print render($page['content']); ?>
            </div>
        </div>
        <?php print render($page['featured']); ?>
    </div>
</div>

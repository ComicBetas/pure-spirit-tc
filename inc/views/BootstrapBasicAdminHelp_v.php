<div class="wrap">
    <h2>Bootstrap Basic help</h2>

    <h3>Menu</h3>
    <p>To display menu correctly, please create at least 1 menu and set as primary and save.</p>

    <h3>Bootstrap features</h3>
    <p>This theme can use all Bootstrap classes, elements and styles.</p>

    <h3>Responsive image</h3>
    <p>For responsive image please add img-responsive class to img element. Example: <code>&lt;img src=&quot;...&quot; alt=&quot;&quot; class=&quot;img-responsive&quot;&gt;</code></p>

    <h3>Responsive video</h3>
    Cloak video element (video element or embeded video) with <code>&lt;div class=&quot;flexvideo&quot;&gt;...your video...&lt;/div&gt;</code>.

    <h3><?php _e('Bootstrap Basic Change log', 'pure-spirit'); ?></h3>
    <p>
            <?php 
            /* translators: %1$s: Open link, %2$s: Close link */
            echo sprintf(__('You can see what was changed in each version or each commits on our %1$sGithub page%2$s.', 'pure-spirit'), '<a href="https://github.com/Rundiz-WP/pure-spirit" target="bb_commits">', '</a>'); 
            ?> 
            <?php _e('You can also see it on changelog.md file that come with the theme.', 'pure-spirit'); ?> 
    </p>

    <?php do_action('bootstrapbasic_theme_help_content'); ?>

    <p style="margin-top: 20px;"><span style="font-size: 1.2rem;">&#128147;</span> If my theme can help you, your jobs, your projects please <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9HQE4GVV4KTZE" target="donations_link">buy me some foods</a>.</p>
</div>
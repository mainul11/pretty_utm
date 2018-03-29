<?php 
    $get_from = esc_attr( $plugin->plugin_real_name );
?>

<div class="pretty_utm_promote_container">
	<div class="pretty_promote_widget">
        <div class="pretty_promote_title">Like this plugin?</div>
        <p>
            <a target="_blank" href="#">
                <strong>Rate it</strong>
            </a> to show your support!
        </p>
        <p>
            <a target="_blank" href="#">
                <strong>Donate</strong></a> to encourage me updating this plugin!
        </p>
	</div>


    <div class="pretty_promote_widget changelog">
        <div class="pretty_promote_title">Changelog</div>
        <h4>1.0.1 - 2018/3/29</h4>
        <ul>
            <li>Fixed bugs</li>
        </ul>
        <h4>1.0.0 - 2018/03/11</h4>
        <ul>
            <li>Refactor code</li>
            <li>Initial Release</li>
        </ul>
    </div>


	<div class="pretty_promote_widget">
		<div class="pretty_promote_title">Developed by</div>
        <div class="author-card">
            <a target="_blank" href="https://mkaion.com/?utm_source=wp_plugin&utm_medium=authorcard_sidebar&utm_campaign=<?php echo $get_from; ?>">
                <img src="<?php echo get_avatar_url('mainul.aion@gmail.com', array("size"=>160) ); ?>" alt="Mainul Kabir Aion">
            </a>
            <h3>Mainul Kabir</h3>
            <h4>Content Strategist <small>and Researcher</small></h4>
            <p><a target="_blank" href="https://mkaion.com/?utm_source=wp_plugin&utm_medium=logo_sidebar&utm_campaign=<?php echo $get_from; ?>">Homepage</a> | <a target="_blank" href="https://www.linkedin.com/in/aion11/">LinkedIn</a> | <a target="_blank" href="https://wedevs.com/author/mainul.aion/">weDevs</a></p>

        </div>
	</div>


    <div class="pretty_promote_widget technologies">
        <a href="https://github.com/pretty/wp-campaign-url-builder" target="_blank">
            <img src="<?php echo plugin_dir_url( dirname(__FILE__) ); ?>images/github-octcat.png" alt="">
        </a>
        <a href="https://www.gnu.org/licenses/quick-guide-gplv3.en.html" target="_blank">
            <img src="<?php echo plugin_dir_url( dirname(__FILE__) ); ?>images/gplv3.png" alt="">
        </a>
        <a href="https://opensource.org/" target="_blank">
            <img src="<?php echo plugin_dir_url( dirname(__FILE__) ); ?>images/opensource.png" alt="">
        </a>
        <!-- <br><p>Thanks to the original developer <a href="https://github.com/reatlat">Alex Zappa</a></p> -->
    </div>

</div>
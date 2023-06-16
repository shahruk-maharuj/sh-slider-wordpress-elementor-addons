<?php
/**
 * Plugin Name: sh-slider
 * Description: Custom JavaScript Slider for Elementor
 * Version: 1.0.0
 * Author: Shahruk Maharuj
 * Author URI: https://nextwp.net
 */

// Plugin code will be added here
// Enqueue scripts and styles
function sh_slider_enqueue_scripts() {
    wp_enqueue_script( 'sh-slider', plugins_url( '/assets/js/sh-slider.js', __FILE__ ), array( 'jquery' ), '1.0.0', true );
    wp_enqueue_style( 'sh-slider', plugins_url( '/assets/css/sh-slider.css', __FILE__ ), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'sh_slider_enqueue_scripts' );

// Shortcode for sh-slider
function sh_slider_shortcode() {
    ob_start();
    ?>
    <section class="slider">
    <div class="w-20">
        <div class="sh-tab">
          <a href="#" onclick="showBanner(0)" class="active">
            <img
              id="tab0"
              src="https://nextwp.net/wp-content/uploads/2023/06/logo-01.jpg"
              alt=""
            />
          </a>
        </div>
        <div class="sh-tab">
          <a href="#" onclick="showBanner(1)">
            <img
              id="tab1"
              src="https://nextwp.net/wp-content/uploads/2023/06/logo-02.jpg"
              alt=""
            />
          </a>
        </div>
        <div class="sh-tab">
          <a href="#" onclick="showBanner(2)">
            <img
              id="tab2"
              src="https://nextwp.net/wp-content/uploads/2023/06/logo-03.jpg"
              alt=""
            />
          </a>
        </div>
        <div class="sh-tab">
          <a href="#" onclick="showBanner(3)">
            <img
              id="tab3"
              src="https://nextwp.net/wp-content/uploads/2023/06/logo-01.jpg"
              alt=""
            />
          </a>
        </div>
        <div class="sh-tab">
          <a href="#" onclick="showBanner(4)">
            <img
              id="tab4"
              src="https://nextwp.net/wp-content/uploads/2023/06/logo-02.jpg"
              alt=""
            />
          </a>
        </div>
      </div>
      <div class="w-80">
        <a id="bannerLink" href="" target="_blank">
          <img id="bannerImage" src="" alt="Dynamic Banner" />
        </a>
      </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode( 'sh-slider', 'sh_slider_shortcode' );
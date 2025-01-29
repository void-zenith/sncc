<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sncc
 */

?>

<footer id="colophon" class="site-footer sncc-section-t">
    <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/footer-bg.png" />
    <div class="uk-container">
        <div>
            <div class="uk-grid uk-grid-large">
                <div class="uk-width-1-3">
                    <div class="footer-siteinfo">
                        <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/footerimg.png" />
                        <h4>Scarborough Nepali Cricket Club</h4>
                        <ul class="footer-followus-header">
                            <li class="social-item"> <a class="social-icon" href="#" uk-icon="icon: facebook"></a>
                            </li>
                            <li class="social-item"> <a class="social-icon" href="##" uk-icon="icon: instagram"></a>
                            </li>
                            <li class="social-item"> <a class="social-icon" href="#" uk-icon="icon: tiktok"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-1-3">
                    <div class="footer-siteinfo">
                        <h4>Quick Links</h4>
                        <ul class="links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Our Purpose</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="bottom-footer-links">
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Condition</a></li>
                </ul>
            </div>
            <div class="botton-footer-copyright">
                <p>© 2025 | All rights reserved | Designed and Developed by <a href="#">zenithrajbhandari</a></p>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
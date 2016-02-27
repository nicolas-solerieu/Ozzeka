<?php
/**
 * Custom theme options
 */




function myThemeRegisterSettings() {
    // Homepage hero
    register_setting( 'theme_options', 'hero_headline' );
    register_setting( 'theme_options', 'hero_headline-text' );
    // Menu
    register_setting( 'theme_options', 'menu_nav-label' );
    register_setting( 'theme_options', 'menu_concept' );
    register_setting( 'theme_options', 'menu_services' );
    register_setting( 'theme_options', 'menu_contact' );
    register_setting( 'theme_options', 'menu_blog-label' );
    register_setting( 'theme_options', 'menu_blog' );
    register_setting( 'theme_options', 'menu_lang-label' );
    register_setting( 'theme_options', 'menu_cta-label' );
    // Social
    register_setting( 'theme_options', 'social-link_facebook' );
    register_setting( 'theme_options', 'social-link_twitter' );
    register_setting( 'theme_options', 'social-link_behance' );
    register_setting( 'theme_options', 'social-link_instagram' );
    register_setting( 'theme_options', 'social-link_linkedin' );
    // Section services
    register_setting( 'theme_options', 'section1_title' );
    register_setting( 'theme_options', 'section1_text' );
    // Section success
    register_setting( 'theme_options', 'section2_title' );
    register_setting( 'theme_options', 'section2_text' );
    register_setting( 'theme_options', 'section2_cta-label' );
    // Contact
    register_setting( 'theme_options', 'contact-form_title' );
    register_setting( 'theme_options', 'contact-form_text' );
    register_setting( 'theme_options', 'social_title' );
    // Extras
    register_setting( 'theme_options', 'extras_newsletter_title' );
    register_setting( 'theme_options', 'extras_newsletter_text' );
    register_setting( 'theme_options', 'extras_blog_title' );
    register_setting( 'theme_options', 'extras_blog_text' );
    register_setting( 'theme_options', 'extras_blog_cta-label' );
    register_setting( 'theme_options', 'extras_blog_medium-link' );
    // Footer
    register_setting( 'theme_options', 'footer_legal-label' );
}
add_action( 'admin_init', 'myThemeRegisterSettings' );

function myThemeAdminMenu() {
    add_menu_page(
        'Custom content',         // le titre de la page
        'Custom content',         // le nom de la page dans le menu d'admin
        'administrator',        // le rôle d'utilisateur requis pour voir cette page
        'theme-informations',   // un identifiant unique de la page
        'myThemeSettingsPage',   // le nom d'une fonction qui affichera la page
        'dashicons-welcome-add-page'
    );
}
add_action( 'admin_menu', 'myThemeAdminMenu' );

function myThemeSettingsPage() {
    // affichage de la page
    ?>

    <div class="wrap custom-theme-options">
            <h2>Informations</h2>

            <hr>

            <?php if( $_GET['settings-updated'] == true ): ?>
                <div id="message" class="updated notice notice-success is-dismissible below-h2">
                    <p>Informations mises à jour.</p>
                    <button type="button" class="notice-dismiss"><span class="screen-reader-text">Ne pas tenir compte de ce message.</span></button>
                </div>
            <?php endif ?>

            <form method="post" action="options.php">
                <?php
                    // cette fonction ajoute plusieurs champs cachés au formulaire
                    // pour vous faciliter le travail.
                    // elle prend en paramètre le nom du groupe d'options
                    // que nous avons défini plus haut.

                    settings_fields( 'theme_options' );
                ?>
                
                <div id="poststuff">

                    <div class="postbox">
                        <h3 class="hndle"><span>Hero INTRO</span></h3>
                        <div class="inside">

                            <h4>Headline</h4>
                            <textarea id="hero_headline" rows="5" name="hero_headline" style="width:100%;display:block;padding:5px" ><?php echo get_option( 'hero_headline' ); ?></textarea>
                            
                            <hr/>

                            <h4>Headline text</h4>
                            <textarea id="hero_headline-text" rows="5" name="hero_headline-text" style="width:100%;display:block;padding:5px" ><?php echo get_option( 'hero_headline-text' ); ?></textarea>

                        </div>
                    </div>

                    <div class="postbox">
                        <h3 class="hndle"><span>Menu</span></h3>
                        <div class="inside">

                            <h4>Navigation label</h4>
                            <input type="text" id="menu_nav-label" name="menu_nav-label" value='<?php echo get_option( 'menu_nav-label' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <h4>Menu item - Concept</h4>
                            <input type="text" id="menu_concept" name="menu_concept" value='<?php echo get_option( 'menu_concept' ); ?>' style="width:100%;display:block;padding:5px">
                        
                            <h4>Menu item - Services</h4>
                            <input type="text" id="menu_services" name="menu_services" value='<?php echo get_option( 'menu_services' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <h4>Menu item - Contact</h4>
                            <input type="text" id="menu_contact" name="menu_contact" value='<?php echo get_option( 'menu_contact' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <h4>Blog label</h4>
                            <input type="text" id="menu_blog-label" name="menu_blog-label" value='<?php echo get_option( 'menu_blog-label' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <h4>Menu item - Blog</h4>
                            <input type="text" id="menu_blog" name="menu_blog" value='<?php echo get_option( 'menu_blog' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <h4>Lang label</h4>
                            <input type="text" id="menu_lang-label" name="menu_lang-label" value='<?php echo get_option( 'menu_lang-label' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <h4>CTA label</h4>
                            <input type="text" id="menu_cta-label" name="menu_cta-label" value='<?php echo get_option( 'menu_cta-label' ); ?>' style="width:100%;display:block;padding:5px">
                            
                        </div>
                    </div>

                    <div class="postbox">
                        <h3 class="hndle"><span>Social links</span></h3>
                        <div class="inside">

                            <h4>Facebook</h4>
                            <input type="text" id="social-link_facebook" name="social-link_facebook" value='<?php echo get_option( 'social-link_facebook' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <h4>Twitter</h4>
                            <input type="text" id="social-link_twitter" name="social-link_twitter" value='<?php echo get_option( 'social-link_twitter' ); ?>' style="width:100%;display:block;padding:5px">
                        
                            <h4>Behance</h4>
                            <input type="text" id="social-link_behance" name="social-link_behance" value='<?php echo get_option( 'social-link_behance' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <h4>Instagram</h4>
                            <input type="text" id="social-link_instagram" name="social-link_instagram" value='<?php echo get_option( 'social-link_instagram' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <h4>Linkedin</h4>
                            <input type="text" id="social-link_linkedin" name="social-link_linkedin" value='<?php echo get_option( 'social-link_linkedin' ); ?>' style="width:100%;display:block;padding:5px">
                            
                        </div>
                    </div>

                    <div class="postbox">
                        <h3 class="hndle"><span>Section 1 - SERVICES</span></h3>
                        <div class="inside">

                            <h4>Title</h4>
                            <input type="text" id="section1_title" name="section1_title" value='<?php echo get_option( 'section1_title' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <hr/>

                            <h4>Text</h4>
                            <textarea id="section1_text" rows="5" name="section1_text" style="width:100%;display:block;padding:5px" ><?php echo get_option( 'section1_text' ); ?></textarea>

                        </div>
                    </div>

                    <div class="postbox">
                        <h3 class="hndle"><span>Section 2 - SUCCESS</span></h3>
                        <div class="inside">

                            <h4>Title</h4>
                            <input type="text" id="section2_title" name="section2_title" value='<?php echo get_option( 'section2_title' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <hr/>

                            <h4>Text</h4>
                            <textarea id="section2_text" rows="5" name="section2_text" style="width:100%;display:block;padding:5px" ><?php echo get_option( 'section2_text' ); ?></textarea>

                            <hr/>

                            <h4>CTA label</h4>
                            <input type="text" id="section2_cta-label" name="section2_cta-label" value='<?php echo get_option( 'section2_cta-label' ); ?>' style="width:100%;display:block;padding:5px">
                            
                        </div>
                    </div>

                    <div class="postbox">
                        <h3 class="hndle"><span>Section 3 - Contact</span></h3>
                        <div class="inside">

                            <h4>Title contact form</h4>
                            <input type="text" id="contact-form_title" name="contact-form_title" value='<?php echo get_option( 'contact-form_title' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <hr/>

                            <h4>Text contact form</h4>
                            <textarea id="contact-form_text" rows="5" name="contact-form_text" style="width:100%;display:block;padding:5px" ><?php echo get_option( 'contact-form_text' ); ?></textarea>

                            <hr/>

                            <h4>Title social col</h4>
                            <input type="text" id="social_title" name="social_title" value='<?php echo get_option( 'social_title' ); ?>' style="width:100%;display:block;padding:5px">
                            
                        </div>
                    </div>

                    <div class="postbox">
                        <h3 class="hndle"><span>Section 4 - NEWSLETTER</span></h3>
                        <div class="inside">

                            <h4>Title</h4>
                            <input type="text" id="extras_newsletter_title" name="extras_newsletter_title" value='<?php echo get_option( 'extras_newsletter_title' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <hr/>

                            <h4>Text</h4>
                            <textarea id="extras_newsletter_text" rows="5" name="extras_newsletter_text" style="width:100%;display:block;padding:5px" ><?php echo get_option( 'extras_newsletter_text' ); ?></textarea>

                        </div>
                    </div>

                    <div class="postbox">
                        <h3 class="hndle"><span>Section 4 - BLOG</span></h3>
                        <div class="inside">

                            <h4>Title</h4>
                            <input type="text" id="extras_blog_title" name="extras_blog_title" value='<?php echo get_option( 'extras_blog_title' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <hr/>

                            <h4>Text</h4>
                            <textarea id="extras_blog_text" rows="5" name="extras_blog_text" style="width:100%;display:block;padding:5px" ><?php echo get_option( 'extras_blog_text' ); ?></textarea>

                            <hr/>

                            <h4>CTA label</h4>
                            <input type="text" id="extras_blog_cta-label" name="extras_blog_cta-label" value='<?php echo get_option( 'extras_blog_cta-label' ); ?>' style="width:100%;display:block;padding:5px">
                            
                            <h4>CTA link</h4>
                            <input type="text" id="extras_blog_medium-link" name="extras_blog_medium-link" value='<?php echo get_option( 'extras_blog_medium-link' ); ?>' style="width:100%;display:block;padding:5px">
                            
                        </div>
                    </div>

                    <div class="postbox">
                        <h3 class="hndle"><span>Footer</span></h3>
                        <div class="inside">

                            <h4>Legal information label</h4>
                            <input type="text" id="footer_legal-label" name="footer_legal-label" value='<?php echo get_option( 'footer_legal-label' ); ?>' style="width:100%;display:block;padding:5px">
                            
                        </div>
                    </div>

                    <p class="submit">
                        <input type="submit" class="button-primary" value="Enregistrer" />
                    </p>
                    
                </div>
            </form>
        </div>
<?php
}
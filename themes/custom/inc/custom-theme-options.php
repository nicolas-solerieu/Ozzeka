<?php
/**
 * Custom theme options
 */




function myThemeRegisterSettings() {
    // Homepage hero
    register_setting( 'theme_options', 'hero_music_label' );
    register_setting( 'theme_options', 'hero_headline' );
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
                        <h3 class="hndle"><span>Hero section</span></h3>
                        <div class="inside">

                            <h4>Headline</h4>
                            <textarea id="hero_headline" rows="5" name="hero_headline" style="width:100%;display:block;padding:5px" ><?php echo get_option( 'hero_headline' ); ?></textarea>
                            
                            <hr/>

                            <h4>Music label</h4>
                            <input type="text" id="hero_music_label" name="hero_music_label" value='<?php echo get_option( 'hero_music_label' ); ?>' style="width:100%;display:block;padding:5px">
                        
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
<?php
/**
 * Page Name: Import/Export
 *
 */

use FloatMenuLite\Admin\ImporterExporter;
use FloatMenuLite\WOWP_Plugin;

defined( 'ABSPATH' ) || exit;

?>

    <div class="wpie-block-tool">

        <div class="inside">
            <h3><span class="dashicons dashicons-database-export wpie-color-orange"></span>
                <span><?php esc_html_e( 'Export Settings', 'float-menu' ); ?></span></h3>
            <div class="inside">
                <p><?php
					/* translators: %s: plugin name */
					printf( esc_html__( 'Export the  settings for %s as a .json file. This allows you to easily import the configuration into another site.', 'float-menu' ), '<b>' . esc_attr( WOWP_Plugin::info( 'name' ) ) . '</b>' ); ?></p>
				<?php ImporterExporter::form_export(); ?>
            </div>
        </div>
        <hr>

        <div class="inside">
            <h3><span class="dashicons dashicons-database-import wpie-color-orange"></span>
                <span><?php esc_html_e( 'Import Settings', 'float-menu' ); ?></span></h3>
            <div class="inside">
                <p><?php
					/* translators: %s: plugin name */
					printf( esc_html__( 'Import the %s settings from a .json file. This file can be obtained by exporting the settings on another site using the form above.', 'float-menu' ), '<b>' . esc_attr( WOWP_Plugin::info( 'name' ) ) . '</b>    ' ); ?></p>
				<?php ImporterExporter::form_import(); ?>
            </div>
        </div>

    </div>

<?php

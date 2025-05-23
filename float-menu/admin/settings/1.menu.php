<?php
/*
 * Page Name: Menu
 */

use FloatMenuLite\Admin\CreateFields;

defined( 'ABSPATH' ) || exit;

$page_opt = include( 'options/menu.php' );

$field = new CreateFields( $options, $page_opt );

$count = ( ! empty( $options['menu_1']['item_type'] ) ) ? count( $options['menu_1']['item_type'] ) : '0';
?>
    <div class="wpie-items__list" id="wpie-items-list">
		<?php if ( $count > 0 ) :
			for ( $i = 0; $i < $count; $i ++ ):
				$order = $i + 1;
				$item_order = ! empty( $options['item_order'][ $i ] ) ? 1 : 0;
				$open = ! empty( $item_order ) ? ' open' : '';
				$item_parent = $options['menu_1']['item_sub'][ $i ] ?? 0;
				$item_class = '';
				if ( absint( $item_parent ) === 1 ) {
					$item_class = ' shifted-right';
				}
				?>
                <details
                        class="wpie-item menu-item<?php echo esc_attr( $item_class ); ?>"<?php echo esc_attr( $open ); ?>>
                    <input type="hidden" name="param[item_order][]" class="wpie-item__toggle"
                           value="<?php echo absint( $item_order ); ?>">
                    <input type="hidden" name="param[menu_1][item_sub][]" class="wpie-item__parent"
                           value="<?php echo absint( $item_parent ); ?>">
                    <summary class="wpie-item_heading">
                        <span class="wpie-item_heading_icon"></span>
                        <span class="wpie-item_heading_label"></span>
                        <span class="wpie-item_heading_type"></span>
                        <span class="wpie-icon wpie_icon-copy"></span>
                        <span class="wpie-icon wpie_icon-chevron-expand-y"></span>
                        <span class="wpie-icon wpie_icon-trash"></span>
                        <span class="wpie-item_heading_toogle">
                            <span class="wpie-icon wpie_icon-chevron-down"></span>
                            <span class="wpie-icon wpie_icon-chevron-up "></span>
                        </span>
                    </summary>
                    <div class="wpie-item_content">

                        <div class="wpie-fieldset">
                            <div class="wpie-fields">
								<?php $field->create( 'menu_1-item_tooltip', $i ); ?>
                            </div>
                        </div>

                        <div class="wpie-tabs-wrapper">

                            <div class="wpie-tabs-link">
                                <a class="wpie-tab__link is-active"><?php esc_html_e( 'Type', 'float-menu' ); ?></a>
                                <a class="wpie-tab__link"><?php esc_html_e( 'Icon', 'float-menu' ); ?></a>
                                <a class="wpie-tab__link"><?php esc_html_e( 'Style', 'float-menu' ); ?></a>
                                <a class="wpie-tab__link"><?php esc_html_e( 'Attributes', 'float-menu' ); ?></a>
                            </div>

                            <div class="wpie-tab-settings is-active">
                                <div class="wpie-fieldset">
                                    <div class="wpie-fields">
										<?php $field->create( 'menu_1-item_type', $i ); ?>
										<?php $field->create( 'menu_1-item_link', $i ); ?>
										<?php $field->create( 'menu_1-new_tab', $i ); ?>
                                    </div>
                                </div>


                            </div>

                            <div class="wpie-tab-settings">
                                <div class="wpie-fieldset">
                                    <div class="wpie-fields">
										<?php $field->create( 'menu_1-icon_type', $i ); ?>
										<?php $field->create( 'menu_1-item_icon', $i ); ?>
										<?php $field->create( 'menu_1-item_custom_text', $i ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="wpie-tab-settings">

                                <div class="wpie-fieldset">
                                    <div class="wpie-fields">
										<?php $field->create( 'menu_1-color', $i ); ?>
										<?php $field->create( 'menu_1-hcolor', $i ); ?>
										<?php $field->create( 'menu_1-bcolor', $i ); ?>
										<?php $field->create( 'menu_1-hbcolor', $i ); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="wpie-tab-settings">
                                <div class="wpie-fieldset">
                                    <div class="wpie-legend"><?php esc_html_e( 'Attributes', 'float-menu' ); ?></div>
                                    <div class="wpie-fields">
										<?php $field->create( 'menu_1-button_id', $i ); ?>
										<?php $field->create( 'menu_1-button_class', $i ); ?>
										<?php $field->create( 'menu_1-link_rel', $i ); ?>
										<?php $field->create( 'menu_1-aria_label', $i ); ?>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                </details>
			<?php endfor; endif; ?>

        <hr class="wpie-buttons__hr">
        <div class="wpie-fields">
            <button class="button button-primary wpie-add-button"
                    type="button"><?php esc_html_e( 'Add Button', 'float-menu' ); ?></button>
        </div>

    </div>


    <template id="template-button">
        <details class="wpie-item" open>
            <input type="hidden" name="param[item_order][]" class="wpie-item__toggle" value="1">
            <input type="hidden" name="param[menu_1][item_sub][]" class="wpie-item__parent"
                   value="0">
            <summary class="wpie-item_heading">
                <span class="wpie-item_heading_icon"></span>
                <span class="wpie-item_heading_label"></span>
                <span class="wpie-item_heading_type"></span>
                <span class="wpie-icon wpie_icon-copy"></span>
                <span class="wpie-icon wpie_icon-chevron-expand-y"></span>
                <span class="wpie-icon wpie_icon-trash"></span>
                <span class="wpie-item_heading_toogle">
                    <span class="wpie-icon wpie_icon-chevron-down"></span>
                    <span class="wpie-icon wpie_icon-chevron-up "></span>
            </span>
            </summary>
            <div class="wpie-item_content">

                <div class="wpie-fieldset">
                    <div class="wpie-fields">
						<?php $field->create( 'menu_1-item_tooltip', - 1 ); ?>
                    </div>
                </div>

                <div class="wpie-tabs-wrapper">

                    <div class="wpie-tabs-link">
                        <a class="wpie-tab__link is-active"><?php esc_html_e( 'Type', 'float-menu' ); ?></a>
                        <a class="wpie-tab__link"><?php esc_html_e( 'Icon', 'float-menu' ); ?></a>
                        <a class="wpie-tab__link"><?php esc_html_e( 'Style', 'float-menu' ); ?></a>
                        <a class="wpie-tab__link"><?php esc_html_e( 'Attributes', 'float-menu' ); ?></a>
                    </div>

                    <div class="wpie-tab-settings is-active">
                        <div class="wpie-fieldset">
                            <div class="wpie-fields">
								<?php $field->create( 'menu_1-item_type', - 1 ); ?>
								<?php $field->create( 'menu_1-item_link', - 1 ); ?>
								<?php $field->create( 'menu_1-new_tab', - 1 ); ?>
                            </div>
                        </div>


                    </div>

                    <div class="wpie-tab-settings">
                        <div class="wpie-fieldset">
                            <div class="wpie-fields">
								<?php $field->create( 'menu_1-icon_type', - 1 ); ?>
								<?php $field->create( 'menu_1-item_icon', - 1 ); ?>
								<?php $field->create( 'menu_1-item_custom_text', - 1 ); ?>
                            </div>
                        </div>

                    </div>

                    <div class="wpie-tab-settings">

                        <div class="wpie-fieldset">
                            <div class="wpie-fields">
								<?php $field->create( 'menu_1-color', - 1 ); ?>
								<?php $field->create( 'menu_1-hcolor', - 1 ); ?>
								<?php $field->create( 'menu_1-bcolor', - 1 ); ?>
								<?php $field->create( 'menu_1-hbcolor', - 1 ); ?>
                            </div>
                        </div>

                    </div>

                    <div class="wpie-tab-settings">
                        <div class="wpie-fieldset">
                            <div class="wpie-legend"><?php esc_html_e( 'Attributes', 'float-menu' ); ?></div>
                            <div class="wpie-fields">
								<?php $field->create( 'menu_1-button_id', - 1 ); ?>
								<?php $field->create( 'menu_1-button_class', - 1 ); ?>
								<?php $field->create( 'menu_1-link_rel', - 1 ); ?>
								<?php $field->create( 'menu_1-aria_label', - 1 ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </details>
    </template>
<?php

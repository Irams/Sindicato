<div id="submitdiv" class="postbox frm-no-border">
<div class="inside">
<div class="submitbox" id="submitpost">

    <div id="major-publishing-actions">
		<div id="publishing-action" class="<?php echo esc_attr( 'draft' === $values['status'] ? 'frm-is-draft' : '' ); ?>">
			<div class="alignleft">
				<?php FrmFormsHelper::actions_dropdown( $values ) ?>
			</div>

			<?php if ( 'draft' == $values['status'] ) { ?>
				<button class="frm_submit_form frm_submit_<?php echo ( isset( $values['ajax_load'] ) && $values['ajax_load'] ) ? '' : 'no_'; ?>ajax button-primary frm_button_submit" type="button" id="save-post" ><?php esc_html_e( 'Save Draft', 'formidable' ); ?></button>
			<?php } ?>
			<?php if ( 'settings' == FrmAppHelper::simple_get( 'frm_action', 'sanitize_title' ) ) { ?>
				<button class="frm_submit_form frm_submit_settings_btn button-primary frm_button_submit" type="button" id="frm_submit_side_top" >
					<?php esc_html_e( 'Update', 'formidable' ); ?>
				</button>
            <?php } else { ?>
				<button class="frm_submit_form frm_submit_<?php echo ( isset( $values['ajax_load'] ) && $values['ajax_load'] ) ? '' : 'no_'; ?>ajax button-primary frm_button_submit" type="button" id="frm_submit_side_top">
					<?php echo esc_html( isset( $button ) ? $button : __( 'Update', 'formidable' ) ); ?>
				</button>
    	    <?php } ?>
            <div id="frm-preview-action">
				<?php if ( ( ! isset( $hide_preview ) || ! $hide_preview ) && isset( $values['form_key'] ) ) { ?>
					<div class="preview dropdown">
						<a href="#" id="frm-previewDrop" class="frm-dropdown-toggle button frm-button-primary" data-toggle="dropdown"><?php esc_html_e( 'Preview', 'formidable' ); ?> <b class="caret"></b></a>

						<ul class="frm-dropdown-menu <?php echo esc_attr( is_rtl() ? 'pull-left' : 'pull-right' ) ?>" role="menu" aria-labelledby="frm-previewDrop">
							<li>
								<a href="<?php echo esc_url( FrmFormsHelper::get_direct_link( $values['form_key'] ) ); ?>" target="_blank">
									<?php esc_html_e( 'On Blank Page', 'formidable' ); ?>
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( FrmFormsHelper::get_direct_link( $values['form_key'] ) . '&theme=1' ); ?>" target="_blank">
									<?php esc_html_e( 'In Theme', 'formidable' ); ?>
								</a>
							</li>
						</ul>
					</div>
				<?php } ?>
			</div>
		</div>

		<div class="clear"></div>
	</div><!-- #major-publishing-actions -->

</div>
</div>
</div>

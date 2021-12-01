// Buttons decoration (add 'hover' class)
// Attention! Not use cont.find('selector')! Use jQuery('selector') instead!

jQuery( document ).on(
	'action.init_hidden_elements', function(e, cont) {
		"use strict";

		if (CLEANSKIN_STORAGE['button_hover'] && CLEANSKIN_STORAGE['button_hover'] != 'default') {
			jQuery(
				'button:not(.search_submit):not([class*="sc_button_hover_"]):not(.single_add_to_cart_button):not(.woocommerce-cart .button),\
				.theme_button:not([class*="sc_button_hover_"]),\
				.sc_button:not([class*="sc_button_simple"]):not([class*="sc_button_hover_"]):not(.sc_action_item_link),\
				.sc_form_field button:not([class*="sc_button_hover_"]),\
				.post_item .more-link:not([class*="sc_button_hover_"]),\
				.trx_addons_hover_content .trx_addons_hover_links a:not([class*="sc_button_hover_"]),\
				.cleanskin_tabs .cleanskin_tabs_titles li a:not([class*="sc_button_hover_"]),\
				.hover_shop_buttons .icons a:not([class*="sc_button_hover_style_"]),\
				.mptt-navigation-tabs li a:not([class*="sc_button_hover_style_"]),\
				.edd_download_purchase_form .button:not([class*="sc_button_hover_style_"]),\
				.edd-submit.button:not([class*="sc_button_hover_style_"]),\
				.widget_edd_cart_widget .edd_checkout a:not([class*="sc_button_hover_style_"]),\
				#btn-buy,\
				.woocommerce .button:not([class*="shop_"]):not([class*="view"]):not([class*="sc_button_hover_"]):not(.single_add_to_cart_button):not(.woocommerce.single-product .post_data_inner a.button):not(.woocommerce-cart .button),\
				.woocommerce-page .button:not([class*="shop_"]):not([class*="view"]):not([class*="sc_button_hover_"]):not(.single_add_to_cart_button):not(.post_data_inner a.button):not(.woocommerce-cart .button),\
				#buddypress a.button:not([class*="sc_button_hover_"])\
				'
			).addClass( 'sc_button_hover_just_init sc_button_hover_' + CLEANSKIN_STORAGE['button_hover'] );
			if (CLEANSKIN_STORAGE['button_hover'] != 'arrow') {
				jQuery(
					'input[type="submit"]:not([class*="sc_button_hover_"]):not(#respond .form-submit input.submit):not(.mc4wp-form-fields input):not(.wpcf7-form-control),\
					input[type="button"]:not([class*="sc_button_hover_"]),\
					.vc_tta-accordion .vc_tta-panel-heading .vc_tta-controls-icon:not([class*="sc_button_hover_"]):not(.vc_tta-controls-icon-chevron),\
					.woocommerce nav.woocommerce-pagination ul li a:not([class*="sc_button_hover_"]),\
					.tribe-events-button:not([class*="sc_button_hover_"]),\
					#tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option a:not([class*="sc_button_hover_"]),\
					.tribe-bar-mini #tribe-bar-views .tribe-bar-views-list .tribe-bar-views-option a:not([class*="sc_button_hover_"]),\
					.tribe-events-cal-links a:not([class*="sc_button_hover_"]),\
					.tribe-events-sub-nav li a:not([class*="sc_button_hover_"]),\
					.isotope_filters_button:not([class*="sc_button_hover_"]),\
					.sc_promo_modern .sc_promo_link2:not([class*="sc_button_hover_"]),\
					.post_item_single .post_content .post_meta .post_share .social_item .social_icon:not([class*="sc_button_hover_"]),\
					.sc_slider_controller_titles .slider_controls_wrap > a:not([class*="sc_button_hover_"]),\
					.tagcloud > a:not([class*="sc_button_hover_"])\
					'
				).addClass( 'sc_button_hover_just_init sc_button_hover_' + CLEANSKIN_STORAGE['button_hover'] );
			}
			// Add alter styles of buttons
			jQuery(
				'.sc_slider_controller_titles .slider_controls_wrap > a:not([class*="sc_button_hover_style_"])\
				'
			).addClass( 'sc_button_hover_just_init sc_button_hover_style_default' );
			jQuery(
				'.trx_addons_hover_content .trx_addons_hover_links a:not([class*="sc_button_hover_style_"]),\
				.single-product ul.products li.product .post_data .button:not([class*="sc_button_hover_style_"]):not(.post_data_inner a.button)\
				'
			).addClass( 'sc_button_hover_just_init sc_button_hover_style_inverse' );
			jQuery(
				'.post_item_single .post_content .post_meta .post_share .social_item .social_icon:not([class*="sc_button_hover_style_"]),\
				.woocommerce a.button.alt:not([class*="sc_button_hover_style_"]):not(.checkout-button),\
				.woocommerce button.button.alt:not([class*="sc_button_hover_style_"]):not(.single_add_to_cart_button),\
				.woocommerce input.button.alt:not([class*="sc_button_hover_style_"])\
				'
			).addClass( 'sc_button_hover_just_init sc_button_hover_style_hover' );
			jQuery(
				'.woocommerce .woocommerce-info .button:not([class*="sc_button_hover_style_"])\
				'
			).addClass( 'sc_button_hover_just_init sc_button_hover_style_alter' );
			jQuery(
				'.sidebar .trx_addons_tabs .trx_addons_tabs_titles li a:not([class*="sc_button_hover_style_"]),\
				.cleanskin_tabs .cleanskin_tabs_titles li a:not([class*="sc_button_hover_style_"]),\
				.wp-block-tag-cloud a:not([class*="sc_button_hover_style_"]),\
				.widget_tag_cloud a:not([class*="sc_button_hover_style_"]),\
				.widget_product_tag_cloud a:not([class*="sc_button_hover_style_"])\
				'
			).addClass( 'sc_button_hover_just_init sc_button_hover_style_alterbd' );
			jQuery(
				'.vc_tta-accordion .vc_tta-panel-heading .vc_tta-controls-icon:not([class*="sc_button_hover_style_"]):not(.vc_tta-controls-icon-chevron),\
				.sc_button.color_style_dark:not([class*="sc_button_simple"]):not([class*="sc_button_hover_style_"]),\
				.trx_addons_video_player.with_cover .video_hover:not([class*="sc_button_hover_style_"]),\
				.trx_addons_tabs .trx_addons_tabs_titles li a:not([class*="sc_button_hover_style_"])\
				'
			).addClass( 'sc_button_hover_just_init sc_button_hover_style_dark' );
			jQuery(
				'.sc_price_item_link:not([class*="sc_button_hover_style_"])\
				'
			).addClass( 'sc_button_hover_just_init sc_button_hover_style_extra' );
			jQuery(
				'.sc_button.color_style_link2:not([class*="sc_button_simple"]):not([class*="sc_button_hover_style_"])\
				'
			).addClass( 'sc_button_hover_just_init sc_button_hover_style_link2' );
			jQuery(
				'.sc_button.color_style_link3:not([class*="sc_button_simple"]):not([class*="sc_button_hover_style_"])\
				'
			).addClass( 'sc_button_hover_just_init sc_button_hover_style_link3' );
			// Remove just init hover class
			setTimeout(
				function() {
					jQuery( '.sc_button_hover_just_init' ).removeClass( 'sc_button_hover_just_init' );
				}, 500
			);
			// Remove hover class
			jQuery(
				'.mejs-controls button,\
				.mfp-close,\
				.sc_button_bg_image,\
				.hover_shop_buttons a,\
				button.pswp__button,\
				.blog_style_chess_1 .post_item .more-link,\
				.blog_style_chess_2 .post_item .more-link,\
				.blog_style_chess_3 .post_item .more-link,\
				.woocommerce-orders-table__cell-order-actions .button,\
				.sc_layouts_row_type_narrow .sc_button,\
				.sc_googlemap button,\
				.wp-block-search .wp-block-search__button,\
				.sc_form_field_submit button,\
				.ywgc-predefined-amount-button\
				'
			).removeClass( 'sc_button_hover_' + CLEANSKIN_STORAGE['button_hover'] );
			jQuery(
				'.custom_links_list_item_button'
			).removeClass( 'sc_button sc_button_simple');
		}

	}
);

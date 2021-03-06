<?php

/**
 * This class renders the html for the event ticket.
 *
 * @author     Time.ly Network Inc.
 * @since      2.0
 *
 * @package    AI1EC
 * @subpackage AI1EC.View.Event
 */
class Ai1ec_View_Event_Ticket {

	/**
	 * Create readable content for buy tickets/register link
	 *
	 * @param bool $long Set to false to use short message version
	 *
	 * @return string Message to be rendered on buy tickets link
	 */
	public function get_tickets_url_label( Ai1ec_Event $event, $long = true ) {
		if ( $event->is_free() ) {
			return ( $long )
			? __( 'Register Now', AI1EC_PLUGIN_NAME )
			: __( 'Register', AI1EC_PLUGIN_NAME );
		}
		$output = '';
		if ( $long ) {
			$output = apply_filters(
				'ai1ec_buy_tickets_url_icon',
				'<i class="ai1ec-fa ai1ec-fa-shopping-cart"></i>'
			);
			if ( ! empty( $output ) ) {
				$output .= ' ';
			}
		}
		$output .= ( $long )
			? __( 'Buy Tickets', AI1EC_PLUGIN_NAME )
			: __( 'Tickets', AI1EC_PLUGIN_NAME );
		return $output;
	}

	/**
	 * Contact info as HTML
	 */
	public function get_contact_html( Ai1ec_Event $event ) {
		$contact = '';
		if ( $event->get( 'contact_name' ) ) {
			$contact .=
			'<span class="ai1ec-contact-name">' .
			'<i class="ai1ec-fa ai1ec-fa-fw ai1ec-fa-user"></i> ' .
			esc_html( $event->get( 'contact_name' ) ) .
			'</span> ';
		}
		if ( $event->get( 'contact_phone' ) ) {
			$contact .=
			'<span class="ai1ec-contact-phone">' .
			'<i class="ai1ec-fa ai1ec-fa-fw ai1ec-fa-phone"></i> ' .
			esc_html( $event->get( 'contact_phone' ) ) .
			'</span> ';
		}
		if ( $event->get( 'contact_email' ) ) {
			$contact .=
			'<span class="ai1ec-contact-email">' .
			'<a href="mailto:' . esc_attr( $event->get( 'contact_email' ) ) . '">' .
			'<i class="ai1ec-fa ai1ec-fa-fw ai1ec-fa-envelope-o"></i> ' .
			__( 'Email', AI1EC_PLUGIN_NAME ) . '</a></span> ';
		}
		if ( $event->get( 'contact_url' ) ) {
			$contact .=
			'<span class="ai1ec-contact-url">' .
			'<a target="_blank" href="' . esc_attr( $event->get( 'contact_url' ) ) .
			'"><i class="ai1ec-fa ai1ec-fa-fw ai1ec-fa-link"></i> ' .
			apply_filters(
				'ai1ec_contact_url',
				__( 'Event website', AI1EC_PLUGIN_NAME )
			) .
			' <i class="ai1ec-fa ai1ec-fa-external-link"></i></a></span>';
		}
		return $contact;
	}
}

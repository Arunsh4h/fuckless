<?php
/**
 * Replacements for GraphQL responses.
 *
 * @package FaustWP
 */

namespace WPE\FaustWP\Replacement;

use function WPE\FaustWP\Settings\faustwp_get_setting;
use function WPE\FaustWP\Replacement\has_file_extension;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Callback for WP GraphQL 'graphql_request_results' filter.
 *
 * Replaces the WordPress Site URL with the replacement domain in 'url' and
 * 'href' fields. Response data for RootQuery.generalSettings is intentionally
 * left unaltered.
 *
 * @param object $response The default GraphQL query response.
 *
 * @return object The modified response with URLs replaced.
 */
function url_replacement( $response ) {
	if ( ! domain_replacement_enabled() ) {
		return $response;
	}

	if (
		is_object( $response ) &&
		property_exists( $response, 'data' ) &&
		is_array( $response->data )
	) {
		url_replace_recursive( $response->data );
	}

	return $response;
}

/**
 * Replaces the WordPress Site URL with the replacement domain
 * in 'url' and 'href' fields, skipping over values with file extensions.
 *
 * @param array $data The response data.
 */
function url_replace_recursive( &$data ) {
	foreach ( $data as $key => &$value ) {
		// Exclude generalSettings from URL replacement.
		if ( 'generalSettings' === $key ) {
			continue;
		}

		if (
			( 'url' === $key || 'href' === $key ) &&
			is_string( $value ) &&
			! has_file_extension( $value )
		) {
			$replacement = faustwp_get_setting( 'frontend_uri', '/' );
			$value       = str_replace( site_url(), $replacement, $value );
		} elseif ( ( 'path' === $key && is_multisite() ) && is_string( $value ) ) {
			$site         = get_site();
			$subdirectory = untrailingslashit( $site->path );
			$value        = str_replace( $subdirectory, '', $value );
		} elseif ( is_array( $value ) ) {
			url_replace_recursive( $value );
		}
	}
}

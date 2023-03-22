<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Disable Fluent Forms styles
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Disables Fluent Forms styles.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Also add following to Customizer > Extra CSS:
 *
 * form.frm-fluent-form.frm-fluent-form .ff-btn {
 *     color: var(--buttonTextInitialColor);
 * background-color: var(--buttonInitialColor);
 * }
 *
 * form.frm-fluent-form.frm-fluent-form .ff-btn:hover {
 *     color: var(--buttonTextHoverColor);
 *     background-color: var(--buttonHoverColor);
 * }
 */
add_action('wp_enqueue_scripts', function () {

    // Remove Fluent Forms main CSS.
    wp_deregister_style('fluent-form-styles');
    wp_dequeue_style('fluent-form-styles');

    // Remove Fluent Forms default CSS.
    wp_deregister_style('fluentform-public-default');
    wp_dequeue_style('fluentform-public-default');

}, 9999);

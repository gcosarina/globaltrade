<?php
/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @link       http://inmicrosol.com
 * @since      1.0.0
 * @package    ims-portfolio
 * @subpackage ims-portfolio/includes
 */
class Ims_Portfolio_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		update_option('ims_portfolio_dummy_data', 11);
	}

}

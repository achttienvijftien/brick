<?php
/**
 * Bootstraps plugin.
 *
 * @package AchttienVijftien\Plugin\Brick
 */

namespace AchttienVijftien\Plugin\Brick;

/**
 * Bootstrap plugin.
 */
class Bootstrap {

	/**
	 * Instance.
	 *
	 * @var self
	 */
	private static $instance;

	/**
	 * Get (singleton) instance.
	 *
	 * @return $this
	 */
	public static function get_instance(): self {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Initialize plugin.
	 */
	public function init(): void {
		if ( is_admin() ) {
			$this->init_admin();
		}

		// bootstrap plugin code goes here.
	}

	/**
	 * Initialize admin.
	 */
	public function init_admin(): void {
		// admin only bootstrap code goes here.
	}
}

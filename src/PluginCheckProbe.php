<?php
/**
 * Throwaway file for a ratchet test in a fork. It prints request data without escaping it.
 *
 * @package Give
 */

namespace Give;

/**
 * Prints a value from the request.
 */
function plugin_check_probe_print() {
	echo $_GET['probe'];
}

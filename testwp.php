<?php
/**
 * testwp
 *
 * @package       TESTWP
 * @author        peter
 * @license       gplv3-or-later
 * @version       1.0.1
 *
 * @wordpress-plugin
 * Plugin Name:   testwp
 * Plugin URI:    https://github.com/Thiararapeter/testwp
 * Description:   test plugin for update
 * Version:       1.0.1
 * Author:        peter
 * Author URI:    https://github.com/Thiararapeter
 * Text Domain:   testwp
 * Domain Path:   /languages
 * License:       GPLv3 or later
 * License URI:   https://www.gnu.org/licenses/gpl-3.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with testwp. If not, see <https://www.gnu.org/licenses/gpl-3.0.html/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

// Add dashboard widget
add_action( 'wp_dashboard_setup', 'testwp_add_dashboard_widget' );

function testwp_add_dashboard_widget() {
    wp_add_dashboard_widget(
        'testwp_hello_widget',
        'TestWP Hello',
        'testwp_hello_widget_content'
    );
}

function testwp_hello_widget_content() {
    echo '<p>Hello! Welcome to your TestWP dashboard widget.</p>';
    echo '<p>This widget is brought to you by the TestWP plugin.</p>';
}

require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/Thiararapeter/testwp',
	__FILE__,
	'testwp'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');

<<<<<<< HEAD
<?php

namespace Config;
=======
<?php namespace Config;
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20

use CodeIgniter\Config\BaseConfig;
use Kint\Renderer\Renderer;

<<<<<<< HEAD
/**
 * --------------------------------------------------------------------------
 * Kint
 * --------------------------------------------------------------------------
 *
 * We use Kint's `RichRenderer` and `CLIRenderer`. This area contains options
 * that you can set to customize how Kint works for you.
 *
 * @see https://kint-php.github.io/kint/ for details on these settings.
 */
=======
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20
class Kint extends BaseConfig
{
	/*
	|--------------------------------------------------------------------------
<<<<<<< HEAD
=======
	| Kint
	|--------------------------------------------------------------------------
	|
	| We use Kint's RichRenderer and CLIRenderer. This area contains options
	| that you can set to customize how Kint works for you.
	|
	| For details on these settings, see Kint's docs:
	|	https://kint-php.github.io/kint/
	|
	*/

	/*
	|--------------------------------------------------------------------------
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20
	| Global Settings
	|--------------------------------------------------------------------------
	*/

	public $plugins = null;

	public $maxDepth = 6;

	public $displayCalledFrom = true;

	public $expanded = false;

	/*
	|--------------------------------------------------------------------------
	| RichRenderer Settings
	|--------------------------------------------------------------------------
	*/
	public $richTheme = 'aante-light.css';

	public $richFolder = false;

	public $richSort = Renderer::SORT_FULL;

	public $richObjectPlugins = null;

	public $richTabPlugins = null;

	/*
	|--------------------------------------------------------------------------
	| CLI Settings
	|--------------------------------------------------------------------------
	*/
	public $cliColors = true;

	public $cliForceUTF8 = false;

	public $cliDetectWidth = true;

	public $cliMinWidth = 40;
}

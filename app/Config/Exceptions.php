<<<<<<< HEAD
<?php

namespace Config;
=======
<?php namespace Config;
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20

use CodeIgniter\Config\BaseConfig;

/**
 * Setup how the exception handler works.
<<<<<<< HEAD
 */
class Exceptions extends BaseConfig
{
	/**
	 * --------------------------------------------------------------------------
	 * LOG EXCEPTIONS?
	 * --------------------------------------------------------------------------
	 * If true, then exceptions will be logged
	 * through Services::Log.
	 *
	 * Default: true
	 *
	 * @var boolean
	 */
	public $log = true;

	/**
	 * --------------------------------------------------------------------------
	 * DO NOT LOG STATUS CODES
	 * --------------------------------------------------------------------------
	 * Any status codes here will NOT be logged if logging is turned on.
	 * By default, only 404 (Page Not Found) exceptions are ignored.
	 *
	 * @var array
	 */
	public $ignoreCodes = [404];

	/**
	 * --------------------------------------------------------------------------
	 * Error Views Path
	 * --------------------------------------------------------------------------
	 * This is the path to the directory that contains the 'cli' and 'html'
	 * directories that hold the views used to generate errors.
	 *
	 * Default: APPPATH.'Views/errors'
	 *
	 * @var string
	 */
=======
 *
 * @package Config
 */
class Exceptions extends BaseConfig
{
	/*
	 |--------------------------------------------------------------------------
	 | LOG EXCEPTIONS?
	 |--------------------------------------------------------------------------
	 | If true, then exceptions will be logged
	 | through Services::Log.
	 |
	 | Default: true
	 */
	public $log = true;

	/*
	 |--------------------------------------------------------------------------
	 | DO NOT LOG STATUS CODES
	 |--------------------------------------------------------------------------
	 | Any status codes here will NOT be logged if logging is turned on.
	 | By default, only 404 (Page Not Found) exceptions are ignored.
	 */
	public $ignoreCodes = [ 404 ];

	/*
	|--------------------------------------------------------------------------
	| Error Views Path
	|--------------------------------------------------------------------------
	| This is the path to the directory that contains the 'cli' and 'html'
	| directories that hold the views used to generate errors.
	|
	| Default: APPPATH.'Views/errors'
	*/
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20
	public $errorViewPath = APPPATH . 'Views/errors';
}

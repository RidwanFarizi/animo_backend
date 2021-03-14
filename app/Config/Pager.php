<<<<<<< HEAD
<?php

namespace Config;
=======
<?php namespace Config;
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20

use CodeIgniter\Config\BaseConfig;

class Pager extends BaseConfig
{
<<<<<<< HEAD
	/**
	 * --------------------------------------------------------------------------
	 * Templates
	 * --------------------------------------------------------------------------
	 *
	 * Pagination links are rendered out using views to configure their
	 * appearance. This array contains aliases and the view names to
	 * use when rendering the links.
	 *
	 * Within each view, the Pager object will be available as $pager,
	 * and the desired group as $pagerGroup;
	 *
	 * @var array<string, string>
	 */
=======
	/*
	|--------------------------------------------------------------------------
	| Templates
	|--------------------------------------------------------------------------
	|
	| Pagination links are rendered out using views to configure their
	| appearance. This array contains aliases and the view names to
	| use when rendering the links.
	|
	| Within each view, the Pager object will be available as $pager,
	| and the desired group as $pagerGroup;
	|
	*/
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20
	public $templates = [
		'default_full'   => 'CodeIgniter\Pager\Views\default_full',
		'default_simple' => 'CodeIgniter\Pager\Views\default_simple',
		'default_head'   => 'CodeIgniter\Pager\Views\default_head',
	];

<<<<<<< HEAD
	/**
	 * --------------------------------------------------------------------------
	 * Items Per Page
	 * --------------------------------------------------------------------------
	 *
	 * The default number of results shown in a single page.
	 *
	 * @var integer
	 */
=======
	/*
	|--------------------------------------------------------------------------
	| Items Per Page
	|--------------------------------------------------------------------------
	|
	| The default number of results shown in a single page.
	|
	*/
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20
	public $perPage = 20;
}

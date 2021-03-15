<<<<<<< HEAD
<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;
=======
<?php namespace Config;
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
<<<<<<< HEAD
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
=======
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
<<<<<<< HEAD
	 * @var array<string, string>
=======
	 * @var array
>>>>>>> 2206b45ffdcaecf8ef3b62fba789559199669c20
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}

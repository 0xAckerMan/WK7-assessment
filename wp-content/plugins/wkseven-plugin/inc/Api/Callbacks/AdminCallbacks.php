<?php

/**
 *@package WK7-ASSESSMENT
 */

namespace Inc\Api\Callbacks;


use Inc\Base\BaseController;



class AdminCallbacks extends BaseController
{
	public function adminCreate()
	{
		return require_once( "$this->plugin_path/templates/create.php" );
	}

	public function adminEmployee()
	{
		return require_once( "$this->plugin_path/templates/employee.php" );
	}

}



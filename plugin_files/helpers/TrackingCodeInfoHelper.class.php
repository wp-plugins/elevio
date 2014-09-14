<?php

require_once('ElevioHelper.class.php');

class TrackingCodeInfoHelper extends ElevioHelper
{
	public function render()
	{
		if (Elevio::get_instance()->is_installed())
		{
			return '<div class="updated installed_ok"><p>You\'ve successfully installed Elevio, nice work (using account id: <strong>' . Elevio::get_instance()->get_account_id() .'</strong>)</p></div>';
		}

		return '';
	}
}

<?php

require_once('ElevioHelper.class.php');

class TrackingCodeHelper extends ElevioHelper
{
	public function render()
	{
		if (Elevio::get_instance()->is_installed())
		{
			$account_id = Elevio::get_instance()->get_account_id();

            $user = '';
if(is_user_logged_in()) {
    $user_info = wp_get_current_user();
    $user = "
Elev.push(['user', {
    'name': '" . $user_info->display_name . "',
    'email': '" . $user_info->user_email . "'
}]);
";
}


			return <<<HTML
<script type="text/javascript">
Elev = window.Elev || [];
(function () {
    var i, e;
    i = document.createElement("script"), i.type = 'text/javascript'; i.async = 1, i.src = "https://elev.io/jsclient/v2/bootstrap.js", e = document.getElementsByTagName("script")[0], e.parentNode.insertBefore(i, e);
})();
{$user}
Elev.push(['set', {
    'account_id': '{$account_id}'
}]);

</script>
HTML;
		}

		return '';
	}
}

<?php

use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;

//initialise hooks
$hooks = Hooks::get();
?>

</div>
<a href="#0" class="cd-top"></a>

<!-- JS -->
<?php
Assets::js(array(
	'//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',
	'//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js',
	Url::templatePath() . 'js/scripts.js',
));

//hook for plugging in javascript
$hooks->run('js');

//hook for plugging in code into the footer
$hooks->run('footer');
?>

</body>
</html>

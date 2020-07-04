<?php
class RenderTemplate
{
	function render_template($path, array $args, array $args2)
	{
		extract($args);	extract($args2);		
		ob_start();
		include $path;
		$html = ob_get_clean();
		return $html;
	}
}
?>
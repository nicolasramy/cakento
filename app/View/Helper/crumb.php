<?php
class CrumbHelper extends Helper
{

	var $crumb = array();

	function addElement($name = '', $controller = null)
	{
		/**
		 * Create array for element
		 */
		$element = array
		(
			'name'			=> $name,
			'controller'	=> $controller
		);

		/**
		 * Add element to the crumb
		 */
		$this->crumb[] = $element;

	}

	function getHtml()
	{
		if (count($this->crumb))
		{
			$output = '<ol>';
			$output .= '<li class="first item">';
			$output .= '<a href="/dashboard">';
			$output .= '<img src="/img/icons/16/application.png" class="icon" alt="' .  __('Dashboard', true) . '" />';
			$output .= '</a>';
			$output .= '</li>';

			foreach($this->crumb as $element)
			{

				if ($element['controller'])
				{
					$output .= '<li class="item">';
					$output .= '<a href="/' . $element['controller'] . '">';
					$output .= __($element['name'], true);
					$output .= '</a>';
					$output .= '</li>';
				}
				else
				{
					$output .= '<li class="item last">';
					$output .= __($element['name'], true);
					$output .= '</li>';
				}


			}

			$output .= '</ol>';

			return $output;

		}


	}


}
?>

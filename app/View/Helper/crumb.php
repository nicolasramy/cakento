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
			$output .= '<img src="/img/icons/16/application_view_tile.png" class="icon" alt="' .  __('Dashboard', true) . '" />';
			$output .= '</a>';
			$output .= '</li>';
			$output .= '<li class="separator">&nbsp;</li>';

			foreach($this->crumb as $element)
			{
				$output .= '<li class="item">';

				if ($element['controller'])
				{
					$output .= '<a href="/' . $element['controller'] . '">';
					$output .= __($element['name'], true);
					$output .= '</a>';
				}
				else
				{
					$output .= __($element['name'], true);
				}

				$output .= '</li>';
				$output .= '<li class="separator">&nbsp;</li>';
			}

			$output .= '</ol>';

			return $output;

		}


	}


}
?>

<?php
class BootstrappaginationHelper extends AppHelper
{
	var $url = null;
	var $currentPage = null;
	var $lastPage = null;

	function select($url, $lastPage = null, $currentPage = null)
	{
		$this->url = $url;
		$this->currentPage = $currentPage;
		$this->lastPage = $lastPage;
	}


	function write()
	{
		$sort = isset($this->params['named']['sort']) ? $this->params['named']['sort'] : null;
		$direction = isset($this->params['named']['direction']) ? $this->params['named']['direction'] : null;

		$output = '<div class="pagination pagination-centered">';
		$output .= '<ul>';
		$output .= '<li' . ($this->currentPage == 1  || !$this->currentPage ? ' class="active"' : '') . '>';
		if ($this->currentPage == 1 || !$this->currentPage)
		{
			$output .= '<a href="#">&laquo;</a>';
		}
		else
		{
			if ($sort && $direction)
			{
				$output .= '<a href="' . $this->url . '/page:' . ($this->currentPage - 1) . '/sort:' . $sort . '/direction:' . $direction  . '">&laquo;</a>';
			}
			else
			{
				$output .= '<a href="' . $this->url . '/page:' . ($this->currentPage - 1) . '">&laquo;</a>';
			}
		}
		$output .= '</li>';

		if (($this->currentPage - 7) > 0)
		{
			$min = $this->currentPage - 7;
		}
		else
		{
			$min = 1;
		}

		if (($this->lastPage - 7) > $this->currentPage)
		{
			$max = $this->currentPage + 7;
		}
		else
		{
			$max = $this->lastPage;
		}


		for ($i = $min; $i <= $max; $i++)
		{
			$output .= '<li' . ($this->currentPage == $i  || !$this->currentPage ? ' class="active"' : '') . '>';
			if ($this->currentPage == $i || !$this->currentPage)
			{
				$output .= '<a href="#">' . $i . '</a>';
			}
			else
			{
				if ($sort && $direction)
				{
					$output .= '<a href="' . $this->url . '/page:' . $i . '/sort:' . $sort . '/direction:' . $direction  . '">' . $i . '</a>';
				}
				else
				{
					$output .= '<a href="' . $this->url . '/page:' . $i . '">' . $i . '</a>';
				}
			}
			$output .= '</li>';
		}

		$output .= '<li' . ($this->currentPage == $this->lastPage  || !$this->currentPage ? ' class="active"' : '') . '>';
		if ($this->currentPage == $this->lastPage || !$this->currentPage)
		{
			$output .= '<a href="#">&raquo;</a>';
		}
		else
		{

			if ($sort && $direction)
			{
				$output .= '<a href="' . $this->url . '/page:' . ($this->currentPage + 1) . '/sort:' . $sort . '/direction:' . $direction  . '">&raquo;</a>';
			}
			else
			{
				$output .= '<a href="' . $this->url . '/page:' . ($this->currentPage + 1) . '">&raquo;</a>';
			}
		}
		$output .= '</li>';
		$output .= '</ul>';
		$output .= '</div>';

		echo $output;
	}
}
?>

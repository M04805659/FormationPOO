<?php
namespace Src;

class Render
{
	private $viewPath;
	private $params;

	public function __construct( $viewPath, ?array $params = null)
	{
		$this->viewPath = $viewPath;
		$this->params   = $params;
	}

	public function view()
	{
		ob_start();
		extract($this->params);
		require BASE_VIEW_PATH.  $this->viewPath . '.php';
		return ob_get_clean();
	}

	public static function make(string $viewPath, ?array $params = null)
	{
		return new static($viewPath, $params);
	}

	public function __toString(): string
	{
		return $this->view();
	}
}

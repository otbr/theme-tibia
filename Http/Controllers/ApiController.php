<?php namespace pandaac\ThemeTibia\Http\Controllers;

use Apolune\Core\Http\Controllers\Controller;

use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Foundation\Application;

class ApiController extends Controller {

	/**
	 * The Application implementation.
	 *
	 * @var \Illuminate\Contracts\Foundation\Application
	 */
	protected $app;

	/**
	 * Create a new document controller instance.
	 *
	 * @param  \Illuminate\Contracts\Foundation\Application  $app
	 * @return void
	 */
	public function __construct(Application $app)
	{
		$this->app = $app;
	}

	/**
	 * Generate a suggested name.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function suggestName()
	{
		return new JsonResponse([]);
	}

}

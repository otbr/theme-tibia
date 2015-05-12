<?php namespace pandaac\ThemeTibia\Http\Controllers;

use Faker\Factory as Faker;
use Faker\Provider\en_US\Person;
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
		$faker = Faker::create();

		$faker->addProvider(new Person($faker));

		$name = $faker->firstName().' '.(rand(0, 1) ? $faker->firstName().' ' : null).$faker->lastName();

		return new JsonResponse([$name]);
	}

}

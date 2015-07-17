<?php

namespace pandaac\ThemeTibia\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Eklundchristopher\NameGen\Generator;
use Apolune\Core\Http\Controllers\Controller;
use Eklundchristopher\NameGen\Recipes\Fantasy;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Validation\Factory as Validator;

class ApiController extends Controller
{
    /**
     * The Application implementation.
     *
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * The Request implementation.
     *
     * @var \Illuminate\Http\Request
     */
    protected $request;

    /**
     * Create a new document controller instance.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function __construct(Application $app, Request $request)
    {
        $this->app = $app;
        $this->request = $request;
    }

    /**
     * Generate a suggested name.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Contracts\Validation\Factory  $validator
     * @return response
     */
    public function suggestName(Request $request, Validator $validator)
    {
        $generator = new Generator(new Fantasy);

        $name = $generator->name(rand(1, 2));

        if ($this->validateName($request, $validator, $name)->getData() !== false) {
            return $this->suggestName($request, $validator);
        }

        return new JsonResponse($name);
    }

    /**
     * Check if the given account is valid.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Contracts\Validation\Factory  $validator
     * @return response
     */
    public function validateAccount(Request $request, Validator $validator)
    {
        list($rules, $messages) = [[
            'account'           => ['required', 'min:6', 'max:30', 'alphanum', 'contains_alpha', 'unique:accounts,name'],
        ], [
            'required'          => 'Please enter an account name!',
            'min'               => 'This account name is too short!',
            'max'               => 'This account name is too long!',
            'alphanum'          => 'This account name has an invalid format. Your account name may only consist of numbers 0-9 and letters A-Z!',
            'contains_alpha'    => 'Your account name must include at least one letter A-Z!',
            'unique'            => 'This account name is already used. Please select another one!',
        ]];

        $validator = $validator->make($request->only('account'), $rules, $messages);

        return new JsonResponse($validator->messages()->first() ?: false);
    }

    /**
     * Check if the given email address is valid.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Contracts\Validation\Factory  $validator
     * @return response
     */
    public function validateEmail(Request $request, Validator $validator)
    {
        list($rules, $messages) = [[
            'email'     => ['required', 'email', 'unique:accounts,email', 'unique:__pandaac_accounts,email'],
        ], [
            'required'  => 'Please enter your email address!',
            'email'     => 'This email address has an invalid format. Please enter a correct email address!',
            'unique'    => 'This email address is already used. Please enter another email address!',
        ]];

        $validator = $validator->make($request->only('email'), $rules, $messages);

        return new JsonResponse($validator->messages()->first() ?: false);
    }

    /**
     * Check if the given password is valid.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Contracts\Validation\Factory  $validator
     * @return response
     */
    public function validatePassword(Request $request, Validator $validator)
    {
        list($rules, $messages) = [[
            'password'          => ['required', 'confirmed', 'min:8', 'max:30', 'contains_alpha', 'contains_nonalpha'],
        ], [
            'required'          => 'Please enter a password!',
            'confirmed'         => 'The two passwords do not match!',
            'min'               => 'The password must have at least 8 and less than 30 letters!',
            'max'               => 'The password must have at least 8 and less than 30 letters!',
            'contains_alpha'    => 'The password must contain at least one letter A-Z or a-z!',
            'contains_nonalpha' => 'The password must contain at least one character other than A-Z or a-z!',
        ]];

        $validator = $validator->make($request->only('password', 'password_confirmation'), $rules, $messages);

        return new JsonResponse($validator->messages()->first() ?: false);
    }

    /**
     * Check if the given character name is valid.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Contracts\Validation\Factory  $validator
     * @param  string  $name  null
     * @return response
     */
    public function validateName(Request $request, Validator $validator, $name = null)
    {
        $attributes = $name ? ['name' => $name] : $request->only('name');

        list($rules, $messages) = [[
            'name'                      => ['required', 'min:2', 'max:29', 'alpha_space', 'no_initial_space', 'no_final_space', 'no_multiple_spaces', 
                                            'max_words:3', 'short_words', 'long_words', 'no_vowelless_words', 'no_repeated_characters', 'unique:players,name'],
        ], [
            'required'                  => 'Please enter a name for your character!',
            'min'                       => 'A name must have at least 2 but no more than 29 letters!',
            'max'                       => 'A name must have at least 2 but no more than 29 letters!',
            'alpha_space'               => 'This name contains invalid letters. Please use only A-Z, a-z and space!',
            'no_initial_space'          => 'This name contains a space at the beginning. Please remove this space!',
            'no_final_space'            => 'This name contains a space at the end. Please remove this space!',
            'no_multiple_spaces'        => 'This name contains more than one space between words. Please use only one space between words!',
            'max_words'                 => 'This name contains more than 3 words. Please choose another name!',
            'short_words'               => 'This name contains a word with only one letter. Please use more than one letter for each word!',
            'long_words'                => 'This name contains a word that is too long. Please use no more than 14 letters for each word!',
            'no_vowelless_words'        => 'This name contains a word without vowels. Please choose another name!',
            'no_repeated_characters'    => 'This name contains too many successively repeated character symbols. Please choose another name!',
            'unique'                    => 'This character name is already used. Please select another one!',
        ]];

        $validator = $validator->make($attributes, $rules, $messages);

        return new JsonResponse($validator->messages()->first() ?: false);
    }
}

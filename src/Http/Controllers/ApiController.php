<?php

namespace pandaac\ThemeTibia\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Eklundchristopher\NameGen\Generator;
use Apolune\Core\Http\Controllers\Controller;
use Eklundchristopher\NameGen\Recipes\Fantasy;
use Illuminate\Contracts\Foundation\Application;

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
     * @param  \Illuminate\Http\Request  $app
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
     * @return \Illuminate\Http\Response
     */
    public function suggestName()
    {
        $generator = new Generator(new Fantasy);

        $name = $generator->name(rand(2, 3));

        if ($this->validateName($name)->getData() !== false) {
            return $this->suggestName();
        }

        return new JsonResponse($name);
    }

    /**
     * Check if the given account is valid.
     *
     * @return \Illuminate\Http\Response
     */
    public function validateAccount()
    {
        $account = $this->request->get('account');

        if (empty($account)) {
            return new JsonResponse('Please enter an account name!');
        }

        if (strlen($account) < 6) {
            return new JsonResponse('This account name is too short!');
        }

        if (strlen($account) > 30) {
            return new JsonResponse('This account name is too long!');
        }

        if (! preg_match('/^([a-z0-9]+)$/i', $account)) {
            return new JsonResponse('This account name has an invalid format. Your account name may only consist of numbers 0-9 and letters A-Z!');
        }

        if (! preg_match('/([a-z]+)/i', $account)) {
            return new JsonResponse('Your account name must include at least one letter A-Z!');
        }

        if (app('Apolune\Contracts\Account\Account')->whereName($account)->first()) {
            return new JsonResponse('This account name is already used. Please select another one!');
        }

        return new JsonResponse(false);
    }

    /**
     * Check if the given email address is valid.
     *
     * @return \Illuminate\Http\Response
     */
    public function validateEmail()
    {
        $email = $this->request->get('email');

        if (empty($email)) {
            return new JsonResponse('Please enter your email address!');
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            return new JsonResponse('This email address has an invalid format. Please enter a correct email address!');
        }

        $account  = app('Apolune\Contracts\Account\Account')->whereEmail($email)->first();
        $property = app('Apolune\Contracts\Account\AccountProperties')->whereEmail($email)->first();

        if ($account or $property) {
            return new JsonResponse('This email address is already used. Please enter another email address!');
        }

        return new JsonResponse(false);
    }

    /**
     * Check if the given password is valid.
     *
     * @return \Illuminate\Http\Response
     */
    public function validatePassword()
    {
        list($password, $confirmation) = array_values($this->request->only('password', 'confirmation'));

        if (empty($password) and empty($confirmation)) {
            return new JsonResponse('Please enter a password!');
        }

        if (empty($password) or empty($confirmation)) {
            return new JsonResponse('Please enter the password again!');
        }

        if ($password !== $confirmation) {
            return new JsonResponse('The two passwords do not match!');
        }

        if (strlen($password) < 8 or strlen($password) > 30) {
            return new JsonResponse('The password must have at least 8 and less than 30 letters!');
        }

        if (! preg_match('/([a-z]+)/i', $password)) {
            return new JsonResponse('The password must contain at least one letter A-Z or a-z!');
        }

        if (! preg_match('/([^a-z]+)/i', $password)) {
            return new JsonResponse('The password must contain at least one character other than A-Z or a-z!');
        }

        return new JsonResponse(false);
    }

    /**
     * Check if the given character name is valid.
     *
     * @param  string  $name  null
     * @return \Illuminate\Http\Response
     */
    public function validateName($name = null)
    {
        $name = $name ?: $this->request->get('name');

        if (empty($name)) {
            return new JsonResponse('Please enter a name for your character!');
        }

        if (strlen($name) < 2 and strlen($name) > 29) {
            return new JsonResponse('A name must have at least 2 but no more than 29 letters!');
        }

        if (! preg_match('/^([a-z ]+)$/i', $name)) {
            return new JsonResponse('This name contains invalid letters. Please use only A-Z, a-z and space!');
        }

        if (preg_match('/^\s/', $name)) {
            return new JsonResponse('This name contains a space at the beginning. Please remove this space!');
        }

        if (preg_match('/\s$/', $name)) {
            return new JsonResponse('This name contains a space at the end. Please remove this space!');
        }

        if (preg_match('/\s{2,}/', $name)) {
            return new JsonResponse('This name contains more than one space between words. Please use only one space between words!');
        }

        if (! preg_match('/^[A-Z]/', $name)) {
            return new JsonResponse('The first letter of a name has to be a capital letter!');
        }

        if (preg_match('/(^|\s)(\w){1}(\s|$)/', $name)) {
            return new JsonResponse('This name contains a word with only one letter. Please use more than one letter for each word!');
        }

        if (preg_match('/(^|\s)([^aeiou\s]+)(\s|$)/i', $name)) {
            return new JsonResponse('This name contains a word without vowels. Please choose another name!');
        }

        if (preg_match('/(.)\1{2,}/', $name)) {
            return new JsonResponse('This name contains too many successively repeated character symbols. Please choose another name!');
        }

        if (preg_match('/\S{15,}/', $name)) {
            return new JsonResponse('This name contains a word that is too long. Please use no more than 14 letters for each word!');
        }

        if (str_word_count($name) > 3) {
            return new JsonResponse('This name contains more than 3 words. Please choose another name!');
        }

        if (app('Apolune\Contracts\Account\Player')->whereName($name)->first()) {
            return new JsonResponse('This character name is already used. Please select another one!');
        }

        return new JsonResponse(false);
    }
}

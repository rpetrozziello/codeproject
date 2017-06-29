<?php
/**
 * Created by PhpStorm.
 * User: NOTE
 * Date: 08/06/2017
 * Time: 02:12
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{

    protected $rules = [
        'owner_id' => 'required|integer',
        'client_id' => 'required|integer',
        'name' => 'required',
        'progress' => 'required',
        'status' => 'required',
        'due_date' => 'required'
    ];

}
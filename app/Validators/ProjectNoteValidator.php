<?php
/**
 * Created by PhpStorm.
 * User: NOTE
 * Date: 08/06/2017
 * Time: 02:12
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectNoteValidator extends LaravelValidator
{

    protected $rules = [
        'project_id' => 'required|integer',
        'title' => 'required',
        'note' => 'required',
    ];

}
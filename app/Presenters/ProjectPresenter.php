<?php
/**
 * Created by PhpStorm.
 * User: NOTE
 * Date: 14/06/2017
 * Time: 03:06
 */

namespace CodeProject\Presenters;

use CodeProject\Transformers\ProjectTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class ProjectPresenter extends  FractalPresenter
{
    public function getTransformer()
    {
        return new ProjectTransformer();
    }

}
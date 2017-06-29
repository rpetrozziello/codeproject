<?php
/**
 * Created by PhpStorm.
 * User: NOTE
 * Date: 14/06/2017
 * Time: 03:06
 */

namespace CodeProject\Presenters;

use CodeProject\Transformers\ProjectNoteTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class ProjectNotePresenter extends  FractalPresenter
{
    public function getTransformer()
    {
        return new ProjectNoteTransformer();
    }

}
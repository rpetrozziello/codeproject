<?php
/**
 * Created by PhpStorm.
 * User: NOTE
 * Date: 14/06/2017
 * Time: 03:06
 */

namespace CodeProject\Presenters;

use CodeProject\Transformers\ClientTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class ClientPresenter extends  FractalPresenter
{
    public function getTransformer()
    {
        return new ClientTransformer();
    }

}
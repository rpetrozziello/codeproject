<?php
/**
 * Created by PhpStorm.
 * User: NOTE
 * Date: 14/06/2017
 * Time: 02:56
 */

namespace CodeProject\Transformers;

use CodeProject\Entities\ProjectNote;
use League\Fractal\TransformerAbstract;

class ProjectNoteTransformer extends TransformerAbstract
{

    public function transform(ProjectNote $o)
    {
        return [
            'id' => $o->id,
            'project_id' => $o->project_id,
            'title' => $o->title,
            'note' => $o->note

        ];
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: NOTE
 * Date: 14/06/2017
 * Time: 02:56
 */

namespace CodeProject\Transformers;

use CodeProject\Entities\User;
use League\Fractal\TransformerAbstract;

class ProjectMemberTransformer extends TransformerAbstract
{

    public function transform(User $member)
    {
        return [
            'member_id' => $member->id,
            'name' => $member->name,

        ];
    }

}
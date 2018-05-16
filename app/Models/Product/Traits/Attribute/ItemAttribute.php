<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-09 18:11:20
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-09 18:12:44
 */

namespace App\Models\Product\Traits\Attribute;

/**
 * Trait RoleAttribute.
 */
trait ItemAttribute
{
    /**
     * @return string
     */
    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.auth.role.edit', $this).'" class="btn btn-primary"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.edit').'"></i></a>';
    }


    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        if ($this->id == 1) {
            return 'N/A';
        }

        return '<div class="btn-group btn-group-sm" role="group" aria-label="User Actions">
			  '.$this->edit_button.'
			</div>';
    }
}

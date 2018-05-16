<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-10 11:47:56
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-10 11:59:19
 */

namespace App\Models\Auth\Traits\Attribute;

use Illuminate\Support\Facades\Hash;

/**
 * Trait UserAttribute.
 */
trait UserCustomerAttribute
{

    /**
     * @return string
     */
    public function getCustomerSocialButtonsAttribute()
    {
        $accounts = [];

        foreach ($this->providers as $social) {
            $accounts[] = '<a href="'.route(
                'admin.customer.index',
                    [$this, $social]
            ).'" data-toggle="tooltip" data-placement="top" title="'.__('buttons.backend.access.users.unlink').'" data-method="delete"><i class="fas fa-'.$social->provider.'"></i></a>';
        }

        return count($accounts) ? implode(' ', $accounts) : 'None';
    }

    /**
     * @return string
     */
    public function getCustomerLoginAsButtonAttribute()
    {
        /*
         * If the admin is currently NOT spoofing a user
         */
        if (! session()->has('admin_user_id') || ! session()->has('temp_user_id')) {
            //Won't break, but don't let them "Login As" themselves
            if ($this->id != auth()->id()) {
                return '<a href="'.route(
                    'admin.customer.index',
                        $this
                ).'" class="dropdown-item">'.__('buttons.backend.access.users.login_as', ['user' => $this->full_name]).'</a> ';
            }
        }

        return '';
    }

    /**
     * @return string
     */
    public function getCustomerClearSessionButtonAttribute()
    {
        if ($this->id != auth()->id() && config('session.driver') == 'database') {
            return '<a href="'.route('admin.customer.index', $this).'"
			 	 data-trans-button-cancel="'.__('buttons.general.cancel').'"
                 data-trans-button-confirm="'.__('buttons.general.continue').'"
                 data-trans-title="'.__('strings.backend.general.are_you_sure').'"
                 class="dropdown-item" name="confirm_item">'.__('buttons.backend.access.users.clear_session').'</a> ';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getCustomerShowButtonAttribute()
    {
        return '<a href="'.route('admin.customer.show', $this).'" class="btn btn-info"><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.view').'"></i></a>';
    }

    /**
     * @return string
     */
    public function getCustomerEditButtonAttribute()
    {
        return '<a href="'.route('admin.customer.edit', $this).'" class="btn btn-primary"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="'.__('buttons.general.crud.edit').'"></i></a>';
    }

    /**
     * @return string
     */
    public function getCustomerChangePasswordButtonAttribute()
    {
        return '<a href="'.route('admin.customer.index', $this).'" class="dropdown-item">'.__('buttons.backend.access.users.change_password').'</a> ';
    }

    /**
     * @return string
     */
    public function getCustomerStatusButtonAttribute()
    {
        if ($this->id != auth()->id()) {
            switch ($this->active) {
                case 0:
                    return '<a href="'.route('admin.customer.index', [
                            $this,
                            1,
                        ]).'" class="dropdown-item">'.__('buttons.backend.access.users.activate').'</a> ';

                case 1:
                    return '<a href="'.route('admin.customer.index', [
                            $this,
                            0,
                        ]).'" class="dropdown-item">'.__('buttons.backend.access.users.deactivate').'</a> ';

                default:
                    return '';
            }
        }

        return '';
    }

    /**
     * @return string
     */
    public function getCustomerConfirmedButtonAttribute()
    {
        if (! $this->isConfirmed() && ! config('access.users.requires_approval')) {
            return '<a href="'.route('admin.customer.index', $this).'" class="dropdown-item">'.__('buttons.backend.access.users.resend_email').'</a> ';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getCustomerDeleteButtonAttribute()
    {
        if ($this->id != auth()->id() && $this->id != 1) {
            return '<a href="'.route('admin.customer.destroy', $this).'"
                 data-method="delete"
                 data-trans-button-cancel="'.__('buttons.general.cancel').'"
                 data-trans-button-confirm="'.__('buttons.general.crud.delete').'"
                 data-trans-title="'.__('strings.backend.general.are_you_sure').'"
                 class="dropdown-item">'.__('buttons.general.crud.delete').'</a> ';
        }

        return '';
    }

    /**
     * @return string
     */
    public function getCustomerDeletePermanentlyButtonAttribute()
    {
        return '<a href="'.route('admin.customer.index', $this).'" name="confirm_item" class="btn btn-danger"><i class="fas fa-trash" data-toggle="tooltip" data-placement="top" title="'.__('buttons.backend.access.users.delete_permanently').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getCustomerRestoreButtonAttribute()
    {
        return '<a href="'.route('admin.customer.restore', $this).'" name="confirm_item" class="btn btn-info"><i class="fas fa-refresh" data-toggle="tooltip" data-placement="top" title="'.__('buttons.backend.access.users.restore_user').'"></i></a> ';
    }

    /**
     * @return string
     */
    public function getCustomerActionButtonsAttribute()
    {
        if ($this->trashed()) {
            return '
				<div class="btn-group btn-group-sm" role="group" aria-label="User Actions">
				  '.$this->customer_restore_button.'
				  '.$this->customer_delete_permanently_button.'
				</div>';
        }

        return '
    	<div class="btn-group btn-group-sm" role="group" aria-label="User Actions">
		  '.$this->customer_show_button.'
		  '.$this->customer_edit_button.'
		
		  <div class="btn-group" role="group">
			<button id="userActions" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  More
			</button>
			<div class="dropdown-menu" aria-labelledby="userActions">
			  '.$this->customer_clear_session_button.'
			  '.$this->customer_login_as_button.'
			  '.$this->customer_change_password_button.'
			  '.$this->customer_status_button.'
			  '.$this->customer_confirmed_button.'
			  '.$this->customer_delete_button.'
			</div>
		  </div>
		</div>';
    }
}

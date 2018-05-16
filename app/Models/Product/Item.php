<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-09 15:59:21
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-09 19:51:58
 */
namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product\Traits\Attribute\ItemAttribute;

class Item extends Model
{
	use ItemAttribute;
    protected $table = 'items';
}

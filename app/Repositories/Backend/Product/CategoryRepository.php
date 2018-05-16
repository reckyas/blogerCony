<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-10 06:53:13
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-10 06:55:23
 */

namespace App\Repositories\Backend\Product;

use App\Models\Product\Category;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;

/**
* Class CategoryRepository
*/
class CategoryRepository extends BaseRepository
{
	/**
	 * @return string
	 */
	public function model()
	{
		return Category::class;
	}
}
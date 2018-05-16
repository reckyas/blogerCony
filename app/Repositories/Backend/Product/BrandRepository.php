<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-10 05:11:38
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-10 05:56:20
 */

namespace App\Repositories\Backend\Product;

use App\Models\Product\Brand;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;


class BrandRepository extends BaseRepository
{
	public function model()
	{
		return Brand::class;
	}
}
<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-09 17:51:00
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-09 19:53:53
 */

namespace App\Repositories\Backend\Product;

use App\Models\Product\Item;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;

/**
 * Class ItemRepository.
 */
class ItemRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Item::class;
    }

    public function code($code)
    {
    	return $this->model->where('KdBarang', $code);
    }
}

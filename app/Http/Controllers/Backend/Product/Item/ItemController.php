<?php

/**
 * @Author: Pradesga Indonesia
 * @Date:   2018-05-09 15:55:54
 * @Last Modified by:   Pradesga Indonesia
 * @Last Modified time: 2018-05-10 06:09:40
 */
namespace App\Http\Controllers\Backend\Product\Item;

use App\Models\Product\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\Backend\Product\ItemRepository;

class ItemController extends Controller
{
    protected $itemRepository;

    public function __construct(ItemRepository $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\m_responsekeys(conn, identifier)
     */
    public function index(Request $request)
    {
        $limit  = 5;
        $optperpage = config('options.perpage');
        $items = $this->itemRepository;

        $limit = ($request->limit && in_array($request->limit, $optperpage)) ? $request->limit : $limit;
        
        if ($request->search) {
            $items = $this->itemRepository->code($request->search);
        }

        $items = $items->paginate($limit);
        return view('backend.product.item.index', compact('items', 'optperpage', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}

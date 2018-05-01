<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop;
use App\Shopcat;

class ShopController extends Controller
{
    public function input ($id = null) {
        $shopcats = Shopcat::orderBy('id', 'desc')->orderBy('name')->get();
        if ($id) {
            $item = Shop::findOrFail($id);
        } else {
            $item = new Shop;
        }
        return view('admin.shop', ['item' => $item, 'shopcats' => $shopcats]);
    }
    
    public function save (Request $request) {
        if ($request->has('id')) {
            $item = Shop::findOrFail($request->id);
            $item->fill($request->all()->save());
        } else {
            $item = new Shop();
            $item->name = $request->name;
            $item->status = $request->status;
            $item->date = $request->date;
            $item->short = $request->short;
            $item->description = $request->description;
            $item->price = $request->price;
            $item->author = $request->author;
            $item->discount = $request->discount;
            $item->image = $request->file('image')->getClientOriginalName();
            $item->disdate = $request->disdate;
            $item->quantity = $request->quantity;
            $item->shopcat_id = $request->shopcat_id;
             if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move(public_path() . '/images/shop/', $name);
        }
            $item->save();
        }
        return redirect()->action('Admin\ShopController@index');
    }
    
    public function destroy($id) {
        Shop::destroy($id);
        return redirect()->action('Admin\ShopController@index');
    }
    public function index()
    {
        $items = Shop::all();
        return view('admin.shops', compact('items'));
    }
}

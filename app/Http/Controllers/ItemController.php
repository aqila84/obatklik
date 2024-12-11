<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function showItem(){
        $items = Item::paginate(2);
        return view('home',['items'=>$items]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query'); // Ambil keyword dari input form
        $items = Item::where('itemName', 'like', "%$query%") // Cari berdasarkan kolom 'name'
                    ->orWhere('itemDescription', 'like', "%$query%") // Atau berdasarkan 'description'
                    ->paginate(10); // Pagination

        return view('search_result', compact('items', 'query'));
    }
}

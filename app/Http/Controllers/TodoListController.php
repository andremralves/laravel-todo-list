<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
use Illuminate\Support\Facades\Log;

class TodoListController extends Controller
{
    
    public function index() {
        return view('todolist', ['listItems' => ListItem::where('is_complete', 0)->get()]);
    }

    public function saveItem(Request $request) {
        Log::info(json_encode($request->all()));
        $newListItem = new ListItem;
        $newListItem->name = $request->item;
        $newListItem->is_complete = 0;
        $newListItem->save();
        return redirect('/');
    }

    public function checkTask($id) {
        $listItem = ListItem::find($id);
        $listItem->is_complete = 1;
        $listItem->save();
        return redirect('/');
    }
}

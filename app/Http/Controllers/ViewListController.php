<?php

namespace Bulkly\Http\Controllers;

use Bulkly\BufferPosting;
use Illuminate\Http\Request;

class ViewListController extends Controller
{
    public function index()
    {
        $bufferData = BufferPosting::all();
        // return $bufferData;
        return view('pages/listView', compact('bufferData'));
    }

}

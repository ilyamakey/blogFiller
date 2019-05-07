<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
    public function index()
    {
        $records = Record::all();

        return view('records.records', compact('records'));
    }

    public function create()
    {
        return view('records.create');
    }

    public function store()
    {
        $record = new Record();

        $record->article = request('article');
        $record->content = request('content');
        $record->author_id = rand(1, 1000);

        $record->save();

        return redirect('/records');
    }
}

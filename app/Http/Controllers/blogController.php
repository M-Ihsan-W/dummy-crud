<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class blogController extends Controller
{
    public function __construct() {
        $this->Blog = new Blog();
    }

    public function select() {
        $data = $this->Blog->getData();
        return view('index', compact("data"));
    }

    public function insert(Request $request)
    {
        // dd($request->nama);
        $this->Blog->create($request);
        return redirect('/create');
    }

    public function update(Request $request)
    {
        $this->Blog->edit($request);
        return redirect('/');
    }

    public function getId($id) {
        $data = $this->Blog->getDataById($id);
        return view('edit', compact('data'));
    }

    public function delete($id) {
        $this->Blog->hapus($id);
        return redirect('/');
    }
}

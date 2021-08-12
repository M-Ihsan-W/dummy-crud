<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\blogController;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'tb_blog';
    // biar nama tabel saat migrasi tidak berubah.

    public function getData() {
        $blog = Blog::all();
        return $blog;
    }

    public function create($c)
    {
        $file = $c->gambar;
        $extension = $file->getClientOriginalExtension(); //get image extention
        $filename = time() . '.' . $extension;
        $file->move('img/', $filename);

        $blog = new Blog();
        $blog->nama = $c->nama;
        $blog->email = $c->email;
        $blog->gambar = $filename;
        $blog->save();
    }

    public function edit($a) 
    {   
        if($a->gambar) {
            $file = $a->gambar;
            $extension = $file->getClientOriginalExtension(); //get image extention
            $filename = time() . '.' . $extension;
            $file->move('img/', $filename);
    
            $blog = Blog::find($a->id);
            $blog->nama = $a->nama;
            $blog->email = $a->email;
            $blog->gambar = $filename;
            $blog->save();
        } else {
            $blog = Blog::find($a->id);
            $blog->nama = $a->nama;
            $blog->email = $a->email;
            $blog->save();
        }
    }

    public function hapus($b) {
        Blog::find($b)->delete();
    }

    public function getDataById($id) {
        return Blog::find($id);
    }
}

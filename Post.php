<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/* Membuat Class secara manual

class Post 
{
    public static function all() 
    {
        return [
            [
                'id' => 1,
                'slug' => 'artikel-1',
                'title' => 'Artikel 1',
                'author' => 'Yasin Taryaqil Aghyar',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. \
                Fuga ut pariatur tenetur, voluptate debitis dolores impedit delectus, 
                aspernatur repudiandae optio animi dolore sequi eaque? 
                Ut iusto animi sequi tenetur suscipit.'
            ],
    
            [
                'id' => 2,
                'slug' => 'artikel-2',
                'title' => 'Artikel 2',
                'author' => 'Nobertus',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure nostrum, 
                quos nesciunt reprehenderit laboriosam animi nisi minus,
                error explicabo quibusdam in, 
                molestiae hic nobis excepturi. 
                Molestiae minima soluta laborum porro.'
            ]
        ];
    }

    //Mengambil data berdasarkan slug
    public static function find($slug):array 
    {
        // ---[Menggunakan callback function]---
    //    return Arr::first(static::all(), function($post) use ($slug) {
    //         //Menggunakan static::all() agar memanggil method all yang berada di kelas yang sama (Post)
    //         return $post['slug'] == $slug;
    //     });

        //---[Menggunakan Arrow function]---
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (!$post) { //---> JIKA TIDAK ADA POST MAKA KEMBALIKAN PAGE 404
            abort(404);
        }

        return $post;//---> JIKA ADA POST MAKA KEMBALIKAN DATA POST
    }
}

*/

class Post extends Model //---> Membuat Class Post dengan metode laravel
{
    use HasFactory;
    protected $table = 'posts'; //---> Memanggil table posts (Jamak -> ending harus s)
    protected $primaryKey = 'id'; //---> Memanggil primary (jika primary key bukan id maka harus diisi sesuai namanya)
    protected $fillable = ['title', 'author', 'slug', 'body']; //---> Memberi tahu field yang boleh diisi manual

    protected $with = ['author', 'category']; //---> Default eager loading

    public function author(): BelongsTo
    { //---> Membuat relasi Satu author berelasi ke satu User
        return $this->beLongsTo(User::class);
    }

    public function category():BelongsTo
    {
        return $this->beLongsTo(Category::class);
    }
}

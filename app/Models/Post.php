<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
//    protected $guarded =['id'];  //ya3ne iza jarrabna nghayer l id ma ra7 yetghayar
//   // protected $fillable= ['title', 'excerpt', 'body']; Kell shi mon7otto fiha mne2dar nghayro
//    //mnesta3mel we7de men l 2
//

    protected $with = ['category', 'author'];

    public function getRouteKeyName()
    {
        return 'slug'; // TODO: Change the autogenerated stub
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

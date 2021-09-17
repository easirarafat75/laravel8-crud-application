<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\App\Http\Controllers\ProductController;
class product extends Model
{
    use HasFactory;
    protected $fillable =['name','price','description'];
}

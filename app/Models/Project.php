<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['nome', 'link', 'link_github', 'url_image', 'url_gif', 'description'];
}

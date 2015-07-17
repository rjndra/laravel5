<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    
    protected $table = 'tbl_doc';

    protected $fillable = [
    	'title',
    	'body'
    ];
}

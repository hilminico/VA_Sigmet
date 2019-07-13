<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slice_va extends Model
{
    protected $table = 'slice va';

    protected $fillable = [
        'id','detail', 'waktu', 'fir', 'no sigmet', 'valid','wilayah', 'area', 'event', 'gunung','posisi'
    ];

}

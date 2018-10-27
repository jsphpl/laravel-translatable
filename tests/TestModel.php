<?php

namespace Spatie\Translatable\Test;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TestModel extends Model
{
    use HasTranslations;

    protected $table = 'test_models';

    protected $guarded = [];
    protected $casts = [
        'array_field' => 'array',
    ];
    public $timestamps = false;

    public $translatable = ['name', 'other_field', 'array_field'];
}

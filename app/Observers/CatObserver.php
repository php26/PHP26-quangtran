<?php

namespace App\Observers;

use App\Cat;
use App\Product;
use App\UserProFile;

class CatObserver
{
    /**
     * Handle to the Cat "created" event.
     *
     * @param  \App\Cat  $cat
     * @return void
     */
    public function created(Cat $cat)
    {
        Product::create([
            'name' => 'cat'.$cat->name,
            'category_id' => 2
        ]);
    }

    /**
     * Handle the Cat "updated" event.
     *
     * @param  \App\Cat  $cat
     * @return void
     */
    public function updated(Cat $cat)
    {
        //
    }

    /**
     * Handle the Cat "deleted" event.
     *
     * @param  \App\Cat  $cat
     * @return void
     */
    public function deleted(Cat $cat)
    {
        UserProFile::where('id', 1)->first()->delete();
    }
}
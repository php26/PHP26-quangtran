<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Cat;
use App\Product;
use App\Observers\UserObserver;
use App\Observers\CatObserver;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        Cat::observe(CatObserver::class);
        // Cat::creating(function($cat) {
        //     Product::create([
        //         'name' => 'cat'.$cat->name,
        //         'category_id' => 1
        //     ]);
        // });

    }
}

<?php
namespace GitScrum\Providers;
use Illuminate\Support\ServiceProvider;
use GitScrum\Models\User;
use GitScrum\Observers\UserObserver;
class ObserverServiceProvider extends ServiceProvider
{
    public function boot()
    {
        User::observe(UserObserver::class);
    }
    public function register()
    {
    }
}

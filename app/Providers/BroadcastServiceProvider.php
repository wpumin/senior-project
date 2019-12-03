<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $cookie = $this->request->cookie('role_number');
        // dd(isset($cookie));

        if (isset($cookie)) {

            if ($this->request->cookie('role_number') == '2') {


                Broadcast::routes();

                require base_path('routes/channels.php');
            }
            \abort(404);
        }
        return redirect('/');
    }
}

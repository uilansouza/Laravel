<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //$router->model('volunteer','App\Volunteer'); -> procura pelo ID
        $router->bind('volunteer',function($value){ //-->colocou  o bind no começo
            return \App\Volunteer::where('id',$value)->first();//-> nesse caso procura por email, mas pode mudar o metodo de procura
        });
        $router->model('cause', 'App\Cause');
        $router->model('institution', 'App\Institution');



       // $route->model('URL da rota','Classe do Model')


        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}

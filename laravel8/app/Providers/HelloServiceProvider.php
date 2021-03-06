<?php
namespace App\Providers;

use Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
   public function boot()
   {
      $validator = $this->app['validator'];
      $validator->resolver(function($translator, $data, 
             $rules, $messages) {
          return new HelloValidator($translator, $data, 
                $rules, $messages);
      });
   }
}

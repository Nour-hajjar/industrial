<?php

namespace App\Providers;
use App\Footer;
use App\Setting;
use App\Category;
use App\Color;
use App\Directive;
use App\question;
use App\Loan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
	{
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
            Schema::defaultStringLength(191);
        view()->composer('*', function($view){
            $master_footers = Footer::orderBy('tel', 'ASC')->get();
            $view->with('master_footers', $master_footers);
            
        });
               Schema::defaultStringLength(191);
        view()->composer('*', function($view){
             $master_settings = Setting::orderBy('name_e', 'ASC')->get();
            $view->with('master_settings', $master_settings);
            
        });
               Schema::defaultStringLength(191);
        view()->composer('*', function($view){
             $master_categories = Category::orderBy('slug', 'ASC')->get();
            $view->with('master_categories', $master_categories);
            
        });
                   Schema::defaultStringLength(191);
        view()->composer('*', function($view){
        
          $master_colors = Color::orderBy('color1', 'ASC')->First();
             $view->with('master_colors', $master_colors->toArray());
        
        });
    
                  Schema::defaultStringLength(191);
        view()->composer('*', function($view){
             $master_directives = Directive::orderBy('slug', 'ASC')->get();
            $view->with('master_directives', $master_directives);
			       });
		       Schema::defaultStringLength(191);
        view()->composer('*', function($view){
             $master_questions = question::orderBy('id', 'ASC')->get();
            $view->with('master_questions', $master_questions);
            
        });
		                           Schema::defaultStringLength(191);
        view()->composer('*', function($view){
             $master_loans = Loan::orderBy('id', 'ASC')->get();
            $view->with('master_loans', $master_loans);
            
        });
    }
    
}


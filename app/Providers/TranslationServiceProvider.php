<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class TranslationServiceProvider extends ServiceProvider
{
    /**
     * the path to the current lang files
     * @var String
     */

    protected $langPath;


    /**
     * create a new service Provider instance
     * @return void
     */
    public function __construct($app)
    {
        $this->langPath = resource_path('lang/'.App::getLocale());
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Cache::rememberForever('translations', function (){
            return collect(File::allFiles($this->langPath))->flatMap(function($file){
                return [
                    ($translation = $file->getBaseName('.php'))=> trans($translation),
                ];
            })->toJson();
        });
    }
}

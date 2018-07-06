<?php

namespace ElMictlan\SurveyExp\Providers;

use ElMictlan\SurveyExp\Facades\SurveyExp;
use Illuminate\Support\ServiceProvider;

class SurveyExpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishViews();
        $this->publishResourceAssets();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if(!defined('SURVEYEXP_PATH')){
            define('SURVEYEXP_PATH', realpath( __DIR__ . '/../../'));
        }

        $this->app->bind('SurveyExp', function (){
            return new \ElMictlan\SurveyExp\SurveyExp();
        });
       
    }


    public function publishViews(){
        $this->loadViewsfrom(SURVEYEXP_PATH . '/resources/views/', 'surveyexp');
        $this->publishes(SurveyExp::views(), 'surveyexp');
    }

    public function publishResourceAssets(){
        $this->publishes(SurveyExp::resourceAssests(), 'surveyexp');
    }
}

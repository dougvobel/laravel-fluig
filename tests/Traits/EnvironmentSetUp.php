<?php

namespace doug1n\Fluig\Tests\Traits;


trait EnvironmentSetUp
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('fluig', [
            'domain' => env('FLUIG_DOMAIN'),
            'user' => env('FLUIG_USERNAME'),
            'userId' => env('FLUIG_USERNAME_ID'),
            'password' => env('FLUIG_PASSWORD'),
            'consumerKey' => env('FLUIG_CONSUMER_KEY'),
            'consumerSecret' => env('FLUIG_CONSUMER_SECRET'),
            'accessToken' => env('FLUIG_ACCESS_TOKEN'),
            'tokenSecret' => env('FLUIG_TOKEN_SECRET')
        ]);
    }
}
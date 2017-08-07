<?php

	namespace Egorryaroslavl\Crm;

	use Illuminate\Support\ServiceProvider;

	class CrmServiceProvider extends ServiceProvider
	{

		public function boot()
		{
			$this->loadViewsFrom( __DIR__ . '/views', 'crm' );
			$this->loadRoutesFrom( __DIR__ . '/routes.php' );
			$this->publishes( [ __DIR__ . '/views' => resource_path( 'views/admin/crm' ) ], 'crm' );
			$this->publishes( [ __DIR__ . '/config/crm.php' => config_path( 'admin/crm.php' ) ], 'crmConfig' );

			$this->publishes( [ __DIR__ . '/assets' => public_path( 'assets' ) ], 'assets' );


		}

		public function register()
		{

			$this->app->make( 'Egorryaroslavl\Crm\CrmController' );
			$this->mergeConfigFrom( __DIR__ . '/config/crm.php', 'crm' );

		}

	}
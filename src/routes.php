<?php

	use Illuminate\Http\Request;

	/*=============  CRM  ==============*/

	Route::group( [ 'middleware' => 'web' ], function (){

 		Route::get('/admin',function()
		{
			return view('crm::main');
		});

	} );

	/*=============  CRM  ==============*/


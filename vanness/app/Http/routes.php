Route::get('check-connect',function()){
	if(DB::connection()->getDatabaseName())
	{
	return "Yes! Successfully connected to the DB: " . DB::connection()->
	}else{
	return 'Connection False !!';
	}

});
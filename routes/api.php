<?php


Route::post('/test-webhook', function () {
	logger(request()->headers);
	logger(request()->all());
	return response()->json([
		'message' => 'Webhook received successfully',
		'received_data' => request()->all(),
	]);
});
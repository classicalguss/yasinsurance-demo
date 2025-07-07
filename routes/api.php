<?php


Route::post('/test-webhook', function () {
	return response()->json([
		'message' => 'Webhook received successfully',
		'received_data' => request()->all(),
	]);
});
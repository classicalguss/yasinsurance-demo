<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class DemoController extends Controller
{
    //

	public function testingWebhookCall(Request $request) {

		logger($request->headers);
		logger($request->all());
		return response()->json([
			'status' => 'success'
		]);
	}

	public function aggregator(Request $request) {
		$authResponse = Http::timeout(5)
			->acceptJson()
			->post(config('services.yasmina.base_api_url') . '/oauth/token', [
				'grant_type'    => 'client_credentials',
				'client_id'     => config('services.yasmina.client_id'),
				'client_secret' => config('services.yasmina.client_secret'),
			]);
		$insurances = [];
		$tplInsurances = [];
		if ($authResponse->successful()) {

			$data = [
				'owner_id'            => '1234567890',
				'car_sequence_number' => '987654321',
				'car_year'   => '2025',
				'car_price'        => 116185.00,
				'insurance_type' => 'comp'
			];

			$authResponseJSON = $authResponse->json();

			// (3) Fire the POST
			$response = Http::timeout(5)
				->withToken($authResponseJSON['access_token'])
				->acceptJson()
				->post(config('services.yasmina.base_api_url') . '/api/v1/car/insurance-aggregator', $data);
			if ($response->successful()) {
				$insurances = $response->json();
			}

			$data = [
				'owner_id'            => '1234567890',
				'car_sequence_number' => '987654321',
				'car_year'   => '2025',
				'car_price'        => 116185.00,
				'insurance_type' => 'TPL'
			];

			// (3) Fire the POST
			$response = Http::timeout(5)
				->withToken($authResponseJSON['access_token'])
				->acceptJson()
				->post(config('services.yasmina.base_api_url') . '/api/v1/car/insurance-aggregator', $data);
			if ($response->successful()) {
				$tplInsurances = $response->json();
			}
		}
		return view('car-aggregator', [
			'insurances' => $insurances,
			'tplInsurances' => $tplInsurances
		]);
	}
	public function checkout(Request $request)
	{
		// get the selected key and human-readable label
		$key = $request->input('insurance_coverage');
		$options = [
			'comprehensive'     => 'Comprehensive (Alshamel)',
			'third_party_plus'  => 'Third Party Plus Insurance',
			'third_party'       => 'Third Party Insurance',
			'no_coverage'       => 'No insurance coverage',
		];
		$label = $options[$key] ?? 'No insurance selected';

		// static car details
		$car = [
			'model'   => 'Hyundai Tucson GLS',
			'year'    => 2021,
			'mileage' => '32,000 km',
			'color'   => 'Phantom Black',
			'engine'  => '2.4L 4-Cylinder',
			'price'   => 75000,
		];

		if ($key != "no_coverage") {
			//Buy insurance
			$response = Http::timeout(30)
				->acceptJson()
				->post(config('services.yasmina.base_api_url') . '/oauth/token', [
					'grant_type'    => 'client_credentials',
					'client_id'     => config('services.yasmina.client_id'),
					'client_secret' => config('services.yasmina.client_secret'),
				]);

			if ($response->successful()) {

				$data = [
					'vin'                 => Str::random(17),
					'car_sequence_number' => sprintf('%09d', random_int(0, 999_999_999)),
					'current_car_owner'   => '1234567890',
					'new_owner_id'        => '9876543210',
				];

				// (2) Grab your access_token however you stored it

				$responseJSON = $response->json();

				// (3) Fire the POST
				$response = Http::timeout(30)
					->withToken($responseJSON['access_token'])
					->acceptJson()
					->post(config('services.yasmina.base_api_url') . '/api/v1/car/policies', $data);
			}
		}

		return view('success', [
			'insuranceKey'   => $key,
			'insuranceLabel' => $label,
			'car'            => $car,
		]);
	}
}

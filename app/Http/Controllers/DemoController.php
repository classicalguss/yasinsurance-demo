<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class DemoController extends Controller
{
	public function buyInsurance()
	{
		$authResponse = Http::timeout(180)
			->acceptJson()
			->post( config('services.yasmina.base_api_url'). '/oauth/token', [
				'grant_type' => 'client_credentials',
				'client_id' => env('RER_CLIENT'),
				'client_secret' => env('RER_SECRET'),
			]);

		if ($authResponse->successful()) {
			$data = [
				"insurance_provider" => "walaa",
				"personal_details" => [
					"email" => "ghassan@yasmina.ai",
					"gender" => "M",
					"name" => "Ghassan Barghouti",
					"phone_number" => "+962797531543",
					"birthdate" => "1988-04-20",
					"nationality" => "JO",
					"nationality_id" => "9881052027",
				],
				"building_details" => [
					"building_age" => 20,
					"building_type" => "villa",
					"apartment_size" => 200,
				],
				"address" => [
					"street_name" => "Sweilmeh Street",
					"district_name" => "Tlaa al Ali",
					"city_name" => "Riyadh",
					"additional_number" => "1",
					"zip_code" => "11193",
					"unit_number" => "1",
					"building_number" => "1",
				],
				"property_cost" => 500000,
				"content_cost" => 100000,
				"has_agreed_to_terms_and_conditions" => true,
			];

			$response = Http::timeout(180)
				->withToken($authResponse->json()['access_token'])
				->acceptJson()
				->post(config('services.yasmina.base_api_url') . '/api/v1/property/policies', $data);

			if ($response->successful()) {
				return response()->json([
					'success' => true,
					'paymentUrl' => $response->json()['payment_link']
				]);
			}
			return response()->json([
				'success' => false,
				'message' => $response->json()['message']
			], $response->status());
		}

		return response()->json([
			'success' => false,
			'message' => $authResponse->json()['message']
		], $authResponse->status());
	}

	public function buyProperty() {

		return view('property-demo');
	}

	public function testingWebhookCall(Request $request) {

		logger($request->headers);
		logger($request->all());
		return response()->json([
			'status' => 'success'
		]);
	}

	public function sendOtp(Request $request) {
		$authResponse = Http::timeout(180)
			->acceptJson()
			->post(config('services.yasmina.base_api_url') . '/oauth/token', [
				'grant_type'    => 'client_credentials',
				'client_id'     => config('services.yasmina.client_id'),
				'client_secret' => config('services.yasmina.client_secret'),
			]);

		if (! $authResponse->successful()) {
			throw new \Exception("Unable to authenticate with Yasmina API");
		}

		$token = $authResponse->json('access_token');

		set_time_limit(180); // allow 180 seconds
		$otpResponse = Http::timeout(180)
			->withToken($token)
			->acceptJson()
			->post(config('services.yasmina.base_api_url'). '/api/v1/car-comp/quote-otp', [
				'email'    => $request->email ?? 'masoud@yasmina.ai',
				'phone'    => $request->phone ?? '0533478218',
				'owner_id' => $request->owner_id ?? '2528297837',
			]);

		if (! $otpResponse->successful()) {
			throw new \Exception("Unable to send OTP, please try again later");
		}

		return response()->noContent();
	}

	public function getQuotations(Request $request) {
		set_time_limit(180); // allow 180 seconds
		$authResponse = Http::timeout(180)
			->acceptJson()
			->post(config('services.yasmina.base_api_url') . '/oauth/token', [
				'grant_type'    => 'client_credentials',
				'client_id'     => config('services.yasmina.client_id'),
				'client_secret' => config('services.yasmina.client_secret'),
			]);

		if (! $authResponse->successful()) {
			throw new \Exception("Unable to authenticate with Yasmina API");
		}

		$token = $authResponse->json('access_token');
		$quoteResponse = Http::timeout(180)
			->withToken($token)
			->post(config('services.yasmina.base_api_url') . "/api/v1/car-comp/quote-requests", [
				"email"                 => "masoud@yasmina.ai",
				"owner_id"              => 2528297837,
				"phone"                 => "0533478218",
				"birthdate"             => "1988-12-01",
				"car_sequence_number"   => 866904610,
				"is_ownership_transfer" => true,
				"current_car_owner_id"  => "7012703406",
				"car_estimated_cost"    => 45000,
				"car_model_year"        => 2024,
				"otp"                   => $request->otp ?? '',
			]);

		if ($quoteResponse->status() === 400) {

			$fallbackResponse = Http::timeout(180)
				->withToken($token)
				->get(config('services.yasmina.base_api_url') . '/api/v1/car-comp/quote-requests');

			$quotes = $fallbackResponse->json('data', []);
			$quote = $quotes[0];

			$fallbackQuote = Http::timeout(180)
				->withToken($token)
				->get(config('services.yasmina.base_api_url') . '/api/v1/car-comp/quote-requests/'.$quote['id']);

			return response()->json($fallbackQuote->json());
		}

		return response()->json($quoteResponse->json(), $quoteResponse->status());
	}

	public function aggregator(Request $request) {
		$authResponse = Http::timeout(180)
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
			$response = Http::timeout(180)
				->withToken($authResponseJSON['access_token'])
				->acceptJson()
				->post(config('services.yasmina.base_api_url') . '/api/v1/car/products', $data);
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
			$response = Http::timeout(180)
				->withToken($authResponseJSON['access_token'])
				->acceptJson()
				->post(config('services.yasmina.base_api_url') . '/api/v1/car/products', $data);
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
			$response = Http::timeout(180)
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
				$response = Http::timeout(180)
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

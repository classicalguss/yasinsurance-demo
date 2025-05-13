<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
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

		return view('success', [
			'insuranceKey'   => $key,
			'insuranceLabel' => $label,
			'car'            => $car,
		]);
	}
}

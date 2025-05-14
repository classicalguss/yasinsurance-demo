<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class Insurance extends Component
{
    public function render()
    {
		$response = Http::timeout(30)
			->acceptJson()
			->post(config('services.yasmina.base_uri') . '/oauth/token', [
				'grant_type'    => 'client_credentials',
				'client_id'     => config('services.yasmina.jisr_client_id'),
				'client_secret' => config('services.yasmina.jisr_client_secret'),
			]);
		logger($response);

		if ($response->successful()) {
			$responseJSON = $response->json();

			// (3) Fire the POST
			$response = Http::timeout(30)
				->withToken($responseJSON['access_token'])
				->acceptJson()
				->get(config('services.yasmina.base_uri') . '/api/v1/medical/companies');
			$companyJSON = $response->json()[0];
			logger($companyJSON);
			if ($companyJSON) {
				$data = [
					'employees' => User::whereCurrentTeamId(auth()->user()->currentTeam->id)->get()->toArray()
				];
				$response = Http::timeout(30)
					->withToken($responseJSON['access_token'])
					->acceptJson()
					->put(config('services.yasmina.base_uri') . '/api/v1/medical/companies/'.$companyJSON['id'].'/employees', $data);
				$responseJSON = $response->json();
			}
		}
        return view('livewire.insurance');
    }
}

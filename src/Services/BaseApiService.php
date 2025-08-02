<?php

namespace VectorApiClient\Services;

use Illuminate\Support\Facades\Http;

abstract class BaseApiService
{
    protected string $baseUrl;

    public function __construct()
    {
        $this->baseUrl = rtrim(config('vectorapi.url'), '/');
    }

    protected function get(string $endpoint): array
    {
        return Http::get($this->baseUrl . $endpoint)->json();
    }

    protected function post(string $endpoint, array $data): array
    {
        return Http::post($this->baseUrl . $endpoint, $data)->json();
    }

    protected function delete(string $endpoint, array $data): array
    {
        return Http::withBody(json_encode($data), 'application/json')
                    ->delete($this->baseUrl . $endpoint)
                    ->json();
    }
}

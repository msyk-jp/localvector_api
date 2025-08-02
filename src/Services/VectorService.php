<?php

namespace VectorApiClient\Services;

class VectorService extends BaseApiService
{
    public function register(array $values): array
    {
        return $this->post('/api/register', ['value' => $values]);
    }

    public function list(): array
    {
        return $this->get('/api/list');
    }

    public function delete(array $values): array
    {
        return $this->delete('/api/delete', ['value' => $values]);
    }

    public function judge(string $value): array
    {
        return $this->post('/api/judge', ['value' => [$value]]);
    }
}

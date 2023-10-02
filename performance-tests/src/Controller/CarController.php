<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\Cache;
use Symfony\Component\Routing\Annotation\Route;

class CarController
{
    #[Route('/api/without-cache/car', methods: ['GET'])]
    public function withoutCache(): Response
    {
        return new JsonResponse(
            $this->process()
        );
    }

    #[Route('/api/cache/car', methods: ['GET'])]
    #[Cache(maxage: 15, public: true, mustRevalidate: true)]
    public function cache(): Response
    {
        return new JsonResponse(
            $this->process()
        );
    }

    private function process(): array
    {
        $cars = json_decode( file_get_contents('../var/data.json'), true, 6, JSON_THROW_ON_ERROR);

        $statistics = [];

        foreach ($cars as $car) {
            $statistics['models_per_year_and_producer'][$car['Year']][$car['Make']][] = $car['Model'];
            $statistics['hp_per_year'][$car['Year']][] = $car['Make'];
        }

        foreach ($statistics['hp_per_year'] as $year => $hps) {
            $statistics['avg_hp_per_year'][$year] = round(array_sum($hps) / count($hps));
        }

        return [
            'avg_hp_per_year' => $statistics['avg_hp_per_year'],
            'models_per_year_and_producer' => $statistics['models_per_year_and_producer'],
            'refresh_at' => (new \DateTimeImmutable())->format('Y-m-d H:i:s'),
        ];
    }
}

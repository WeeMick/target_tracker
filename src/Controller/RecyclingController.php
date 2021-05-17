<?php

namespace App\Controller;

use App\Entity\Month;
use App\Entity\Recycling;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class RecyclingController extends AbstractController
{
    #[Route('/recycling', name: 'recyclingIndex')]
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Recycling::class);

        $recyclingData = $repository->findAll();


        return $this->render('recycling/index.html.twig', [
            'recyclingData' => $recyclingData,
        ]);
    }

    #[Route('/recycling/{id}', name: 'recycling')]
    public function buildingAction(ChartBuilderInterface $chartBuilder, $id)
    {

        $repository = $this->getDoctrine()->getRepository(Recycling::class);

        $recyclingData = $repository->find($id);

//        dd($recyclingData[1]);

        // array containing all months. Use this array for getting values for each building
        // or just hardcode the 12 lines

        $jan = $recyclingData->getJanuary();
        $feb = $recyclingData->getFebruary();
        $mar = $recyclingData->getMarch();
        $apr = $recyclingData->getApril();
        $may = $recyclingData->getMay();
        $june = $recyclingData->getJune();
        $july = $recyclingData->getJuly();
        $aug = $recyclingData->getAugust();
        $sept = $recyclingData->getSeptember();
        $oct = $recyclingData->getOctober();
        $nov = $recyclingData->getNovember();
        $dec = $recyclingData->getDecember();

        $chartName = $this->getDoctrine()->getRepository(Recycling::class)->getClassName();

        $repository = $this->getDoctrine()->getRepository(Month::class);
        $months = $repository->findAll();
        $labels = [];
        foreach($months as $month) {
            array_push($labels, $month->getMonth());
        }


        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart->setData([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => $chartName,
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => [$jan, $feb, $mar, $apr, $may, $june, $july, $aug, $sept, $oct, $nov, $dec],
                ],
            ],
        ]);
        $chart->setOptions([
            'scales' => [
                'yAxes' => [
                    ['ticks' => ['min' => 0, 'max' => 100]],
                ],
            ],
        ]);

        return $this->render('recycling/building.html.twig', [
            'recyclingData' => $recyclingData,
            'chart' => $chart
        ]);
    }
}

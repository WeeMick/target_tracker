<?php

namespace App\Controller;

use App\Entity\Recycling;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class RecyclingController extends AbstractController
{
    #[Route('/recycling', name: 'recycling')]
    public function index(ChartBuilderInterface $chartBuilder): Response
    {
        $repository = $this->getDoctrine()->getRepository(Recycling::class);

        $recyclingData = $repository->findAll();


        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart->setData([
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            'datasets' => [
                [
                    'label' => 'Targets!',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => [522, 1500, 2250, 2197, 2345, 3122, 3099],
                ],
            ],
        ]);

        return $this->render('recycling/index.html.twig', [
            'recyclingData' => $recyclingData,
            'chart' => $chart
        ]);
    }

    #[Route('/building/{id}', name: 'recyclingtest')]
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
//        dd($jan);


        $chartName = $this->getDoctrine()->getRepository(Recycling::class)->getClassName();


        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart->setData([
            'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
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

<?php

namespace App\Command;

use App\Entity\Owner;
use App\Entity\Target;
use Doctrine\ORM\EntityManagerInterface;
use League\Csv\Exception;
use League\Csv\Reader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CsvImportCommand extends Command
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function configure()
    {

        $this->setName('csv:import')
            ->setDescription('Imports mock csv file');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Attempting to import the feed.....');

        $reader = Reader::createFromPath('%kernel.root_dir%/../Public/Data/Minimal_Data - updated.csv');
        $reader->setHeaderOffset(0);

//        $header = $reader>getHeader(); //returns the CSV header record
        $records = $reader->getRecords(); //returns all the CSV records as an Iterator object

        foreach ($records as $record) {
            try {
                $target = (new Target());
                $target ->setObjectiveRef($record['objective_ref']);
                $target ->setStatus($record['status']);
                $target ->setImpactArea($record['impact_area']);
                $target ->setObjective($record['objective']);
                $target ->setBaseline($record['baseline']);
                $target ->setOwner($record['owner']);

                $this->em->persist($target);
            } catch (Exception $e) {
            } //returns the CSV document as a string
        }

//        $target = (new Target())
//            ->setObjectiveRef('OBJ0001')
//            ->setStatus('LIVE')
//            ->setImpactArea('Environmental Management')
//            ->setObjective('This is a test objective for csv import')
//            ->setBaseline('Some test text for baseline')
//            ->setOwner('Rebecca');
//
//        $this->em->persist($target);

//        $owner = (new Owner())
//            ->setName('Rebecca Bennett')
//            ->setRole('Environmental Manager');
//
//        $this->em->persist($owner);

//        $target->setOwner($owner);

        $this->em->flush();

        $io->success('Data loaded successfully');

        return Command::SUCCESS;
    }
}
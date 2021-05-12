<?php

namespace App\Command;

use App\Entity\Owner;
use App\Entity\Target;
use Doctrine\ORM\EntityManagerInterface;
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
//        parent::configure(); // TODO: Change the autogenerated stub

        $this->setName('csv:import')
            ->setDescription('Imports mock csv file');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
//        parent::execute($input, $output); // TODO: Change the autogenerated stub
        $io = new SymfonyStyle($input, $output);

        $io->title('Attempting to import the feed.....');

        $target = (new Target())
            ->setObjectiveRef('OBJ0001')
            ->setStatus('LIVE')
            ->setImpactArea('Environmental Management')
            ->setObjective('This is a test objective for csv import')
            ->setBaseline('Some test text for baseline')
            ->setOwner('Rebecca')
            ;

        $this->em->persist($target);
        
        $owner = (new Owner())
        ->setName('Rebecca Bennett')
        ->setRole('Environmental Manager');

        $this->em->persist($owner);

//        $target->setOwner($owner);

        $this->em->flush();

        $io->success('Data loaded successfully');

        return Command::SUCCESS;
    }
}
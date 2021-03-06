<?php

namespace GlebecV;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SumCommand extends Command
{
    protected function configure()
    {
        $this->setName('sum')
             ->setDescription('This command sums two numbers')
             ->addArgument('a', InputArgument::REQUIRED, 'First number')
             ->addArgument('b', InputArgument::REQUIRED, 'Second number');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $a = $input->getArgument('a');
        $b = $input->getArgument('b');

        $sum = new Summator($a, $b);

        $output->writeln($sum->getSum());
    } 
}

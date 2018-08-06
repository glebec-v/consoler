<?php

namespace GlebecV;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SumCommand extends Command
{
    public function configure()
    {
        $this->setName('sum')
             ->setDescription('This command sums two numbers')
             ->addArgument('a', InputArgument::REQUIRED, 'First number')
             ->addArgument('b', InputArgument::REQUIRED, 'Second number');
    }

    protected function execute(InputInterface $a, InputInterface $b)
    {
        $a = $input->getArgument('a');
        $b = $input->getArgument('b');
        $output->writeln("Hello from execute");
    } 
}

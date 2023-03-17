<?php

declare(strict_types=1);

namespace Kiboko\Component\State\StateOutput;

use Symfony\Component\Console\Output\ConsoleOutput;

final class Workflow
{
    /** @var list<Pipeline> */
    private array $pipelines = [];
    private string $index = 'A';

    public function __construct(
        private readonly ConsoleOutput $output,
    ) {
    }

    public function withPipeline(string $label): Pipeline
    {
        return $this->pipelines[] = new Pipeline($this->output, $this->index++, $label);
    }

    public function update(): void
    {
        foreach ($this->pipelines as $pipeline) {
            $pipeline->update();
        }
    }
}

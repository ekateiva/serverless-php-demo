<?php

namespace App\Commands;

use LaravelZero\Framework\Commands\Command;

class UpdateProductTitle extends Command
{
    protected $signature = 'update-product-title {id} {title}';

    protected $description = 'Update product title';

    public function handle(): int
    {
        // Do some action

        $this->info(sprintf(
            'Product [ID: %d] title was updated to "%s"',
            $this->argument('id'),
            $this->argument('title')
        ));

        return 0;
    }
}

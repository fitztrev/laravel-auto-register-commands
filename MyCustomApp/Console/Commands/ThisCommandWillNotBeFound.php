<?php

namespace MyCustomApp\Console\Commands;

use Illuminate\Console\Command;

class ThisCommandWillNotBeFound extends Command
{
    protected $signature = 'command:not-found';
    protected $description = 'This command will be NOT be auto-registered, because it\'s in the MyCustomApp namespace.';
}

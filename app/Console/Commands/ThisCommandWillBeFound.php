<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ThisCommandWillBeFound extends Command
{
    protected $signature = 'command:found';
    protected $description = 'This command will be auto-registered, because it\'s in the App namespace.';
}

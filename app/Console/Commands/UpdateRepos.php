<?php

namespace App\Console\Commands;

use App\Models\Repo;
use Github\Client;
use Github\ResultPager;
use Illuminate\Console\Command;

class UpdateRepos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'repos:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update all repos';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client();
        $paginator = new ResultPager($client);

        $repos = $paginator->fetchAll(
            $client->api('user'),
            'repositories',
            ['spatie']
        );

        collect($repos)->each(function (array $repo) {
            $repo = Repo::updateOrCreate([
                'github_id' => $repo['id'],
            ],
            [
                'description' => $repo['description'],
                'name' => $repo['name'],
                'url' => $repo['html_url'],
            ]);
        });

        return 0;
    }
}

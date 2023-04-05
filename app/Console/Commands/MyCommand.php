<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Notifications\TestNotification;

class MyCommand extends Command
{
    protected $signature = 'my-command';

    protected $description = 'Create a new user';

    public function handle(): void
    {
        try {
            // User::create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            //     'password' => bcrypt('password')
            // ]);
            $notificationData = [
                'url' => '/notification',
                'title' => 'Test notification title will be here',
                'job_no' => null,
                'body' => '',
                'module' => 'test',
                'task_id' => 4,
            ];
            
            $user = User::first();
            if ($user) {
                $user->notify(new TestNotification($notificationData));
            }
            $this->info('MyCommand completed successfully!');
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }
}

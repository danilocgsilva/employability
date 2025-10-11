<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\Eloquent\UserRepository;

class CreateUser extends Command
{
    private UserRepository $userRepository;
    
    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $userEmail = $this->ask('Enter user email:');
        $userPassword = $this->ask('Enter user password:');
        $userName = $this->ask('Enter user name:');

        $this->userRepository->create([
            'email' => $userEmail,
            'password' => $userPassword,
            'name' => $userName,
        ]);
    }
}

<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Todos;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Start_of_day_checklist extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todo:start_of_day_checklist';

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
        $users = User::all();
        $today = Carbon::today()->toDateString();


        
        /**
         *  Loops through each user and send them an email
         *  with total of todo list to be done on that day.
         * an email will be send daily
         */
        foreach ($users as $user) {
            $todos_count = Todos::where('user_id', $user->id)->whereDate('StartDate', $today)->count();
            $todos = Todos::where('user_id', $user->id)->whereDate('StartDate', $today);
            Mail::to($user->email)->send(new \App\Mail\Morningreport($user, $todos_count, $todos));
        }
    }
}

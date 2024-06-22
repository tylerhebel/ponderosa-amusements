<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Storage;
use Statamic\Events\EntrySaving;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LeagueSaving
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EntrySaving $event): void
    {
        dd($event);
        if ($event->entry->collection !== 'leagues') {
            return;
        }

        $server = env('FTP_HOST');
        $user = env('FTP_USERNAME');
        $pass = env('FTP_PASSWORD');
//        dd($pass);
        $leagueName = $event->entry->name;

        $schedule = Storage::disk('ftp')->get("sched/$leagueName.txt");
        $standings = Storage::disk('ftp')->get("standings/$leagueName.std");

        if ($schedule) {
            $event->entry->schedule = $schedule;
        }

        if ($standings) {
            $event->entry->standings = $standings;
        }

        return;
//dd($dirs);
        try {
            $connection = ftp_connect($server);
            $login = ftp_login($connection, $user, $pass);
            ftp_pasv($connection, true);
//            ftp_chdir($connection, 'standings');
            dd(ftp_nlist($connection, '.'));
            $file = ftp_get($connection, '124.txt', '124.txt');

            dd($file);
        } catch (\Exception $e) {
            dd($e);
        }
//
//        dd($connection);
//
//        \Safe\ftp_pasv($connection, true);

//        switch ($type) {
//            case 'schedule':
//                $directory = 'sched';
//                $extension = '.txt';
//                break;
//            case 'standings':
//                $directory = 'standings';
//                $extension = '.std';
//                break;
//        }
//        $local_file = $filename . $extension;
//        $server_file = $filename . $extension;

        $directory = 'sched';
        $server_file = $event->entry->name . '.std';

        $url = "ftp://" . $user . ":" . $pass . "@www.leagueleader.net:21/$directory/$server_file";
//        dd($url);
//        dd($url);
        $schedule = file_get_contents($url);
//        dd(Storage::disk('ftp')->get('sched/124.std'));
dd($schedule);
        $event->entry->schedule = $schedule;

    }
}

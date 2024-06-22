<?php

namespace Database\Seeders;

use App\Models\League;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        League::factory()->create([
            'name' => '124',
            'description' => 'League 124 - Summer 2024',
            'active' => true,
            'schedule'=> "Schedule for 125 - Sunday 01 Cricket

Completed matches are hidden.

Division A
Week| Date | Home Team            | Visitor Team         | Location             | Note
----+------+----------------------+----------------------+----------------------+
  1 | 4/28/2024                   |                                             |
             Toy Takers           | Shootin 4 The Finger | Jim's Neighborhood   |
             Pour Decisions       | Washd Up Centerville | Rilea's Pub          |
           +----------------------+----------------------+----------------------+

  2 | 5/05/2024                   |                                             |
           +----------------------+----------------------+----------------------+

  3 | 5/19/2024                   |                                             |
           +----------------------+----------------------+----------------------+

  4 | 6/02/2024                   |                                             |
             Toy Takers           | The Outsiders        | Jim's Neighborhood   |
           +----------------------+----------------------+----------------------+

  5 | 6/09/2024                   |                                             |
           +----------------------+----------------------+----------------------+

  6 | 6/23/2024                   |                                             |
             The Outsiders        | Shane Ray Team ReMax | Farside Lounge       |
             Shootin 4 The Finger | Toy Takers           | O'Leary's Pub        |
             Washd Up Centerville | Pour Decisions       | Harmony Bowl         |
           +----------------------+----------------------+----------------------+

  7 | 6/30/2024                   |                                             |
             The Outsiders        | Pour Decisions       | Farside Lounge       |
             Toy Takers           | Washd Up Centerville | Jim's Neighborhood   |
             Shane Ray Team ReMax | Shootin 4 The Finger | Harmony Bowl         |
           +----------------------+----------------------+----------------------+

  8 | 7/07/2024                   |                                             |
             Shootin 4 The Finger | The Outsiders        | O'Leary's Pub        |
             Washd Up Centerville | Shane Ray Team ReMax | Harmony Bowl         |
             Pour Decisions       | Toy Takers           | Rilea's Pub          |
           +----------------------+----------------------+----------------------+

  9 | 7/14/2024                   |                                             |
             The Outsiders        | Toy Takers           | Farside Lounge       |
             Shane Ray Team ReMax | Pour Decisions       | Harmony Bowl         |
             Shootin 4 The Finger | Washd Up Centerville | O'Leary's Pub        |
           +----------------------+----------------------+----------------------+

 10 | 7/21/2024                   |                                             |
             Washd Up Centerville | The Outsiders        | Harmony Bowl         |
             Pour Decisions       | Shootin 4 The Finger | Rilea's Pub          |
             Toy Takers           | Shane Ray Team ReMax | Jim's Neighborhood   |
           +----------------------+----------------------+----------------------+",
            'standings' => "League: 125, Sunday 01 Cricket

Report Date: 6/09/2024 8:07 PM

Division A
----------

Team Standings, sorted by Wins

 Team                 | Games | Wins | Losses |
----------------------+-------+------+--------+
 Shootin 4 The Finger |    52 |   40 |     12 |
 Pour Decisions       |    52 |   30 |     22 |
 The Outsiders        |    52 |   26 |     26 |
 Toy Takers           |    39 |   25 |     14 |
 Washd Up Centerville |    52 |   21 |     31 |
 Shane Ray Team ReMax |    65 |   14 |     51 |
----------------------+-------+------+--------+

Most Improved Players for week 5, All X01 games:

 Player           | Team                 | Previous PPD | PPD   | PPD Improvement |
------------------+----------------------+--------------+-------+-----------------+
 Zach Clement     | Toy Takers           |        22.28 | 24.11 |            1.83 |
 Crystal Gonzalez | Shootin 4 The Finger |        24.40 | 25.55 |            1.15 |
------------------+----------------------+--------------+-------+-----------------+

Most Improved Players for week 5, All Cricket games:

 Player           | Team                 | Previous MPR | MPR  | MPR Improvement |
------------------+----------------------+--------------+------+-----------------+
 Crystal Gonzalez | Shootin 4 The Finger |         2.24 | 2.50 |            0.26 |
 Kat Martinez     | The Outsiders        |         1.53 | 1.71 |            0.18 |
------------------+----------------------+--------------+------+-----------------+

Combined X01/Cricket games, sorted by MPR:

 Player             | TeamName             | Games | MPR  | PPD   | CrkHat | 5MR | 6MR | 7MR | 8MR | 9MR | Whrse | Hat | LTon | HTon | Ton80 | 3BD |
--------------------+----------------------+-------+------+-------+--------+-----+-----+-----+-----+-----+-------+-----+------+------+-------+-----+
 River Heady        | Shootin 4 The Finger |    24 | 2.91 | 25.11 |      1 |   7 |   3 |   2 |   0 |   1 |     0 |   5 |   23 |    1 |     0 |   0 |
 Paul Coplen        | Pour Decisions       |    24 | 2.67 | 20.39 |      0 |   5 |   3 |   0 |   0 |   0 |     0 |   0 |   15 |    0 |     0 |   0 |
 Andy Carter        | The Outsiders        |    24 | 2.56 | 25.42 |      0 |   2 |   4 |   3 |   1 |   0 |     0 |   4 |   28 |    1 |     0 |   0 |
 Zach Clement       | Toy Takers           |    18 | 2.52 | 24.11 |      0 |   4 |   2 |   1 |   1 |   0 |     0 |   4 |   14 |    0 |     0 |   0 |
 Crystal Gonzalez   | Shootin 4 The Finger |    18 | 2.50 | 25.55 |      0 |   3 |   2 |   1 |   0 |   0 |     0 |   4 |   20 |    1 |     0 |   0 |
 Greg Stalilonis    | Pour Decisions       |    24 | 2.48 | 25.93 |      2 |   5 |   2 |   0 |   0 |   0 |     0 |   6 |   30 |    0 |     0 |   0 |
 Mo Heady           | Shootin 4 The Finger |    24 | 2.48 | 21.56 |      1 |   6 |   2 |   2 |   1 |   0 |     0 |   4 |   16 |    0 |     0 |   0 |
 Otis Knapp         | The Outsiders        |    12 | 2.46 | 22.56 |      0 |   4 |   1 |   0 |   0 |   0 |     0 |   1 |    9 |    0 |     0 |   0 |
 Adam Brady         | Toy Takers           |     6 | 2.43 | 23.21 |      0 |   0 |   0 |   0 |   0 |   0 |     0 |   0 |    4 |    0 |     0 |   0 |
 Robert Heady       | Shootin 4 The Finger |     6 | 2.20 | 24.48 |      0 |   1 |   0 |   0 |   0 |   0 |     0 |   1 |    3 |    0 |     0 |   0 |
 Steve Milligan     | Toy Takers           |    12 | 2.14 | 19.56 |      0 |   2 |   0 |   0 |   0 |   0 |     0 |   2 |    5 |    0 |     0 |   0 |
 Michelle Morris    | The Outsiders        |    24 | 1.95 | 18.77 |      0 |   1 |   1 |   2 |   0 |   0 |     0 |   1 |    9 |    0 |     0 |   0 |
 Billy Walker       | Pour Decisions       |    18 | 1.92 | 23.46 |      0 |   2 |   0 |   1 |   0 |   0 |     0 |   4 |   15 |    0 |     0 |   0 |
 Jerry Howell       | Shane Ray Team ReMax |    30 | 1.90 | 19.56 |      0 |   3 |   1 |   1 |   0 |   0 |     0 |   1 |   14 |    0 |     0 |   0 |
 Jason Robertson    | Toy Takers           |    12 | 1.76 | 19.85 |      0 |   0 |   0 |   1 |   1 |   0 |     0 |   1 |    4 |    0 |     0 |   0 |
 Nicola Angle       | Pour Decisions       |    24 | 1.73 | 16.80 |      0 |   6 |   1 |   0 |   0 |   0 |     0 |   0 |    4 |    0 |     0 |   0 |
 Kat Martinez       | The Outsiders        |    24 | 1.71 | 16.94 |      0 |   0 |   1 |   0 |   0 |   0 |     0 |   3 |    8 |    0 |     0 |   0 |
 Jordan Bunten      | Washd Up Centerville |    24 | 1.66 | 14.95 |      0 |   1 |   1 |   0 |   0 |   0 |     0 |   0 |    6 |    0 |     0 |   0 |
 Cassandra Heady    | Shootin 4 The Finger |    24 | 1.61 | 15.74 |      0 |   2 |   1 |   1 |   0 |   0 |     0 |   0 |    4 |    0 |     0 |   0 |
 Julie Lucas        | Toy Takers           |    18 | 1.61 | 15.87 |      0 |   1 |   2 |   0 |   0 |   0 |     0 |   0 |    1 |    0 |     0 |   0 |
 Jesse Hill         | The Outsiders        |    12 | 1.48 | 19.99 |      0 |   1 |   0 |   1 |   0 |   0 |     0 |   0 |    7 |    0 |     0 |   0 |
 Bradford Korin     | Washd Up Centerville |    18 | 1.44 | 15.61 |      0 |   1 |   1 |   0 |   1 |   0 |     0 |   0 |    1 |    0 |     0 |   0 |
 Sharod Laing       | Washd Up Centerville |    18 | 1.42 | 18.98 |      0 |   0 |   0 |   1 |   0 |   0 |     0 |   0 |   10 |    0 |     0 |   0 |
 Casie Korin        | Washd Up Centerville |    12 | 1.37 | 15.16 |      0 |   2 |   0 |   0 |   0 |   0 |     0 |   0 |    2 |    0 |     0 |   0 |
 Scarleth Laing     | Washd Up Centerville |    24 | 1.29 | 16.75 |      0 |   1 |   0 |   0 |   0 |   0 |     0 |   0 |    7 |    0 |     0 |   0 |
 Robert Vaiza       | Shane Ray Team ReMax |    30 | 1.21 | 16.71 |      0 |   0 |   0 |   0 |   0 |   0 |     0 |   2 |    6 |    0 |     0 |   0 |
 Krystle Robertson  | Toy Takers           |     6 | 1.20 | 17.35 |      0 |   0 |   0 |   0 |   0 |   0 |     0 |   1 |    0 |    0 |     0 |   0 |
 Leila Larsen       | Shane Ray Team ReMax |    24 | 1.18 | 14.90 |      1 |   1 |   0 |   0 |   0 |   0 |     0 |   0 |    4 |    0 |     0 |   0 |
 Jamie Howell       | Shane Ray Team ReMax |     6 | 1.18 | 12.99 |      0 |   0 |   0 |   0 |   0 |   0 |     0 |   0 |    0 |    0 |     0 |   0 |
 Heather Nottingham | Shane Ray Team ReMax |    30 | 1.09 | 15.72 |      0 |   3 |   0 |   0 |   0 |   0 |     0 |   0 |    6 |    0 |     0 |   0 |
 Char Wilson        | Pour Decisions       |     6 | 0.95 | 13.12 |      0 |   0 |   0 |   0 |   0 |   0 |     0 |   0 |    0 |    0 |     0 |   0 |
--------------------+----------------------+-------+------+-------+--------+-----+-----+-----+-----+-----+-------+-----+------+------+-------+-----+"
        ]);
    }
}

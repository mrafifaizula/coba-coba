<?php

namespace Database\Seeders;

use App\Models\DetailFilm;
use Illuminate\Database\Seeder;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailFilm::insert([
            'film_id' => 1,
            'code_film' => 'tt27004148',
            'url_cdbm' => 'https://www.imdb.com/title/tt27004148/?ref_=hm_inth_tt_i_1',
        ]);

        DetailFilm::insert([
            'film_id' => 2,
            'code_film' => 'tt9064858',
            'url_cdbm' => 'https://www.imdb.com/title/tt9064858/?ref_=hm_stp__tt_i_6',
        ]);
        DetailFilm::insert([
            'film_id' => 3,
            'code_film' => 'tt16426418',
            'url_cdbm' => 'https://www.imdb.com/title/tt16426418/?ref_=hm_top_tt_i_5',
        ]);

    }
}

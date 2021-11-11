<?php
/* Mandamos a traer nuesto modelo */
use App\Tags;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'nombre' => Str::random(10),
            
        ]);
    }
 
}

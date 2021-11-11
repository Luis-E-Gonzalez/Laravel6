<?php
use App\Images;
/* importamos el modelo a ocupar category Model*/
use App\Category;
use App\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      /* definis la cantidad de registros que vamos a inserta en la BD */
      $cantidadImages = 500; 
      /* Hacemos la llamada a nuestro factory de tags y utilizamos el metodo create para inserta la cantidad
      de datos a nuestra BD */
          factory(Images::class,$cantidadImages)->create();
          factory(Category::class,500)->create();
          factory(Article::class,500)->create();
              //$this->call(UsersTableSeeder::class);
      }
         //$this->call(UsersTableSeeder::class);
    }


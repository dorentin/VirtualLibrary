<?php

use Illuminate\Database\Seeder;
use App\Permission as Permission;

class PermmisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
        		//Rolet
        	[
        		'name' => 'Roli-Lexo',
        		'display_name' => 'Lista e roleve',
        		'description' => 'Shiko vetem listen e roleve',	
        	],
        	
        	[
        		'name' => 'Roli-Krijo',
        		'display_name' => 'Krijo Rolin',
        		'description' => 'Krijo nje rol',
        	],
        		
        	[
        		'name' => 'Roli-Edito',
        		'display_name' => 'Edito Rolin',
        		'description' => 'Edito nje rol',
        	],
        		
        	[
       			'name' => 'Roli-Fshij',
     			'display_name' => 'Fshij Rolin',
    			'description' => 'Fshije nje rol',
        	],
        		//Librat
        	[
        		'name' => 'Libri-Shiko',
        		'display_name' => 'Lista e Librave',
        		'description' => 'Shiko vetem listen e librave',
        	],
        		
        	[
        		'name' => 'Libri-Shto',
        		'display_name' => 'Shto Librin',
        		'description' => 'Shto nje liber',
        	],
        	
        	[
        		'name' => 'Libri-Edito',
        		'display_name' => 'Edito librin',
        		'description' => 'Edito nje liber',
        	],
        		
        	[
        		'name' => 'Libri-Fshij',
        		'display_name' => 'Fshij librin',
        		'description' => 'Fshije nje liber',
        	],
        		
        		//Kategorit e librave
        	[
        		'name' => 'Ketogori-Lexo',
        		'display_name' => 'Lista kategorive te librave',
        		'description' => 'Shiko vetem listen e kategorive te librave',
        	],
        		
        	[
        		'name' => 'Ketogori-Shto',
        		'display_name' => 'Lista kategorive',
        		'description' => 'Shiko vetem listen e kategorive te librave',
        	],
        		
        	[
        		'name' => 'Ketogori-Edito',
        		'display_name' => 'Edito Kategorine e librave',
        		'description' => 'Edito kategorine e librave',
        	],
        		
        	[
        		'name' => 'Ketogori-Fshij',
        		'display_name' => 'Fshij kategorine e librave',
        		'description' => 'Fshij kategorine e librave',
        	],
        		
        	//Autoret
        	[
        		'name' => 'Shiko-Autoret',
        		'display_name' => 'Lista e autoreve',
        		'description' => 'Shiko vetem listen e autoreve',
        	],
        		
        	[
        		'name' => 'Shto-Autor',
        		'display_name' => 'Shto nje autor',
        		'description' => 'Shto nje autor',
        	],
        		
        	[
        		'name' => 'Edito-Autoret',
        		'display_name' => ' Edito autorin',
        		'description' => 'Edito autorin',
        	],
        		
        	[
        		'name' => 'Fshij-Autoret',
        		'display_name' => 'Fshij  autor',
        		'description' => 'Fshij autoret',
        	],
        		//Perdoruesit
        		
        	[
        		'name' => 'Shiko-Perdoruesit',
        		'display_name' => 'Shiko Perdoruesit',
        		'description' => 'Shiko listen e perdoruesve',
        	],
        		
        	[
        		'name' => 'Shto-Perdorues',
        		'display_name' => 'Shto  perdorues',
        		'description' => 'Shto perdorues',
        	],
        		
        	[
        		'name' => 'Edito-Perdorues',
        		'display_name' => 'Edito perdorues',
        		'description' => 'Edito perdorues',
        	],
        		
        	[
        		'name' => 'Fshij-Perdorues',
        		'display_name' => 'Fshij  perdorues',
        		'description' => 'Fshij perdorues',
        	],

        ];
        
        foreach($permissions as $key=> $value){
        	Permission::create($value);
        }
    }
}

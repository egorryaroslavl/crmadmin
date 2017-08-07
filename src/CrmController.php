<?php

	namespace Egorryaroslavl\Crm;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Validation\Rule;

	class CrmController extends Controller
	{


		public static function mainMenu()
		{

			$path     = config_path( 'admin' );
			$menu     = [];
			$mainLink = config( 'admin.menu' );
			$menu[]   = $mainLink[ 0 ];
			/* обходим директорию $path в поисках файлов конфигураций */
			foreach( glob( $path . "/*.php" ) as $filename ){
				$basename = basename( $filename );
				$fileName = str_replace( ".php", "", $basename );

				/* если в файле есть массив с ключом "menu" забираем его в массив $menu[]  */
				if( !is_null( config( 'admin.' . $fileName . '.menu' ) ) ){
					$menu[] = config( 'admin.' . $fileName . '.menu' );
				}

			}
			return $menu;
		}

	}

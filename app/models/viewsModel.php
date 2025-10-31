<?php
	
	namespace app\models;

	class viewsModel{

		protected function obtenerVistasModelo($vista){
			$listaBlanca=["dashboard","cashierNew","cashierList",
			"cashierSearch","cashierUpdate","userNew","userList",
			"userUpdate","userSearch","userPhoto","clientNew",
			"clientList","clientSearch","categoryUpdate",
			"productNew","productList","productSearch",
			"productUpdate","productPhoto","productCategory",
			"companyNew","saleNew","saleList","saleSearch",
			"saleDetail","logOut","categoryList","categoryNew","categorySearch"];

			if (in_array($vista, $listaBlanca)) {
				if(is_file("./app/views/content/".$vista."-view.php")){
					$contenido="./app/views/content/".$vista."-view.php";
				} else {
					$contenido="404";
				}
			}elseif ($vista=="login" || $vista=="index") {
				$contenido="login";
			}else {
				$contenido="404";
			}
			return $contenido;
			}
		}

	?>
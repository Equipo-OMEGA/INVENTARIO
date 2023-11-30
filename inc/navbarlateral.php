<style>
	/*Tipografia*/
	@font-face{
		font-family: "RobotoCondensedLight";
		src: url("../webfonts/robotocondensed-light.ttf"), 
		url("../webfonts/robotocondensed-light.eot"), 
		url("../webfonts/robotocondensed-light.woff"), 
		url("../webfonts/robotocondensed-light.woff2"), 
		url("../webfonts/robotocondensed-light.svg");
	}
	@font-face{
		font-family: "RobotoRegular";
		src: url("../webfonts/roboto-regular.ttf"), 
		url("../webfonts/roboto-regular.eot"), 
		url("../webfonts/roboto-regular.woff"), 
		url("../webfonts/roboto-regular.woff2"), 
		url("../webfonts/roboto-regular.svg");
	}
	@font-face{
		font-family: "OswaldLight";
		src: url("../webfonts/oswald-light.ttf"), 
		url("../webfonts/oswald-light.eot"), 
		url("../webfonts/oswald-light.woff"), 
		url("../webfonts/oswald-light.woff2"), 
		url("../webfonts/oswald-light.svg");
	}

	body,html{
		height: 100%;
		width: 100%;
		margin: 0;
		padding: 0;
		font-size: 16px;
		font-family: "RobotoRegular";
		position: relative;
		background-color: #fff;
	}

	.main-container{
		height: 100%;
		width: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		background: #000428;
		background: -webkit-linear-gradient(to right, #004e92, #000428);
		background: linear-gradient(to right, #004e92, #000428);
	}

	.main-container > .login,
	.main-container > .hero-body{
		height: auto;
		width: 100%;
		max-width: 400px;
		min-width: 300px;
	}

	.is-photo{
		max-width: 300px;
		height: auto;
		margin: 0 auto;
	}

	.text-condensedLight{ font-family: "RobotoCondensedLight"; }
	.tittles{ font-family: "OswaldLight"; }
	.full-width{
		margin: 0;
		padding: 0;
		width: 100%;
		box-sizing: border-box;
	}
	.list-unstyle{
		margin: 0;
		padding: 0;
		list-style: none;
		box-sizing: border-box;
	}
	.img-responsive{
		width: 100%;
		height: auto;
	}
	.divider-menu-h{
		height: 0 !important;
		border-top: 1px solid #E1E1E1;
		width: 92% !important;
		margin: 0 auto !important;
	}

	.page-container{
		height: 100%;
		width: 100%;
		margin: 0;
		padding: 0;
		position: relative;
		display: flex;
		justify-content: space-between;
	}

	/*  Scrolls */
	.scroll::-webkit-scrollbar{
		width: 8px;
	}
	.scroll::-webkit-scrollbar-thumb{
		background: rgba(102,107,122,1);
	}
	.scroll::-webkit-scrollbar-thumb:active,
	.scroll::-webkit-scrollbar-thumb:hover{
		background: rgba(102,107,122,1);
	} 
	.scroll::-webkit-scrollbar-track{
		background: rgba(29, 30, 34, 1);
	}
	.scroll::-webkit-scrollbar-track:hover, 
	.scroll::-webkit-scrollbar-track:active{
		background: rgba(29, 30, 34, 1);
	}
	/*=============Estilos barra superior*/
	.navBar{
		background-color: #3F51B5;
		height: 45px;
		color: #fff;
		position: relative;
		margin-bottom: 30px;
	}
	.navBar-options{
		line-height: 45px;
		height: 45px;
		padding: 0;
		transition: all .3s ease-in-out;
		display: flex;
		justify-content: space-between;
	}
	.navBar-options .fa-exchange-alt,
	.navBar-options-list{
		line-height: 45px;
		height: 45px;
		margin: 0;
		padding: 0;
	}
	.navBar-options .fa-exchange-alt{
		width: 40px;
		left: 0;
		font-size: 23px;
		cursor: pointer;
		user-select: none;
		text-align: center;
		outline: none;
		margin-left: 9px;
	}
	.navBar-options-list{
		right: 9px;
	}
	.navBar-options-list .noLink{
		cursor: inherit;
	}
	.navBar-options-list ul{
		height: 45px;
		display: flex;
	}
	.navBar-options-list ul li{
		height: 45px;
		line-height: 45px;
		cursor: pointer;
		padding: 0 7px;
		font-size: 21px;
		user-select: none;
	}
	.navBar-options-list ul li{ outline: none; }
	.navBar-options-list ul li a,
	.navBar-options-list ul li img{
		margin: 0;
		padding: 0;
		padding-top: 0;
		margin-top: 0;
		box-sizing: border-box;
		color: #FFF;
	}
	.navBar-options-list ul li img{
		border: 1px solid #E1E1E1;
		border-radius: 50%;
		width: 39px;
		height: 39px;
		margin-top: 3px;
		margin-bottom: 0;
	}

	/*=============Estilos en comun navegacion lateral y contenido pagina*/
	.navLateral,
	.pageContent,
	.navLateral-body{
		height: 100%;
	}
	.navLateral,
	.pageContent{
		overflow-y: auto;
	}
	/*=============Estilos navegacion lateral*/
	.navLateral{
		width: 300px;
		border-right: 1px solid #E1E1E1;
		transition: all .3s ease-in-out;
		position: relative;
	}
	.navLateral-change{
		pointer-events: none;
		opacity: 0;
		width: 0;
		border-right: none;
	}
	.navLateral-body{
		background-color: #fff;
		position: relative;
	}
	.navLateral-body-logo{
		height: 45px;
		line-height: 45px;
		color: #fff;
		width: 100%;
		font-size: 25px;
		background-color: #3F51B5;
	}
	.navLateral-body-cl,
	.navLateral-body-cr{
		box-sizing: border-box;
		height: 77px;
		float: left;
		margin: 0;
		padding: 0;
		position: relative;
	}
	.navLateral-body-cl{
		width: 30%;
	}
	.navLateral-body-cl img{
		width: 57px;
		height: 57px;
		margin: 0 auto;
		display: block;
		margin-top: 10px;
	}
	.navLateral-body-cr{
		width: 70%;
		font-family: "RobotoCondensedLight";
	}
	.navLateral-body-tittle-menu{
		height: 70px;
		line-height: 70px; 
		font-size:20px; 
		background-color: #F5F5F5;
		text-align: center;
	}
	.menu-principal li,
	.menu-principal li a{
		display: block;
	}
	.menu-principal li a{
		height: 45px;
		color: #333;
		position: relative;
		transition: all .3s ease-in-out;
	}
	.menu-principal li a:hover{
		color: #3F51B5;
	}
	.menu-principal li a div.navLateral-body-cl,
	.menu-principal li a div.navLateral-body-cr{
		height: 45px;
		line-height: 45px;
	}
	.menu-principal li a div.navLateral-body-cl{
		text-align: center;
		font-size: 20px;
	}
	.btn-subMenu span.fa-chevron-down{
		position: absolute;
		top: 0;
		right: 7px;
		line-height: 45px;
		height: 45px;
		font-size: 19px;
		transition: all .3s ease-in-out;
	}
	.btn-subMenu + .sub-menu-options{
		transition: all .3s ease-in-out;
	}
	.sub-menu-options{
		height: 0;
		background-color: #F5F5F5;
		overflow-y: hidden;
		transition: all .3s ease-in-out;
	}
	.sub-menu-options li a{ border-left: 4px solid transparent; }
	.sub-menu-options li a:hover{ border-left: 4px solid #3F51B5; }
	.btn-subMenu-show{
		background-color: rgba(0, 0, 0, 0.1);
	}
	.btn-subMenu-show .navLateral-body-cl,
	.btn-subMenu-show .navLateral-body-cr{
		color: #3F51B5;
	}
	.btn-subMenu-show + .sub-menu-options{
		height: auto;
		overflow-y: auto;
		background-color: rgba(0, 0, 0, 0.1);
	}

	.btn-subMenu-show span.fa-chevron-down{
		transform: rotate(180deg);
	}

	/*=============Estilos contenido pagina*/
	.pageContent{
		width: calc(100% - 300px);
		background-color: #fff;
		transition: all .3s ease-in-out;
	}
	.pageContent-change{
		width: 100%;
	}
	/*=============Estilos detalle de venta*/
	.sale-details{
		display: flex;
		justify-content: space-between;
		transition: all .3s ease-in-out;
		padding: 5px;
	}
	.sale-details:hover{
		background-color: rgba(0, 0, 0, 0.07);
	}

	/*=====================================================
						Media  Queries
	======================================================*/
	@media (max-width: 750px){
		.navLateral{
			pointer-events: none;
			opacity: 0;
			width: 0;
			border-right: none;
		}
		.navLateral-change{
			width: 300px;
			pointer-events: auto;
			opacity: 1;
			border-right: 1px solid #E1E1E1;
		}
		.pageContent{
			width: 100%;
		}
		.pageContent-change{
		width: calc(100% - 300px);
		}
	}
</style>

<section class="full-width navLateral scroll" id="navLateral">
	<div class="full-width navLateral-body">
		<div class="full-width navLateral-body-logo has-text-centered tittles is-uppercase">
			inventario 
		</div>
		<div class="full-width tittles navLateral-body-tittle-menu has-text-centered is-uppercase">
			<i class="fas fa-th-large fa-fw"></i>
		</div>
		<nav class="full-width">
			<div class="navbar-item has-dropdown is-hoverable">
				<ul class="full-width list-unstyle menu-principal ">

					<li class="full-width">
						<a href="index.php?vista=home">
							<div class="navLateral-body-cl"></div>
							<div class="navLateral-body-cr">
								Inicio
							</div>
						</a>
					</li>

					<li class="full-width divider-menu-h"></li>

					<li class="full-width">
						<a href="#" class="full-width btn-subMenu">
							<div class="navLateral-body-cl"></div>
							<div class="navbar-link">
								USUARIOS
							</div>
							<span class="fas fa-chevron-down"></span>
						</a>
						<div class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="index.php?vista=user_new" class="navbar-item">
									<div class="navLateral-body-cr">Nuevo usuario</div>
								</a>
							</li>
							<li class="full-width">
								<a href="index.php?vista=user_list" class="navbar-item">
									<div class="navLateral-body-cr">Lista de usuarios</div>
								</a>
							</li>
							<li class="full-width">
								<a href="<?php echo APP_URL; ?>userSearch/" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-search fa-fw"></i>
									</div>
									<div class="navLateral-body-cr">
										Buscar usuario
									</div>
								</a>
							</li>
						</div>
					</li>

					<li class="full-width divider-menu-h"></li>

					

					<li class="full-width divider-menu-h"></li>

					<li class="full-width">
						<a href="#" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="fas fa-tags fa-fw"></i>
							</div>
							<div class="navLateral-body-cr">
								CATEGORIAS
							</div>
							<span class="fas fa-chevron-down"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="<?php echo APP_URL; ?>categoryNew/" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-tag fa-fw"></i>
									</div>
									<div class="navLateral-body-cr">
										Nueva categoría
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="<?php echo APP_URL; ?>categoryList/" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-clipboard-list fa-fw"></i>
									</div>
									<div class="navLateral-body-cr">
										Lista de categorías
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="<?php echo APP_URL; ?>categorySearch/" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-search fa-fw"></i>
									</div>
									<div class="navLateral-body-cr">
										Buscar categoría
									</div>
								</a>
							</li>
						</ul>
					</li>

					<li class="full-width divider-menu-h"></li>

					<li class="full-width">
						<a href="#" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="fas fa-cubes fa-fw"></i>
							</div>
							<div class="navLateral-body-cr">
								PRODUCTOS
							</div>
							<span class="fas fa-chevron-down"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="<?php echo APP_URL; ?>productNew/" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-box fa-fw"></i>
									</div>
									<div class="navLateral-body-cr">
										Nuevo producto
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="<?php echo APP_URL; ?>productList/" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-clipboard-list fa-fw"></i>
									</div>
									<div class="navLateral-body-cr">
										Lista de productos
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="<?php echo APP_URL; ?>productCategory/" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-boxes fa-fw"></i>
									</div>
									<div class="navLateral-body-cr">
										Productos por categoría
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="<?php echo APP_URL; ?>productSearch/" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-search fa-fw"></i>
									</div>
									<div class="navLateral-body-cr">
										Buscar producto
									</div>
								</a>
							</li>
						</ul>
					</li>

					<li class="full-width divider-menu-h"></li>

					<li class="full-width">
						<a href="#" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="fas fa-shopping-cart fa-fw"></i>
							</div>
							<div class="navLateral-body-cr">
								VENTAS
							</div>
							<span class="fas fa-chevron-down"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="<?php echo APP_URL; ?>saleNew/" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-cart-plus fa-fw"></i>
									</div>
									<div class="navLateral-body-cr">
										Nueva venta
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="<?php echo APP_URL; ?>saleList/" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-clipboard-list fa-fw"></i>
									</div>
									<div class="navLateral-body-cr">
										Lista de ventas
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="<?php echo APP_URL; ?>saleSearch/" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-search-dollar fa-fw"></i>
									</div>
									<div class="navLateral-body-cr">
										Buscar venta
									</div>
								</a>
							</li>
						</ul>
					</li>

					<li class="full-width divider-menu-h"></li>

					<li class="full-width">
						<a href="#" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="fas fa-cogs fa-fw"></i>
							</div>
							<div class="navLateral-body-cr">
								CONFIGURACIONES
							</div>
							<span class="fas fa-chevron-down"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="<?php echo APP_URL; ?>companyNew/" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-store-alt fa-fw"></i>
									</div>
									<div class="navLateral-body-cr">
										Datos de empresa
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="<?php echo APP_URL."userUpdate/".$_SESSION['id']."/"; ?>" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-user-tie fa-fw"></i>
									</div>
									<div class="navLateral-body-cr">
										Mi cuenta
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="<?php echo APP_URL."userPhoto/".$_SESSION['id']."/"; ?>" class="full-width">
									<div class="navLateral-body-cl">
										<i class="fas fa-camera"></i>
									</div>
									<div class="navLateral-body-cr">
										Mi foto
									</div>
								</a>
							</li>
						</ul>
					</li>

					<li class="full-width divider-menu-h"></li>

					<li class="full-width mt-5">
						<a href="<?php echo APP_URL."logOut/"; ?>" class="full-width btn-exit" >
							<div class="navLateral-body-cl">
								<i class="fas fa-power-off"></i>
							</div>
							<div class="navLateral-body-cr">
								Cerrar sesión
							</div>
						</a>
					</li>

				</ul>
			</div>
		</nav>
	</div>
</section>
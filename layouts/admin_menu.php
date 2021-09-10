<ul>
  <li>
    <a href="admin.php">
      <i class="glyphicon glyphicon-home"></i>
      <span>Panel de control</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-user"></i>
      <span>Accesos</span>
    </a>

    <!-- Editado por Yoel (2020.05.27)
         No aparec'ian los submenus 
         Se cambio la clase "nav submenu" a "nav menu" 
         .............................................. -->
    <ul class="nav submenu">
    <!--<ul class="nav menu">-->
      <li><a href="group.php">Administrar grupos</a> </li>
      <li><a href="users.php">Administrar usuarios</a> </li>
   </ul>
  </li>
  <li>
    <a href="categorie.php" >
      <i class="glyphicon glyphicon-indent-left"></i>

      <!-- Por Yoel.-
           Acentos en est'andar HTML: &aacute; &eacute; ... etc 
           .................................................. -->
      <span>Categor&iacute;as</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-large"></i>
      <span>Nuestros Productos</span>
    </a>
    <ul class="nav submenu">
    <!--<ul class="nav menu">-->
      <li><a href="product.php">Administrar productos</a></li>
      <li><a href="add_product.php">Agregar productos</a></li>
   </ul>
  </li>
  <li>
    <a href="media.php" >
      <i class="glyphicon glyphicon-picture"></i>
      <span>Cargar Imagenes</span>
    </a>
  </li>

  <!--
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
       <span>Entradas (TO-DO)</span>
    </a>
    <ul class="nav menu">
    -->
    <!--<ul class="nav submenu">-->
    <!--
      <li><a href="#">Administrar entradas (TO-DO)</a></li>
      <li><a href="#">Agregar entradas (TO-DO)</a> </li>
    </ul>
  </li>
  -->
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
      <span>Entrega de Articulos</span>
    </a>
    <!--<ul class="nav menu">-->
    <ul class="nav submenu">
      <li><a href="sales.php">Administrar Entrega de Articulos</a> </li>
      <li><a href="add_sale2.php">Agregar Entrega de Articulos</a> </li>
    </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-signal"></i>
      <span>Reportes de Stock</span>
    </a>
    <!--<ul class="nav menu">-->
    <ul class="nav submenu">
      <li><a href="sales_report.php">Por fecha </a></li>
      <li><a href="monthly_sales.php">Mensuales</a></li>
      <li><a href="daily_sales.php">Diarias</a> </li>
    </ul>
  </li>
</ul>

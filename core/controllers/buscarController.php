<?php

if ( $_POST or (isset($_SESSION['busqueda']) and isset($_GET['page']))) {
    $template = new Smarty();

    $type = isset($_GET['type']) ? $_GET['type'] : null;

    if ( isset($_GET['page']) and is_numeric($_GET['page']) and $_GET['page'] >= 1 ){
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $db = new Conexion();
    $paginate = 5;
    $begin = ($page - 1) * $paginate;
    
    if ( isset($_SESSION['busqueda']) and !isset($_POST['busqueda']) ) {
        $search = $_SESSION['busqueda'];
    } else {
        $search = $_POST['busqueda'];
    }
    
    $_SESSION['busqueda'] = $search;
    
    $quantity = $db->query("SELECT COUNT(*) FROM post WHERE title LIKE '%$search%'");
        
    $sql = $db->query("SELECT * FROM post WHERE title LIKE '%$search%' ORDER BY id DESC LIMIT $begin,$paginate;");
    $template->assign('titulo', 'Resultado de Busqueda');
    
    $result = $db->recorrer($quantity);
    $result = $result[0];

    // La funcion ceil redondea siempre hacia arriba
    $pages = ceil($result / $paginate);
    
    if ( $db->rows($sql) > 0 ) {
        // INICIO SQL PREPARADA
        $psql = "SELECT user FROM users WHERE id=?;";
        $prepare_sql = $db->prepare($psql);
        $prepare_sql->bind_param('i', $id);

        while ( $x = $db->recorrer($sql) ) {

            $id = $x['author'];
            $prepare_sql->execute();
            $prepare_sql->bind_result($autor);
            $prepare_sql->fetch();
            // FIN SQL PREPARADA

            $posts[] = array(
                'id'      => $x['id'],
                'title'   => $x['title'],
                'content' => $x['content'],
                'author'  => $autor,
                'idAuthor'=> $id,
                'points'  => $x['points']
            );
        }
        $prepare_sql->close();
        $template->assign('posts', $posts);
    }

    $db->liberar($sql, $quantity);
    
    $template->assign('pages', $pages);
    $db->close();
    $template->display('home/index.tpl');
    
} else {
    header('location: ?view=index');
}

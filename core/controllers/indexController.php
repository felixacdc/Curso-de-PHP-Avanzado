<?php

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

switch ( $type ) {
    case 'tops':
        
        $quantity = $db->query("SELECT COUNT(*) FROM post");
        
        $sql = $db->query("SELECT * FROM post ORDER BY points DESC LIMIT $begin,$paginate;");
        $template->assign('titulo', 'Los Mejores');
        break;
    case '1':
        
        $quantity = $db->query("SELECT COUNT(*) FROM post WHERE category=1");
        
        $sql = $db->query("SELECT * FROM post WHERE category=1 ORDER BY id DESC LIMIT $begin,$paginate;");
        $template->assign('titulo', 'Categoria 1');
        break;
    case '2':
        
        $quantity = $db->query("SELECT COUNT(*) FROM post WHERE category=2");
        
        $sql = $db->query("SELECT * FROM post WHERE category=2 ORDER BY id DESC LIMIT $begin,$paginate;");
        $template->assign('titulo', 'Categoria 2');
        break;
    case '3':
        
        $quantity = $db->query("SELECT COUNT(*) FROM post WHERE category=3");
        
        $sql = $db->query("SELECT * FROM post WHERE category=3 ORDER BY id DESC LIMIT $begin,$paginate;");
        $template->assign('titulo', 'Categoria 3');
        break;
    default:
        
        $quantity = $db->query("SELECT COUNT(*) FROM post");
        
        $sql = $db->query("SELECT * FROM post ORDER BY id DESC LIMIT $begin,$paginate;");
        $template->assign('titulo', 'Inicio');
    break;
}

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
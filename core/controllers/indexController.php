<?php

$template = new Smarty();

$type = isset($_GET['type']) ? $_GET['type'] : null;

$db = new Conexion();

switch ( $type ) {
    case 'tops':
        echo 'Tops';
        break;
    case '1':
        echo '1';
        break;
    case '2':
        echo '2';
        break;
    case '3':
        echo '3';
        break;
    default:
        $sql = $db->query("SELECT * FROM post ORDER BY id DESC");
        
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
        
        $template->assign('posts', $posts);
    break;
}

$template->display('home/index.tpl');
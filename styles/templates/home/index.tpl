{include 'overall/header.tpl'}
<body>

      {include 'overall/nav.tpl'}
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                {include 'overall/menu.tpl'}
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h2 class="sub-header">{$titulo}</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 65%;">Post</th>
                                <th style="width: 25%;">Autor</th>
                                <th style="width: 5%;">Puntos</th>
                                <th style="width: 5%;">Comentarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            {if isset($posts)}
                                {foreach from=$posts item=pt}
                                <tr>
                                    <td><a href="?view=posts&id={$pt.id}">{$pt.title}</a></td>
                                    <td><a href="?view=perfil&user={$pt.idAuthor}">{$pt.author}</a></td>
                                    <td style="text-align: center;">{$pt.points}</td>
                                    <td style="text-align: center;">0</td>
                                </tr>
                                {/foreach}
                            {else}
                                <tr>
                                    <td colspan="4"><h3 class="text-center">No hay resultados.</h3></td>
                                </tr>
                            {/if}
                        </tbody>
                    </table>
                </div>
                {if isset($posts)}
                    <div class="btn-group" role="group" aria-label="...">
                        {if !isset($smarty.get.page)}
                            <a href="#" class="btn btn-default disabled">Anterior</a>
                            {if $pages > 1}
                                {if isset($smarty.get.type)}
                                    <a href="?view=index&type={$smarty.get.type}&page=2" class="btn btn-default">Siguiente</a>
                                {else if isset($smarty.get.view) and $smarty.get.view == 'buscar'}
                                    <a href="?view=buscar&page=2" class="btn btn-default">Siguiente</a>
                                {else}
                                    <a href="?view=index&page=2" class="btn btn-default">Siguiente</a>
                                {/if}
                            {else}
                                <a href="#" class="btn btn-default disabled">Siguiente</a>
                            {/if}
                        {else}
                            {if $smarty.get.page <= 1}
                                <a href="#" class="btn btn-default disabled">Anterior</a>
                            {else}
                                {if isset($smarty.get.type)}
                                    <a href="?view=index&type={$smarty.get.type}&page={$smarty.get.page - 1}" class="btn btn-default">Anterior</a>
                                {else if isset($smarty.get.view) and $smarty.get.view == 'buscar'}
                                    <a href="?view=buscar&page={$smarty.get.page - 1}" class="btn btn-default">Anterior</a>
                                {else}
                                    <a href="?view=index&page={$smarty.get.page - 1}" class="btn btn-default">Anterior</a>
                                {/if}
                            {/if}

                            {if $pages > 1 and $smarty.get.page >= 1 and $smarty.get.page < $pages}
                                {if isset($smarty.get.type)}
                                    <a href="?view=index&type={$smarty.get.type}&page={$smarty.get.page + 1}" class="btn btn-default">Siguiente</a>
                                {else if isset($smarty.get.view) and $smarty.get.view == 'buscar'}
                                    <a href="?view=buscar&page={$smarty.get.page + 1}" class="btn btn-default">Siguiente</a>
                                {else}
                                    <a href="?view=index&page={$smarty.get.page + 1}" class="btn btn-default">Siguiente</a>
                                {/if}
                            {else}
                                <a href="#" class="btn btn-default disabled">Siguiente</a>
                            {/if}
                        {/if}
                    </div>
                {/if}
            </div>
        </div>
    </div>

    {include 'overall/footer.tpl'}
   </body>
</html>

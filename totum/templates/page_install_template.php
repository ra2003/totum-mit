<!DOCTYPE html>
<head lang="ru">
    <script>App = {}</script>
    <link rel="stylesheet"
          type="text/css"
          href="/css/libs.css?v=880594f">
    <script src="/js/libs.js?v=40c5077"></script>
    <link rel="stylesheet"
          type="text/css"
          href="/css/main.css?v=441aee5">

    <?if(\totum\common\Auth::isCreator()){?>
        <script src="/js/functions.json?v=7c1298a"></script>
        <? if (!empty($GLOBALS['CalculateExtentions']) && is_object($GLOBALS['CalculateExtentions']) && property_exists($GLOBALS['CalculateExtentions'], 'jsTemplates')){
           echo '<script>App.functions=App.functions.concat('.$GLOBALS['CalculateExtentions']->jsTemplates.')</script>';
        }?>
    <?}?>

    <script src="/js/main.js?v=247fbbb"></script>



    <link rel="shortcut icon" type="image/png" href="/fls/6_favicon.png"/>

    <title><?=!empty($title) ? $title . ' — ' : '' ?>Totum</title>
    <?
    $host = 'http'.(!empty($_SERVER['HTTPS'])?'s':'').'://'.$_SERVER['HTTP_HOST'].'/';
    ?>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <meta property="og:image" content="<?=$host?>imgs/hand.png" />
    <meta property="og:url" content="<?=$host?>" />
    <meta property="og:title" content="TOTUM — платформа для любой автоматизации в малом бизнесе" />
    <meta property="og:description" content="На ней можно собирать заточенные под клиента базы данных, специальные CRM, склады, расчеты, формы, калькуляторы и любой другой учет." />
    <style>
        body{
            overflow: auto;
        }
    </style>
</head>
<body id="pk"
      class="lock">
<noscript>
    Для работы с системой необходимо включить JavaScript в настройках броузера
</noscript>
<div id="big_loading" style="display: none;"><i class="fa fa-cog fa-spin fa-3x"></i></div>
<script>
    App.fullScreenProcesses.showCog();
</script>
<div class="page_content">
    <div id="notifies"></div>
    <? if (!empty($error)) {
        echo '<div class="panel panel-danger"><div class="panel-body">' . $error . '</div></div>';
    } ?>
    <?php include static::$contentTemplate; ?>
</div>
<script>
    $(function(){
        App.fullScreenProcesses.hideCog();
    })
</script>
</body>
</html>
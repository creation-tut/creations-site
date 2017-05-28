<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../../default.css" type="text/css">
<title>Creation's Graffiti</title>
<style type="text/css">
<!--
    html,body                   {height:100%;width:100%;margin:0;padding:0;text-align:center;overflow:hidden;}
    .article                    {background:rgba(220,220,220,.2);box-shadow:0 0 100px #777 inset;height:100%;overflow:hidden;}
    .section                    {position:fixed;height:100%;width:100%;overflow-x:auto;overflow-y:hidden;auto;white-space:nowrap;}
    h1                          {background:rgba(220,220,20,.2);position:fixed;height:5%;width:100%;margin:0;}
    .figure                     {position:fixed;height:75%;width:100%;top:5%;margin:0;padding:0;visibility:hidden;;overflow:hidden;opacity:0;transition:all .5s ease 0s;}
input:checked + * + .figure     {visibility:visible;z-index:10;opacity:1;}
    .figure img                 {box-shadow:0 0 5px rgba(20,20,20,.4);max-height:80%;max-width:90%;}
    .figcaption                 {background:rgba(220,220,20,.2);position:absolute;height:10%;width:100%;bottom:0;white-space:normal;overflow-y:auto;}
    input                       {position:absolute;height:15%;width:15%;bottom:10%;z-index:-10;opacity:0;}
    input + label               {background:rgba(20,220,20,.2);display:inline-block;position:relative;height:15%;top:80%;width:auto;max-height:100px;line-height:15%;margin:1em 0;z-index:15;opacity:.8;cursor:pointer;border-radius:100%;transform:scale(0.7);overflow:hidden;transition:all .3s ease 0s;}
    input + label:hover         {box-shadow:0 0 3px #333;opacity:1;}
    input + label img           {height:100%;}
    input:checked               {margin:0 2em;}
    input:checked + label       {margin:0 2em;top:77.5%;transform:scale(1);opacity:1;border-radius:5%;}

-->
</style>
</head>
<body>

<div class="article">
    <h1><?php echo $theme['theme']; ?></h1>
    <div class="section">
        <?php foreach($list as $data): /* begin figure loop */ ?>
        <input type="radio" name="ctl" id="<?php echo $data['id']; ?>" value="<?php echo $data['id']; ?>"<?php echo $data['autofocus']; ?> />
        <label for="<?php echo $data['id']; ?>"><img src="<?php echo $data['id']; ?>/teiki_s.jpg" alt="<?php echo $data['handle']; ?>" /></label>
        <div class="figure">
            <b><?php echo $data['handle']; ?> #<?php echo $data['uid'] ?></b>
            <div class="cite"><?php echo $data['title']; ?></div>
            <a href="<?php echo $data['id']; ?>/teiki.jpg"><img src="<?php echo $data['id'] ?>/teiki.jpg" alt="<?php echo $data['title']; ?>" /></a>
            <div class="figcaption"><?php echo $data['comment']; ?></div>
        </div>
        <?php endforeach; /* end figure loop */ ?>
    </div>
</div>

</body>
</html>



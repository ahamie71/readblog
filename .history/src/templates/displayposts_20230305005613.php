
 <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Mini | Blog</title>
</head>

<body>

<div class="container-fluid">
                <div class="button-group">
            <a href="index.php?action=addArticle" class="btn btn-primary">Ajouter un article</a>
                    
                </div>

<h1 class="posts-title">Articles</h1>
<section class="articles">
<?php foreach($articles as $post):?>
    <div class ="card-group">
     <div class="article">
      <div class="left">
        <img src="<?php echo './public/image/'.$post['image']?>" alt="">
      </div>
      <div class="right">
        <button><a href= "index.php?action=displayonepost&id=<?php echo $post['id']?>"><?= $post['title']?>.....</a><bott
        <p class="description">Cette article a ecrit dans categorie <strong><?php echo $post['name']?></strong></p>
        <p class="auteur"> Auteur:<?php echo $post['prenom']?> </p>
        <p class="date"><?php echo date( 'd F,Y',strtotime($post['created_at']));?></p>
        <a href="create.php" class="btn btn-success">Modifier mon  article</a>
                    <a href="create.php" class="btn btn-danger">DELETE mon article </a>
      </div>
      

    </div> 
    </div>
<?php endforeach; ?>












                   
                
                        <style>

.articles{
  margin-top: 30px;
}
.articles .article{
  display: flex;
  flex-wrap:wrap;
  margin-bottom: 30px;
}
.articles .article .left img{
  height: 300px;
  width: 500px;
}
.articles .article .right {
  margin-left: 40px;
  max-width: 50%;
}
.articles .article .right p.date{
  color: #7f7e7e;
}
.articles .article .right p.description{
  color: #2d2d2d;
}

body{
  margin:  10px;
  font-family: 'Noto Sans JP', sans-serif;
}

</style>            
               
               

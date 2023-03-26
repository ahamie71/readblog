
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

<body></body>

<section class="articles">
<?php foreach($articles as $post):?>
     <div class="article">
      <div class="left">
        <img src="<?php echo './public/image/'.$post['image']?>" alt="">
      </div>
      <div class="right">
        <p class="date"><?php echo date( 'd F,Y',strtotime($post['created_at']));?>/p>
        <h1>Paris - La ville des lumières, pourquoi ?</h1>
        <p class="description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate repellendus dolor necessitatibus. Modi, quos! Explicabo voluptates vero ullam quis ipsum impedit illum numquam cum quaerat animi? Ad, fugiat neque.</p>
        <p class="auteur">Julie Lablonde</p>
      </div>
    </div> 
<?php endforeach; ?>














<!-- <!DOCTYPE html>
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
     
 
     <div class="container mt-3">
                <div class="button-group">
                    <a href="index.php?action=addArticle" class="btn btn-primary">Ajouter un article</a>
                    <a href="create.php" class="btn btn-success">Modifier mon  article</a>
                    <a href="create.php" class="btn btn-danger">DELETE mon article </a>
                </div>
    <!-- Page Wrapper -->
    

        <!-- Post Slider -->
       
            <h1 class="posts-title">Articles</h1>
            
               <?php foreach($articles as $post):?>
                <div class= "card-group">
                    <div class= "card"style="width:150px">
                    <img src ="<?php echo './public/image/'.$post['image']?> " alt="mon image" >
                   
                        <h4><a href= "index.php?action=displayonepost&id=<?php echo $post['id']?>"><?= $post['title']?></a></h4>     
                        &nbsp;
                        <i><?php echo date( 'd F,Y',strtotime($post['created_at']));?></i><p>ECRIT dans la categorie:
                        <?php echo $post['name']?></p>  
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
               
               

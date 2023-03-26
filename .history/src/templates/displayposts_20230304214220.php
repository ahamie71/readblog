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
                    <div class= "card" style="display:flex">
                    <img src ="<?php echo './public/image/'.$post['image']?> " alt="mon image" >
                   
                        <h4><a href= "index.php?action=displayonepost&id=<?php echo $post['id']?>"><?= $post['title']?></a></h4>     
                        &nbsp;
                        <i><?php echo date( 'd F,Y',strtotime($post['created_at']));?></i><p>ECRIT dans la categorie:
                        <?php echo $post['name']?></p>  
                    </div> 
                         
                        <?php endforeach; ?>
                        
                   
                
               
               
               

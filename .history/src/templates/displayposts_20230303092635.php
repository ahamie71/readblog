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
                    <a href="create.php" class="btn btn-primary">Ajouter un article</a>
                    <a href="create.php" class="btn btn-success">Modifier mon  article</a>
                    <a href="create.php" class="btn btn-danger">DELETE mon article </a>
                </div>
    <!-- Page Wrapper -->
    <div class="page-container">

        <!-- Post Slider -->
        <div class="posts">
            <h1 class="posts-title">Articles</h1>
            <div class="post-container">
               <?php foreach ($articles as $post):?>
                <div class="container mt3">
                    <div class= "card" style="width:400px">
                    <img src ="<?php echo './public/image/'.$post['image']?> " alt="mon image" style="width: class="slider-image">
                    <div class="card-body">
                        <h4><a href= "#"><?= $post['title']?></a></h4>     
                        &nbsp;
                        <i><?php echo date( 'd F,Y',strtotime($post['created_at']));?></i>
                    </div>
                </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    

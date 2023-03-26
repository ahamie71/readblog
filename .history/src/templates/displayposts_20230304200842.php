<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Mini | Blog</title>
</head>

<body>


    <div class="container mt-3">
        <div class="button-group">
            <a href="index.php?action=addArticle" class="btn btn-primary">Ajouter un article</a>
            <a href="create.php" class="btn btn-success">Modifier mon article</a>
            <a href="create.php" class="btn btn-danger">DELETE mon article </a>
        </div>
        <!-- Page Wrapper -->


        <!-- Post Slider -->

        <h1 class="posts-title">Articles</h1>
        <?php foreach ($articles as $post): ?>
            <div class="container mx-auto mt-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo './public/image/' . $post['image'] ?>" class="card-img-top" alt="mon image">
                            <div class="card-body">
                                <h5 class="card-title"><a href="index.php?action=displayonepost&id=<?= $post['id'] ?>"></a><?=
                                     $post['title'] ?></h5>
                                        &nbsp;
                                        <i>
                                            <?php echo date('d F,Y', strtotime($post['created_at'])); ?>
                                        </i>
                                        <p>ECRIT dans la categorie:
                                            <?php echo $post['name'] ?> par
                                            <?php echo $post['prenom'] ?>
                                        </p>

                                    <?php endforeach; ?>
                        </div>
                    </div>
                    </div>
                </div>
                

                    <style>

:root {
  --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
}

body {
  background: #111 !important;
}

.card {
  background: #222;
  border: 1px solid #dd2476;
  color: rgba(250, 250, 250, 0.8);
  margin-bottom: 2rem;
}

.btn {
  border: 5px solid;
  border-image-slice: 1;
  background: var(--gradient) !important;
  -webkit-background-clip: text !important;
  -webkit-text-fill-color: transparent !important;
  border-image-source:  var(--gradient) !important; 
  text-decoration: none;
  transition: all .4s ease;
}

.btn:hover, .btn:focus {
      background: var(--gradient) !important;
  -webkit-background-clip: none !important;
  -webkit-text-fill-color: #fff !important;
  border: 5px solid #fff !important; 
  box-shadow: #222 1px 0 10px;
  text-decoration: underline;
}
                    </style>
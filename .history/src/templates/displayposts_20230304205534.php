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
  <?php foreach ($articles as $post): ?>
    
    <div class="grid">
      <div class="grid-item">
        <div class="card">
          <img class="card-img" src="<?php echo './public/image/'. $post['image'] ?>" alt="Rome" />
          <div class="card-content">
            <h1 class="card-header"></h1>
            <p class="card-text">
              Cette article est ecrit  le <?php echo date('d F,Y', strtotime($post['created_at']));  ?>par <strong> <?php echo $post['prenom']?> </strong>,
             dans la categorie  <strong> <?php echo $post['name']?> </strong>,
            </p>
            <button ><a href ="index.php?action=displayonepost&id=<?= $post['id'] ?>">Visit <span>&rarr;</span></button>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach;?>
  </body>
</html>
<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins&display=swap");

* {
  margin: 0;
  padding: 0;
}

html {
  box-sizing: border-box;
  font-size: 62.5%;
}

body {
  background-color: #eee;
  font-family: "Poppins", sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.grid {
  display: grid;
  width: 114em;
  grid-gap: 6rem;
  grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
  align-items: start;
}

.grid-item {
  background-color: #fff;
  border-radius: 0.4rem;
  overflow: hidden;
  box-shadow: 0 3rem 6rem rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: 0.2s;
}

.grid-item:hover {
  transform: translateY(-0.5%);
  box-shadow: 0 4rem 8rem rgba(0, 0, 0, 0.5);
}

.card-img {
  display: block;
  width: 100%;
  height: 20rem;
  object-fit: cover;
}

.card-content {
  padding: 3rem;
}

.card-header {
  font-size: 3rem;
  font-weight: 500;
  color: #0d0d0d;
  margin-bottom: 1.5rem;
}

.card-text {
  font-size: 1.6rem;
  letter-spacing: 0.1rem;
  line-height: 1.7;
  color: #3d3d3d;
  margin-bottom: 2.5rem;
}

.card-btn {
  display: block;
  width: 100%;
  padding: 1.5rem;
  font-size: 2rem;
  text-align: center;
  color: #3363ff;
  background-color: #d8e0fd;
  border: none;
  border-radius: 0.4rem;
  transition: 0.2s;
  cursor: pointer;
  letter-spacing: 0.1rem;
}

.card-btn span {
  margin-left: 1rem;
  transition: 0.2s;
}

.card-btn:hover,
.card-btn:active {
  background-color: #c2cffc;
}

.card-btn:hover span,
.card-btn:active span {
  margin-left: 1.5rem;
}

@media only screen and (max-width: 60em) {
  body {
    padding: 3rem;
  }

  .grid {
    grid-gap: 3rem;
  }
}

</style>





































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
                <div class="column">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem; display:flex">
                            <img src="<?php echo './public/image/'. $post['image'] ?>" class="card-img-top"
                                alt="mon image">
                            <div class="card-body">
                                <h5 class="card-title"><?=$post['title'] ?></h5>
                                &nbsp;
                                <i>
                                    <?php echo date('d F,Y', strtotime($post['created_at'])); ?>
                                </i>
                                <p>ECRIT dans la categorie:
                                    <?php echo $post['name'] ?> par
                                    <?php echo $post['prenom'] ?>
                                </p>
                                 <a href="index.php?action=displayonepost&id=<?= $post['id'] ?>" class="btn mr-2"><i class=""></i>Lire la suite</a>


                               
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <?php endforeach; ?>

</body>

</html>
<style> -->
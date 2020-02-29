<?php 
require_once "config/db.php";
require_once "all/header.php";
$products = array(
    0 => array(
        "name" => "Товар 1",
        "img" => "/img/product1.jpg",
        "descriptions" => "Описание товара",
        "url" => "#",
    ),
    1 => array(
        "name" => "Товар 1",
        "img" => "/img/product1.jpg",
        "descriptions" => "Описание товара",
        "url" => "#",
    ),
    2 => array(
        "name" => "Товар 1",
        "img" => "/img/product1.jpg",
        "descriptions" => "Описание товара",
        "url" => "#",
    ),
    3 => array(
        "name" => "Товар 1",
        "img" => "/img/product1.jpg",
        "descriptions" => "Описание товара",
        "url" => "#",
    ),
    4 => array(
        "name" => "Товар 1",
        "img" => "/img/product1.jpg",
        "descriptions" => "Описание товара",
        "url" => "#",
    ),
    5 => array(
        "name" => "Товар 1",
        "img" => "/img/product1.jpg",
        "descriptions" => "Описание товара",
        "url" => "#",
    ),   
    6 => array(
        "name" => "Товар 1",
        "img" => "/img/product1.jpg",
        "descriptions" => "Описание товара",
        "url" => "#",
    ),
    7 => array(
        "name" => "Товар 1",
        "img" => "/img/product1.jpg",
        "descriptions" => "Описание товара",
        "url" => "#",
    ),
    8 => array(
        "name" => "Товар 1",
        "img" => "/img product1.jpg",
        "descriptions" => "Описание товара",
        "url" => "#",
    ),
)
$query = "SELECT * from `products`";
$mysql = mysqli_query($mysqli, $query)
var_dump($result);
?>
<div class="container">
    <section class="mt-4">
        <div class="row">
            <div class="col-md-9">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/img/slide1.jpg" height="480" alt="Первый слайд">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Метка слайда</h3>
                                <p>Описание</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/slide2.jpg" height="480" alt="Второй слайд">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Метка слайда</h3>
                                <p>Описание</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/slide3.jpg" height="480" alt="Третий слайд">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Метка слайда</h3>
                                <p>Описание</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="height: auto;">
                    <div class="card-header">
                        Товар недели
                    </div>
                    <img src="/img/duhovka.jpg" height="220px" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="text-center"><a href="#" class="btn btn-primary">Переход куда-нибудь</a></p>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="mt-4">
        <div class="row mb-3">
         <? foreach ($products as $key => $product): ?>
            <div class="col-md-3">
                <div class="card">
                    <img src="<?=$product['img'] ?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?=$product['name'] ?></h5>
                        <p class="card-text"><?=$product['descriptions'] ?></p>
                        <a href="#" class="btn btn-primary">В корзину</a>
                    </div>
                </div>
            </div>
         <? endforeach; ?>
    </di
<?php 
require_once "all/footer.php";
?>
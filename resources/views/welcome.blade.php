@extends('layout.app')
@section('title')
    Главная
@endsection
@section('main')
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary container" style="padding: 1vh 0 1vh 0">
                <div class="container-fluid d-flex justify-content-between ps-0">
                    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent" style="max-width: 105vh">
                        <ul class="navbar-nav mb-2 mb-lg-0" style="font-size: 80%">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#" style="color: #D90429;padding-left: 0">Адреса и контакты</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: #D90429">Гарантия</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: #D90429">О магазине</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="carouselExampleIndicators" class="carousel slide shadow-lg">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://img1.goodfon.ru/original/1920x1080/b/9c/gory-ozero-les-derevya-voda.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.expothemes.com/reflection/images/reflection-windows-theme-13-hd.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.fonstola.ru/images/202011/fonstola.ru_416787.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="mt-5 d-grid info-grid">
                <div class="text-center">
                    <img src="public/img/box.png" alt=""  style="height: 5.9rem; width: 5.9rem">
                    <p>Бережно упакуем ваш заказ в прочные кейсы с противоударным наполнителем</p>
                </div>
                <div class="text-center">
                    <img src="public/img/airlines.png" alt="" style="height: 5.9rem; width: 5.9rem">
                    <p>Доставим заказ в один из 80 наших сортировочных центров по всей России</p>
                </div>
                <div class="text-center">
                    <img src="public/img/truck.png" alt="" style="height: 5.9rem; width: 5.9rem">
                    <p>В любой день недели, даже в праздничный день, мы снаряжаем транспорти доставляем груз</p>
                </div>
                <div class="text-center">
                    <img src="public/img/delivery.png" alt="" style="height: 5.9rem; width: 5.9rem">
                    <p style="color: #2B2D42">Созвонимся в день заказа, уточним детали и доставим заказ лично в руки в удобное вам время</p>
                </div>
            </div>
            <h1 style="text-align: center; font-size: 48px" class="mt-5 mb-5"><b>Популярное</b></h1>
            <div class="row row-cols-2 row-cols-md-4 g-5">
                <div class="col">
                    <div class="card h-100">
                        <img src="public/img/box.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Гипер компьютер</h3>
                            <div class="d-flex justify-content-between mt-5">
                                <h3 class="card-text">5000 руб</h3>
                                <a href="#" class="btn btn-danger"><img src="public/img/cart.png" alt="" style="height: 1.5rem; width: 1.5rem"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="public/img/box.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Гипер компьютер</h3>
                            <div class="d-flex justify-content-between mt-5">
                                <h3 class="card-text">5000 руб</h3>
                                <a href="#" class="btn btn-danger"><img src="public/img/cart.png" alt="" style="height: 1.5rem; width: 1.5rem"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="public/img/box.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Гипер компьютер</h3>
                            <div class="d-flex justify-content-between mt-5">
                                <h3 class="card-text">5000 руб</h3>
                                <a href="#" class="btn btn-danger"><img src="public/img/cart.png" alt="" style="height: 1.5rem; width: 1.5rem"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="public/img/box.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Гипер компьютер</h3>
                            <div class="d-flex justify-content-between mt-5">
                                <h3 class="card-text">5000 руб</h3>
                                <a href="#" class="btn btn-danger"><img src="public/img/cart.png" alt="" style="height: 1.5rem; width: 1.5rem"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="public/img/box.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Гипер компьютер</h3>
                            <div class="d-flex justify-content-between mt-5">
                                <h3 class="card-text">5000 руб</h3>
                                <a href="#" class="btn btn-danger"><img src="public/img/cart.png" alt="" style="height: 1.5rem; width: 1.5rem"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="public/img/box.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Гипер компьютер</h3>
                            <div class="d-flex justify-content-between mt-5">
                                <h3 class="card-text">5000 руб</h3>
                                <a href="#" class="btn btn-danger"><img src="public/img/cart.png" alt="" style="height: 1.5rem; width: 1.5rem"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="public/img/box.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Гипер компьютер</h3>
                            <div class="d-flex justify-content-between mt-5">
                                <h3 class="card-text">5000 руб</h3>
                                <a href="#" class="btn btn-danger"><img src="public/img/cart.png" alt="" style="height: 1.5rem; width: 1.5rem"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="public/img/box.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title text-center">Гипер компьютер</h3>
                            <div class="d-flex justify-content-between mt-5">
                                <h3 class="card-text">5000 руб</h3>
                                <a href="#" class="btn btn-danger"><img src="public/img/cart.png" alt="" style="height: 1.5rem; width: 1.5rem"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

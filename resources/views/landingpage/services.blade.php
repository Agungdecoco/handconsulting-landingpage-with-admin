@extends('layouts.layout-landing-page')

@section('content')
    <!-- Page Content -->
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Services</h1>
                    {{-- <span>We are over 20 years of experience</span> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="single-services mb-5">
        <div class="container">
            <div class="row" id="tabs">
                <div class="col-md-4">
                    <ul>
                        <li><a href='#tabs-1'>Management <i class="fa fa-angle-right"></i></a></li>
                        <li><a href='#tabs-2'>Legal <i class="fa fa-angle-right"></i></a></li>
                        <li><a href='#tabs-3'>Complience <i class="fa fa-angle-right"></i></a></li>
                        <li><a href='#tabs-4'>Outsourcing <i class="fa fa-angle-right"></i></a></li>
                        <li><a href='#tabs-5'>IT Solution <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="assets/img/clipboard.png" alt="Management" width="300">
                            <h4>Management</h4>
                            <p>Vivamus sed feugiat elit. Pellentesque pretium, massa at placerat vehicula, neque turpis
                                pulvinar tortor, eget convallis lorem odio non tortor. Donec massa est, fermentum sit
                                amet felis ac, maximus luctus elit. Vivamus aliquet, dolor id imperdiet imperdiet, dui
                                diam aliquet dui, a euismod metus enim ac velit. Vivamus eu tristique odio, vel
                                tristique quam.
                                <br><br>Proin eu molestie risus. Etiam suscipit pretium odio, at consectetur nisi. Sed
                                ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in,
                                tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo
                                mauris ante.
                            </p>
                        </article>
                        <article id='tabs-2'>
                            <img src="assets/img/compliant.png" alt="Legal" width="300">
                            <h4>Legal</h4>
                            <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in,
                                tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo
                                mauris ante, quis posuere nibh vestibulum sit amet
                                <br><br>Pellentesque pretium, massa at placerat vehicula, neque turpis pulvinar tortor,
                                eget convallis lorem odio non tortor. Donec massa est, fermentum sit amet felis ac,
                                maximus luctus elit. Vivamus aliquet, dolor id imperdiet imperdiet, dui diam aliquet
                                dui, a euismod metus enim ac velit. Vivamus eu tristique odio, vel tristique quam.
                            </p>
                        </article>
                        <article id='tabs-3'>
                            <img src="assets/img/compliance.png" alt="Compliance" width="300">
                            <h4>Complience</h4>
                            <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus
                                turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla
                                facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc
                                lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus
                                eget.
                                <br><br>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                himenaeos. Nunc vel ultrices nulla, ac tincidunt eros. Aenean quis tellus velit.
                                Praesent pretium justo non auctor condimentum.
                            </p>
                        </article>
                        <article id='tabs-4'>
                            <img src="assets/img/outsourcing.png" alt="Outsourcing" width="300">
                            <h4>Outsourcing</h4>
                            <p>Integer vehicula sapien quis dolor efficitur, eget molestie eros tempus. Curabitur
                                sollicitudin, tortor at suscipit volutpat, nisi arcu aliquet dui, vitae semper sem
                                turpis quis libero. Quisque vulputate lacinia nisl ac lobortis. Ut ultricies maximus
                                turpis, in sollicitudin ligula posuere vel.
                                <br><br>Donec finibus maximus neque, vitae egestas quam imperdiet nec. Proin nec mauris
                                eu tortor consectetur tristique. Etiam suscipit ante a odio consequat, in ornare lacus
                                suscipit. Cras ac libero massa. Quisque rhoncus velit feugiat vulputate mollis. Donec
                                nisl eros, malesuada sed nisi id, condimentum condimentum quam.
                            </p>
                        </article>
                        <article id='tabs-5'>
                            <img src="assets/img/it.png" alt="IT Solution" width="300">
                            <h4>Outsourcing</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi perferendis quam hic error.
                                Aliquam architecto, temporibus, quae magnam iusto labore sapiente voluptas nam sequi aperiam
                                voluptatibus exercitationem fuga, nostrum mollitia id quo in. Dolor velit maiores illo fuga
                                ad repellendus voluptatibus animi reiciendis cumque sequi. Impedit illum laboriosam
                                inventore corrupti aliquid provident, pariatur fugiat debitis odio voluptatibus neque amet,
                                autem veniam, deserunt aliquam vero ex! Ipsa doloribus est rerum quasi reiciendis veniam
                                cumque explicabo sit, ex qui odit asperiores earum sequi distinctio error eum quo provident
                                quod assumenda molestias accusamus tempora placeat dolore fuga? Magnam nostrum dolore
                                facilis fuga totam.
                            </p>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection

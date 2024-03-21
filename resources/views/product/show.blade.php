<!DOCTYPE html>
<html lang="en">
{{-- @dd($rs->toArray()) --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album example for Bootstrap</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Your custom styles here */
    </style>
</head>

<body>
    <main role="main">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Detail Product</h1>
                <p class="lead text-muted">Album Product.</p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <section style="background-color: #eee;">
                    <div class="container py-5">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4">
                                <div class="card" style="border-radius: 15px;">
                                    <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
                                        data-mdb-ripple-color="light" style="border-radius: 15px; overflow: hidden;">
                                        <img src="{{ url('images/' . $rs->image . '') }}"
                                            style="width: 100%; height: 100%; object-fit: cover;" class="img-fluid"
                                            alt="Laptop" />
                                        <a href="#!">
                                            <div class="mask"></div>
                                        </a>
                                    </div>

                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <p><a href="#!" class="text-dark">{{ $rs->name }}</a></p>
                                                <p class="small text-muted">{{ $rs->hotel->name }}</p>
                                            </div>
                                            <div>
                                                <div class="d-flex flex-row justify-content-end mt-1 mb-4 text-danger">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <p class="small text-muted">Rated 4.0/5</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between">
                                            <p><a href="#!" class="text-dark">Rp.{{ number_format($rs->price, 2) }}</a></p>
                                            <p class="text-dark">#### 8787</p>
                                        </div>
                                        <p class="small text-muted">VISA Platinum</p>
                                    </div>
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
                                            <a href="{{ route('products.index') }}" class="text-dark fw-bold">Cancel</a>
                                            <button type="button" class="btn btn-primary">Buy now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a
                    href="https://getbootstrap.com/docs/4.0/getting-started/introduction/">getting started guide</a>.
            </p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"
        integrity="sha384-KFC4+0PBtyWi6kHpjQVeDzpD+pFT35WZ/UJksdxXvjlK+v3vXu1fJI0F1z0VbZ8e" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>

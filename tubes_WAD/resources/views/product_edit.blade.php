<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ANS | {{ $data->product_name}} Edit</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
</head>
<style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #aeaeae;
  text-align: left;
  padding: 8px;
  text-align: center;
}

th{
    background-color: #d4e6ff;
}

tr:nth-child(even) {
  background-color: #ffffff;
}

#edit{
    color: white;
    background-color: #2878EB;
    width: 80px;
    height: 30px;
    border: none;
    border-radius: 7px;
}

#hapus{
    color: white;
    background-color: #e93143;
    width: 80px;
    height: 30px;
    border: none;
    border-radius: 7px;
}

</style>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="Home_after.php" class="navbar-brand ms-lg-5">
        <a class="navbar-brand" href="#"><img src="/images/logo.png" width="150" height="50"></a>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/aboutus" class="nav-item nav-link">About Us</a>
                
                <div class="nav-item dropdown">
                    <a  class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Product/Service</a>
                    <div class="dropdown-menu m-0">
                        <a href="/service" class="dropdown-item">Service</a>
                        <a href="/product" class="dropdown-item">Product</a>
                    </div>
                </div>
                <a href="/contact" class="nav-item nav-link">Contact Us</a>
                @if(Auth::user())
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{Auth::user()->name}}</a>
                    <div class="dropdown-menu m-0">
                        <a href="/profile" class="dropdown-item">Profile</a>
                        <a href="/logout" class="dropdown-item">Logout</a>
                    </div>
                </div>
                @else
                <a href="/login" class="nav-item nav-link">Login</a>
                @endif
            </div>
        </div>
    </nav>
    <!-- Navbar End -->



    <!-- Hero Start -->
    <div class="container-fluid p-5 hero-header mb-5" style="background-color: #172F36;">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">{{ $data->product_name}}</h1>
                <a href="" class="h4 text-white">Product Detail</a>
                
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <div class="container">
        <h2><b>{{ $data->product_name }}</b></h2>
        <p>Detail {{ $data->product_name }}</p>
        <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
            <img src='{{ asset('storage/'.$data->image) }}' class="col-6" alt="No Image"></img>
            <div class="col-6">
            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                            @endif
                <form action="/product_edit/{{ $data->id }}" enctype='multipart/form-data' method="POST">
                    @csrf
                    @method("PUT")
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="mb-3">
                        <label for="name"><b>Nama Produk</b></label>
                        <input type="text" name="name" class="form-control form-control" placeholder="{{ $data->product_name}}">
                    </div>
                    <div class="mb-3">
                        <label for="category"><b>Kategori Produk</b></label>
                        <input type="text" name="category" class="form-control"placeholder="{{ $data->product_category}}">
                    </div>
                    <div class="mb-3">
                        <label for="harga"><b>Harga</b></label>
                        <input type="text" name ="harga" class="form-control" placeholder="{{ $data->price}}">
                    </div>
                    <div class="mb-3">
                        <label for="stok"><b>Stock</b></label>
                        <input type="number" id='stok' name="stok" class="form-control" placeholder="{{ $data->stock}}">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi"><b>Deskripsi</b></label>
                        <textarea class="form-control" rows="3" name="deskripsi" placeholder="{{ $data->description}}"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image"><b>Foto</b></label>
                        <input type="file" name="image" id="image"  class="form-control" value="">
                    </div>
                    
                    <button type="submit" class='btn btn-primary'>Selesai</button>
                    
                    <br></br>
                </form>
            </div>
        </div>
    </div>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Contact Us</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Jl. Maulana Hasanudin No.38A, Kp. Cipondoh Rt. 005 Rw. 008 Cipondoh Kota Tangerang 15148 Email: info@adita-ns.com Phone: 021 55712013</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@adita-ns.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>021 55712013</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
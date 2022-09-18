<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Form Pemesanan | LAFME by KHAYANGAN</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}dist/css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}dist/css/style.css" />
    <link rel="shortcut icon" href="{{asset('/')}}dist/img/pngegg.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    @include('sweetalert::alert')
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-md-push-5">
                        <div class="booking-cta">
                            <!-- <h1>FORM PEMESANAN</h1> -->
                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-7">
                        <div class="booking-form">
                            <form action="{{url('simpan')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <span class="form-label">Nama Facebook</span>
                                    <input class="form-control" type="text" placeholder="Nama Facebook" name="fb" required>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Nama Lengkap</span>
                                    <input class="form-control" type="text" placeholder="Nama Asli" name="namaasli" required>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">Alamat Lengkap</span>
                                    <textarea class="form-textarea" name="alamat" placeholder="Alamat Lengkap" required></textarea>
                                </div>
                                <div class="form-group">
                                    <span class="form-label">No. Whatsapp</span>
                                    <input class="form-control" type="number" placeholder="No. Whatsapp" name="wa" required>
                                </div>
                                <div class=" form-btn">
                                    <button class="submit-btn">Pesan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
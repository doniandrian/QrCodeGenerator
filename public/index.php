<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IF Unpar QR Code Generator</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">
            <img src='../public/images/Logo.jpg' width="50" height="50">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- CONTENT -->

<section class="h-100">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <nav class="navbar">
                    <ul class="navbar-nav navbar-dark bg-light flex-row rounded">
                        <li class="nav-item px-3">
                            <a class="nav-link" href="#">URL</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link" href="#">PDF</a>
                        </li>
                    </ul>
                </nav>
                <div class="container border w-full">
                    <form>
                        <div class="form-group mt-3">
                            <label for="exampleInputPassword1">URL</label>
                            <input type="text" class="form-control" id="url-input" placeholder="https://yoururlhere.com">
                        </div>
                    </form>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button type="button" class="btn btn-primary btn-lg">Generate QR Code</button>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-center mt-3">
                    <img src='../public/images/qr_placeholder.svg'>
                </div>
                
                
                <div class="form-check d-flex justify-content-center mt-3">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                    Logo
                  </label>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button type="button" class="btn btn-primary">Download</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
    <div class="copyrights">
        <p>&copy; 2024 IF Unpar. All Rights Reserved.
        </p>
    </div>
</footer>

</body>
</html>
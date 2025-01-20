<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .footer-links a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .social-icons a {
            color: #ffffff;
            margin: 0 10px;
            font-size: 1.5rem;
        }

        .social-icons a:hover {
            color: #00aced;
        }

        .form-control,
        .btn {
            border-radius: 0;
        }

        .contact-us {
            background-color: #333;
            padding: 20px;
            border-radius: 8px;
        }

        .contact-us h5 {
            margin-bottom: 20px;
        }

        .contact-us .form-control {
            background-color: #444;
            color: #fff;
            border: none;
        }

        .contact-us .form-control::placeholder {
            color: #bbb;
        }

        .contact-us .btn {
            background-color: #555;
            color: #fff;
        }

        .contact-us .btn:hover {
            background-color: #777;
        }
    </style>
</head>

<body>

    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-content-center">
                    <h5>About Us</h5>
                    <p>Digital Recipe Book is your go-to platform for discovering and sharing amazing recipes from
                        around the world.</p>
                </div>
                <div class="col-md-6">
                    <div class="contact-us">
                        <h5>Contact Us</h5>
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                            </div>
                            <button type="button" class="btn w-100">Send</button>
                        </form>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="row mt-4">
                <div class="col-12 text-center social-icons">
                    <a href="#" class="bi bi-facebook"></a>
                    <a href="#" class="bi bi-twitter"></a>
                    <a href="#" class="bi bi-instagram"></a>
                    <a href="#" class="bi bi-youtube"></a>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-12 text-center">
                    <p>&copy; 2024 Digital Recipe Book. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Forms</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('form1') }}">Form 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form2.html">Form 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form3.html">Form 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form4.html">Form 4</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="mb-4">Submit Your Details</h1>
        <form action="/form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Card Number (col-6) -->
                <div class="col-6 mb-3">
                    <label for="card_number" class="form-label">Card Number:</label>
                    <input type="text" id="card_number" name="card_number" class="form-control" required>
                </div>

                <!-- Name (col-6) -->
                <div class="col-6 mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <!-- Qualified As (col-6) -->
                <div class="col-6 mb-3">
                    <label for="qualified_as" class="form-label">Qualified As:</label>
                    <input type="text" id="qualified_as" name="qualified_as" class="form-control" required>
                </div>

                <!-- ID Number (col-6) -->
                <div class="col-6 mb-3">
                    <label for="id_number" class="form-label">ID Number:</label>
                    <input type="text" id="id_number" name="id_number" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <!-- Issue Date (col-6) -->
                <div class="col-6 mb-3">
                    <label for="issue_date" class="form-label">Issue Date:</label>
                    <input type="date" id="issue_date" name="issue_date" class="form-control" required>
                </div>

                <!-- Expiry Date (col-6) -->
                <div class="col-6 mb-3">
                    <label for="expiry_date" class="form-label">Expiry Date:</label>
                    <input type="date" id="expiry_date" name="expiry_date" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <!-- Company (col-6) -->
                <div class="col-6 mb-3">
                    <label for="company" class="form-label">Company:</label>
                    <input type="text" id="company" name="company" class="form-control" required>
                </div>

                <!-- Upload Photo (col-6) -->
                <div class="col-6 mb-3">
                    <label for="photo" class="form-label">Upload Photo:</label>
                    <input type="file" id="photo" name="photo" class="form-control" required>
                </div>
            </div>

            <!-- Submit button (Centered) -->
            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js (for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

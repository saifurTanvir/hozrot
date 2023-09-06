<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Article Table</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Article Name</th>
                <th scope="col">Short Detail</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Article 1</td>
                <td>A short description about Article 1.</td>
                <td>
                    <a href="#" class="btn btn-primary">Read</a>
                    <a href="#" download class="btn btn-success">Download</a>
                </td>
            </tr>
            <tr>
                <td>Article 2</td>
                <td>A short description about Article 2.</td>
                <td>
                    <a href="#" class="btn btn-primary">Read</a>
                    <a href="#" download class="btn btn-success">Download</a>
                </td>
            </tr>
            <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>

<!-- Add Bootstrap JS and Popper.js scripts here -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

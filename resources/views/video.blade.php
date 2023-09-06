<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Add custom styles if needed */
        .card {
            margin-bottom: 20px;
            border: none; /* Remove card border */
            border-radius: 0; /* Remove border-radius */
            box-shadow: none; /* Remove box-shadow */
        }

        .details-button {
            background-color: #007bff;
            color: white;
            margin-right: 10px;
        }

        .download-button {
            background-color: #28a745;
            color: white;
        }
    </style>
    <title>Video Grid</title>
</head>
<body>
<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div class="col mb-4">
            <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Replace with your YouTube embed code -->
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=lTAucR59OSk" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <p class="card-text">Short summary of Video 1.</p>
                    <a href="details.html?id=1" class="btn btn-primary details-button">Details</a>
                    <a href="#" class="btn btn-success download-button">Download</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Replace with your YouTube embed code -->
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID_2" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <p class="card-text">Short summary of Video 2.</p>
                    <a href="details.html?id=2" class="btn btn-primary details-button">Details</a>
                    <a href="#" class="btn btn-success download-button">Download</a>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Replace with your YouTube embed code -->
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID_2" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <p class="card-text">Short summary of Video 2.</p>
                    <a href="details.html?id=2" class="btn btn-primary details-button">Details</a>
                    <a href="#" class="btn btn-success download-button">Download</a>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Replace with your YouTube embed code -->
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID_2" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <p class="card-text">Short summary of Video 2.</p>
                    <a href="details.html?id=2" class="btn btn-primary details-button">Details</a>
                    <a href="#" class="btn btn-success download-button">Download</a>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Replace with your YouTube embed code -->
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID_2" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <p class="card-text">Short summary of Video 2.</p>
                    <a href="details.html?id=2" class="btn btn-primary details-button">Details</a>
                    <a href="#" class="btn btn-success download-button">Download</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Replace with your YouTube embed code -->
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID_2" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <p class="card-text">Short summary of Video 2.</p>
                    <a href="details.html?id=2" class="btn btn-primary details-button">Details</a>
                    <a href="#" class="btn btn-success download-button">Download</a>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card">
                <div class="embed-responsive embed-responsive-16by9">
                    <!-- Replace with your YouTube embed code -->
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID_2" allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <p class="card-text">Short summary of Video 2.</p>
                    <a href="details.html?id=2" class="btn btn-primary details-button">Details</a>
                    <a href="#" class="btn btn-success download-button">Download</a>
                </div>
            </div>
        </div>

        <!-- Repeat the above card structure for more videos -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

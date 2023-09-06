<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap 5 Navbar</title>

    <style>
        /* Custom styles for the responsive banner */
        .banner {
            width: 100%;
            height: 150px;
            background-color: #007bff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            box-sizing: border-box;
            color: #ffffff;
        }

        .text-section {
            flex: 1;
            text-align: center;
        }

        @media (max-width: 768px) {
            .banner {
                flex-direction: column;
                height: auto;
            }

            .text-section {
                margin-bottom: 10px;
            }
        }



        /* Custom styles for the notice board */
        .notice-board {
            width: 100%;
            height: 200px;
            background-color: #f7f7f7;
            padding: 20px;
            box-sizing: border-box;
            direction: rtl; /* Right-to-left text direction */
            overflow: hidden;
        }

        .scrolling-text {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 15s linear infinite;
        }

        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }



        /* Custom styles for the button container */
        .button-container {
            text-align: left;
            padding: 10px;
        }

        .toggle-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 12px;
            margin: 5px;
            border-radius: 4px;
            cursor: pointer;
        }

        .content-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
        }

        .content {
            display: none;
        }

        .active {
            display: block;
        }


        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
    </style>

</head>
<body>
<div class="banner">
    <div class="text-section">
        <h2>Section 1</h2>
        <p>This is the first section of the banner.</p>
    </div>
    <div class="text-section">
        <h2>Section 2</h2>
        <p>This is the second section of the banner.</p>
    </div>
    <div class="text-section">
        <h2>Section 3</h2>
        <p>This is the third section of the banner.</p>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container" >
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="multiLevelDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="multiLevelDropdown">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Category 1</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Subcategory 1-1</a></li>
                                <li><a class="dropdown-item" href="#">Subcategory 1-2</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Category 2</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Subcategory 2-1</a></li>
                                <li><a class="dropdown-item" href="#">Subcategory 2-2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="singleDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Single Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="singleDropdown">
                        <li><a class="dropdown-item" href="#">Dropdown Item 1</a></li>
                        <li><a class="dropdown-item" href="#">Dropdown Item 2</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Plain Button</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="banner">
    <div class="text-section">
        <h2>Section 1</h2>
        <p>This is the first section of the banner.</p>
    </div>
    <div class="text-section">
        <h2>Section 2</h2>
        <p>This is the second section of the banner.</p>
    </div>
    <div class="text-section">
        <h2>Section 3</h2>
        <p>This is the third section of the banner.</p>
    </div>
</div>

<div class="notice-board">
    <div class="scrolling-text">
        <p>This is a scrolling notice board where text flows from right to left.</p>
    </div>
</div>



<div class="button-container">
    <button class="toggle-button" data-target="content1">Button 1</button>
    <button class="toggle-button" data-target="content2">Button 2</button>
    <button class="toggle-button" data-target="content3">Button 3</button>
</div>

<div class="content-container">
    <div class="content" id="content1">
        <p>Content for Button 1</p>
    </div>
    <div class="content" id="content2">
        <p>Content for Button 2</p>
    </div>
    <div class="content" id="content3">
        <p>Content for Button 3</p>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h5>Links</h5>
            <ul class="list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h5>Contact Info</h5>
            <p>123 Street, City</p>
            <p>Email: info@example.com</p>
            <p>Phone: +1 123-456-7890</p>
        </div>
        <div class="col-md-4">
            <h5>Follow Us</h5>
            <a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="me-2"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="footer text-center">
                <p>&copy; 2023 Your Company. All rights reserved.</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Add custom JavaScript to handle clicks on dropdowns
    document.querySelectorAll('.dropdown-submenu').forEach(function (dropdown) {
        dropdown.addEventListener('click', function (event) {
            event.stopPropagation();
            dropdown.querySelector('.dropdown-menu').classList.toggle('show');
        });
    });
</script>

<script>
    const buttons = document.querySelectorAll('.toggle-button');
    const contents = document.querySelectorAll('.content');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            contents.forEach(content => {
                if (content.id === target) {
                    content.classList.add('active');
                } else {
                    content.classList.remove('active');
                }
            });
        });
    });
</script>

<script>
    const buttons = document.querySelectorAll('.toggle-button');
    const contents = document.querySelectorAll('.content');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-target');
            contents.forEach(content => {
                if (content.id === target) {
                    content.classList.add('active');
                } else {
                    content.classList.remove('active');
                }
            });
        });
    });
</script>

</body>
</html>

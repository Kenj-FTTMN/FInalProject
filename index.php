<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lending and Installment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="logo">
            <img src="images/logo.jpg" alt="Key Choice Lending" style="width: 170px; height: 50px;">
        </div>
        <div>
            <a href="index.php?page=home" class="btn btn-outline-dark">Home</a>
            <a href="index.php?page=about" class="btn btn-outline-dark">About us</a>
            <a href="index.php?page=contact" class="btn btn-outline-dark">Contact us</a>
            <a href="index.php?page=login" class="btn btn-outline-dark">Login</a>
        </div>
    </nav>
    
    <section>
        <article>
            <?php 
                if (!isset($_GET['page']) || $_GET['page'] === 'home') {
            ?>
                <div class="hero-section">
                    <h1 class="mt-3">Lending and Installment System</h1>
                    <p>"Making Borrowing Simple and Affordable."</p>
                    <div class="hero-buttons">
                        <button class="btn">Lend Now</button>
                        <button class="btn">Install Products</button>
                    </div>
                </div>

                <section class="our-process container d-flex justify-content-between">
                    <div class="process-content">
                        <h2 class="text-center">OUR PROCESS</h2>
                        <h3 class="text-center mb-4">It's as easy as 1, 2, 3!</h3>
                        <div class="card mb-3">
                            <img src="images/lightbulb.jpg" class="card-img-top" alt="Application Icon">
                            <div class="card-body">
                                <h4 class="card-title">QUICK & EASY APPLICATION</h4>
                                <p class="card-text">We guide and assist our clients in meeting their loan requirements and ensure the collection of loan obligations in a professional and supportive environment.</p>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <img src="images/fasticon.jpg" class="card-img-top" alt="Approval Icon">
                            <div class="card-body">
                                <h4 class="card-title">FAST APPROVAL</h4>
                                <p class="card-text">Most loans are approved within one day of receiving complete documents. Our streamlined process ensures that applicants experience minimal delay.</p>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <img src="images/lowest-icon.png" class="card-img-top" alt="Rate Icon">
                            <div class="card-body">
                                <h4 class="card-title">LOWEST RATE</h4>
                                <p class="card-text">Lowest rate guarantees that you benefit from the most cost-effective lending option available, saving you money on interest charges.</p>
                            </div>
                        </div>
                    </div>

                    <div class="right-images">
                        <img src="images/Lending.jpg" alt="Process Image 1" style="height: 35vh; width: 65vh; margin-left: 100px; margin-top: 6vh;">
                        <div class="user-comment" style="margin-top: -27vh; margin-left: 80vh;">
                            <p><strong>Joshua: </strong> "I was skeptical at first, but this lending system exceeded my expectations! The application process was straightforward, and I received approval in less than 24 hours. The interest rates are reasonable, and the repayment terms are flexible. Customer service was also outstanding, addressing all my concerns promptly. I would definitely use this service again and recommend it to anyone in need of quick financial assistance!"</p>
                        </div>
                        <div class="user-comment1">
                            <p><strong>John: </strong> "This lending process was incredibly fast and easy! Highly recommended! The entire experience was smooth from start to finish, with clear instructions and no unnecessary delays. I was able to get my loan approved within a day, and the customer support team was very responsive and helpful throughout the process. If you're looking for a hassle-free way to secure a loan, this is definitely the best option out there!"</p>
                        </div>
                        <img src="images/installment.jpg" alt="Process Image 2" style="height: 35vh; width: 65vh; margin-left: 500px; margin-top: -275px;">
                    </div>
                </section>
            <?php 
                } else {
                    // Empty content for About, Contact, and Login pages
                    echo "";
                }
            ?>
        </article>
    </section>

</body>
</html>

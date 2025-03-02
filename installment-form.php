<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installment Process</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="fw-bold" style="margin-bottom: 40px">Installment Process</h2>
        
        <form>
            <h5 class="fw-bold" style="margin-bottom: 20px">Frequency of Payment <span class="text-danger">*</span></h5>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentFrequency" id="daily">
                <label class="form-check-label" for="daily">Daily</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentFrequency" id="weekly">
                <label class="form-check-label" for="weekly">Weekly</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paymentFrequency" id="monthly">
                <label class="form-check-label" for="monthly" style="margin-bottom: 10px">Monthly</label>
            </div>
            
            <div class="mt-3">
                <label for="existingInstallment" style="margin-bottom: 10px">Do you have an active installment?</label>
                <select class="form-select" id="existingInstallment" style="margin-bottom: 40px">
                    <option>Yes</option>
                    <option>No</option>
                </select>
            </div>
            
            <h5 class="fw-bold" style="margin-bottom: 20px">Personal Data <span class="text-danger">*</span></h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="fullName">Full Name</label>
                    <input type="text" class="form-control" id="fullName" placeholder="Last Name, First Name, Middle Name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="user@example.com">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="coMaker">Name of Co-Maker</label>
                    <input type="text" class="form-control" id="coMaker" placeholder="Last Name, First Name, Middle Name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="mobileNumber">Mobile Number</label>
                    <input type="text" class="form-control" id="mobileNumber" placeholder="09123456789">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="coMakerContact">Contact Number of Co-Maker</label>
                    <input type="text" class="form-control" id="coMakerContact" placeholder="09123456789">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="civilStatus">Civil Status</label>
                    <select class="form-select" id="civilStatus">
                        <option>Single</option>
                        <option>Married</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="homeAddress">Home Address</label>
                <input type="text" class="form-control" id="homeAddress" placeholder="House Number, Block, Street" style="margin-bottom: 50px">
            </div>
            
            <h5 class="fw-bold" style="margin-bottom: 20px">Employment and Income <span class="text-danger">*</span></h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="jobTitle">Job Position/Title</label>
                    <input type="text" class="form-control" id="jobTitle" placeholder="Salesman/Cashier/Business Owner">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="yearsEmployed">Years Employed</label>
                    <input type="text" class="form-control" id="yearsEmployed" placeholder="Years">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="income">Income per Month</label>
                    <select class="form-select" id="income">
                        <option>0-2000</option>
                        <option>2001-5000</option>
                        <option>5001-10000</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="businessAddress">Business Address</label>
                    <input type="text" class="form-control" id="businessAddress" placeholder="Misamis Oriental, Cagayan de Oro City" style="margin-bottom: 40px">
                </div>
            </div>
            
            <h5 class="fw-bold  ">References (at least 2 family members) <span class="text-danger">*</span></h5>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="ref1Name">Reference #1: Name</label>
                    <input type="text" class="form-control" id="ref1Name" placeholder="Last Name, First Name, Middle Name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ref1Contact">Reference #1: Contact Number</label>
                    <input type="text" class="form-control" id="ref1Contact" placeholder="09123456789">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="ref2Name">Reference #2: Name</label>
                    <input type="text" class="form-control" id="ref2Name" placeholder="Last Name, First Name, Middle Name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ref2Contact">Reference #2: Contact Number</label>
                    <input type="text" class="form-control" id="ref2Contact" placeholder="09123456789">
                </div>
            </div>
            
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-dark px-5">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

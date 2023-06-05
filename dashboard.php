<?php
// session_start();
// if(!isset($_SESSION['name'])){
    // header('Location:login.php');
    // exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="imagesUsed/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>dashboard</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .div{       
            background-color: #1e2557f0;
            display: flex;
            color:#fff;
             justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        h1{
            margin-left:20px;
            font-family: monospace;
        }
        a{
            align-items:right;
            font-size:25px;
            padding:20px;
            margin-right:20px;
            color:#fff;
        }
        .btn{
            margin-top:20px;
            width:100%;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="div">
        <h1>Welcome <?php echo $_SESSION['name'];  ?>  on  falana webpage</h1>
        <a href="logout.php">Log Out</a>
    </div>
 <form class="container" action="add-property.php" method="POST" enctype="multipart/form-data">
    <div class="row mb-2 mt-3">
        <div class="col form-floating">
            <input type="text" class="form-control" id="Name" placeholder="Enter Your Name" name="Name">
                <label for="Name" class="form-label">Name:</label>
            </div>
            <div class="col form-floating">
                <input type="text" class="form-control" id="Mobile" placeholder="Enter Your Mobile No." name="Mobile">
                <label for="Mobile" class="form-label">Mobile No:</label>
            </div>
            </div>
            <div class="col form-floating mb-3 mt-2">
                <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
                <label for="email" class="form-label">Email:</label>
            </div>
            <h5>Documents</h5>
            <hr>
            <div class="mb-2">
            <label for="AAdhar" class="form-label">AAdhar Card:</label>
            <input type="file" class="form-control" id="AAdhar" name="AAdhar">
        </div>
            <h5>Appartment Details</h5>
            <hr>
            <div class="mb-2 form-floating">
                <input type="text" class="form-control" id="NA" placeholder="Enter Name of Your Apartment" name="NA">
                <label for="NA" class="form-label">Name of Appartment</label>
            </div>
            <div class="mb-3">
                <label for="APW" class="form-label">Which Type Of Appartment You Want:</label>
                <select class="form-select" id="APW" name="APW">
                <option value="">Select</option>
                <option value="1BHK">1BHK</option>
                <option  value="2BHK">2BHK</option>
                <option  value="3BHK">3BHK</option>
                <option  value="4BHK">4BHK</option>
                <option  value="Hostel">Hostel</option>
                <option  value="pg">PG's</option>
                </select>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="stateSelect">Select State:</label>
                    <select id="stateSelect" name="stateSelect" onchange="populateCities()">
                    <option value="">Select</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
                </div>
                <div class="col mb-3">
                <label for="citySelect">Select City:</label>
                <select id="citySelect" name="citySelect">
                    <option value="">Select City</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="images" class="form-label">Images:</label>
                <input type="file" class="form-control" id="images" name="images" mulltiple>
            </div>
        </div>
                <button type="submit" class="btn btn-success">Submit</button>
        </form>
    <script>
const cityData = {
    "Andhra Pradesh": ["Visakhapatnam", "Vijayawada", "Guntur"],
    "Arunachal Pradesh": ["Itanagar", "Naharlagun"],
    "Assam": ["Guwahati", "Dibrugarh", "Jorhat"],
    "Bihar": ["Patna", "Gaya", "Muzaffarpur"],
    "Chhattisgarh": ["Raipur", "Bilaspur", "Durg"],
    "Goa": ["Panaji", "Margao", "Vasco da Gama"],
    "Gujarat": ["Ahmedabad", "Surat", "Vadodara"],
    "Haryana": ["Chandigarh", "Faridabad", "Gurgaon"],
    "Himachal Pradesh": ["Shimla", "Dharamshala", "Kullu"],
    "Jharkhand": ["Ranchi", "Jamshedpur", "Dhanbad"],
    "Karnataka": ["Bengaluru", "Mysuru", "Hubli"],
    "Kerala": ["Thiruvananthapuram", "Kochi", "Kozhikode"],
    "Madhya Pradesh": ["Bhopal", "Indore", "Gwalior"],
    "Maharashtra": ["Mumbai", "Pune", "Nagpur"],
    "Manipur": ["Imphal"],
    "Meghalaya": ["Shillong"],
    "Mizoram": ["Aizawl"],
    "Nagaland": ["Kohima"],
    "Odisha": ["Bhubaneswar", "Cuttack", "Puri"],
    "Punjab": ["Chandigarh", "Amritsar", "Ludhiana"],
    "Rajasthan": ["Jaipur", "Udaipur", "Jodhpur"],
    "Sikkim": ["Gangtok"],
    "Tamil Nadu": ["Chennai", "Coimbatore", "Madurai"],
    "Telangana": ["Hyderabad", "Warangal", "Karimnagar"],
    "Tripura": ["Agartala"],
    "Uttar Pradesh": ["Lucknow", "Kanpur", "Varanasi"],
    "Uttarakhand": ["Dehradun", "Haridwar", "Nainital"],
    "West Bengal": ["Kolkata", "Asansol", "Siliguri"]
};

// Function to populate cities based on selected state
function populateCities() {
    const stateSelect = document.getElementById("stateSelect");
    const citySelect = document.getElementById("citySelect");
    const selectedState = stateSelect.value;

    // Clear city select box
    citySelect.innerHTML = "<option value=''>Select</option>";

    // Populate city select box with cities based on selected state
    if (selectedState !== "") {
        const cities = cityData[selectedState];
        for (let i = 0; i < cities.length; i++) {
            const option = document.createElement("option");
            option.value = cities[i];
            option.text = cities[i];
            citySelect.add(option);
        }
    }
}
    </script>
</body>
</html>

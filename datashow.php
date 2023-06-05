<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>show-table</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            background-color: #000;
            background-image: url(https://www.paulrogerdev.fr/codepen/noise.png);
        }
        .discription,.address{
            width: 387px;
        }

        .main-heading {
            margin-top: 50px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-evenly;
        }

        .room {
            display: flex;
            flex-direction: column;
            padding: 21px;
            border: 2px solid white;
            color: white;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .image {
            width: 400px;
            height: 400px;
            border-radius: 20px;
        }
        .wrap{
            display:flex;            
            justify-content: space-between;
            padding-right: 30px;
            align-items: center;
        }
        .onemore{
            margin-top:20px;
        }
        .bhkname,.price,.mobile,.address,.extra,.discription{
            padding-top:5px;
        }
        span{
            padding:5px;
        }
        span:hover{
            background: #7a6e6e42;
    color: #9d9494;
    border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php
    $conn = mysqli_connect("localhost","root","","getrummie");
    $id = intval($_GET['apw']);
    $query = "select * from adddata where apw=$id";
    if($result = mysqli_query($conn,$query))
    {
        ?>
        <div class="main-heading">
            <?php
        while($row = mysqli_fetch_assoc($result))
        {
                echo " <div class='room'><img class='image' src='property/{$row['images']}' width='300px'>
                <span class='wrap onemore'>
                <span class='bhkname'>Apartment : ".$row['apw']."</span>
                <span class='price'>Price :  &#8377;.<span class='price'>".$row['price']."</span></span>
                </span>
                <span class='wrap extra'>
                <span class='bhkname'>State : ".$row['state']."</span>
                <span class='city'>City : ".$row['city']."</span>
                </span>
                <span class='mobile'>Mobile : ".$row['mobile']."</span>
                <span class='address'>Address : ".$row['address']."</span>
                <span class='discription'>About : ".$row['description']."</span>
            </div>" ;
        }
    }
    else{
        echo "something goes wrong";
    }
    ?>
            </div>
            </div>
</body>

</html>
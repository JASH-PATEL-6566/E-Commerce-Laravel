<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerse website</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .custom-login{
            height: 88vh;
            padding: 40px 10px;
        }
        
        .custom-product{
            padding: 40px 30px;
        }
        img.slider-img{
            height: 400px !important;
            width: 400px;
        }
        .tending_container{
            margin-top: 20px;
        }
        .trending-product-container{
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }
        .search-product-container{
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
        }
        .product-component img{
            height: 150px;
            width: 150px;
            object-fit: cover;
        }
        .product-component-search img{
            height: 250px;
            width: 250px;
            object-fit: cover;
        }
        .product-component,.product-component-search{
            margin-top: 20px;
            max-width: 250px;
        }
        .product-component h5,
            .product-component-search h6,.product-component-search h5{ 
            color: black;
        }
        .btn-carousel{
            background-color: black;
            height: fit-content;
            width: fit-content;
            padding: 1em;
            border-radius: 50%;
            margin: auto;
        }
        .detail-img{
            height: 200px;
        }
        .btn-container{
            display: flex;
            gap: 20px;
        }
        .search-box{
            width: 500px !important;
        }
    </style>
</head>

<body>
    {{View::make("header")}}
    @yield("content")
    {{View::make("footer")}}
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/responsive.css" rel="stylesheet" />
    <title>Animated Picture Links with Hover Effect</title>
    <style>
        body {
            
            margin: 0;
            padding: 5px;
            height: 100vh;
            width: 100;
            background-color: black;
            background: url(/images/166865-2560x1600-black-abstract-wallpaper-for-iphone-data.jpg) no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

    

        .gallery {
            justify-content: center;
            display: grid;
            gap: 20px;
            
            grid-template-columns: repeat(4, 4fr);
            
            grid-template-rows: repeat(4, 2fr);
            width: 10%;
            max-width: 100px;
        }

        .gallery-item {
            justify-content: center;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0px 12px 20px rgba(0, 0, 0, 0.2);
        }

        .gallery-item:hover img {
            transform: scale(1.2);
        }

        .title {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 15%;
            background: rgba(0, 0, 0, 0.6);
            color: rgb(241, 236, 236);
            padding: 3px;
            padding-right: 0px;
            text-align: center;
            font-size: 18px;
            transition: background 0.3s ease;
        }
        .gallery-item:hover .title {
            background: rgba(58, 233, 215, 0.825);
            text-align: center;
        }

        .item1 {
           
            height: 300px;
            width: 300px;
        }

        .item2 {
            height: 300px;
            width: 300px;
        }

        .item3 {
            height: 300px;
            width: 300px;
        }

        .item4 {
           
            height: 300px;
            width: 300px;
        }
        .item5 {
           
           height: 300px;
           width: 300px;
       }
       .item6 {
           
           height: 300px;
           width: 300px;
       }
       .item7 {
           
           height: 300px;
           width: 300px;
       }
       .item7 {
           
           height: 300px;
           width: 300px;
       }
    </style>
</head>
<body>
    <div class="gallery">
        <a href="agri.html" class="gallery-item item1">
            <img src="images/tractor-agricultural-machine-cultivating-field (1).jpg" alt=" ">
            <div class="title">AGRICULTURAL ENGINEERING</div>
        </a>
        <a href="aids.html" class="gallery-item item2">
            <img src="images/ai-robot-hand-close-human-hand (1).jpg" alt="">
            <div class="title">ARTIFICIAL INTELLIGENCE AND DATA SCIENCE ENGINEERING</div>
        </a>
        <a href="civil.html" class="gallery-item item3">
            <img src="images/medium-shot-low-angle-view-engineer-architect-looking-plans (1).jpg" alt="">
            <div class="title">CIVIL ENGINEERING</div>
        </a>
        <a href="cse.html" class="gallery-item item4">
            <img src="images/man-s-hand-typing-laptop-wooden-desk (1).jpg" alt="">
            <div class="title">COMPUTER SCIENCE AND ENGINEERING<script src=""></script></div>

           
        </a>

        <a href="eee.html" class="gallery-item item1">
            <img src="images/motherboard-background (1).jpg" alt=" ">
            <div class="title">ELECTRICAL AND ELECTRONIC ENGINEERING</div>
        </a>

        <a href="ece.html" class="gallery-item item1">
            <img src="images/view-male-engineer-work-engineers-day-celebration (1).jpg" alt=" ">
            <div class="title">ELECTRICAL AND COMMUNICATION ENGINEERING</div>
        </a>

        <a href="it.html" class="gallery-item item1">
            <img src="images/futurism-perspective-digital-nomads-lifestyle (1).jpg" alt=" ">
            <div class="title">INFORMATION TECHNOLOGY</div>
        </a>

        <a href="mech.html" class="gallery-item item1">
            <img src="images/Screenshot_2024-08-21_at_10.11.29â_¯AM-transformed.png" alt=" ">
            <div class="title">MECHANICAL ENGINEERING</div>
        </a>

        


    </div>
</body>
</html>

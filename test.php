<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel en HTML et CSS</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; background: #f4f4f4; }
        .carousel {
            width: 1400px;
        }
        .carousel-inner {
            display: flex;
            width: 300%;
            animation: slide 9s infinite;
        }
        .carousel-item {
            width: 100%;
            flex: 1 0 100%;
        }
        .carousel-item img {
            width: 100%;
            display: block;
        }
        @keyframes slide {
            0% { transform: translateX(0); }
            33% { transform: translateX(-100%); }
            66% { transform: translateX(-200%); }
            100% { transform: translateX(0); }
        }
    </style>
</head>
<body>
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item"><img src="images/accueil.jpg" alt="Image 1"></div>
            <div class="carousel-item"><img src="images/accueil.jpg" alt="Image 2"></div>
            <div class="carousel-item"><img src="images/accueil.jpg" alt="Image 3"></div>
        </div>
    </div>
</body>
</html>

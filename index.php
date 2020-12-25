<html lang="en">

<head>
    <title>Adventour</title>
    <?php include './components/header.php'; ?>
</head>

<body id="home">
<?php include './components/nav.php'; ?>

<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="./assets/img/slideshow/slide(1).jpg" style="width:100%" alt="img1">
    </div>

    <div class="mySlides fade">
        <img src="./assets/img/slideshow/slide(2).jpg" style="width:100%" alt="img2">
    </div>

    <div class="mySlides fade">
        <img src="./assets/img/slideshow/slide(3).jpg" style="width:100%" alt="img3">
    </div>

    <div class="mySlides fade">
        <img src="./assets/img/slideshow/slide(4).jpg" style="width:100%" alt="img4">
    </div>

    <div class="mySlides fade">
        <img src="./assets/img/slideshow/slide(5).jpg" style="width:100%" alt="img5">
    </div>

    <div class="mySlides fade">
        <img src="./assets/img/slideshow/slide(6).jpg" style="width:100%" alt="img6">
    </div>

    <div class="mySlides fade">
        <img src="./assets/img/slideshow/slide(7).jpg" style="width:100%" alt="img7">
    </div>
</div>
<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

<!-- temp 
    <div class="homepage">
        <div id="slider">
            <figure>
                <img src="./assets/img/slideshow/slide(1).png">
                <img src="./assets/img/slideshow/slide(2).jpg">
                <img src="./assets/img/slideshow/slide(3).jpg">
                <img src="./assets/img/slideshow/slide(4).jpg">
                <img src="./assets/img/slideshow/slide(5).jpg">
            </figure>
        </div>
    </div>
-->
<div class="packages">
    <h1 class="home-title">Popular Packages</h1>
    <div class="grid">
        <div class="col1">
            <img src="./assets/img/home/Bali.jpg" alt="Bali" class="image">
            <div class="middle">
                <div class="text">Bali</div>
            </div>
        </div>
        <div class="col2">
            <h1>Bali Packages</h1>
            <div class="feature-icons">
                <a href="#"><i class="fas fa-car"></i></a>
                <a href="#"><i class="fas fa-plane"></i></a>
                <a href="#"><i class="fas fa-bed"></i></a>
                <a href="#"><i class="fas fa-utensils"></i></a>
                <a href="#"><i class="fas fa-binoculars"></i></a>
            </div>
            <p>
                Bali is one of the most evocative and popular tourist islands of the entire Indonesian archipelago. A
                visit here sparks the senses. The island's rich arts scene is another top draw, and if relaxation is
                your top priority, the shopping in Bali and spa treatments are fabulous — and affordable. Spirituality
                adds yet another layer to Bali's allure, and seeing the magnificent temples and sacred Hindu ceremonies
                are top things to do in Bali.
                Surfers come for the legendary swells, hikers can trek up jungly volcanic peaks to misty waterfalls, and
                cyclists can bike through lush landscapes bristling with rice terraces and traditional villages.
                Bali tourism offers something for every kind of traveller – whether you are planning a honeymoon or a
                family trip, looking for a relaxed resort stay or an active holiday, you will find exciting options in
                Bali. Tourism in Bali is also in a big way about shopping and food, so go ahead and indulge.
            </p>
        </div>
    </div>
    <div class="grid">
        <div class="col1">
            <img src="./assets/img/home/Maldives.jpg" alt="Maldives" class="image">
            <div class="middle">
                <div class="text">Maldives</div>
            </div>
        </div>
        <div class="col2">
            <h1>Maldives Packages</h1>
            <div class="feature-icons">
                <a href="#"><i class="fas fa-car"></i></a>
                <a href="#"><i class="fas fa-plane"></i></a>
                <a href="#"><i class="fas fa-bed"></i></a>
                <a href="#"><i class="fas fa-utensils"></i></a>
                <a href="#"><i class="fas fa-binoculars"></i></a>
            </div>
            <p>
                The sight of white sandy beaches along clear blue waters of Maldives, will make you believe that you are
                in a utopian dreamland. Add to this an astonishing underwater world that is equally breath-taking and
                beautiful. Unlike any other country in the world, Maldives is a cluster of thousands of islands each of
                which offers exciting opportunities. The country has world-class resorts that are essentially the
                definition of luxury. Pamper yourself with top-notch services and engage in adrenaline-pumping sports.
                The Maldives, a tropical haven of immaculate beaches. Renowned for its incredible diving opportunities,
                Maldives' azure waters are home to diverse marine life and corals of distinct hues. While the vivid blue
                lagoons are perfect for snorkeling, the reef walls offer a kaleidoscope of sea life for more experienced
                divers, making it a haven for water sports enthusiasts.
            </p>
        </div>
    </div>
    <div class="grid">
        <div class="col1">
            <img src="./assets/img/home/Kerala.jpg" alt="Kerala" class="image">
            <div class="middle">
                <div class="text">Kerala</div>
            </div>
        </div>
        <div class="col2">
            <h1>Kerala Packages</h1>
            <div class="feature-icons">
                <a href="#"><i class="fas fa-car"></i></a>
                <a href="#"><i class="fas fa-plane"></i></a>
                <a href="#"><i class="fas fa-bed"></i></a>
                <a href="#"><i class="fas fa-utensils"></i></a>
                <a href="#"><i class="fas fa-binoculars"></i></a>
            </div>
            <p>
                Famously known as 'God's Own Country', Kerala is a state located on the Malabar coast of Southern India.
                Home to a vast network of brackish lagoons called backwaters, ayurvedic massages, wildlife sanctuaries,
                sprawling tea gardens, hill-stations, palm tree-lined beaches and colourful dance forms, Kerala has
                everything on offer to take your pick from!
            </p>
        </div>
    </div>

</div>

<!-- Script tag -->
<script>
    // Slideshow
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        const slides = document.getElementsByClassName("mySlides");
        const dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
<?php include './components/footer.php'; ?>
</body>

</html>
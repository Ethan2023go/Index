<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Expanding Animation</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.6/vivus.min.js" referrerpolicy="no-referrer"></script>
    <style>
    body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden;
    /* background-image: url(./img/FINAL_16.png); */
    background-color: lightblue;
}

.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background-color: transparent;
    overflow: hidden;
}

.circle {
    position: absolute;
    left: 38%;
    top:30%;
    width: 500px;
    height: 500px;
    background-color: white;
    border-radius: 50%;
    animation: expand 1.5s ease-out;
    animation-delay: 4s;
    opacity: 0;
}

@keyframes expand {
    0% {
        transform: scale(0);
        opacity: 1;
    }
    100% {
         transform: scale(20);
        opacity: 0;
    }
}


    </style>
</head>

<body>
     

    <div class="overlay"><div class="circle"></div></div>
    <!-- Your content goes here -->
    <h1>Your Content Here</h1>
    <script src="script.js"></script>

    <img src="./img/2222_animated.svg" alt="" srcset="">
</body>

<script>
document.addEventListener("DOMContentLoaded", function() {
    createExpandingCircle();
});

function createExpandingCircle() {
    const overlay = document.querySelector('.overlay');
    const circle = document.createElement('div');
    // 在overplay裡創建一個 叫circle的div 
    circle.classList.add('circle');
    // 在circle div裡面 加入class="circle"
    overlay.appendChild(circle);
    // 將創好的circle div 放入 div overplay 裡
}


</script>

</html>
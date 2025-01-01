<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://unsplash.com/assets/core/logo-black-ddbdd505b663faadbc1e1731369f0929b2616886cb1d7fe11237c473bba02a50.svg" type="image/x-icon">
    <title>Image Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            overflow-y: scroll;
            max-height: 80vh;
            scroll-behavior: smooth;
        }
        .row img {
            margin: 10px;
            max-width: 200px;
            opacity: 0;
            transform: scale(0.5);
            transition: all 0.5s ease-in-out;
        }
        .row img.show {
            opacity: 1;
            transform: scale(1);
        }
        #generateImage {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #generateImage:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <button id="generateImage">Generate Image</button>
    <div class="row" id="imageRow"></div>

    <script>
        document.getElementById('generateImage').addEventListener('click', function() {
            fetch('https://source.unsplash.com/random')
                .then(response => response.json())
                .then(data => {
                    const img = document.createElement('img');
                    img.src = data.urls.small;
                    document.getElementById('imageRow').appendChild(img);
                    setTimeout(() => {
                        img.classList.add('show');
                    }, 10);
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
<?php
// No additional PHP code is needed here as the functionality is handled by JavaScript
?>
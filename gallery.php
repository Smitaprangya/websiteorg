<?php
$images = glob("assets/*.jpg");
$videos = glob("assets/*.mp4");
$type = isset($_GET['type']) ? $_GET['type'] : 'photos';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>

    <title><?php echo ucfirst($type); ?> Gallery</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fff;
        }

        .back-arrow {
            margin: 20px;
            display: inline-block;
            font-size: 18px;
            text-decoration: none;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            font-size: 28px;
            color: #333;
        }

        .nav-bar {
            display: flex;
            justify-content: center;
            margin-top: 15px;
            margin-bottom: 20px;
            gap: 20px;
        }

        .nav-bar a {
            text-decoration: none;
            padding: 10px 24px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background-color:rgb(10, 10, 10);
            border-radius: 8px;
            transition: background-color 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        }

        .nav-bar a:hover {
            background-color:rgb(104, 112, 120);
        }

        .nav-bar a.active {
            background-color:rgb(102, 110, 110);
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 16px;
            padding: 20px;
        }

        .gallery-item {
            width: 100%;
            height: auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.03);
        }

        .gallery-item img,
        .gallery-item video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        /* Responsive adjustments */
        @media (max-width: 1024px) {
            .gallery {
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            }
        }

        @media (max-width: 768px) {
            .gallery {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
        }

        @media (max-width: 600px) {
            .gallery {
                grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            }
        }

        @media (max-width: 540px) {
            .gallery {
                grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            }
        }
    </style>
</head>
<body>
    <a class="back-arrow" href="index.php"><i class="ri-arrow-left-line"></i> </a>

    <h2>Photos Gallery</h2>

    <div class="nav-bar">
        <a href="?type=photos" class="<?php echo $type === 'photos' ? 'active' : ''; ?>">Photos</a>
        <a href="?type=videos" class="<?php echo $type === 'videos' ? 'active' : ''; ?>">Videos</a>
    </div>

    <div class="gallery">
        <?php if ($type === 'photos'): ?>
            <?php foreach ($images as $image): ?>
                <div class="gallery-item">
                    <img src="<?php echo $image; ?>" alt="Image">
                </div>
            <?php endforeach; ?>
        <?php elseif ($type === 'videos'): ?>
            <?php foreach ($videos as $video): ?>
                <div class="gallery-item">
                    <video src="<?php echo $video; ?>" controls></video>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
<button id="closeBtn" style="
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 32px;
    background: none;
    border: none;
    color: white;
    cursor: pointer;
    z-index: 1001;
    font-weight: bold;
    ">×</button>

<!-- Lightbox Modal HTML -->
<div id="lightbox" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.9); z-index:1000; align-items:center; justify-content:center;">
    <button id="prevBtn" style="position:absolute; left:20px; top:50%; transform:translateY(-50%); font-size:40px; background:none; color:white; border:none; cursor:pointer;">&#10094;</button>
    
    <img id="lightboxImg" src="" style="max-width:90%; max-height:80%; border-radius:10px;" />
    
    <button id="nextBtn" style="position:absolute; right:20px; top:50%; transform:translateY(-50%); font-size:40px; background:none; color:white; border:none; cursor:pointer;">&#10095;</button>
    
    <button id="closeBtn" style="position:absolute; top:20px; right:30px; font-size:32px; background:none; border:none; color:white; cursor:pointer; font-weight:bold;">×</button>
</div>


<script>
  const images = document.querySelectorAll('.gallery-item img');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightboxImg');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const closeBtn = document.getElementById('closeBtn');

let currentIndex = 0;
let imgSources = [];

images.forEach((img, index) => {
    imgSources.push(img.src);
    img.addEventListener('click', () => {
        currentIndex = index;
        openLightbox();
    });
});

function openLightbox() {
    lightbox.style.display = 'flex';
    lightboxImg.src = imgSources[currentIndex];
}

function closeLightbox(e) {
    if (e.target === lightbox) {
        lightbox.style.display = 'none';
    }
}

function showNext() {
    currentIndex = (currentIndex + 1) % imgSources.length;
    lightboxImg.src = imgSources[currentIndex];
}

function showPrev() {
    currentIndex = (currentIndex - 1 + imgSources.length) % imgSources.length;
    lightboxImg.src = imgSources[currentIndex];
}

nextBtn.addEventListener('click', showNext);
prevBtn.addEventListener('click', showPrev);
closeBtn.addEventListener('click', () => lightbox.style.display = 'none');
lightbox.addEventListener('click', closeLightbox);

document.addEventListener('keydown', (e) => {
    if (lightbox.style.display === 'flex') {
        if (e.key === 'ArrowRight') showNext();
        if (e.key === 'ArrowLeft') showPrev();
        if (e.key === 'Escape') lightbox.style.display = 'none';
    }
});


</script>

    
</body>
</html>

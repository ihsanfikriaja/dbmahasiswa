<?php include 'index.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        header {

            text-align: center;
        }
        section {
            padding: 20px;
            text-align: center; /* Menengahkan konten dalam section */
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            justify-content: center; /* Menengahkan grid gallery */
        }
        .gallery-item img {
            width: 100%;
            height: auto;
        }
        .credit{
          text-align:center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Halaman Home</h1>
    </header>

    <section>
        <h2>Kampus Merdeka</h2>
        
            <!-- Video Example -->
            <div class="gallery-item">
                <iframe width="500" height="300" src="https://www.youtube.com/embed/VRppF5hUqu4" frameborder="0" allowfullscreen></iframe>
            </div>
          
        </div>
    </section>

    <footer>
        <p class="credit">&copy; @ihsanfikri</p>
    </footer>
</body>
</html>
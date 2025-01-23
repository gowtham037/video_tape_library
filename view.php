<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
            background: linear-gradient(45deg, #3498db, #e74c3c, #f39c12, #2ecc71); /* Colorful Gradient Background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        a {
            text-decoration: none;
            color:white; /* White Color */
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        a:hover{
            color: red;
        }

        .video-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }

        video {
            width: 320px;
            height: 180px;
            margin: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        video:hover {
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5); /* Light White Shadow on Hover */
        }
        h1{
            color: white;
            text-decoration: solid;
        }
    </style>
</head>
<body>
    <div>
    <h1>LIST OF VIDEOS</h1>
    </div>
    <div class="video-container">
        <?php
        include "db_conn.php";
        $sql = "SELECT * FROM videos ORDER BY id DESC";
        $res = mysqli_query($conn, $sql);

        if ($res && mysqli_num_rows($res) > 0) {
            while ($video = mysqli_fetch_assoc($res)) {
                ?>
                <video src="uploads/<?=htmlspecialchars($video['video_url'])?>"
                       controls>
                </video>
                <?php
            }
        } else {
            echo "<h1>Empty</h1>";
        }
        ?>
    </div>
</body>
</html>

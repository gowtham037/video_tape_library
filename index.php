<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Upload PHP and MySQL</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(45deg, #3498db, #e74c3c, #f39c12, #2ecc71);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            margin: 0;
            padding: 20px;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        header {
            text-align: center;
            color: #fff;
        
        }

        a {
            text-decoration: none;
            color: #fff;
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

		form {
    background: linear-gradient(45deg, #3498db, #e74c3c, #f39c12, #2ecc71);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
    max-width: 400px;
    width: 100%;
    box-sizing: border-box;
    color: #fff;
}

label {
    display: block;
    font-size: 1.2rem;
    margin-bottom: 5px;
    color: #fff;
}

input[type="file"] {
    font-size: 1.2rem;
    margin-bottom: 20px;
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: none;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.9);
    color: #333;
}
input[type="submit"] {
    font-size: 1.5rem;
    background-color: #fff;
    color: #3498db;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease;
}
input[type="submit"]:hover {
    background-color: #3498db;
    color: #fff;
}
p {
    color: #e74c3c;
    margin-top: 10px;
}
		a:hover{
			color: red;
		}

    </style>
</head>
<body>
    <header>
        <h1 id="heading">🎥 VIDEO TAPE LIBRARY</h1>
        <a href="view.php"><h1>View Videos</h1></a>
    </header>

    <?php if (isset($_GET['error'])) { ?>
        <p><?=$_GET['error']?></p>
    <?php } ?>
    <form action="upload.php"
          method="post"
          enctype="multipart/form-data">

        <input type="file"
               name="my_video"
               accept="video/*">

        <input type="submit"
               name="submit" 
               value="Upload">
    </form>
</body>
</html>
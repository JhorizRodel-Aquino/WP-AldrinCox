<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 Error Page</title>
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri()?>/images/icon.png">
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: white;
      font-family: 'Arial', sans-serif;
      color: #fff;
    }

    .error-container {
      text-align: center;
      width: 50%;
      max-width: 600px;
      padding: 40px;
      background-color: rgb(187 20 27);
      border-radius: 12px;
      box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
      animation: float 4s ease-in-out infinite;
    }

    .error-container h1 {
      font-size: 8rem;
      margin: 0;
      color: white;
      letter-spacing: -5px;
      text-shadow: 3px 3px 0px rgba(0, 0, 0, 0.2);
    }

    .error-container h2 {
      font-size: 2rem;
      margin-bottom: 20px;
      color: #fff;
      text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.2);
    }

    .error-container p {
      font-size: 1.2rem;
      margin-bottom: 30px;
      line-height: 1.5;
    }

    .error-container a {
      text-decoration: none;
      color: rgb(187 20 27);
      background-color: #fff;
      padding: 10px 20px;
      border-radius: 25px;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .error-container a:hover {
      background-color: rgb(240 240 240);
      color: rgb(187 20 27);
    }

    @keyframes float {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-15px);
      }
    }

    /* Responsive for smaller screens */
    @media (max-width: 768px) {
      .error-container h1 {
        font-size: 6rem;
      }
      .error-container h2 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <div class="error-container">
    <h1>404</h1>
    <h2>Oops! Page Not Found</h2>
    <p>The page you're looking for doesn't exist or has been moved. Please go back to the homepage.</p>
    <a href="<?php echo site_url('/')?>">Back to Home</a>
  </div>

</body>
</html>
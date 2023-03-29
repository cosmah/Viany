<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Syne"/>
    <title>Contact Manager | Home</title>
    <style>
      body {
        background-image: url(https://images.unsplash.com/photo-1534796636912-3b95b3ab5986?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1742&q=80); /* The image used for background*/
        background-repeat: no-repeat; /* Do not repeat the image */
        background-position: center; /* Center the image */
        background-size: cover; /* Resize the background image to cover the entire container */
        font-family: "Syne", sans-serif;
      }

      .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
      }

      .image-container {
        text-align: center;
        width: 100%;
      }

      .links-container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
      }

      .link {
        min-width: 50% !important;
      }

      @media (min-width: 1200px) {
        .container {
          max-width: 1140px;
        }
      }
      @media (min-width: 992px) {
        .container {
          max-width: 960px;
        }
      }
      @media (min-width: 768px) {
        .container {
          max-width: 720px;
        }

        .link {
          width: 100%;
        }
      }
      @media (min-width: 576px) {
        .container {
          max-width: 540px;
        }
      }

      .w3-yellow,
      .w3-hover-purple:hover,
      .w3-text-black {
        color: rgba(255, 204, 217) !important;
        background-color: rgba(255, 255, 179, 0.3) !important;
      }
    </style>
  </head>

  <body class="w3-white">
    <!-- Content container -->
    <div class="container">
      <!-- Image and name container. Change to your picture here. -->
      <div class="image-container">
        <img
          src="./img/pb.png"
          class="w3-margin"
          alt="Person"
          max-width="100%"
          height="150px"
          style="border-radius: 50%"
        />

        <!-- Content. Add bio. -->
        <div class="w3-text-white">
          <h1 class="w3-large"><strong>My Contacts Manager</strong></h1>
          <p>This is a simple web-based contact management system that allows you to add, edit, and delete contacts.</p>
        </div>

        <!-- Links section 1. Replace the # inside of the "" with your links. -->
        <div class="links-container">
          <a href="create.php" class="w3-button w3-hover-pink w3-large w3-round-xlarge w3-yellow link" >Add Contact</a>
          <a href="view.php" class="w3-button w3-hover-pink w3-large w3-round-xlarge w3-yellow link" >Contacts List</a>
          <a href="update.php" class="w3-button w3-hover-pink w3-large w3-round-xlarge w3-yellow link" >Edit Contact</a>
          <a href="logout.php" class="w3-button w3-hover-pink w3-large w3-round-xlarge w3-yellow link" >Logout</a>
        </div>
      </div>
    </div>
      </div>
      <footer class="w3-container w3-center w3-padding-48 w3-margin-top">
        &copy Vian's Contact Manager, 2023 
      <!-- End footer -->
      </footer>
    </div>
  </body>
</html>

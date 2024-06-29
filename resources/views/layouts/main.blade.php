<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GetHealthy | {{ $title }}</title>
    <link type="text/css" rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <style>
    .range-container {
      display: flex;
      align-items: center;
    }
    .range-label {
      font-size: large;
    }
    .nav-items{
        font-weight: bold
    }
    .range-value {
      margin: 0 10px;
    }
    .card-custom {
      border: 1px solid #4caf50; /* Green border */
      border-radius: 10px; /* Rounded corners */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add light shadow */
      transition: box-shadow 0.3s ease; /* Smooth transition for shadow */
      background-color: #e8f5e9; /* Light green background */
    }

    .card-custom:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Increase shadow on hover */
    }

    .card-body-custom {
      padding: 15px; /* Apply padding to all sides */
      padding-top: 0px;
    }

    .custom-navbar {
      background-color: #4caf50; /* Green */
    }

    .card-img-top {
      width: calc(100% - 20px); /* Adjusted width with padding */
      height: 200px; /* Fixed height for image */
      object-fit: contain;
      background-color: #ffffff; /* White background for the image area */
      border-top-left-radius: 10px; /* Matching rounded corners */
      border-top-right-radius: 10px; /* Matching rounded corners */
      margin: 10px; /* Add margin for space around the image */
    }
    .card-title {
      color: #2e7d32; /* Dark green text color */
    }
    .card-text {
      color: #616161; /* Gray text color */
    }
    .card-text-label {
      display: inline-block;
      width: 80px; /* Adjust the width as needed */
    }
  </style>
  <body>
    @include('partials.navbar')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
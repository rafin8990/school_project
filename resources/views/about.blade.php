<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.0.8/dist/full.min.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/d703802588.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>


</head>

<body>
  <style>
    .font {
      font-family: 'Playfair Display', serif;
    }

    .underline-animation {
      position: relative;
      text-decoration: none;
      display: inline-block;
    }

    .underline-animation:hover::before {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 100%;
      height: 2px;
      background-color: #71b4e1;
      animation: underline 0.3s ease-in-out;
    }

    @keyframes underline {
      0% {
        transform: scaleX(0);
      }

      100% {
        transform: scaleX(1);
      }
    }

    .fill-animation {
      position: relative;
      display: inline-block;
      overflow: hidden;
      text-decoration: none;
      color: black;
      /* Text color */
    }

    .fill-animation::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background-color: #71b4e1;
      /* Initial color before hover */
      z-index: -1;
      transition: height 0.3s ease-in-out;
      /* Animation transition */
    }

    .fill-animation:hover::before {
      height: 100%;
      /* Fill out full content on hover */
    }
  </style>
  @include('/Message/message')
  @include('/shared/navbar1')
  @include('/shared/navbar')
  @include('/Aboutpage/body')
  @include('/Aboutpage/principle')
  @include('/Aboutpage/mission')
  @include('/Aboutpage/gallery')
  @include('/Aboutpage/certificate')
  @include('/shared/footer')


</body>

</html>
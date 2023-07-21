<!doctype html>
<html ⚡ lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <meta name="theme-color" content="#9A2B59">
    <link rel="canonical" href="https://voffice.co.id/jakarta-virtual-office/testing-amp.php">
    <!-- <link rel="shortcut icon" href="amp_favicon.png"> -->

    <title>Development test vOffice</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>
      body {
        width: auto;
        margin: 0;
        padding: 0;
      }
      header {
        background: white;
        font-size: 2em;
      }
      .color-primary{
        color: #961A43;
      }
      .hamburger {
        color: #75777c;
        margin-left: 30px;
        margin-top: 52px;
        position: absolute;
        z-index: 1;
      }
      .sidebar {
        padding: 50px;
        margin: 0;
      }
      .sidebar > li {
        list-style: none;
        margin-bottom:25px;
      }
      .sidebar a {
        color: #303133;
        font-family: 'Roboto', sans-serif;
        text-decoration: none;
      }
      .close-sidebar {
        font-size: 1.5em;
        padding-left: 5px;
      }
      .logo{
        margin-top:-20px;
        margin-bottom: 25px;
        margin-left: auto;
        margin-right: auto;
        display:block;
      }
      .article-container{
        padding:1em;
      }
      h1, h2, h3, h4, h5, h6 {
        margin: 0;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        letter-spacing: 2px;
        margin-bottom: 0px;
        padding-bottom: 0px;
        color: #323131;
      }
      h1{
        margin-top:10px;
        font-size: 30px;
      }
      h2{
        font-size: 26px;
      }
      p {
        font-family: 'Roboto', sans-serif;
        line-height: 1.7em;
        color: #383838;
      }
      .hr {
        width: 47px;
        height: 6px;
        border-radius: 2.5px;
        background-color: #9a2b59;
        margin-top: 10px;
      }
      .bg-secondary{
        background-color: #f8f8f8;
      }
      .bg-primary{
        background-color: #951942;
      }

      .border-tb{
        border-top: 1px solid #e9e9e9;
        border-bottom: 1px solid #e9e9e9;
      }

      .custom-card{
        margin-top: 15px;
        margin-bottom: 15px;
        width: 100%;
        height: auto;
        border-radius: 5px;
        box-sizing: border-box;
      }
      .custom-card p{
        margin-top: 5px;
        font-size: 15px;
      }
      .card-body{
        padding: 20px;
        height: auto;
      }
      .card-title{
        font-size:18px;
      }
      .card-image{
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        width: 100%;
        height: 150px;
        overflow: hidden;
        margin-bottom: 10px;
      }
      .card-image img{
        width: 100%;
      }
      .card-link{
        width: 100%;
        height:50px;
        line-height: 80px;
      }
      .card-link a:hover{
        text-decoration: none;
      }
      .card-left{
        width: 26%;
        float: left;
      }
      .card-right{
        width: 74%;
        display:inline-block;
      }
      .text-center{
        text-align: center;
      }
      .text-left{
        text-align: left;
      }

      form.amp-form-submit-success [submit-success] {
        color: green;
      }
      form.amp-form-submit-error [submit-error] {
        color: red;
      }
      label{
        font-family: "Montserrat", sans-serif;
        font-weight: 700;
        color:#6c6969;
      }
      input[type="text"],input[type="number"], input[type="email"],textarea{
        width: 100%;
        margin-top: 5px;
      }
      input[type="text"],input[type="number"], input[type="email"]{
        height: 20px;
        color:#3e3e3e;
      }
      input[type="submit"]{
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding:10px;
        width: 80%;
        background-color: #9A2B59;
        border:none;
        color:white;
        font-family: "Montserrat", sans-serif;
        letter-spacing: 1px;
      }

      .ampstart-input{
        margin-bottom: 15px;
        width:80%;
        display: block;
        margin-left: auto;
        margin-right: auto;

      }
    </style>

    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
          "@type": "ListItem",
          "position": 1,
          "name": "vOffice",
          "item": "https://voffice.co.id/jakarta-virtual-office/"
        },{
          "@type": "ListItem",
          "position": 2,
          "name": "Testing AMP",
          "item": "https://voffice.co.id/jakarta-virtual-office/testing-amp.php"
        }]
      }
      </script>

  </head>
  <body>

    <header class="headerbar">
      <div role="button" on="tap:sidebar1.toggle" tabindex="0" class="hamburger"><i class="fas fa-bars"></i></div>
      <amp-img src="img/logovoffice-dark.png" class="logo" width="150" height="102"></amp-img>
    </header>

    <amp-sidebar id="sidebar1" layout="nodisplay" side="left">
      <div role="button" aria-label="close sidebar" on="tap:sidebar1.toggle" tabindex="0" class="close-sidebar">✕</div>
      <ul class="sidebar">
        <li><a href="testing-amp.php">Home</a></li>
        <li><a href="event-space-amp.php">Event Space</a></li>
      </ul>
    </amp-sidebar>

    <article>
      <amp-img src="img/centennial-tower/lounge-1.JPG" layout="responsive" width="100" height="70"></amp-img>

      <div class="article-container">
        <h1>Article</h1>
        <div class="hr left"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas tortor sapien, non tristique ligula accumsan eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas tortor sapien, non tristique ligula accumsan eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas tortor sapien, non tristique ligula accumsan eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas tortor sapien, non tristique ligula accumsan eu.</p>

      </div>
      <div class="bg-secondary article-container border-tb">
        <h2>Another Article</h2>
        <div class="hr left"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas tortor sapien, non tristique ligula accumsan eu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas tortor sapien, non tristique ligula accumsan eu. </p>
        <div class="custom-card bg-white">
          <div class="card-left">
            <i class="fas fa-home fa-4x color-primary mb-3"></i>
          </div>
          <div class="card-right">
            <h4 class="card-title color-black">Sub title 1</h4>
            <p class="detail-article font-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
          </div>
        </div>
        <div class="custom-card bg-white">
          <div class="card-left">
            <i class="fas fa-cogs fa-4x color-primary mb-3"></i>
          </div>
          <div class="card-right">
            <h4 class="card-title color-black">Sub title 2</h4>
            <p class="detail-article font-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
          </div>
        </div>
        <div class="custom-card bg-white">
          <div class="card-left">
            <i class="fas fa-fingerprint fa-4x color-primary mb-3"></i>
          </div>
          <div class="card-right">
            <h4 class="card-title color-black">Sub title 3</h4>
            <p class="detail-article font-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
          </div>
        </div>
      </div>

      <div class="article-container">
        <amp-carousel layout="fixed-height" height="168" type="carousel" >
          <amp-img src="img/centennial-tower/lounge-1.JPG" width="300" height="168"></amp-img>
          <amp-img src="img/centennial-tower/lounge-2.JPG" width="300" height="168"></amp-img>
          <amp-img src="img/centennial-tower/lounge-3.JPG" width="300" height="168"></amp-img>
        </amp-carousel>
      </div>

      <div class="bg-secondary article-container">
        <form method="post" action-xhr="ampmail3.php" target="_top">
          <div class="ampstart-input inline-block relative mb3">
            <label>Name</label>
            <br />
            <input type="text" name="name">
          </div>
          <div class="ampstart-input inline-block relative mb3">
            <label>Email</label>
            <br />
            <input type="email" name="email">
          </div>
          <div class="ampstart-input inline-block relative mb3">
            <label>Phone Number</label>
            <br />
            <input type="number" name="phone">
          </div>
          <div class="ampstart-input inline-block relative mb3">
            <label>Pertanyaan atau Komentar Anda</label>
            <textarea name="question" rows="5" cols="50"></textarea>
          </div>

          <input type="submit" value="Submit" class="ampstart-btn caps" />

          <div submit-success>
            Success! Thanks. Our design specialists will contact you shortly.
          </div>
          <div submit-error>
            Error! Thanks for trying the
            <code>amp-form</code> demo with an error response.
          </div>

        </form>
      </div>


    </article>



  </body>
</html>

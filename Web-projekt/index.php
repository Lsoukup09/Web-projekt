<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <title>Title</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><h2>Osobní web</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
      </ul>
      <form class="d-flex">
        <div class="container mt-3">
            <ul class="pagination">
    <li class="page-item disabled"><a class="page-link" href="#"><</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">></a></li>
  </ul>
</div>
      </form>
    </div>
  </div>
</nav>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-sm-1 p-3"></div>
    <div class="col-sm-3 p-3 bg-dark text-white">
        <h3>První okno obsahu</h3>
        <button data-bs-toggle="collapse" data-bs-target="#demo">Tlačítko</button>
        <div id="demo" class="collapse">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam purus dui, laoreet et interdum a, interdum ac mauris. Integer maximus massa sit </div>
    </div>
    <div class="col-sm-1 p-3"></div>
    <div class="col-sm-6 text-white">
        <div class="col-sm-12 p-3 bg-dark text-white">
            <h3>Druhé okno obsahu</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam purus dui, laoreet et interdum a, interdum ac mauris. Integer maximus massa sit</p>
        </div>
        <br>
        <div class="col-sm-12 p-3 bg-dark text-white">
             <h3>Třetí okno obsahu</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam purus dui, laoreet et interdum a, interdum ac mauris. Integer maximus massa sit</p>
        </div>
    </div>
    <div class="col-sm-1 p-3"></div>
  </div>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Made by: Lukáš Soukup</a>
    </div>
</nav>
</body>
</html>
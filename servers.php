<?php include_once 'functions.php'?>
<?php include 'header.php'?>
<?php include 'sidebar.php'?>
<article>
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>


.row{
  display: flex;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: 50px;
  text-align: center;
  font-family: arial;
  
}

.price {
  color: red;
  font-size: 12px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: black;
  background-color: #f1c40f;
  text-align: center;
  cursor: pointer;
  width: 50%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<div class="row">
<div class="card">
  <img src="./media/server1.jpg" alt="332" style="width:50%">
  <h1>R740 Xeon 4114</h1>
  <p class="price"><strong>€18200</strong></p>
  <p>DELL PowerEdge R740 Xeon 4114 16GB 600GB Server - Zwart</p>
  <p><button>In Winkelwagen</button></p>
</div>



<div class="card">
  <img src="./media/server2.jpg" alt="332" style="width:50%">
  <h1>ProLiant DL20 Gen10</h1>
  <p class="price"><strong>€984</strong></p>
  <p>Hewlett Packard Enterprise ProLiant DL20 Gen10 E-2224 1P 16GB S100i 2LFF 290W PS Server</p>
  <p><button>In Winkelwagen</button></p>
</div>


<div class="card">
  <img src="./media/server3.jpg" alt="332" style="width:50%">
  <h1>Fujitsu server</h1>
  <p class="price"><strong>€753</strong></p>
  <p>Fujitsu TX1310 M3 Server</p>
  <p><button>In Winkelwagen</button></p>
</div>
</div>


<div class="row">
<div class="card">
  <img src="./media/server4.jpg" alt="332" style="width:50%">
  <h1>Hewlett Packard Enterprise server</h1>
  <p class="price"><strong>€795</strong></p>
  <p>Hewlett Packard Enterprise ProLiant ML30 Gen10 E-2224 1P 16GB S100i 4LFF 350W PS Server - Zwart</p>
  <p><button>In Winkelwagen</button></p>
</div>


<div class="card">
  <img src="./media/server5.jpg" alt="332" style="width:50%">
  <h1>DELL server</h1>
  <p class="price"><strong>€18200</strong></p>
  <p>DELL PowerEdge R740 Xeon 4114 16GB 600GB Server - Zwart</p>
  <p><button>In Winkelwagen</button></p>
</div>


<div class="card">
  <img src="./media/server6.jpg" alt="332" style="width:50%">
  <h1>Ubiquiti Networks Intel</h1>
  <p class="price"><strong>€18200</strong></p>
  <p>Ubiquiti Networks Intel Xeon D-1521, 16 GB DDR4, M.2 SSD 120 GB, 8 TB HDD, Bluetooth 4.0, Ethernet x 3, VGA, USB 3.0 x 2, USB 2.0 x 2 Server - Zilver</p>
  <p><button>In Winkelwagen</button></p>
</div>
</div>


</body>
</html>
</article>
<?php include 'footer.php'?>
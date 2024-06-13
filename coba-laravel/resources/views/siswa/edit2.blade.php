<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<link rel="stylesheet" href="{{ asset('css/dash2.css') }}">
<link rel="stylesheet" href="{{ asset('css/mn.css') }}">
<div class="sidebar">		
      	<div class="logo"></div>
      	<ul class="menu">

      		<li class="active">
      			<a href="dashboard2.php" >
      				<i class="fa-solid fa-graduation-cap"></i>
      				<span>Dashboard</span>
      			</a>
      		</li>
      		<li>
      			<a href="/invo/pem">
				  <i class="fa-solid fa-magnifying-glass-dollar"></i>
      				<span>Invoice</span>
      			</a>
      		</li>
              <li>
      			<a href="#">
      				
      				<span></span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				
      				<span></span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				
      				<span></span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				
      				<span></span>
      			</a>
      		</li>
      		<li>
      			<a href="#">
      				
      				<span></span>
      			</a>
      		</li>
              <li>
      			<a href="#">
      				
      				<span></span>
      			</a>
      		</li>
      		<li class="logout">
      			<a href="login.php">
      				<i class="fa-solid fa-right-from-bracket"></i>
      				<span>Logout</span>
      			</a>
      		</li>
		</ul>
	</div>


	<div class="main--content">
	    <div class="header--wrapper">
			<div class="header--title">
				<span>Primary</span>
				<h2>Dashboard</h2>
			</div>
			<div class="user--info">
			    <div class="search--box">
				<i class="fa-solid fa-search"></i>
				<input type="text"
				 placeholder="Search">
				 </div>
                 <img src="{{ asset('img.png') }}" alt="">
			</div>
		</div>
		<div class="card--container">
			<h3 class="main--title">Data siswa</h3>
			<div class="card--wrapper">
				<div class="payment--card">
					<div class="card--header">
						<div class="amount">
							<span class="title">Payment amout</span>
						</div>
					</div>
				</div>

				<div class="tabular--wrapper">
					<h3 class="main--title>">Finance data</h3>
					<div class="table--container">
						<br>
						
						
	                <h4><a href="/pembayaran/create2" style="color:green"><i class="fa-solid fa-plus"></i> <i class="fa-solid fa-database"></i></a></h4>
					 <br>


<form action="/pembayaran/{{$pembayaran->id}}" method="POST">
    @method('put')
       @csrf
	   <div class="war">
    <input type="number" name="NISN" placeholder="NISN" value="{{$pembayaran->NISN}}"> <br>
    <input type="number" name="ID_STAF_ATAU_GURU" placeholder="ID_STAF_ATAU_GURU" value="{{$pembayaran->ID_STAF_ATAU_GURU}}"> <br>
    <input type="text" name="TANGGAL_PEMBAYARAN" placeholder="TANGGAL_PEMBAYARAN" value="{{$pembayaran->TANGGAL_PEMBAYARAN}}"> <br>
    <input type="number" name="NOMINAL" placeholder="NOMINAL" value="{{$pembayaran->NOMINAL}}"> <br>
    <input type="submit" value="save">
</div>
</form>

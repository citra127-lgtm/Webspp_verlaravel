<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<link rel="stylesheet" href="{{ asset('css/dash2.css') }}">
<link rel="stylesheet" href="{{ asset('css/war.css') }}">

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
						
						
	                <h4><a href="/spp/create" style="color:green"><i class="fa-solid fa-plus"></i> <i class="fa-solid fa-database"></i></a></h4>
					 <br>


<form action="/spp/input" method="POST">
       @csrf
	   <div class="war">
    <input type="number" name="NISN" placeholder="NISN"> <br>
    <input type="text" name="NAMA_SISWA" placeholder="NAMA_SISWA"> <br>
    <select name="KELAS_JURUSAN" required>
        <option value="" disabled selected>Select Kelas Jurusan</option>
        @foreach($kelasJurusanOptions as $kelasJurusan)
            <option value="{{ $kelasJurusan }}">{{ $kelasJurusan }}</option>
        @endforeach
    </select> <br>
	<div class="mn">
    <input type="submit" value="save">
</div>
</div>
</form>

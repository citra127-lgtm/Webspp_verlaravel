<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<link rel="stylesheet" href="{{ asset('css/dash2.css') }}">

<div class="sidebar">		
      	<div class="logo"></div>
      	<ul class="menu">

      		<li class="active">
      			<a href="/spp" >
      				<i class="fa-solid fa-graduation-cap"></i>
      				<span>Dashboard</span>
      			</a>
      		</li>
      		<li>
      			<a href="/pembayaran">
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
				<div class="fltr">
					<form action="{{ url('/pembayaran/index2') }}" method="GET">
					<div class="sefltr">
					<label>PILIH TANGGAL</label>
					<input type="date" name="TANGGAL_PEMBAYARAN">
					<button type="submit">Filter</button>
			</div>
			
			<div class="user--info">
			    <div class="search--box">
				<i class="fa-solid fa-search"></i>
				<form action="{{ url('/pembayaran/index2') }}" method="GET">
				<input type="text" name="search" 
                  placeholder="Search">
				  <button type="submit">Search</button>
				 </div>
                 <img src="{{ asset('img.png') }}" alt="">
			</div>
			<div class="sort">
				<label for="sort">Sort by Date:</label>
				<select name="sort" id="sort">
					<option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Ascending</option>
					<option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Descending</option>
				</select>
				<button type="submit">Search</button>
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

<table border="1">
    <tr>
        <th>id</th>
        <th>NISN</th>
		<th>ID_STAF_ATAU_GURU</th>
		<th>TANGGAL_PEMBAYARAN</th>
		<th>NOMINAL</th>
		<th>OPSI</th>
    </tr>
    @foreach ($pembayaran as $p)
    <tr>
		<td>{{$p->id}}</td>
        <td>{{ $p->NISN }}</td>
        <td>{{ $p->ID_STAF_ATAU_GURU }}</td>
        <td>{{ $p->TANGGAL_PEMBAYARAN }}</td>
        <td>{{ $p->NOMINAL }}</td>
		<td><a href="/pembayaran/{{$p->id}}/edit2">EDIT</a>
			<form action="/pembayaran/{{$p->id}}" method="POST">
				@csrf
				@method('delete')
				<input type="submit" value="Delete"></form></td>
			
			
    </tr>
@endforeach

</table>
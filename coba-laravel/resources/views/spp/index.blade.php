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
      			<a href="/Login/Login">
      				<i class="fa-solid fa-right-from-bracket"></i>
      				<span>Logout</span>
				</form>
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

<table border="1">
    <tr>
        <th>id</th>
        <th>NISN</th>
        <th>NAMA_SISWA</th>
        <th>KELAS_JURUSAN</th>
		<th>OPSI</th>
    </tr>
    <?php foreach ($spp as $s): ?>
        <td>{{$s->id}}</td>
        <td>{{$s->NISN}}</td>
        <td>{{$s->NAMA_SISWA}}</td>
        <TD>{{$s->KELAS_JURUSAN}}</TD>
		<td><a href="/spp/{{$s->id}}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
		<form action="/spp/{{$s->id}}" method="POST">
			@csrf
			@method('delete')
			<input type="submit" value="Delete"></form></td>
		
    </tr>
    <?php endforeach ;?>

</table>
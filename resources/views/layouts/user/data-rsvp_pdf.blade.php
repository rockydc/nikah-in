<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
        header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;

                /** Extra personal styles **/
                background-color: #03a9f4;
                color: white;
                text-align: center;
                line-height: 35px;
            }
            th{
                text-align:left;

            }
            th:last-child{
                text-align:center;
            }
            
            td{
                margin-top:10px;
            }
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;
            }
	</style>

 <h1 class="mt-5">Daftar tamu RSVP </h1>   
<div class="table-responsive mt-5">  
    <table class="table table-bordered" width="100%" cellspacing="0">
		<thead class="text-center">
			<tr>
                        <th>Nama</th>
                      
                        <th>email</th>
                        <th>Status</th>
                        <th>Jmlh_orang</th>
                        <th>pesan</th>
			</tr>
		</thead>
		<tbody>
		
			@foreach($items as $item)
			<tr>
			
				<td>{{$item->nama}}</td>
				
				<td>{{$item->email}}</td>
				<td>{{$item->status}}</td>
				<td>{{$item->jmlh_orang}}</td>
                <td>{{$item->pesan}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

 <footer>
 <p class="text-center">www.Nikah-in.com</p>
 </footer>
</body>
</html>
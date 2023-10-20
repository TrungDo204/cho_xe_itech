@extends('admin_layout')
@section('content')
<?php ?>
<style>
    #myImg { border-radius: 5px; cursor: pointer; transition: 0.3s; }
    #myImg:hover {opacity: 0.7;}
    /* The Modal (background) */
    .modal { display: none; position: fixed; z-index: 9999; padding-top: 50px; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.9);}
    /* Modal Content (image) */
    .modal-content { margin: auto; display: block; width: 50%; max-width: 400px; }
    /* Caption of Modal Image */
    #caption { margin: auto; display: block; width: 80%; max-width: 700px; text-align: center; color: #ccc; padding: 10px 0; height: 50px; }
    /* Add Animation */
    .modal-content, #caption { -webkit-animation-name: zoom; -webkit-animation-duration: 0.6s; animation-name: zoom; animation-duration: 0.6s; }
    @-webkit-keyframes zoom { from {-webkit-transform:scale(0)} to {-webkit-transform:scale(1)} }
    @keyframes zoom { from {transform:scale(0)} to {transform:scale(1)} }
    /* The Close Button */
    .close { position: absolute; top: 15px; right: 35px; color: #f1f1f1; font-size: 40px; font-weight: bold; transition: 0.3s; }
    .close:hover, .close:focus { color: #bbb; text-decoration: none; cursor: pointer; }
    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
    }
</style>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="table-responsive">
			<table id="DataList" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Car</th>
						<th>Date</th>
						<th>Decription</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php //Vòng lập foreach lấy giá vào bảng?>
				@foreach($contact as $key => $row)
					<tr>
						<td style="text-align: center; vertical-align: middle;">{{ $key+1 }}</td>
                        <td class="vertical-align: middle;"> {{$row->name_con}} </td>
                        <td class="vertical-align: middle;"> {{$row->tele_con}} </td>
                        <td class="vertical-align: middle;"> {{$row->address_con}} </td>
                        <td class="vertical-align: middle;"> {{$row->car_con}} </td>
                        <td class="vertical-align: middle;"> {{$row->date_con}} </td>
                        <td class="vertical-align: middle;"> {{$row->decription_con}} </td>
                        <td>
						    <a href="/admin/contact/{{ $row->id }}/delete">Xóa</a>
                        </td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
<div id="myModal" class="modal">
	<span class="close">&times;</span>
	<img class="modal-content" id="img01">
<div id="caption"></div>
</div>
<script>
    function MymodalImage(e)
    {
        // Get the modal
        var modal = document.getElementById('myModal');
        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        modal.style.display = "block";
        modalImg.src = e.src;
        captionText.innerHTML = e.alt;
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
            modal.style.display = "none";
        }
    }
</script>
@endsection
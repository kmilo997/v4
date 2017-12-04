@if(count($errors))




<ul>
	@foreach($errors->all() as $error)
	
	<?php  
	LaravelSweetAlert::setMessage([
                        'title' => 'Advertencia!',
                        'text' => $error,
                        'type' => 'warning',
                        'showConfirmButton' =>true
                    ]);
		
		?>
	
	@endforeach


</ul>


@endif
@if(count($errors))





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





@endif
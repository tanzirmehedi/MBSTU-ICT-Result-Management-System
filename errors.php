<?php  if (count($errors) > 0) : ?>
	<div class="error">
		<?php foreach ($errors as $error) :
		  echo' <div id="result_display">'; 
		  echo '</div>';
		  echo' <div class="panel panel-default">';		
		 echo '<div class="panel-heading">';
		 echo '<b>';
		 echo '<font color=orange>';
         echo  $error;
		 echo '</font>';
		 echo '</b>';
         echo '</div>';
		 echo '</div>';
		 endforeach;
		 ?>
	</div>
<?php  endif ?>
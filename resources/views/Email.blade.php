<h2>Send  Email</h2>

<form action = "{{ url('store') }}"  method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<input type="text" name="sendto" class="form-control" placeholder="SendTo">
</br>
</br>
<input type="text" name="subject" class="form-control" placeholder="Subject">

</br>
</br>

<!-- <label for="Detail_restaurant">Detail</label><br> -->
<textarea  name="detail"
		   placeholder="M E S S A G E........"></textarea></br>


</br><input type="submit" value="send"></br>

</form>
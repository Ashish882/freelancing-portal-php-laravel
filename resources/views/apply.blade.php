
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row justify-content-center">
    <form   method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Your resume</label>
      <input type="file" name="file" class="form-control">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Cover letter</label>
      <input type="text" class="form-control" name="ctext">
    </div>
  </div>

  <div class="form-group">
    <label for="inputAddress">Your Budget</label>
    <input type="number" class="form-control" name="price" >
  </div>

  <button type="submit" class="btn btn-primary">Apply</button>
</form>


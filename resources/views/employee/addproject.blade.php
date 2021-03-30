
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
    <form  method="POST" action="addproject">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Project Name</label>
      <input type="text" class="form-control" name="pname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Project Category</label>
      <input type="text" class="form-control" name="pcat">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Description</label>
    <input type="text" class="form-control" name="dis" >
  </div>

  <div class="form-group">
    <label for="inputAddress">Price</label>
    <input type="number" class="form-control" name="price" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


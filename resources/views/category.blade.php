<div class="row justify-content-between">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @extends('layout.app')
    
    @section('content')
    
    <h1 style="text-align: center">Category</h1>
    
    <div class="jumbotron">
      <table class="table table-striped">
    <thread>
        <tr>
            <th>Category ID</th>
            <th>Category Name</th>
        </tr>

    </thread>
    
    
        @foreach ($categories as $category)
        <tr>
            <td>{{ $categories->CategoryID; }}</td>
            <td>{{ $categories->category_name; }}</td>
           
        </tr>
        @endforeach

    </div>
    
        <div class="row">
            <form>
    
                <label class="span 2" ><h6>Category Name</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">

                <label class="span 2" ><h6>Category ID</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">
    
    
    
                <div class="span 1">
                    <select name="type" id="type">
                        <option value="Add" pattern="ADD" >ADD</option>
                        <option value="Remove" pattern="Remove" >REMOVE</option>
                    </select>
                </div>
                <div class="span 2" >
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
            <br>
    </div>
    @endsection
    
    @section('title')
        Category
    @endsection
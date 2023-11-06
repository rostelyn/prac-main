<div class="row justify-content-between">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @extends('layout.app')
    
    @section('content')
    
    <h1 style="text-align: center">Customer</h1>
    
    <div class="jumbotron">
      <table class="table table-striped">
    <thread>
        <tr>
            <th>Customer Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
    
        </tr>
    </thread>
    
    <tbody>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customers->customer_id; }}</td>
            <td>{{ $customers->first_name; }}</td>
            <td>{{ $customers->last_name; }}</td>
            <td>{{ $customers->email; }}</td>
            <td>{{ $customers->phone; }}</td>
        </tr>
        @endforeach 
    
    </tbody>
   
    
    </tbody>
    </div>
    
        <div class="row">
            <form>
    
                <label class="span 2" ><h6>Customer</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">
    
                <label class="span 2" ><h6>First Name</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">
    
                <label class="span 2" ><h6>Last Name</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">
    
                <label class="span 2" ><h6>Email</h6></label>
                <input class="inputs" type="text" placeholder="Input here..">

                
                <label class="span 2" ><h6>Phone</h6></label>
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
        Customer
    @endsection
<x-app-layout>
    <x-slot name="header">
        
        <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-header" style="text-align:center;">
                Contact information
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>First Name:</label>
                    <input type="text" class="form-control" placeholder="Enter First name" name="first_name">
                </div>
                <div class="form-group">
                    <label >Last Name:</label>
                    <input type="text" class="form-control"  placeholder="Enter Last name" name="last_name">
                </div>
                <div class="form-group">
                    <label >Phone:</label>
                    <input type="text" class="form-control"  placeholder="Enter Phone" name="phone">
                </div>
                <div class="form-group">
                    <label >Email:</label>
                    <input type="text" class="form-control"  placeholder="Enter Email" name="email">
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-6">
                        <label >Company Name:</label>
                    </div>
                    <div class="col-6">
                    <select class="select4" name="company_name" id="country">
                        <option value="">Please Select</option>
                        <label >Company Name:</label>
                        @foreach($names as $country)
                        <option value="{{$country->name}}">{{$country->name}}</option>
                        @endforeach</select>
                    </div>
                </div>
                </div>
            </div>
            <div class="container mb-3">
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
            </div>
        </div>
    </form>
</div>

</body>
</html>
</x-slot>
</x-app-layout>

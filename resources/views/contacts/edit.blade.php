<x-app-layout>
    <x-slot name="header">
       
    </x-slot>
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
    <form action="{{ route('contacts.update',$contact->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-header" style="text-align:center;">
                Contact information
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>First Name:</label>
                    <input type="text" class="form-control" value="{{ $contact->first_name }}" placeholder="Enter First name" name="first_name">
                </div>
                <div class="form-group">
                    <label >Last Name:</label>
                    <input type="text" class="form-control"  value="{{ $contact->last_name }}" placeholder="Enter Last name" name="last_name">
                </div>
                <div class="form-group">
                    <label >Phone:</label>
                    <input type="text" class="form-control"  value="{{ $contact->phone }}" placeholder="Enter Phone" name="phone">
                </div>
                <div class="form-group">
                    <label >Email:</label>
                    <input type="text" class="form-control"  value="{{ $contact->email }}" placeholder="Enter Email" name="email">
                </div>
                
                <div class="container mt-3">
                <div class="row">
                    <div class="col-6">
                        <label >Company Name:</label>
                    </div>
                    <div class="col-6">
                    <select class="select4" name="company_name" id="country">
                        <option value="{{ $company->name }}">Please Select</option>
                        @foreach($names as $country)
                        <option value="{{$country->name}}">{{$country->name}}</option>
                        @endforeach</select>
                    </div>
                </div>
                </div>
                <!-- <div class="row">
                    <div class="col-6">
                        <label >Status:</label>
                    </div>
                    <div class="col-6">
                    <select class="select4" name="active" id="country">
                        <option value="{{ $company->name }}">Please Select</option>
                        <option value=1>Active</option>
                        <option value=0>Inactive</option>
                    </div> -->
                </div>
            <div class="container mt-3">
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
            </div>
        </div>
    </form>
</div>
</body>
</html>
</x-slot>
</x-app-layout>

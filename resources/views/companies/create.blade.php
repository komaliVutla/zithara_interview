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
            <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header" style="text-align:center;">
                        Company information
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Company name" name="name">
                        </div>
                        <div class="form-group">
                            <label >Website:</label>
                            <input type="text" class="form-control"  placeholder="Enter website" name="website">
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


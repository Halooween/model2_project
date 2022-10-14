<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .table{
        height: auto;
        width: 100%;
        /* margin: 100px; */
      }
     

    </style>
</head>
<body>
  
    <main role="main" class="container">

            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mt-5 mb-3 clearfix buttons">
                                <h2 class="pull-left">Posts</h2>
                             
                            </div>

                            <table class="table table-bordered table-striped " id="table_id">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Position</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                @foreach ($datas as $data)
                                
                                <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->position }}</td>
                                <td>{{ $data->status}}</td>
                                <td>{{ $data->description}}</td>


                                </tr>
                            @endforeach
                            </table>
                        
                        </div>
                        
                    </div>
                             {{-- {{ $data->links() }} --}}
                </div>
            </div> 
    </main>


</body>
</html>
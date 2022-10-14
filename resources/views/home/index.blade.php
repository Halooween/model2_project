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
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">person_post</h2>
                        <a href="{{ route('home.create')}}" class="btn btn-success pull-right">add </a>                       

                    </div>

                    <table class="table table-bordered table-striped " id="table_id">
                        <thead>
                            <tr>
                                <th>Person</th>
                                <th>Post</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($datas as $person)
                          
                            <tr>
                                <td>{{ $person->name }}</td>
                                
                                <td>
                                    <ul  style="list-style: none;">
                                        @foreach ($person->post as $posts)
                                        <li>
                                            {{ $posts->position }}
                                        </li>
                                        @endforeach
                                    </ul>
                                </td>

                             </tr>
                            @endforeach   
                        </tbody> 
                       
                    </table>
                </div>
            </div>
        </div>
    </div> 
</main>
    
</body>
</html>



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
                                <h2 class="pull-left">Comment</h2>
                             
                            </div>

                            <table class="table table-bordered table-striped " id="table_id">
                                <thead>
                                    <tr>
                                        <th>Posts</th>
                                        <th>Comments</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($datas as $posts)
                                  
                                    <tr>
                                        <td>{{ $posts->position }}</td>
                                        
                                        <td>                                     
                                            
                                            <ul  style="list-style: none;">
                                                @foreach ($posts->comment as $comments)
                                                <li>
                                                    {{ $comments->comment }}
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
                             {{-- {{ $data->links() }} --}}
                </div>
            </div> 
    </main>


</body>
</html>
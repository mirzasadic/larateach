<html>
     <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     </head>

     <body>
         <div class="container">
             @if (count($errors) > 0)
                 <div class="alert alert-danger">
                     <ul>
                         @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                         @endforeach
                     </ul>
                 </div>
             @endif
             <form role="form" method="POST">
                 <div class="form-group">
                     <label for="name">Name:</label>
                     <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                 </div>
                 <div class="form-group">
                     <label for="username">Username:</label>
                     <input type="text" name="username" class="form-control" id="username" value="{{ old('username') }}">
                 </div>
                 <div class="form-group">
                     <label for="password">Password:</label>
                     <input type="password" name="password" class="form-control" id="password">
                 </div>
                 <button type="submit" class="btn btn-default">Submit</button>
             </form>
         </div>
     </body>
 </html>
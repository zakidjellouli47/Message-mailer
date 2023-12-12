<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Validation form using laravel and jquery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <style>
    .error
    {
     color:#FF0000;
    }


    p{

    text-indent:30px;
    color:white;
    font-size:40px;
    
    }


    body{

      background-color:purple;
    }

    .panel-body{
     color:purple;


    }
    </style>
 </head>
 <body>
  <div class="container">    
     <br />
     <p align="center">Validation form using laravel and jquery</p>
     <br />
     @if($message = Session::get('success'))

          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            
             <strong>{{ $message }}</strong>
          
            
          </div>
          @endif
     <div class="panel panel-primary">
      <div class="panel-heading">
       <h3 class="panel-title">Contact with us</h3>
      </div>
      
      <div class="panel-body">
       <form id="contact_form" method="post" action="{{ url('contact_us/submit') }}">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name Detail">
              </div>
              <div class="form-group">
                <label for="email">Email </label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email Detail">
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <textarea name="subject" class="form-control" id="subject" placeholder="Enter Subject Detail"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Send your message" />
              </div>
            </form>
      </div>
     </div>
        </div>
 </body>
</html>


<script>
$(document).ready(function(){

 if($("#contact_form").length > 0)
  {
    $('#contact_form').validate({
      rules:{
        name : {
          required : true,
          maxlength : 50
        },
        email : {
          required : true,
          maxlength : 50, 
          email : true
        },
        message : {
          required : true,
          minlength : 50,
          maxlength : 500
        }
      },
      messages : {
        name : {
          required : 'Enter Name Detail',
          maxlength : 'Name should not be more than 50 character'
        },
        email : {
          required : 'Enter Email Detail',
          email : 'Enter Valid Email Detail',
          maxlength : 'Email should not be more than 50 character'
        },
        message : {
          required : 'Enter Message Detail',
          minlength : 'Message Details must be minimum 50 character long',
          maxlength : 'Message Details must be maximum 500 character long'
        }
      }
    });
  }

});
</script>


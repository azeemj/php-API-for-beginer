<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Demo</title>

        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">




        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 id="tabs-examples">Student management</h2>
                    <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                        <ul id="myTabs" class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Add</a></li>
                            <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">All</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab">
                                 <br/> <br/>
                                <div class="row">
                                    <div class="col-md-6">
                                       
                                        <form>
                                            
                                            <div class="form-group">
                                                <label for="FirstName">First Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" required="">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="LastName">Last Name</label>
                                                <input type="text" class="form-control" id="Lastname" placeholder="Last Name" required="">
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label for="Email">Email</label>
                                                <input type="email" class="form-control" id="Email" placeholder="Email" required="">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="Address">Address</label>
                                                <textarea id="Address" name="Address" class="form-control" placeholder="Address"></textarea>
                                                
                                            </div>
                                            
                                            
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>


                                    </div>

                                </div>


                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledBy="profile-tab">


                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
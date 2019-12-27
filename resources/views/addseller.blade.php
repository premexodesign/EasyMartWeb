<!DOCTYPE html>
<html>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <div class="container">    
        <div id="box" style="margin-top:20ex; margin-left: 28ex; width: 100ex; " class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info">
                    <div class="panel-heading" style="background-color: rgb(255, 255, 255);">
                        <div class="panel-title"><h2>Seller</h2></div>
                        <div style="float:right; font-size: 80%; position: relative; top:-20px;"> <div class="search-container" >
                            </div>
                    </div>     

                    <div style="padding-top:30px; " class="panel-body" >
                    <div style="border-top: 2px solid#e6e6e6; padding-top:15px; font-size:95%" >
                            
                        <form method="POST" action="{{ route('seller.store') }}"class="form-horizontal" role="form">
                                    @CSRF
                            <div style="margin-bottom: 25px " class="input-group">
                                
                                <label>First Name: </label><input name="fname" style="margin-left:20ex ;  poistion:rlative; top:-3ex;  width:61ex; " type="text" class="form-control" require="require">
                                </div>

                                <div>
                                <label>Middel Name: </label><input name="mname" style="margin-left:20ex ; position: relative; top:-3ex; width:61ex;" type="text" class="form-control" require="require">
                                </div>

                                <div>
                                <label>Last Name: </label><input name="lname" style="margin-left:20ex ;  position:relative; top:-3ex; width:61ex;" type="text" class="form-control" require="require">
                                </div>

                                <div>
                                <label>Address: </label><input name="add" style="margin-left:20ex ;  position:relative; top:-3ex; width:61ex;" type="text" class="form-control" require="require">
                                </div>

                                <div>
                                <label>City: </label><input name="city" style="margin-left:20ex ;  position:relative; top:-3ex; width:61ex;" type="text" class="form-control" require="require">
                                </div>

                                <div>
                                <label>State: </label><input name="state"  style="margin-left:20ex ;  position:relative; top:-3ex; width:61ex;" type="text" class="form-control" require="require">
                                </div>
                                
                                <div>
                                <label>Pincode: </label><input name="pincode" style="margin-left:20ex ;  position:relative; top:-3ex; width:61ex;" type="text" class="form-control" require="require">
                                </div>
                                
                                <div>
                                <label>Adhar Card Number: </label><input name="aadharcardno" style="margin-left:20ex ;  position:relative; top:-3ex; width:61ex;" type="text" class="form-control" require="require">
                                </div>

                                <div>
                                <label>Contact Number: </label><input name="contactno" style="margin-left:20ex ;  position:relative; top:-3ex; width:61ex;" type="text" class="form-control" require="require">
                                </div>

                                <div>
                                <label>Email Id: </label><input style="margin-left:20ex ; position:relative; top:-3ex; width:61ex;" type="email" class="form-control" name="email" require="require">
                                </div> 


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#e9e9e9; padding-top:15px; font-size:85%" >
                                            <div style="position: relative; left: 30ex;" class="col-sm-12 controls">
                                            <input type="reset" class="btn btn-info" value="Reset">
                                            <input type="submit" class="btn btn-success" value="Add">

                                              </div> 
                                    </div>
                                </div>    
                            </form>     



                         </div>
                    </div>
                    </div>

               
               
                
         </div> 
    </div>


</body>
</html>
<html>
   

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
    <div class="container">    
        <div id="box" style="margin-top:20ex; margin-left: 28ex; width: 100ex; " class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info">
                    <div class="panel-heading" style="background-color: rgb(255, 255, 255);">
                        <div class="panel-title"><h2>Category</h2></div>
                        <div style="float:right; font-size: 80%; position: relative; top:-20px;"> 
                    </div>     

                    <div style="padding-top:30px; " class="panel-body" >
          
                        <form  method="POST" action="{{ route('subcategories.store') }}" class="form-horizontal" >
                                @CSRF    
                            <div style="margin-bottom: 25px " class="input-group">
                            <label style="position: relative; top: 30px;">Category Name: </label>

                            <select style="position: relative; left:23ex;" class = "form-control input-sm" name="category_id" >
                            <option value="0" disabled="true" selected="true">----Select----</option>

                        @foreach($category as $c)  
                        <option value=" {{$c->id}}">{{$c->categoryname}}</option>
                      @endforeach
                    </select>
                            <br>
                               <label style="position: relative; top: 30px;">Sub Category Name: </label>
                               <input style="margin-left:20ex ;" type="text" class="form-control" name="subcategoryname" >                                        
                                 </div>
                            

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                   
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
    

</body>
</html>
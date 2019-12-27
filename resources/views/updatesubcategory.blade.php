




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
                           <div class="panel-title"><h2>Sub Category</h2></div>
                           <div style="float:right; font-size: 80%; position: relative; top:-20px;"> 
                       </div>     
   
                       <div style="padding-top:30px; " class="panel-body" >
             
       </form>
                           <form  method="POST" action="{{ route('subcategories.update', 0) }}" class="form-horizontal" >
                           @method('PATCH')        
                           @CSRF    
                               <div style="margin-bottom: 25px " class="input-group">
                               <input type="text"  name="id" value="{{$subcategory->id}}" style="display: none;"><br>
                                  <label style="position: relative; top: 30px;">Sub Category Name: </label>
                                  <input style="margin-left:20ex ;" type="text" class="form-control" name="subcategoryname" value="{{$subcategory->subcategoryname}}">       
                                  
                                    </div>
                               
   
                                   <div style="margin-top:10px" class="form-group">
                                       <!-- Button -->
   
                                      
                                   </div>
   
   
                                   <div class="form-group">
                                       <div class="col-md-12 control">
                                           <div style="border-top: 1px solid#e9e9e9; padding-top:15px; font-size:85%" >
                                               <div style="position: relative; left: 30ex;" class="col-sm-12 controls">
                                                   <input type="submit" class="btn btn-success" value="Update">
   
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
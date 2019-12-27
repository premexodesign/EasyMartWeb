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
                        
                        <div class="search-container" >
                            <form action="/serach" role="search" method="get">
                            <div class="input-group">
                              <input style="position: relative; top: -15px; width: 35ex; height: 5ex;" type="search" placeholder="Search.." name="search">
                            <span class = "input-group-prepend"><button style="position: relative; top: -15px; width: 9ex; height: 5ex;" type="submit">Go</button></span>
                            </div>
                            </form>
                        </div>
                    </div>     

                    <div style="padding-top:30px; " class="panel-body" >

                    <div><h3>Sub Category List</h3></div>       
                     <div style="border-top: 1ex solid#e6e6e6; padding-top:5ex; font-size:95%" ></div><br> 
                     <a href="/addsubcategory" style="margin-left:0ex; width:10ex; position:relative; top:-3ex;" type="button" class="btn btn-success">Add</a>

                               <!-- <div class="btn-group">
                                    <button style="margin-left:0ex; width:10ex; position:relative; top:-3ex;" type="button" class="btn btn-primary">Copy</button>
                                    <button style="margin-left:0ex; width:10ex; position:relative; top:-3ex;" type="button" class="btn btn-primary">CSV</button>
                                    <button style="margin-left:0ex; width:10ex; position:relative; top:-3ex;" type="button" class="btn btn-primary">Print</button>
                                </div>-->
                        <table id="mytable" class="table table-bordred table-striped">
                   
                            <thead> 
                                <th>Id</th>
                                <th>category Name</th>
                                <th>sub category</th>
                                <th>Edit</th>
                                <th>Delete</th>
                 
                            </thead>
                            <tbody>
                            @foreach($subcategories as $p)
                                <tr>
                                   <!--<td><input type="checkbox" class="checkthis" /></td>-->
                                    <td>{{$p->id}}</td>
                                    <td>{{$p->category->categoryname}}</td>
                                    <td>{{$p->subcategoryname}}
                                        <td>
                                    <form action="{{ route('subcategories.edit',$p->id)}}" method="get">
                                            @csrf
                                            <button type="submit" class='btn btn-info'>Edit</button>
                                            </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('subcategories.destroy',$p->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class='btn btn-danger'>Delete</button>
                                            </form>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>                            
     
                        </table>
                        {{ $subcategories->links() }}
            </div>
        </div> 
    </div>   

</body>
</html>
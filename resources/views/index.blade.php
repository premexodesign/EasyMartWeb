<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
        <div class="container">
            <h1>Category and Subcategory AJAX, select drop down</h1>

            <div class="col-lg-4">
                {{Form::open(array('url'=>'', 'file'=>true))}}
                
                <div class="form-group">
                    <label for="">Categories</label>
                    <select class = "form-control input-sm" name="category" id="category">
                        @foreach($categories as $category)  
                        <option value=" {{$category->id}}">{{$category->categoryname}}</option>
                      @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Subcategories</label>
                    <select class = "form-control input-sm" name="Subcategory" id="Subcategory">
                        <option value=""></option>
                    </select>
                </div>
                {{Form::close()}}
            </div>
        </div>
        <script>
            $('#category').on('change',function(e){
                console.log(e);

                var cat_id = e.target.value;

                //ajax
                $.get('/ajax-subcat?cat_id=' + cat_id, function(data){
                    //success data
                    $('#subcategory').empty();
                   $.each(data,function(index, subcatObj){

                        $('#subcategory').append('<option value="'+subcatObj.id+'">'+subcatObj.name+'</option>')
                   })
                })
                
            });
        </script>
</body>
</html>
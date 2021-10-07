<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .text-danger{
            color: red;
        }
    </style>
</head>
<body>
<form action="/article/create" method="post">
    @csrf
    <div >
        <label >title</label>
        <div >
            <input type="text"  name="title">
            @error('title')
            <div class="text-danger">* {{$message}}</div>
            @enderror
        </div>
    </div>
    <div >
        <label>Category</label>
        <div class="col-sm-5">
            <select type="text" class="form-control" name="category">
                @foreach($listArticleCategory as $cate)
                    <option value="{{$cate->category}}">{{$cate->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div >
        <label >Url</label>
        <div >
            <input type="text"  name="url">
            @error('url')
            <div class="text-danger">* {{$message}}</div>
            @enderror
        </div>
    </div>
    <div >
        <label >Thumbnail</label>
        <div >
            <input type="text"  name="thumbnail">
            @error('thumbnail')
            <div class="text-danger">* {{$message}}</div>
            @enderror
        </div>
    </div>
    <div >
        <label >Description</label>
        <div >
            <textarea style="resize: none; " rows="8" type="text"  name="description"
                      id="ckeditor1"
                      placeholder="vui lòng nhập thông tin....">
            </textarea>
            @error('description')
            <div class="text-danger">* {{$message}}</div>
            @enderror
        </div>
    </div>
    <div >
        <label >Detail</label>
        <div >
            <textarea style="resize: none; " rows="8" type="text"  name="detail"
                      id="ckeditor2"
                      placeholder="vui lòng nhập thông tin....">
            </textarea>
            @error('detail')
            <div class="text-danger">* {{$message}}</div>
            @enderror
        </div>
    </div>
    <div >
        <label >Source</label>
        <div >
            <input type="text"  name="source">
            @error('source')
            <div class="text-danger">* {{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-10 form-group" style="text-align: center">
        <button type="submit" class="btn btn-info">Submit</button>
        <button type="reset" class="btn btn-warning">Reset</button>
    </div>
</form>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script>
    CKEDITOR.replace('ckeditor1');
    CKEDITOR.replace('ckeditor2');
</script>
</body>
</html>

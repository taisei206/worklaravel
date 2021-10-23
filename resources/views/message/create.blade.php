@foreach ($errors->all() as $error)
    エラー：{{$error}}<br>
@endforeach
<form action="{{url('messages')}}" method='POST'>
    @csrf
    カテゴリー:<input type="text" name="category_id" value="{{old('category_id')}}"><br>
    タイトル:<input type="text" name="title" value="{{old('title')}}"><br>
    本文：<br>
    <textarea name="body">{{old('body')}}</textarea><br>
    <button type="submit">送信</button>
</form>
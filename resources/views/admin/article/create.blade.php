@extends('layouts.panel')

@section('content')
<form role="form" action="{{ route('admin.article.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputFile">ارسال عکس اول</label>
        <div class="input-group">
          <div class="custom-file">
            <input name="img" type="file" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">انتخاب عکس</label>
          </div>
          
        </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">تیتر خبر</label>
        <input type="text" name="title" class="form-control" placeholder="تیتر خبر را وارد کنید">
      </div>
      <div class="form-group">
        
        <label>مقدمه</label>
        <textarea class="form-control" name="lead" rows="3" placeholder="وارد کردن اطلاعات ..."></textarea>
      
      </div>
      <div class="form-group">
        <label for="exampleInputFile">ارسال عکس دوم</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="img2" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">انتخاب عکس</label>
          </div>
         
        </div>
      </div>
      <div class="form-group">
        
        <label>متن</label>
        <textarea class="form-control" name="story" rows="3" placeholder="وارد کردن اطلاعات ..."></textarea>
      
      </div>
      <div class="form-group">
      <label>دسته بندی</label>
      <select class="form-control select2 select2-hidden-accessible" name="category" style="width: 10%;" tabindex="-1" aria-hidden="true">
        <option selected="selected">اقتصادی</option>
        <option>ورزشی</option>
        <option>سیاسی</option>
        <option>اجتماعی</option>
      </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 10%;"></span>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">ارسال</button>
    </div>
  </form>
@endsection
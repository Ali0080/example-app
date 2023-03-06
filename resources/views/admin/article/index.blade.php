@extends('layouts.panel')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">جدول خبر ها</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  {{-- <input type="text" name="table_search" class="form-control float-right" placeholder="جستجو"> --}}

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <tbody>
                <tr>
                  <th>شماره</th>
                  <th>تیتر</th>
                  <th>تاریخ</th>
                  <th>وضعیت</th>
                  <th>عملیات</th>
                </tr>

                @foreach($articles as $article)
                <tr>
                  <td>{{ $article->id }}</td>
                  <td>{{ $article->title }}</td>
                  <td>{{ jdate($article->created_at) }}</td>
                  <td>
                    @if($article->active)
                    <span class="badge badge-success">فعال</span>
                    @else
                    <span class="badge badge-danger">غیر فعال</span>
                    @endif
                  </td>
                  <td><a href="{{ route('admin.article.edit', $article->id) }}">ویرایش</a></td>
                  <td><a href="{{ route('admin.article.destroy', $article->id) }}">حذف</a></td>

                </tr>
                @endforeach
              
              </tbody>
            </table>

              {{ $articles->links() }}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
</div>

@endsection
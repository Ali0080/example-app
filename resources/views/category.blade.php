@extends('layouts.master')
@section('content')
      <div class="latest-posts">
         <div class="container-fluid">
            <div class="col-md-9">
               <div class="blog-title-span">
                  <span class="title">اخبار و مقالات</span>
               </div>
               @foreach ($articles as $article)
               <div class="col-md-4">
                  <div class="post-box">
                     <a href="{{ route('article.show', $article->id) }}">
                        <figure>
                           <img src="{{ route('article.show', $article->id) }}" alt="">
                           <figcaption class="meta-fig">
                              <span><i class="fa fa-clock-o"></i> 99/3/20</span>&nbsp;
                              <span><i class="fa fa-comment-o"></i> 12</span>
                           </figcaption>
                           <figcaption class="view">
                              <span>بخش ویژه</span>
                              <span>انجمن</span>
                              <span>اتاق خبر</span>
                           </figcaption>
                        </figure>
                        <div class="text-p">
                           <h5>{{ $article->title }}</h5>
                           <p>{{ $article->lead }}</p>
                           <div class="text-rigt">
                     <a href="{{ route('article.show', $article->id) }}">ادامه ...</a></div>
                     </div>
                     </a>
                  </div>
               </div>
               @endforeach

            </div>
            <div class="col-md-3 main-content">
               <div class="l-sidebar">
                  <div class="cat-sidebar">
                     <span class="title">دسته بندی مطالب</span>
                     <div class="text-left"><i class="fa fa-folder-o"></i></div>
                     <ul>
                        <li><a href="#">موضوعی</a><span>32</span></li>
                        <li><a href="#">اخبار</a><span>322</span></li>
                        <li><a href="#">انجمن</a><span>2</span></li>
                        <li><a href="#">اتاق خبر</a><span>32</span></li>
                        <li><a href="#">دسته بندی نشده</a><span>52</span></li>
                        <li><a href="#">تستی</a><span>89</span></li>
                        <li><a href="#">خبر روز</a><span>30</span></li>
                        <li><a href="#">انجمن</a><span>74</span></li>
                        <li><a href="#">اتاق خبر</a><span>65</span></li>
                        <li><a href="#">دسته بندی نشده</a><span>81</span></li>
                        <li><a href="#">تستی</a><span>72</span></li>
                     </ul>
                  </div>
               </div>
               <div class="l-sidebar">
                  <div class="cat-sidebar report">
                     <span class="title">گزارش</span>
                     <div class="text-left"><i class="fa fa-arrows-alt"></i></div>
                     <ul>
                        <li><a href="#">لورم ایپسو استفاده از طراحان</a></li>
                        <li><a href="#">و سه درصد می طلبد تا با نرم افزارها ش</a></li>
                        <li><a href="#"> فارسی ایجاد کرد. در ارائه راهکارها</a></li>
                        <li><a href="#"> اصلی و جوابگوی مورد استفاده قرار گیرد.</a></li>
                        <li><a href="#">متن ساختگی با تولید سادگی نامفهوم متن ساختگی با تولید سادگی نامفهوم
                           استفاده استفاده</a>
                        </li>
                        <li><a href="#"> و سه درصد گذشته با نرم افزارها </a></li>
                        <li><a href="#">لورم ایپسو استفاده از طراحان</a></li>
                        <li><a href="#">و سه درصد می طلبد تا با نرم افزارها ش</a></li>
                        <li><a href="#"> فارسی ایجاد کرد. در ارائه راهکارها</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-12 text-center">
               <nav aria-label="Page navigation example">
                  <ul class="pagination">
                     <li class="page-item"><a class="page-link" href="#">قبلی</a></li>
                     <li class="page-item"><a class="page-link" href="#">1</a></li>
                     <li class="page-item"><a class="page-link" href="#">2</a></li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                  </ul>
               </nav>
            </div>
         </div>
      </div>
      <div class="clear-fix"></div>
@endsection

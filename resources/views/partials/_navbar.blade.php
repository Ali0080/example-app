<div class="top-bar">
    <div class="container-fluid">
       <div class="col-md-6">
          <div class="search-btn">
             <span><i class="fa fa-search"></i></span>
          </div>
       </div>
       <div class="col-md-6">
          <div class="top-cat-box">
             <div class="col-md-12">
                <div class="menu">
                   <ul>
                      <li><a href="#">تماس با ما</a></li>
                      <li><a href="#">درباره ما</a></li>
                      <li><a href="#">مقالات</a></li>
                   </ul>
                </div>
             </div>
             <!-- <div class="col-md-3">
                <div class="show-cat">
                    <span>
                        دسته ها
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
                </div> -->
          </div>
       </div>
    </div>
 </div>
 <div class="main-header">
    <div class="container-fluid">
       <div class="col-md-10">
          <div class="main-menu">
             <ul>
               <li><a href="{{route('article.index')}}" style="font-weight: bold">خانه</a></li>

                @foreach ($categories as $category)
                <li><a href="{{route('category', $category->slug)}}">{{ $category->name }}</a></li>
                @endforeach

             </ul>
          </div>
       </div>
       <div class="col-md-2">
          <div class="social-box">
             <ul>
                <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://m.facebook.com"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
             </ul>
          </div>
       </div>
    </div>
 </div>

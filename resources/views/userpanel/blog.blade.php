@extends('layout')
@section('title', 'blog')
@section('blogcontent')
<div class="site wrapper-content">
    <div class="top_site_main" style="background-image: url(&quot;images/blogpage.jpg&quot;); padding-top: 500px;">
        <div class="banner-wrapper container article_heading">
            <!-- <div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index.html" class="home">Home</a></li>
						<li>Blog</li>
					</ul>
				</div> -->
            <h1 class="heading_primary">Blog</h1>
        </div>
    </div>
    <section class="content-area">
        <div class="container">
            
            <div class="st-blog">
                <div class="row">
                @foreach($list as $row)
                    <div class="col-sm-9 col-xs-12 ">
                        
                        <div class="content">
                            <div class="blog-wrapper">
                          
                                <div class="article post post-13581 type-post status-publish format-standard has-post-thumbnail hentry category-flights">
                                    <div class="header">
                                        <header class="post-header">
                                            <a class="hover-img" href="https://dazonntravels.com/how-to-book-cheap-flights-top-10-tricks/">
                                                <img width="870" height="500" src="{{ asset('upload/images/' . $row->blogimage) }}" class="attachment-870x500 size-870x500 wp-post-image" alt="" loading="lazy"> </a>
                                        </header>
                                        <div class="cate">
                                            <ul>
                                                <li><a href="https://dazonntravels.com/category/flights/">{{$row->buttonlink}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                     <div class="post-inner">
                                        <h4 class="post-title"><a class="text-darken" href="https://dazonntravels.com/how-to-book-cheap-flights-top-10-tricks/">{{$row->blogtitle}}</a></h4>
                                         <!-- <div class="meta">
                                            <ul>
                                                <li>
                                                    <a href="https://dazonntravels.com/author/admin/">
                                                        <img alt="avatar" width="30" height="30" src="//i0.wp.com/dazonntravels.com/wp-content/uploads/bfi_thumb/Final_logo_2-3ef3e5ggaslkuncbromjgg.png" class="avatar avatar-96 photo origin round"><span> </a>
                                                </li>
                                               
 
                                            </ul>
                                        </div>   -->
                                        <div class="post-desciption">
                                            <p>{{$row->blogtext}}</p>
                                        </div>
                                        <a class="btn-readmore" href="blog2/{{$row->id}}">Read More</a>
                                    </div>
                                </div>
                            
                            </div>
                            
                        </div>
                   </div> @endforeach
                   
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
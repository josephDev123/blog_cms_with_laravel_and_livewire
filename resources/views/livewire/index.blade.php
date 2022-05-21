<div class="container">
  {{-- heading of the blogs --}}
  <div class="row banner_container">
    <div class="col-lg-6 col-sm-12 col-md-6 banner_content pe-4">
      <h4 class="fw-bold pb-3">Don’t focus on having a great blog. Focus on producing a blog that’s great for your readers</h4>
      <blockquote>
        <p> 
          You can buy attention (advertising). You can beg for attention from the media (PR). You can bug people one at a time to get attention (sales). Or you can earn attention by creating something interesting and valuable and then publishing it online for free. ~David Meerman Scott
        </p>
      </blockquote>
    </div>

    <div class="col-lg-6 col-sm-12 col-md-6 banner_img_wrapper">
      <img src="img/head_banner_img/undraw_2.png" class="img-fluid banner_img" alt="" width="500px" height="50px">
    </div>
  </div>
  {{-- ending of the heading of the blogs --}}

  {{-- display blog from database --}}
  <br/><br/>
    <div class="post_label_wrapper">
      <h5 class="post_label">Our Blogs:</h5>
    </div>
      @foreach ($blog_posts as $blog_post)
      
        <div class="row mt-4">
          
          <div class="col-lg-6 col-sm-12 col-md-6">
              <div class="blog_img">
                <img class="" src="{{ asset('storage/blog_top_img/'.$blog_post->heading_img) }}" alt="blog image" width="100%" height="200px">
              </div>
          </div>
       

          <div class="col-lg-6 col-sm-12 col-md-6 p-2 blog_content">
            <h3>{{ $blog_post->title }}</h3>
            <p clas>{{ Str::limit(html_entity_decode($blog_post->content) , 200, '...')  }}</p>
            <p class="created_date" style="font-size: 14px"><strong >Created: {{ $blog_post->created_at }}</strong></p>
            <p><a href="{{ 'page/'.$blog_post->id }}" class="read_more">Read More ......</a></p>
          </div>
      
        </div>
        <hr>
        <br>
       
      @endforeach
  
      {{-- 'page/'.{{ $blog_post->slug }} --}}
  
</div>

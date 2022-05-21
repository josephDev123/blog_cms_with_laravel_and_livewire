<div class="container mt-4">
    <div class="d-flex flex-column align-items-center justify-content-center border-2" >
        <div class="w-75">
            <div class="each_post_title mt-4">
                <h2 class="">{{ $query->title }}</h2> 
             </div>
             <div class="each_post_uploaded_time mt-4">
                 <p style="font-weight: lighter; font-size:12px">{{ $query->updated_at }}</p>
             </div>
             <div class="each_post_header_img">
                 <img class="img-fluid" src="{{ asset('storage/blog_top_img/'.$query->heading_img) }}" width="700px">
             </div>
          
             <div class="each_post_content mt-4">
              <p>{{ $query->content }}</p>
             </div>
             <br>
             <hr>
             <br>
             <button class="btn btn-primary" wire:click='$toggle("toggleShow")'>Add Comment</button>
             <br>  <br>
             @if ($toggleShow)
                <form wire:submit.prevent='submitComment'>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Add comment</label>
                    <textarea class="form-control" name=comment"" id="exampleInputEmail1" aria-describedby="" wire:model='comment'></textarea>
                    @error('comment') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
             @endif
             <br>
             <hr>
             <br>
             <h5 >Comments</h5>
             @foreach ($comments as $comment)
             <div class="comment_container">
                <h6 class="comment_createAt text-info"> {{ $comment->created_at->diffForHumans() }} </h6>
                <p class="text-black-50">{{ $comment->comment }}</p>
             </div>
                
             @endforeach
        </div>
    </div>

</div>  



